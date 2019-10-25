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

Route::get('/', 'UserController@home');

Route::get('packages', 'PackageController@select_packages');

Route::get('packages/{id}', 'PackageController@show_package');

Route::post('packages/booking', 'BookingController@book');

Route::get('request_package', 'RequestController@request');

Route::post('request_package', 'RequestController@create');

Route::get('contact_us', 'UserController@contact');


Route::get('error', function (){
    return view('layouts/user/error');
});


Route::get('user/login', 'UserController@index');

Route::post('user/login', 'UserController@login');


Route::get('user/dashboard', 'UserController@dashboard');


Route::get('user/packages', 'PackageController@index');

Route::post('user/create_package', 'PackageController@create');

Route::get('user/services', 'ServiceController@index');

Route::post('user/create_service', 'ServiceController@create');

Route::post('user/update_service', 'ServiceController@update');

Route::get('user/user_profile', 'UserController@show');

Route::post('user/create_user', 'UserController@create');


Route::post('user/edit_user', 'UserController@edit');


Route::get('user/logout', function (){
    Session::forget('user');
    return redirect('user/login');
});


Route::get('user/package_delete/{id}', 'PackageController@delete');

Route::get('user/packages/details/{id}', 'PackageController@display');

Route::post('user/packages/edit/', 'PackageController@edit');

Route::get('user/booking_list', 'BookingController@get_all');

Route::get('user/booking_delete/{id}', 'BookingController@delete');

Route::get('user/request_list', 'RequestController@get_all');

Route::get('user/request_delete/{id}', 'RequestController@delete');

