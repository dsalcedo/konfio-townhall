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
})->name('website.index');


Route::get('/jobs', 'JobController@test')->name('jobs.test');


Route::group(['prefix'=>'konfio'], function ($route){
    $route->get('/', 'KonfioController@index');
    $route->post('/', 'KonfioController@store');
});
