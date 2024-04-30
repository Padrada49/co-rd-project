<?php

use App\Http\Controllers\RawMaterialsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ShippingTestersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('roles', RolesController::class);
Route::resource('/raw_material/global', RawMaterialsController::class);
Route::resource('/shipping_tester', ShippingTestersController::class);
