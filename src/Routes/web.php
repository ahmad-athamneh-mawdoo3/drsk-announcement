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
\Auth::loginUsingId(1);
Route::get('test.announcement', 'Mawdoo3\Drsk\Announcement\Controllers\ExamController@testRoute')->name('test.announcement');


