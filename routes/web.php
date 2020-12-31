<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
use App\Http\Controllers\Cars;
use App\Http\Controllers\Login;
use App\Http\controllers\httpcontroller;
// use App\Http\Controllers\users;

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

Route::view('/',"login");

/*
Route::get('/', function () {
    return view('welcome');
});
*/

// Route::get('user','users@user');

// Route::get('user',[users::class,'user']);

// Route::get('maruti', 'Cars@maruti');
/**
 * 
 * // Group middleware example http://localhost:8000/login?gender=female
* Route::group(['middleware' => ['genderFilter']], function(){
*    Route::get('login', [Login::Class,'login']);
*});
* 
*/


/**
 * Route middleware example
 * Route::get('login', [Login::Class,'login'])->middleware('genderFilter');
*/

/*
Route::get('login', [Login::Class,'login']);
Route::get('maruti',[Cars::class, 'maruti']);
Route::get('audi', [Cars::class,'audi']);
Route::get('hyundai',[Cars::class,'hyundai']);
Route::post('doLogin',[Login::class, 'doLogin']);
Route::view('error','error');
Route::get('http_example',[Httpcontroller::class,'get_example']);
Route::get('profile',[Login::class,'profile']);
Route::get('logout',[Login::Class, 'logout']);
Route::get('upload', [Login::Class, 'upload']);
Route::post('doupload', [Login::Class, 'doupload']);
Route::get('adduser',[users::class,'adduser']);
Route::post('adduser',[users::class,'adduser']);
Route::get('userslist',[users::class, 'userslist']);
Route::get('deleteuser/{id}', [users::class, 'deleteuser']);
Route::any('edituser/{id}',[users::class, 'edituser']);
Route::get('userone/{key:email}',[Users::class,'userone']);
// Route::get('users',[users::class, 'user']);
// Route::post('edituser',[users::class, 'edituser']);
*/