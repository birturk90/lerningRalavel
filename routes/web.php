<?php

use App\hospital;
use App\student;
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
Route::get('/ralavel', "test@show"); 

Route::get('/view', function ()    {
    return view('showPage', ['name' => 'masume']);
});
Route::get('/controller/view', "showPage@projec");
Route::get('/hospital',function(){
    return hospital::all();
});
Route::get('/hospital/insert',"hospitalController@store");
Route::get('/hospital/update',"hospitalController@update");
Route::get('/student',function(){
    return Student::all();
});