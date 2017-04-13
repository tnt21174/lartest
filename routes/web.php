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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes

	##SinhVien## Route::match(['get', 'post'], '/', function () {});
    Route::get('/sinhvien', function () {
	    return view('sinhvien.index');
	});
	 Route::get('/sinhvien/list', ['uses' => 'SinhVienController@getList']);
	 Route::post('/sinhvien/add', ['uses' => 'SinhVienController@getAdd']);
	 Route::get('/sinhvien/edit/{id}', ['uses' => 'SinhVienController@getEdit']);
	 Route::post('/sinhvien/edit/{id}', ['uses' => 'SinhVienController@postEdit']);
	 Route::get('/sinhvien/delete/{id}', ['uses' => 'SinhVienController@getDelete']);

	 ##Area## Route::match(['get', 'post'], '/', function () {});
    Route::get('/area', function () {
	    return view('area.index');
	});
	 Route::get('/area/list', ['uses' => 'AreaController@getList']);
	 Route::post('/area/add', ['uses' => 'AreaController@getAdd']);
	 Route::get('/area/edit/{id}', ['uses' => 'AreaController@getEdit']);
	 Route::post('/area/edit/{id}', ['uses' => 'AreaController@postEdit']);
	 Route::get('/area/delete/{id}', ['uses' => 'AreaController@getDelete']);

	  ##Area## Route::match(['get', 'post'], '/', function () {});
    Route::get('/province', function () {
	    return view('province.index');
	});
	 Route::get('/province/list', ['uses' => 'ProvinceController@getList']);
	 Route::post('/province/add', ['uses' => 'ProvinceController@getAdd']);
	 Route::get('/province/edit/{id}', ['uses' => 'ProvinceController@getEdit']);
	 Route::post('/province/edit/{id}', ['uses' => 'ProvinceController@postEdit']);
	 Route::get('/province/delete/{id}', ['uses' => 'ProvinceController@getDelete']);
});


