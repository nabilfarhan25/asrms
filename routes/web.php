<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/inventory', [InventoryController::class, 'index']);
    Route::get('/inventory/{slug}', [InventoryController::class, 'detail']);


});

Route::group(['middleware' => ['auth', 'admin']], function () {
    // File Uploader
    Route::post('/temp-upload', [InventoryController::class, 'tempUpload']);
    Route::delete('/temp-delete', [InventoryController::class, 'tempDelete']);

    // Inventory
    Route::post('/inventory', [InventoryController::class, 'store']);
    Route::delete('/slope/{slug}', [InventoryController::class, 'destroy']);
    
    Route::get('/create/geometry/{slug}', [InventoryController::class, 'create_geometry']);
    Route::post('/create/geometry/{slug}', [InventoryController::class, 'store_geometry']);
    Route::get('/create/characteristic/{slug}', [InventoryController::class, 'create_characteristic']);
    Route::post('/create/characteristic/{slug}', [InventoryController::class, 'store_characteristic']);
});

require __DIR__.'/auth.php';