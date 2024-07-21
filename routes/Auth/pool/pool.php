<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\Service\pool\DataControl\dataApproveController;

// 'index'
Route::get('/dashboard', [DashboardController::class, ''])->name('dashboard');
Route::resource('/data-approve', dataApproveController::class);
// 'approve'
Route::post('/data-approve/approve/{data_approve}', [dataApproveController::class, ''])->name('data-approve.approve');
// 'reject'
Route::post('/data-approve/reject/{data_approve}', [dataApproveController::class, ''])->name('data-approve.reject');
// 'isiBBM'
Route::post('/data-approve/isiBBM/{data_approve}', [dataApproveController::class, ''])->name('data-approve.isiBbm');
// 'gantiService'
Route::post('/data-approve/gantiService/{data_approve}', [dataApproveController::class, ''])->name('data-approve.gantiService');
