<?php

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
Route::resource('/employee', 'EmployeeController');

Route::get('editEmployee/{id}' , function($id){
    return view('editEmployee' , ['id' => $id]);
});
Route::get('viewEmployee/{id}' , function($id){
    return view('viewEmployee' , ['id' => $id]);
});
Route::get('createEmployee' , function(){
    return view('createEmployee');
});