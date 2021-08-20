<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Auth::routes();
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('users/index', [UserController::class, 'index'])->name('users.index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/doctors', [App\Http\Controllers\DoctorController::class, 'index'])->name('doctors');
Route::get('/add-doctor', [App\Http\Controllers\DoctorController::class, 'addDoctor'])->name('add-doctor');
Route::put('/add-doctor', [App\Http\Controllers\DoctorController::class, 'store'])->name('store-doctor');
Route::get('/patients', [App\Http\Controllers\PatientsController::class, 'index']);
Route::get('/home', [App\Http\Controllers\FileUpload::class, 'showfile'  ])->name('home');
Route::get('/patients/{id}', [App\Http\Controllers\PatientsController::class, 'show'  ]);
Route::get('/appointments', [App\Http\Controllers\AppointmentsController::class, 'index'])->name('appointments');
Route::get('/schedule', [App\Http\Controllers\ScheduleController::class, 'index'])->name('schedule');
Route::get('/departments', [App\Http\Controllers\DepartmentsController::class, 'index'])->name('departments');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/add-blog', [App\Http\Controllers\BlogController::class, 'addblog'])->name('add-blog');
Route::put('/add-blog', [App\Http\Controllers\BlogController::class, 'store'])->name('store-blog');
Route::get('/blog-details', [App\Http\Controllers\BlogdetailsController::class, 'index'])->name('blog-details');
Route::get('/calendar', [App\Http\Controllers\CalendarController::class, 'index'])->name('calendar');
Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index'])->name('Gallery');
Route::get('/add-patient', [App\Http\Controllers\AddpatientController::class, 'index'])->name('add-patient');
Route::put('/add-patient', [App\Http\Controllers\AddpatientController::class, 'store'])->name('add-patient-post');
Route::delete('/patients/{id}', [App\Http\Controllers\PatientsController::class, 'destroy']);
Route::post('/add-patient', [App\Http\Controllers\FileUpload::class, 'fileUpload'])->name('fileUpload');

