<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AsileController;
use App\Http\Controllers\Frontend\AsileController as FrontendAsileController;
use App\Http\Controllers\Frontend\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/get-asile', [FrontendAsileController::class, 'getAsile'])->name('get.asile');
Route::post('/store-asile-demand', [FrontendAsileController::class, 'storeAsileDemand'])->name('store.asile.demand');
Route::get('/thankyou', [WelcomeController::class, 'thankyou'])->name('thankyou');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/asiles', AsileController::class);
    });

require __DIR__.'/auth.php';
