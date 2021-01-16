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
use App\Models\category;
use App\Models\food;
use App\Models\slide;
use App\Models\User;
use App\Models\reservation;
use App\Models\kinds;


Route::get('/', function () {
    return view('welcome');
});

 // Nhóm những trang nào liên quan điến admin
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'category'],function(){
		
		Route::get('list','danhmucController@getDanhSach');

		Route::get('edit/{id}','danhmucController@getSua');
		Route::post('edit/{id}','danhmucController@postSua');


		Route::get('add','danhmucController@getThem');
		Route::post('add','danhmucController@postThem');

		Route::get('delete/{id}','danhmucController@getXoa');
	});

	Route::group(['prefix'=>'food'],function(){
		
		Route::get('list','thucdonController@getDanhSach');

		Route::get('edit/{id}','thucdonController@getSua');
		Route::post('edit/{id}','thucdonController@postSua');


		Route::get('add','thucdonController@getThem');
		Route::post('add','thucdonController@postThem');

		Route::get('delete/{id}','thucdonController@getXoa');
	});

	Route::group(['prefix'=>'slide'],function(){
		
		Route::get('list','slideController@getDanhSach');

		Route::get('edit/{id}','slideController@getSua');
		Route::post('edit/{id}','slideController@postSua');


		Route::get('add','slideController@getThem');
		Route::post('add','slideController@postThem');

		Route::get('delete/{id}','slideController@getXoa');
	});

	Route::group(['prefix'=>'user'],function(){
		
		Route::get('list','userController@getDanhSach');

		Route::get('edit/{id}','userController@getSua');
		Route::post('edit/{id}','userController@postSua');


		Route::get('add','userController@getThem');
		Route::post('add','userController@postThem');

		Route::get('delete/{id}','userController@getXoa');
	});

	Route::group(['prefix'=>'reservation'],function(){
		
		Route::get('list','reservationController@getDanhSach');

		Route::get('detail/{id}','reservationController@getSua');
		Route::post('detail/{id}','reservationController@postSua');

		Route::get('delete/{id}','reservationController@getXoa');
	});

	Route::group(['prefix'=>'kinds'],function(){
		
		Route::get('list','loaibanController@getDanhSach');

		Route::get('edit/{id}','loaibanController@getSua');
		Route::post('edit/{id}','loaibanController@postSua');


		Route::get('add','loaibanController@getThem');
		Route::post('add','loaibanController@postThem');

		Route::get('delete/{id}','loaibanController@getXoa');
	});



});
