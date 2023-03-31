<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('client.create-page');
});


Route::group(['prefix' => 'client', 'as' => 'client.'], function () {
    Route::post('', [App\Http\Controllers\ClientController::class, 'store'])->name('store');
    Route::get('/{name}', [App\Http\Controllers\ClientController::class, 'qrCode'])->name('qr-code');
    Route::get('/show/{name}', [App\Http\Controllers\ClientController::class, 'show'])->name('show');
});
