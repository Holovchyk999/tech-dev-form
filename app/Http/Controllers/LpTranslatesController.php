<?php

namespace App\Http\Controllers;

use App\Imports\LpTranslatesImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\LpTranslates;

class LpTranslatesController extends Controller
{
    public function import(){
        DB::statement('truncate table lp_translates');
        try {
            Excel::import(new LpTranslatesImport, 'public/translates_twister.xlsx', 'local');
            return redirect()->route('importSuccess')->with('success', 'All good!');
        }catch (\Exception $e){
            echo $e->getMessage();
        }
    }

    public function success(){
        return 'Done!';
    }

    public function getTranslate(Request $request){

        $arrCat = explode(',', $request->category);

        try {
            $query = LpTranslates::select('key', $request->langLand . ' as value', 'category');
            if($request->idLand) {
                $query->where('landing_ids', "like", "%" . $request->idLand . "%");
            }
            $res = $query->whereIn('category', $arrCat)->get();

        }catch (\Exception $e){
            return response()->json('no data', 400);
        }

        $response = array();
        foreach ($res as $item){
            $response[$item->key] = $item->value;
        }
        $response['cnt'] = "".count($res);
        //dump($response);

        return response()->json($response, 200);
    }

    public function getLang(Request $request){

        $res = LpTranslates::select(
            DB::raw("COUNT(en) as en"),
            DB::raw("COUNT(pl) as pl"),
            DB::raw("COUNT(es) as es"),
            DB::raw("COUNT(ru) as ru"),
            DB::raw("COUNT(de) as de"),
            DB::raw("COUNT(th) as th"),
            DB::raw("COUNT(`pt-br`) as `pt-br`")
        )
            ->where('landing_ids', "like", "%" . $request->idLand . "%")
            ->where('category', 'landingGeneral')->get();

        $arr = $res->toArray()[0];
        $max = max($arr);
        $min = round($max - ($max * (25 / 100)));

        $arrRas = [];
        $n = 0;
        foreach ($arr as $key => $val){
            if($val >= $min){
                $arrRas[$n] = $key;
            $n++;}
        }

        return response()->json($arrRas, 200);
    }
}
