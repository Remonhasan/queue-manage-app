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



Auth::routes();

Route::get('/','HomeController@index')->name('welcome');
Route::post('/queue','QueueController@reserve')->name('queue.reserve');

Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'], function(){
    Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
        Route::get('queue','QueueController@index')->name('queue.index');
    Route::post('queue/{id}','QueueController@status')->name('queue.status');
    Route::delete('queue/{id}','QueueController@destory')->name('queue.destory');
   
});