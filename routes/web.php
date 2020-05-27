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

Route::get('/', 'ShopHasServiceController@index_logic');
Route::resource('appointment', 'AppointmentController');
Route::resource('service', 'ServiceController');
Route::resource('car', 'CarController');
Route::get('/car_search', 'CarController@search_vin_number_view');
Route::post('/car_search', 'CarController@search_vin_number');
Route::get('car/appointment/{id}', 'CarController@car_add_appointment_view');
