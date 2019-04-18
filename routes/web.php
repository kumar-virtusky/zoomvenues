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
    return view('zoomvenues.index');
});

Route::get('/zoomvenues/venues', function () {
    return view('zoomvenues.venues');
});

Route::get('/zoomvenues/venues/show', function () {
    return view('zoomvenues.show');
});
