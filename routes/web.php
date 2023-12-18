<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controller\homeController;
// use app\Http\Controller\userController;

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

Route::get('/', 'homeController@index');

Route::get('/trang_chu','homeController@index')->name('pages_trang_chu');
Route::get('/login','userController@login') -> name('pages_login');
Route::get('/register','userController@register')->name('pages_register');



Route::get('/nam_sandal','homeController@nam_sandal');
Route::get('/nam_sneaker','homeController@nam_sneaker');

Route::post('/register','userController@postRegister');
