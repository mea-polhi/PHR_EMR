<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AddCodesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AddPatientController;
use App\Http\Controllers\LaboratoryController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ListPatientsController;
use App\Http\Controllers\UserActivityController;
use App\Http\Controllers\AccountBalanceController;
use App\Http\Controllers\ManageSystemUserController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

/////////////////////////// Patients ///////////////////////////
Route::get('add-patient', [AddPatientController::class, 'index'])->name('add-patient');
Route::post('add-patient', [AddPatientController::class, 'store'])->name('add-patient');
Route::get('list-patients', [ListPatientsController::class, 'index'])->name('list-patients');
Route::get('/patients', [ListPatientsController::class, 'index']);

Route::get('consultation', [ConsultationController::class, 'index'])->name('consultation');

Route::get('laboratory', [LaboratoryController::class, 'index'])->name('laboratory');

Route::get('balance', [AccountBalanceController::class, 'index'])->name('balance');

Route::get('icd-codes', [AddCodesController::class, 'index'])->name('icd-codes');

Route::get('manage-systemUser', [ManageSystemUserController::class, 'index'])->name('manage-systemUser');

/////////////////////////// Permission ///////////////////////////
Route::resource('permission', PermissionController::class);
Route::get('Permindex', [PermissionController::class, 'index'])->name('Permindex');
Route::get('Permcreate', [PermissionController::class, 'create'])->name('Permcreate');
Route::post('store', [PermissionController::class, 'store'])->name('store');

/////////////////////////// Role ///////////////////////////
Route::resource('role', RoleController::class);
Route::get('roleindex', [RoleController::class, 'index'])->name('roleindex');
Route::get('rolecreate', [RoleController::class, 'create'])->name('rolecreate');

Route::resource('user', UserController::class);

Route::get('user-activity', [UserActivityController::class, 'index'])->name('user-activity');

Route::post('logout', [LogoutController::class, 'store'])->name('logout');

require __DIR__.'/auth.php';

/////////////////////////// Axios request ///////////////////////////
Route::get('/getAllPermissions', [PermissionController::class, 'getAllPermissions'])->name('getAllPermissions');
Route::post('/postRole', [RoleController::class, 'store'])->name('postRole');