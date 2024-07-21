<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\Service\service\DataControl\dataApproveController;

// 'index'
Route::get('/dashboard', [DashboardController::class, ''])->name('dashboard');
Route::resource('/service', dataApproveController::class);
// 'isiBbm'
Route::post('/service/isiBBM/{service}', [dataApproveController::class, ''])->name('service.isiBbm');
// 'service'
Route::post('/service/service/{service}', [dataApproveController::class, ''])->name('service.service');
