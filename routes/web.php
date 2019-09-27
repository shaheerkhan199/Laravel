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
Route::get('login','mainController@showLoginView');

Route::get('admindashboard','mainController@showAdminDashboard');
// Route::get('addQuestion',function(){
// 	return view('admin.addNewQuestion');
// });
Route::post('newUser','mainController@addNewUser');
Route::get('userdashboard','mainController@showUserDashboard');
Route::post('/validate','mainController@validateAdmin');

Route::post('/admindashboard','mainController@saveQuestion');

Route::get('signup','mainController@showSignupView');

Route::get('/', function () {
    return view('welcome');
});
