<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('laman.utama');
});
Route::get('/tentang', function () {
    return view('laman.tentang');
});
Route::get('/login', function () {
    return view('bfr.login');
});
Route::get('/job', function () {
    return view('laman.detail1');
});
Route::get('/list', function () {
    return view('aftr.list_job');
});
Route::get('/about', function () {
    return view('aftr.tentang');
});
Route::get('/dashboard', function () {
    return view('aftr.list_job');
});
