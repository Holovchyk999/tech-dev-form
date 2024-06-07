<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{

    function download($name){
        $path = public_path(). '/storage/download/'.$name.'.zip';
        return response()->download($path, basename($path));
    }
}
