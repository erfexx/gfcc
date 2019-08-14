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


Route::get('/', 'PageController@berandaPage')->name('home');

Route::get('/blog', 'PageController@blogPage')->name('blog');

Route::get('/join', 'PageController@getJoin')->name('join');
Route::post('/join', 'PageController@postJoin')->name('join');



Route::group([
    'middleware' => ['web', '\crocodicstudio\crudbooster\middlewares\CBBackend'],
    'prefix' => config('crudbooster.ADMIN_PATH'),
    ],function(){

    Route::resource('positions', 'PositionsController');
    Route::resource('attendance', 'AttendanceController');

    Route::get('member/json','AttendanceController@member_list');
    Route::post('member/json','AttendanceController@member_list');

    Route::post('attendance/{id}/detail','AttendanceController@storeAttend');

});


