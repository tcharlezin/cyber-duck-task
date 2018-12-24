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

Auth::routes();

Route::group(['middleware' => 'auth'], function ()
{
    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'manager', 'as' => 'manager.', 'namespace' => 'Manager'], function ()
    {
        Route::resource('company', 'CompanyController');
        Route::resource('employee', 'EmployeeController');
    });

});