<?php

use App\Http\Controllers\AbsenreportController;
use App\Http\Controllers\AttlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Pembagian1Controller;
use App\Http\Controllers\Pembagian2Controller;
use App\Http\Controllers\Pembagian3Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.loginnew');//auth.loginnew
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('pegawai', PegawaiController::class);
Route::resource('pembagian1', Pembagian1Controller::class);
Route::resource('pembagian2', Pembagian2Controller::class);
Route::resource('pembagian3', Pembagian3Controller::class);
Route::resource('attlog', AttlogController::class);
Route::resource('absenreport', AbsenreportController::class);

require __DIR__.'/auth.php';
