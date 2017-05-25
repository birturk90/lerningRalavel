<?php

//cuse App\hospital;
//use App\student;
use App\testes;
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
//nahve route baraye controller
Route::get('/ralavel', "test@show"); 

Route::get('/view', function ()    {
    return view('showPage', ['name' => 'masume']);
});
Route::get('/controller/view', "showPage@projec");
//dasresi b database va jadval ha az trigh laravel
Route::get('/hospital',function(){
    return hospital::all();
});
Route::get('/hospital/insert',"hospitalController@store");
Route::get('/hospital/update',"hospitalController@update");
Route::get('/student',function(){
    return student::all();
});
Route::get('/student/insert',"studentContoroller@store");
Route::get('/student/update',"studentContoroller@update");
Route::get('/student/delet',"studentContoroller@delet");
////form routs(ijad form sabt nam &insert,delete ,edite,validation)
Route::get('/create',"controllerForm@index");
Route::post('/store',"controllerForm@store");
Route::get('/show',"controllerForm@show");
Route::get('/update',"controllerForm@update");
Route::get('/delete',"controllerForm@delete");
Route::get('/showtabel',"controllerForm@showtabel");
////restful
Route::resource('tasks', 'webservice');