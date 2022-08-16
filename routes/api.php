<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPendudukDesaController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'v1'], function () {
    Route::post('login', 'UsersController@login');
    Route::post('register', 'UsersController@register');
    Route::get('logout', 'UsersController@logout')->middleware('auth:api');


    //-------------------ADMIN-------------------

    //-------------------OPERATOR DESA-------------------
    Route::get('datapendudukdesa', 'DataPendudukDesaController@apiindex');
});
//LEMBAGA EKONOMI
Route::get('operatordesa/lembaga-ekonomi', 'LembagaEkonomiController@apiindex');
Route::post('operatordesa/lembaga-ekonomi', 'LembagaEkonomiController@apicreate');
Route::put('operatordesa/lembaga-ekonomi/{id}', 'LembagaEkonomiController@apiupdate');
Route::delete('operatordesa/lembaga-ekonomi/{id}', 'LembagaEkonomiController@apidestroy');
//JASA LEMBAGA KEUANGAN
Route::get('operatordesa/jasa-lembaga-keuangan', 'JasaLembagaKeuanganController@apiindex');
Route::post('operatordesa/jasa-lembaga-keuangan', 'JasaLembagaKeuanganController@apicreate');
Route::put('operatordesa/jasa-lembaga-keuangan/{id}', 'JasaLembagaKeuanganController@apiupdate');
Route::delete('operatordesa/jasa-lembaga-keuangan/{id}', 'JasaLembagaKeuanganController@apidestroy');
//LEMBAGA INDUSTRI KECIL DAN MENENGAH
Route::get('operatordesa/industri-kecil', 'IndustriKecilController@apiindex');
Route::post('operatordesa/industri-kecil', 'IndustriKecilController@apicreate');
Route::put('operatordesa/industri-kecil/{id}', 'IndustriKecilController@apiupdate');
Route::delete('operatordesa/industri-kecil/{id}', 'IndustriKecilController@apidestroy');
//USAHA JASA PENGANGKUTAN
Route::get('operatordesa/usaha-jasa-pengangkutan', 'UsahaJasaPengangkutanController@apiindex');
Route::post('operatordesa/usaha-jasa-pengangkutan', 'UsahaJasaPengangkutanController@apicreate');
Route::put('operatordesa/usaha-jasa-pengangkutan/{id}', 'UsahaJasaPengangkutanController@apiupdate');
Route::delete('operatordesa/usaha-jasa-pengangkutan/{id}', 'UsahaJasaPengangkutanController@apidestroy');
