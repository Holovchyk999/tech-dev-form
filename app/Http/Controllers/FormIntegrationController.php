<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormIntegrationController extends Controller
{
    //
    function index(){
        $result = array();
        if (view()->exists('s1.pages.formIntegration')) {
            return view('s1.pages.formIntegration', $result);
        }
    }
}
