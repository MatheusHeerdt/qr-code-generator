<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

    Route::post('/client', [App\Http\Controllers\Api\ClientController::class, 'store'])->name('client.store');
    Route::get('/client/{name}', [App\Http\Controllers\Api\ClientController::class, 'show'])->name('client.show');
    Route::get('/client/{name}/qrcode', [App\Http\Controllers\Api\ClientController::class, 'qrCode'])->name('client.qr-code');
