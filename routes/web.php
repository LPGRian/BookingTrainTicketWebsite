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
   	return redirect('home');
});

Route::get('/home', function () {
    return view('Client/homepage');
});


Route::get('/datVe', function () {
    return view('Client/datVe');
});

Route::get('/thanhToan', function () {
    return view('Client/thanhToan');
});

Route::get('/kiemTraVe', function () {
    return view('Client/kiemTraVe');
});

Route::get('/traCuuDatCho', function () {
    return view('Client/traCuuDatCho');
});

Route::get('/kqTraCuuDatCho', function () {
    return view('Client/kqTraCuuDatCho');
});

Route::get('/xacNhan', function () {
    return view('Client/xacNhan');
});

Route::get('/lienHe', function () {
    return view('Client/lienHe');
});