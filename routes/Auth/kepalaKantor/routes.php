<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\Service\kepalaKantor\DataControl\dataApproveController;

// 'index'
Route::get('/dashboard', [DashboardController::class, ''])->name('dashboard');
Route::resource('/data-approve', dataApproveController::class);
// 'approve
Route::post('/data-approve/approve/{data_approve}', [dataApproveController::class, ''])->name('data-approve.approve');
// 'reject
Route::post('/data-approve/reject/{data_approve}', [dataApproveController::class, ''])->name('data-approve.reject');
