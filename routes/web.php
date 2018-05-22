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

    // Route::get('/', function () {
    //     return view('welcome');
    // });
/*
    Route::get('/', function () {
        return redirect()->route('crud.index');
    });

    Route::get('/test-crud', function () {
        return view('crud');
    });
*/
    Route::resource('crud', 'Web\CRUDController');

    Route::get('{path?}', function () {
        return view('index');
    })->where('path', '(.*)');
