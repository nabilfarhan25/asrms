<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\InspectionController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\PreservationController;
use App\Http\Controllers\MitigationController;
use App\Http\Controllers\PDFController;
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

    // Inventory
    Route::get('/inventory', [InventoryController::class, 'index']);
    Route::get('/inventory/{slug}', [InventoryController::class, 'detail']);

    // Management
    Route::get('/management', [ManagementController::class, 'index']);
    Route::post('/management', [ManagementController::class, 'index']);
    Route::post('/find', [ManagementController::class, 'get']);
    Route::get('/management/{slug}', [ManagementController::class, 'detail']);

    // Inspection
    Route::get('/inspection', [InspectionController::class, 'index']);
    Route::post('/inspection', [InspectionController::class, 'index']);
    Route::get('/inspection/{slug}', [InspectionController::class, 'detail']);
    Route::get('/engineer-inspection/{slug}', [InspectionController::class, 'inspection']);
    Route::get('/engineer-inspection/{slug}/{id}', [InspectionController::class, 'detail_inspection']);
    Route::get('/maintenance-routine/{slug}', [InspectionController::class, 'maintenance']);

    // Preservation
    Route::get('/preservation', [PreservationController::class, 'index']);
    Route::post('/preservation', [PreservationController::class, 'index']);
    Route::get('/preservation/{slug}', [PreservationController::class, 'detail']);
    Route::get('/preservation/{slug}/{id}', [PreservationController::class, 'preservation']);

    // Mitigation
    Route::get('/mitigation', [MitigationController::class, 'index']);
    Route::get('/mitigation/{slug}', [MitigationController::class, 'detail']);
    Route::get('/mitigation/{slug}/{id}', [MitigationController::class, 'mitigation']);

    // PDF
    Route::get('/pdf-inventory/{slug}', [PDFController::class, 'inventory']);
    Route::get('/pdf-rating/{slug}', [PDFController::class, 'rating']);
    Route::get('/pdf-mitigation/{id}', [PDFController::class, 'mitigation']);
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    // File Uploader
    Route::post('/temp-upload', [ImageController::class, 'tempUpload']);
    Route::delete('/temp-delete', [ImageController::class, 'tempDelete']);

    // Img Delete
    Route::delete('/images-del/{slug}/{key}', [ImageController::class, 'deleteImage'])->name('images.delete');
    // Inventory
    Route::post('/inventory', [InventoryController::class, 'store']);
    Route::delete('/slope/{slug}', [InventoryController::class, 'destroy']);
    Route::get('/edit/geometry/{slug}', [InventoryController::class, 'edit_geometry']);
    Route::post('/edit/geometry/{slug}', [InventoryController::class, 'change_geometry']);
    Route::get('/edit/characteristic/{slug}', [InventoryController::class, 'edit_characteristic']);
    Route::post('/edit/characteristic/{slug}', [InventoryController::class, 'change_characteristic']);
    Route::get('/edit/rating/{slug}', [InventoryController::class, 'edit_rating']);
    Route::post('/edit/rating/{slug}', [InventoryController::class, 'change_rating']);

    Route::get('/create/geometry/{slug}', [InventoryController::class, 'create_geometry']);
    Route::post('/create/geometry/{slug}', [InventoryController::class, 'store_geometry']);
    Route::get('/create/characteristic/{slug}', [InventoryController::class, 'create_characteristic']);
    Route::post('/create/characteristic/{slug}', [InventoryController::class, 'store_characteristic']);
    Route::get('/create/rating/{slug}', [InventoryController::class, 'create_rating']);
    Route::post('/create/rating/{slug}', [InventoryController::class, 'store_rating']);

    // Inspection
    Route::get('/inspection/geometry/{slug}', [InspectionController::class, 'create_geometry']);
    Route::post('/inspection/geometry/{slug}', [InspectionController::class, 'store_geometry']);
    Route::get('/inspection/characteristic/{slug}', [InspectionController::class, 'create_characteristic']);
    Route::post('/inspection/characteristic/{slug}', [InspectionController::class, 'store_characteristic']);
    Route::get('/inspection/rating/{slug}', [InspectionController::class, 'create_rating']);
    Route::post('/inspection/rating/{slug}', [InspectionController::class, 'store_rating']);
    Route::get('/create/maintenance/{slug}', [InspectionController::class, 'create_maintenance']);
    Route::post('/create/maintenance/{slug}', [InspectionController::class, 'store_maintenance']);
    
    // Preservation
    Route::get('/create/preservation/{slug}', [PreservationController::class, 'create']);
    Route::post('/create/preservation/{slug}', [PreservationController::class, 'store']);
    Route::delete('/preservation/{slug}', [PreservationController::class, 'destroy']);

    // Mitigation
    Route::get('/create/mitigation/{slug}', [MitigationController::class, 'create']);
    Route::post('/create/mitigation/{slug}', [MitigationController::class, 'store']);
    Route::delete('/mitigation/{slug}', [MitigationController::class, 'destroy']);

});

require __DIR__.'/auth.php';