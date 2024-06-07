<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeoController extends Controller
{
    //
    public function getGeo(){
        $ip = $_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['REMOTE_ADDR'] ?? null;
        //$ip = "188.163.77.0";
        //$ip = "185.246.208.138";
        $arr_ip = geoip()->getLocation($ip)->toArray();
        return response()->json($arr_ip, 200);
    }
}
