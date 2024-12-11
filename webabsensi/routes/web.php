<?php

use App\Http\Controllers\AbsenreportController;
use App\Http\Controllers\AttlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Pembagian1Controller;
use App\Http\Controllers\Pembagian2Controller;
use App\Http\Controllers\Pembagian3Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.loginnew');//auth.loginnew
});

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('pegawai', PegawaiController::class)->middleware(['auth', 'verified', 'Ceklevel:admin']);
Route::resource('pembagian1', Pembagian1Controller::class)->middleware(['auth', 'verified', 'Ceklevel:admin']);
Route::resource('pembagian2', Pembagian2Controller::class)->middleware(['auth', 'verified', 'Ceklevel:admin']);
Route::resource('pembagian3', Pembagian3Controller::class)->middleware(['auth', 'verified', 'Ceklevel:admin']);
Route::resource('attlog', AttlogController::class)->middleware(['auth', 'verified', 'Ceklevel:user']);
Route::resource('absenreport', AbsenreportController::class)->middleware(['auth', 'verified', 'Ceklevel:admin']);

// cetak 
Route::get('generate-pdf', [App\Http\Controllers\Pdfcontroller::class,'generatePdf']);

require __DIR__.'/auth.php';
