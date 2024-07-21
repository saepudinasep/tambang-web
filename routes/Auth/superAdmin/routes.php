<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\Service\superAdmin\{
    Account\accountController,
    Pegawai\pegawaiController,
    Kendaraan\kendaraanController,
    Kendaraan\driverController,
    DataControl\dataApproveController,
    DataControl\approveAsPool,
    DataControl\approveAsKepalaKantor,
    DataControl\approveAsService,
};

/**
 * @route /dashboard
 * @authenticated
 * @role superAdmin
 * @url http://localhost:8000/superAdmin/dashboard
 * @example http://localhost:8000/superAdmin/dashboard
 */
// 'index'
Route::get('/dashboard', [DashboardController::class, ''])->name('dashboard');

/**
 * @route /accounts
 * @authenticated
 * @role superAdmin
 * @url http://localhost:8000/superAdmin/accounts
 * @example http://localhost:8000/superAdmin/accounts
 */
Route::resource('/accounts', AccountController::class);

/**
 * @route /pegawai
 * @authenticated
 * @role superAdmin
 * @url http://localhost:8000/superAdmin/pegawai
 * @example http://localhost:8000/superAdmin/pegawai
 */
Route::resource('/pegawai', pegawaiController::class);

/**
 * @route /kendaraan
 * @authenticated
 * @role superAdmin
 * @url http://localhost:8000/superAdmin/kendaraan
 * @example http://localhost:8000/superAdmin/kendaraan
 */
Route::resource('/kendaraan', kendaraanController::class);

/**
 * @route /driver
 * @authenticated
 * @role superAdmin
 * @url http://localhost:8000/superAdmin/driver
 * @example http://localhost:8000/superAdmin/driver
 */
Route::resource('/driver', driverController::class);

/**
 * @route /data-approve
 * @authenticated
 * @role superAdmin
 * @url http://localhost:8000/superAdmin/data-approve
 * @example http://localhost:8000/superAdmin/data-approve
 */
Route::resource('/data-approve', dataApproveController::class);
// 'export_excel'
Route::get('/exports', [dataApproveController::class, ''])->name('data-approve.export');

/**
 * @route /approveAsPool
 * @authenticated
 * @role superAdmin
 * @url http://localhost:8000/superAdmin/approveAsPool
 * @example http://localhost:8000/superAdmin/approveAsPool
 */
Route::resource('/approveAsPool', approveAsPool::class);
// 'approve'
Route::post('/approveAsPool/approve/{approveAsPool}', [approveAsPool::class, ''])->name('approveAsPool.approve');
// 'reject'
Route::post('/approveAsPool/reject/{approveAsPool}', [approveAsPool::class, ''])->name('approveAsPool.reject');
// 'isiBbm'
Route::post('/approveAsPool/isiBBM/{approveAsPool}', [approveAsPool::class, ''])->name('approveAsPool.isiBbm');
// 'gantiService'
Route::post('/approveAsPool/gantiService/{approveAsPool}', [approveAsPool::class, ''])->name('approveAsPool.gantiService');

/**
 * @route /approveAsKepala
 * @authenticated
 * @role superAdmin
 * @url http://localhost:8000/superAdmin/approveAsKepala
 * @example http://localhost:8000/superAdmin/approveAsKepala
 */
Route::resource('/approveAsKepala', approveAsKepalaKantor::class);
// 'approve'
Route::post('/approveAsKepala/approve/{approveAsKepala}', [approveAsKepalaKantor::class, ''])->name('approveAsKepala.approve');
// 'reject'
Route::post('/approveAsKepala/reject/{approveAsKepala}', [approveAsKepalaKantor::class, ''])->name('approveAsKepala.reject');

/**
 * @route /approveAsService
 * @authenticated
 * @role superAdmin
 * @url http://localhost:8000/superAdmin/approveAsService
 * @example http://localhost:8000/superAdmin/approveAsService
 */
Route::resource('/approveAsService', approveAsService::class);
// 'isiBbm'
Route::post('/approveAsService/isiBBM/{approveAsService}', [approveAsService::class, ''])->name('approveAsService.isiBbm');
// 'service'
Route::post('/approveAsService/service/{approveAsService}', [approveAsService::class, ''])->name('approveAsService.service');
