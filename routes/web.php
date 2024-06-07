<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('formIntegration'); // або ваш потрібний вигляд
})->name('index');


Route::get('/import/translates', 'LpTranslatesController@import');
Route::get('/import/success', 'LpTranslatesController@success')->name('importSuccess');


Route::get('/form_integration', ['as' => 'formIntegration', 'uses' => 'FormIntegrationController@index']);
Route::get('/download/{name}', ['as' => 'download', 'uses' => 'DownloadController@download']);
