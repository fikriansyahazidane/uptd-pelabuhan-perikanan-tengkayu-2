<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\TugasFungsiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/auth/auth', [AuthController::class, 'showLoginForm'])->name('.login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('admin.dashboard');
Route::get('/tambahan/informasi', [KontakController::class, 'index'])->name('kontak');
Route::post('/tambahan/informasi/kirim', [KontakController::class, 'kirim'])->name('kontak.kirim');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/informasi/sejarah', [SejarahController::class, 'sejarah'])->name('informasi.sejarah');
Route::get('/informasi/visi-misi', [VisiMisiController::class, 'visiMisi'])->name('visi-misi');
Route::get('/informasi/struktur', [StrukturController::class, 'struktur'])->name('struktur');
Route::get('/informasi/tugas-fungsi', [TugasFungsiController::class, 'TugasFungsi'])->name('tugas-fungsi');
Route::get('/redirect-ppid', function () {
    return redirect()->away('https://ppid.kaltaraprov.go.id/');
});
Route::get('/redirect-lapor', function () {
    return redirect()->away('https://www.lapor.go.id/');
});
Route::get('/informasi/berita', [BeritaController::class, 'berita'])->name('berita');
Route::get('/informasi/news', [NewsController::class, 'news'])->name('news');
Route::get('/informasi/pengumuman', [PengumumanController::class, 'pengumuman'])->name('pengumuman');
Route::get('/galeri/foto', [FotoController::class, 'foto'])->name('foto');
Route::get('/galeri/video', [VideoController::class, 'video'])->name('video');
Route::get('/tambahan/publikasi', [PublikasiController::class, 'publikasi'])->name('publikasi');
Route::get('/redirect-sipena', function () {
    return redirect()->away('https://sipena.tengkayu2.dkp.kaltaraprov.go.id/admin/login');
});
