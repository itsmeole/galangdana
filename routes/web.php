<?php

use App\Models\Lowongan;
use Illuminate\Http\Request;
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
Route::get('/dashboard', function () {
    $datas = [
        'items' => Lowongan::all()
    ];
    return view('aftr.list_job', $datas);
});
Route::get('/about', function () {
    return view('aftr.tentang');
});
// Route::get('/dashboard', function () {
//     return view('aftr.list_job');
// });
Route::get('/daftar', function () {
    return view('bfr.daftar');
});

Route::get('/lowongan/create', function () {
    return view('lowongan.create');
});

Route::post('/lowongan/create', function (Request $request) {
    Lowongan::create($request->all());
})->name('lowongan.create');
