<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'App\Http\Controllers\IndexController@index')->name('home');
    Route::get('/activity/{id}', 'App\Http\Controllers\IndexController@activity_view')->name('activity.view');
    Route::post('/activity/save_progress', 'App\Http\Controllers\IndexController@save_progress')->name('activity.save.progress');
});

Route::group(['middleware' => ['auth', 'isAdmin']], function () {
    Route::get('/admin/activities', 'App\Http\Controllers\ActivitiesController@index')->name('activity.index');
    Route::get('/admin/activities/create', 'App\Http\Controllers\ActivitiesController@create')->name('activity.create');
    Route::post('/admin/activities/store', 'App\Http\Controllers\ActivitiesController@store')->name('activity.store');

    Route::get('/admin/activities/edit/{id}', 'App\Http\Controllers\ActivitiesController@edit')->name('activity.edit');
    Route::post('/admin/activities/update', 'App\Http\Controllers\ActivitiesController@update')->name('activity.update');
    Route::get('/admin/activities/destroy/{id}', 'App\Http\Controllers\ActivitiesController@destroy')->name('activity.destroy');

    Route::get('/admin/users', 'App\Http\Controllers\UsersController@index')->name('users.index');
    Route::get('/admin/users/destroy/{id}', 'App\Http\Controllers\UsersController@destroy')->name('users.destroy');
});

