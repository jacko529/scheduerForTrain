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

Route::get('/home', 'HomeController@index')->name('home');


/**
 *
 * Driver Resource Route
 * The route for basic crud functionality for the driver details
 */
Route::resource('route', 'RouteController');


/**
 *
 *
 * Route Resource Route
 *
 * The route for basic crud functionality for the bus route
 */

Route::resource('driver', 'DriverController');
/***
 *
 *
 * Driver route 'route'
 */
Route::get('/driverroute', 'DriverRouteController@loopThroughMultipleRoots');
/**
 *
 * route to save the timetable
 */
Route::post('/driverroute', 'DriverRouteController@driversToRoutes')->name('timetable.create');
/**
 *
 * route to show previous timetables
 */
Route::get('/timetable', 'DriverRouteController@timetable');

