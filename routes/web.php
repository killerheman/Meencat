<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index'] )->name('index');
Route::post('/savecontact', [HomeController::class, 'savecontact'])->name('savecontact');
Route::get('/admin', [AdminController::class, 'login'])->name('admin');
Route::get('/register', [HomeController::class, 'register'] )->name('register');


Route::group(['prefix' => 'backend', 'as' => 'backend.'], function () {
    Route::post('/adminlogin', [AdminController::class, 'adminLogin'])->name('adminLogin');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('AdminAuth');
    Route::get('/admin/student', [AdminController::class, 'student'])->name('student');
    Route::get('/admin/placedstudent', [AdminController::class, 'placedstudent'])->name('placedstudent');
    Route::post('/saveplacedstudent', [AdminController::class, 'saveplacedstudent'])->name('saveplacedstudent');
    Route::get('/admin/gallery', [AdminController::class, 'gallery'])->name('gallery');
    Route::post('/savegallery', [AdminController::class, 'savegallery'])->name('savegallery');
    Route::get('/delgallery/{del}', [AdminController::class, 'delGallery'] );
    Route::get('/admin/contacts', [AdminController::class, 'contacts'])->name('contacts');
    Route::get('/delcontact/{del}', [AdminController::class, 'deletecontact'] );
    Route::get('/delplaced/{del}', [AdminController::class, 'delplaced']);
    Route::get('/admin/course', [AdminController::class, 'course'])->name('course');
    Route::post('/savecourse', [AdminController::class, 'saveCourse'])->name('savecourse');
    Route::get('/delcourse/{del}', [AdminController::class, 'delCourse'] );

});
