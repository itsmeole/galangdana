<?php
use App\Http\Controllers\ProfileController;
use App\Models\Lowongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LowonganController;

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

Route::get('/done', function () {
    return view('lowongan.after');
});

Route::post('/lowongan/create', function (Request $request) {
    Lowongan::create($request->all());
})->name('lowongan.create');

Route::get('/lowongan', [LowonganController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/lowongan/create', function () {
    return view('lowongan.create');
})->middleware(['auth', 'verified'])->name('lowongan.create');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
