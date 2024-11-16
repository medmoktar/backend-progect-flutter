<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\willayacontroller;
use App\Http\Controllers\Moughataacontroller;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('login',[usercontroller::class,'login']);
Route::get('users/{id}',[willayacontroller::class,'getwillaya']);
Route::get('willaya/{id}',[Moughataacontroller::class,'getmoughataa']);
Route::get('commune/{id}',[App\Http\Controllers\Communecontroller::class,'getcommune']);
Route::get('village/{id}',[App\Http\Controllers\Villagecontroller::class,'getvillage']);
Route::post('village/create',[App\Http\Controllers\Villagecontroller::class,'addvillage']);
Route::patch('village/update',[App\Http\Controllers\Villagecontroller::class,'update']);
Route::get('count/hopitaux/{id}',[App\Http\Controllers\hopitauxcontroller::class,'count']);
Route::get('count/Ecole/{id}',[App\Http\Controllers\Ecolecontroller::class,'count']);
Route::get('all/hopitaux/{id}',[App\Http\Controllers\hopitauxcontroller::class,'all']);
Route::get('all/Ecole/{id}',[App\Http\Controllers\Ecolecontroller::class,'all']);
Route::post('create/Ecole',[App\Http\Controllers\Ecolecontroller::class,'create']);
Route::get('store/Ecole/{id}',[App\Http\Controllers\Ecolecontroller::class,'store']);
Route::post('update/Ecole/{id}',[App\Http\Controllers\Ecolecontroller::class,'update']);
Route::post('create/hopitaux',[App\Http\Controllers\hopitauxcontroller::class,'create']);
Route::get('store/hopitaux/{id}',[App\Http\Controllers\hopitauxcontroller::class,'store']);
Route::post('update/hopitaux/{id}',[App\Http\Controllers\hopitauxcontroller::class,'update']);
Route::get('willaya/Ecole/{id}',[willayacontroller::class,'Ecole']);
Route::get('willaya/hopitaux/{id}',[willayacontroller::class,'hopitaux']);
Route::get('Moughataa/Ecole/{id}',[Moughataacontroller::class,'Ecole']);
Route::get('Moughataa/hopitaux/{id}',[Moughataacontroller::class,'hopitaux']);
Route::get('commune/hopitaux/{id}',[App\Http\Controllers\Communecontroller::class,'hopitaux']);
Route::get('commune/Ecole/{id}',[App\Http\Controllers\Communecontroller::class,'Ecole']);
Route::get('village/hopitaux/{id}',[App\Http\Controllers\Villagecontroller::class,'hopitaux']);
Route::get('village/Ecole/{id}',[App\Http\Controllers\Villagecontroller::class,'Ecole']);
Route::get('typeEcole',[App\Http\Controllers\type_EcoleController::class,'all']);
Route::get('typecente',[App\Http\Controllers\type_stucturecenteController::class,'all']);
Route::get('pointdeaux',[App\Http\Controllers\pointdeauxController::class,'all']);
Route::get('language',[App\Http\Controllers\languageController::class,'all']);
Route::get('reseaux',[App\Http\Controllers\reseauxController::class,'all']);
Route::post('village/reseaux/{id}',[App\Http\Controllers\reseauxController::class,'insert']);
Route::get('reseaux/store/{id}',[App\Http\Controllers\reseauxController::class,'store']);
Route::delete('reseaux/delete/{id}',[App\Http\Controllers\reseauxController::class,'delete']);
Route::post('village/language/{id}',[App\Http\Controllers\languageController::class,'insert']);
Route::get('language/store/{id}',[App\Http\Controllers\languageController::class,'store']);
Route::delete('language/delete/{id}',[App\Http\Controllers\languageController::class,'delete']);
Route::post('village/pointdeaux/{id}',[App\Http\Controllers\pointdeauxController::class,'insert']);
Route::get('pointdeaux/store/{id}',[App\Http\Controllers\pointdeauxController::class,'store']);
Route::delete('pointdeaux/delete/{id}',[App\Http\Controllers\pointdeauxController::class,'delete']);
Route::post('chefvillage/create',[App\Http\Controllers\chefvillagecontroller::class,'create']);
Route::patch('chefvillage/update/{id}',[App\Http\Controllers\chefvillagecontroller::class,'update']);
Route::get('chefvillage/store/{id}',[App\Http\Controllers\chefvillagecontroller::class,'store']);







