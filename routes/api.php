<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['cors'])->group(function () {
    Route::get('/get-geo', 'GeoController@getGeo');
    Route::get('/get-translate/{langLand}/{category}/{idLand?}', [
        'as' => 'getTranslate',
        'uses' => 'LpTranslatesController@getTranslate',
        'where' => ['langLand' => '[A-Za-z-]+', 'idLand' => '[0-9]+', 'category' => '[A-Za-z-0-9,]+']
    ]);
    Route::get('/get-content-info/{idLand}', [
        'as' => 'getLang',
        'uses' => 'LpTranslatesController@getLang',
        'where' => ['idLand' => '[0-9]+']
    ]);

    //Route::post('/aff-register', [ 'uses' => 'UserController@regUser']);
    //Route::post('/create-box', ['uses' => 'BoxesController@createBox']);
    //Route::post('/create-box-row', ['uses' => 'BoxRowsController@createBoxRow']);
    //Route::post('/create-compaign', ['uses' => 'CompaignController@createCompaign']);
    //Route::post('/create-compaign', ['uses' => 'CompaignController@createCompaign']);
    //Route::post('/create-lead', ['uses' => 'LeadsController@createLead']);
    //Route::get('/get-leads', ['uses' => 'LeadsController@getLeads']);
});
