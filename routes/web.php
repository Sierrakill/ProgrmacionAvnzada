<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('/user', [UserController::class,"index"]); 
Route::get('/user/create', [UserController::class,"create"]);
Route::get('/user/{id}', [UserController::class,"show"]);
Route::post('/user', [UserController::class,"store"]);


Route ::get('/saludo', function(){
    return "hola";

});



Route::get('/suma/{n1}/{n2}', function($n1, $n2){
    return $n1 + $n2;

})->where(['n1' =>'[0-9]+', 'n2' =>'[0-9]+']);


Route::get('/multi/{n1}/{n2}/{n3}'  , function($n1, $n2,$n3=1){

        return  n1*n2*n3;
});   
