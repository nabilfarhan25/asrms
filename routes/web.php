<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\InspectionController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\PreservationController;
use App\Http\Controllers\MitigationController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AccountController;
use App\Models\Slopes;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $slopes = Slopes::all();
    // Gabungkan tanggal dari kedua kolom, lalu urutkan
    $inspections = collect($slopes)->flatMap(function ($item) {
        return [
                ['date' => $item->engineer_inspection, 'type' => 'Engineer Inspection','slope_name' => $item->slope_name ,'slug' => $item->slug],
                ['date' => $item->maintenance_inspection, 'type' => 'Maintenance Inspection','slope_name' => $item->slope_name ,'slug' => $item->slug],
            ];
        })->filter(function ($item) {
            return !is_null($item['date']); // Filter null dates
        })->sortBy('date')->take(6); // Urutkan berdasarkan tanggal

    $data = [
        'slopes' => $inspections,
    ];

    return view('welcome',$data);
});
Route::get('/map', function () {
    return view('welcome2');
});

Route::get('/dashboard', function () {
    return view('welcome');
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

Route::group(['middleware' => ['auth', 'role:inspector,engineer,manager']], function () {
    // File Uploader
    Route::post('/temp-upload', [ImageController::class, 'tempUpload']);
    Route::delete('/temp-delete', [ImageController::class, 'tempDelete']);

    // Img Delete
    Route::delete('/images-del/{slug}/{key}', [ImageController::class, 'deleteImage'])->name('images.delete');
    // Inventory
    Route::post('/inventory', [InventoryController::class, 'store']);
    Route::post('/inventory/{slug}', [InventoryController::class, 'edit']);
    Route::delete('/slope/{slug}', [InventoryController::class, 'destroy']);
    Route::get('/edit/geometry/{slug}', [InventoryController::class, 'edit_geometry']);
    Route::post('/edit/geometry/{slug}', [InventoryController::class, 'change_geometry']);
    Route::get('/edit/characteristic/{slug}', [InventoryController::class, 'edit_characteristic']);
    Route::post('/edit/characteristic/{slug}', [InventoryController::class, 'change_characteristic']);
    Route::get('/edit/rating/{slug}', [InventoryController::class, 'edit_rating']);
    Route::post('/edit/rating/{slug}', [InventoryController::class, 'change_rating']);
    Route::post('/upload-doc/{slug}', [InventoryController::class, 'upload_doc']);
    Route::delete('/delete-doc/{id}', [InventoryController::class, 'delete_doc']);


    Route::get('/create/geometry/{slug}', [InventoryController::class, 'create_geometry']);
    Route::post('/create/geometry/{slug}', [InventoryController::class, 'store_geometry']);
    Route::get('/create/characteristic/{slug}', [InventoryController::class, 'create_characteristic']);
    Route::post('/create/characteristic/{slug}', [InventoryController::class, 'store_characteristic']);
    Route::get('/create/rating/{slug}', [InventoryController::class, 'create_rating']);
    Route::post('/create/rating/{slug}', [InventoryController::class, 'store_rating']);
    Route::get('/create/record/{slug}', [InventoryController::class, 'create_record']);
    Route::post('/create/record/{slug}', [InventoryController::class, 'store_record']);
    Route::delete('/delete/record/{id}', [InventoryController::class, 'destroy_record']);


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
    
    Route::group(['middleware' => ['role:manager']], function () {
    // Accounts
    Route::get('/accounts', [AccountController::class, 'index']);
    Route::post('/accounts/edit/{id}', [AccountController::class, 'edit']);
    Route::delete('/accounts/delete/{id}', [AccountController::class, 'destroy']);

    Route::post('/verifying/management/{id}', [InspectionController::class, 'appr_management']);
    Route::delete('/inspection/delete/{id}', [InspectionController::class, 'destroy']);
    });

    Route::group(['middleware' => ['role:engineer,manager']], function () {
    Route::post('/verifying/engineer/{id}', [InspectionController::class, 'appr_engineer']);
    });
});

require __DIR__.'/auth.php';