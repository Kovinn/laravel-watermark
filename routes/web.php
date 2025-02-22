<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignatureController; 
use App\Http\Controllers\QrCodeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Menambahkan route untuk dashboard yang mengarah ke SignatureController
Route::get('/dashboard', [SignatureController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Grup route yang membutuhkan autentikasi
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/generate-qrcode', [SignatureController::class, 'generateQRCode'])->name('generate.qrcode');
    Route::get('/generate-qr', [QrCodeController::class, 'index'])->name('generate.form');
    Route::post('/generate-qr', [QrCodeController::class, 'generate'])->name('generate.qr');
});

require __DIR__.'/auth.php';

