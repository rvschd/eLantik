<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OfficerProfileController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BoardMemberController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\PositionController;
use Illuminate\Support\Facades\Route;


// User Authentication Routes
Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/fake-login', [UserController::class, 'fakeLogin'])->name('fakeLogin');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Password Reset
Route::get('/reset-password', [UserController::class, 'showResetPassword'])->name('password.request');

// User Profile
Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
Route::put('/profile', [UserController::class, 'updateProfile'])->name('profile.update');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Officer Profile Management
Route::prefix('officer-profiles')->name('officer_profiles.')->group(function () {
    Route::get('/', [OfficerProfileController::class, 'index'])->name('index');
    Route::get('/create', [OfficerProfileController::class, 'create'])->name('create');
    Route::post('/', [OfficerProfileController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [OfficerProfileController::class, 'edit'])->name('edit');
    Route::put('/{id}', [OfficerProfileController::class, 'update'])->name('update');
    Route::delete('/{id}', [OfficerProfileController::class, 'destroy'])->name('destroy');
});

// Appointment Management
Route::prefix('appointments')->group(function () {
    Route::get('/', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::get('/memo', [AppointmentController::class, 'memo'])->name('appointments.memo');
    Route::get('/surat-pelantikan', [AppointmentController::class, 'suratPelantikan'])->name('appointments.surat_pelantikan');
    Route::get('/sejarah-lantikan', [AppointmentController::class, 'sejarahLantikan'])->name('appointments.sejarah_lantikan');
    Route::get('/search', [AppointmentController::class, 'search'])->name('appointments.search.form');
    Route::post('/search', [AppointmentController::class, 'search'])->name('appointments.search');
    Route::get('/maklumat-pelantikan', [AppointmentController::class, 'maklumatPelantikan'])->name('appointments.maklumat_pelantikan');
});

// Board Member Management
Route::prefix('board-members')->name('board_members.')->group(function () {
    Route::get('/', [BoardMemberController::class, 'index'])->name('index');
    Route::get('/update/{id}', [BoardMemberController::class, 'update'])->name('update');
    Route::post('/extend/{id}', [BoardMemberController::class, 'extend'])->name('extend');
    Route::post('/terminate/{id}', [BoardMemberController::class, 'terminate'])->name('terminate');
    Route::get('/history/{id}', [BoardMemberController::class, 'history'])->name('history');
});

// Archive Management
Route::prefix('archives')->name('archives.')->group(function () {
    Route::get('/expired-board-members', [ArchiveController::class, 'expiredBoardMembers'])->name('tamat_tempoh');
    Route::get('/inactive-officers', [ArchiveController::class, 'inactiveOfficers'])->name('pegawai_tidak_aktif');
});

// Reports
Route::prefix('reports')->name('reports.')->group(function () {
    Route::get('/nama-nokp-jawatan', [ReportController::class, 'officerProfiles'])->name('nama_nokp_jawatan');
    Route::get('/pegawai-belum-dilantik', [ReportController::class, 'unappointedOfficers'])->name('pegawai_belum_dilantik');
    Route::get('/ahli-lembaga-tamat-pendidikan', [ReportController::class, 'expiredBoardMembers'])->name('ahli_lembaga_tamat_pendidikan');
    Route::get('/laporan-ringkas-profil', [ReportController::class, 'briefOfficerProfiles'])->name('laporan_ringkas_profil');
    Route::get('/profil-alp', [ReportController::class, 'alpProfiles'])->name('profil_alp');
});

// Maintenance Module
Route::prefix('maintenance')->name('maintenance.')->group(function () {
    // Company Management
    Route::get('/syarikat-agensi', [MaintenanceController::class, 'manageCompanies'])->name('syarikat_agensi');
    Route::get('/syarikat-agensi/create', [MaintenanceController::class, 'createCompany'])->name('syarikat_agensi.create');
    Route::post('/syarikat-agensi', [MaintenanceController::class, 'storeCompany'])->name('syarikat_agensi.store');
    Route::get('/syarikat-agensi/{id}/edit', [MaintenanceController::class, 'editCompany'])->name('syarikat_agensi.edit');
    Route::put('/syarikat-agensi/{id}', [MaintenanceController::class, 'updateCompany'])->name('syarikat_agensi.update');
    Route::delete('/syarikat-agensi/{id}', [MaintenanceController::class, 'deleteCompany'])->name('syarikat_agensi.delete');

    // User Management
    Route::get('/users', [MaintenanceController::class, 'manageUsers'])->name('users.index');
    Route::post('/users/store', [MaintenanceController::class, 'storeUser'])->name('users.store');
    Route::put('/users/update/{id}', [MaintenanceController::class, 'updateUser'])->name('users.update');
    Route::delete('/users/delete/{id}', [MaintenanceController::class, 'deleteUser'])->name('users.delete');

    // Positions Management using Route Resource
    Route::resource('positions', PositionController::class)->names([
        'index' => 'positions.index',
        'create' => 'positions.create',
        'store' => 'positions.store',
        'show' => 'positions.show',
        'edit' => 'positions.edit',
        'update' => 'positions.update',
        'destroy' => 'positions.delete', // This will change the route name for deleting positions
    ]);

    // Other Maintenance
    Route::get('/jawatan', [MaintenanceController::class, 'managePositions'])->name('jawatan');
    Route::get('/logs', [MaintenanceController::class, 'systemLogs'])->name('logs');
    Route::get('/pejabat-bahagian', [MaintenanceController::class, 'manageDepartments'])->name('pejabat_bahagian');
    Route::get('/status-pelantikan', [MaintenanceController::class, 'manageAppointmentStatuses'])->name('status_pelantikan');
    Route::get('/muat-naik-fail', [MaintenanceController::class, 'fileUploadManagement'])->name('muat_naik_fail');
    Route::get('/pejabat-bahagian', [MaintenanceController::class, 'manageDepartments'])->name('pejabat_bahagian');
});

// User Module
Route::prefix('user')->name('user.')->group(function () {
    Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [UserController::class, 'login'])->name('login.submit');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/reset-password', [UserController::class, 'showResetPasswordForm'])->name('reset_password');
    Route::post('/reset-password', [UserController::class, 'resetPassword'])->name('reset_password.submit');
});
