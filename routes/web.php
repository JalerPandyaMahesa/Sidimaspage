<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PesertadidikController;
use App\Http\Controllers\SekolahController;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/paud', function () {
//     return view('paud.index');
// });

// Route::get('/sd', function () {
//     return view('sd.index');
// });

// Route::get('/smp', function () {
//     return view('smp.index');
// });


// Route::get('/sekolah', [SekolahController::class, 'index'])->name('sekolah.index');
// Route::get('/sekolah/tk', [SekolahController::class, 'tk'])->name('sekolah.tk');
// Route::get('/sekolah/sd', [SekolahController::class, 'sd'])->name('sekolah.sd');
// Route::get('/sekolah/smp', [SekolahController::class, 'smp'])->name('sekolah.smp');

//HARUS LOGIN
// Route::get('/sekolah/create', [SekolahController::class, 'create'])->name('sekolah.create')->middleware('login_auth');
// Route::post('/sekolah', [SekolahController::class, 'store'])->name('sekolah.store')->middleware('login_auth');
// Route::get('/sekolah/{sekolah_id}/edit', [SekolahController::class, 'edit'])->name('sekolah.edit')->middleware('login_auth');
// Route::delete('/sekolah/{sekolah_id}', [SekolahController::class, 'destroy'])->name('sekolah.destroy')->middleware('login_auth');
// Route::put('/sekolah/{sekolah_id}', [SekolahController::class, 'update'])->name('sekolah.update')->middleware('login_auth');
// Route::get('/sekolah/{sekolah_id}', [SekolahController::class, 'show'])->name('sekolah.show');

// Route::get('/sekolah/pilih-bentuk-pendidikan', [SekolahController::class, 'pilihBentukPendidikan'])->name('pilih.bentuk.pendidikan');
// Route::get('/sekolah/pilih-kecamatan', [SekolahController::class, 'pilihKecamatan'])->name('sekolah.pilih.kecamatan');
// Route::post('/sekolah/pilih-kecamatan', [SekolahController::class, 'pilihKecamatan'])->name('pilih.kecamatan');
// Route::post('/sekolah/filter', [SekolahController::class, 'filterSekolah'])->name('filter.sekolah');

//rute peserta didik
// Route::get('/pesertadidik', [PesertadidikController::class, 'index'])->name('pesertadidik.index');
// Route::get('/pesertadidik/tk', [pesertadidikController::class, 'tk'])->name('pesertadidik.tk');
// Route::get('/pesertadidik/sd', [pesertadidikController::class, 'sd'])->name('pesertadidik.sd');
// Route::get('/pesertadidik/smp', [pesertadidikController::class, 'smp'])->name('pesertadidik.smp');

// Remove this route, as it's less specific and can cause conflicts
// Route::get('/pesertadidik/create', [PesertaDidikController::class, 'create'])->name('pesertadidik.create');

// Keep this route, which expects a sekolah_id
Route::get('/pesertadidik/create/{sekolah_id}', [PesertaDidikController::class, 'create'])->name('pesertadidik.create');

Route::post('/pesertadidik', [PesertaDidikController::class, 'store'])->name('pesertadidik.store');

Route::get('/pesertadidik/{peserta_didik_id}/edit', [PesertaDidikController::class, 'edit'])->name('pesertadidik.edit');
Route::put('/pesertadidik/{peserta_didik_id}', [PesertaDidikController::class, 'update'])->name('pesertadidik.update');
Route::get('/pesertadidik/{peserta_didik_id}', [PesertaDidikController::class, 'show'])->name('pesertadidik.show');
Route::delete('/pesertadidik/{peserta_didik_id}', [PesertaDidikController::class, 'destroy'])->name('pesertadidik.destroy');

// Login
// Route::get('login', [UserController::class, 'index'])->middleware('guest')->name('login');
// Route::post('login', [UserController::class, 'process'])->middleware('guest')->name('login.process');
// Route::post('logout', [UserController::class, 'logout'])->middleware('auth')->name('logout');


//admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/viewPaud', [AdminController::class, 'viewPaud'])->name('admin.viewPaud');
Route::get('/admin/viewSd', [AdminController::class, 'viewSd'])->name('admin.viewSd');
Route::get('/admin/viewSmp', [AdminController::class, 'viewSmp'])->name('admin.viewSmp');

Route::get('/admin/addSekolah', [AdminController::class, 'createSekolah'])->name('admin.addSekolah');
Route::post('/admin/dashboard', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/{sekolah_id}', [AdminController::class, 'showSekolah'])->name('admin.showSekolah');
Route::get('/admin/{sekolah_id}/edit', [AdminController::class, 'editSekolah'])->name('admin.editSekolah');
Route::put('/admin/{sekolah_id}', [AdminController::class, 'update'])->name('admin.updateSekolah');
Route::delete('/admin/{sekolah_id}', [AdminController::class, 'destroySekolah'])->name('admin.destroySekolah');
