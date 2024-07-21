<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Service\admin\DataControl\dataApproveController;

// 'index'
Route::get('/dashboard', [DashboardController::class, ''])->name('dashboard');
Route::resource('/data-approve', dataApproveController::class);
// 'selesai'
Route::post('/data-approve/selesai/{dataApprove}', [dataApproveController::class, ''])->name('data-approve.selesai');
