<?php

use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentTypeController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\LocalizationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/check', function () {
    return view('student.singlestudentcard');
});

Auth::routes();
Route::get('/dashboard', [dashboard::class, 'dashboard'])->name('dashboard')->middleware(['auth', 'verified']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('change/lang', [HomeController::class,'lang_change'])->name('LangChange');
Route::get('lang/{locale}', [App\Http\Controllers\LocalizationController::class, 'index']);

Route::resource('country',CountryController::class);
Route::resource('province',ProvinceController::class);
Route::resource('district',DistrictController::class);
Route::resource('department',DepartmentController::class);
Route::resource('session',SessionController::class);
Route::resource('studenttype',StudentTypeController::class);
Route::resource('class',ClassesController::class);
Route::resource('section',SectionsController::class);

Route::resource('student',StudentController::class);
Route::get('/studentdata', [StudentController::class, 'createPDFReport'])->name('StudentPDFReport');
Route::get('/studentformpdf/{id}', [StudentController::class, 'studentFormPDF'])->name('StudentPDFForm');
Route::get('/studentidcard/{id}', [StudentController::class, 'studentIDCard'])->name('StudentIDCard');
Route::get('/studentreport', [StudentController::class, 'studentReportIndex'])->name('StudentReport');
Route::get('/studentcardgenerater', function () {
    return view('student.singlestudentcard');
});

Route::post('api/fetch-states', [ProvinceController::class, 'fetchState']);
Route::post('api/fetch-cities', [DistrictController::class, 'fetchCities']);
Route::post('api/fetch-sections', [SectionsController::class, 'fetchSections']);
Route::post('api/fetch-students', [StudentController::class, 'fetchStudents']);

Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('posts', PostController::class);
});
