<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', function () {
    return redirect('/');
});
Route::get('/about',[\App\Http\Controllers\HomeController::class, 'about']);
Route::get('/master',[\App\Http\Controllers\HomeController::class, 'master']);
Route::get('/master-practitioner',[\App\Http\Controllers\HomeController::class, 'master_practitioner']);
Route::get('/blog', [\App\Http\Controllers\HomeController::class, 'blog']);
Route::get('/article', [\App\Http\Controllers\HomeController::class, 'article']);
Route::get('/practitioner', [\App\Http\Controllers\HomeController::class, 'practitioner']);

Auth::routes();
Route::get('auth/google', [\App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [\App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard',[\App\Http\Controllers\Admin\DashboardController::class,'index']);
    Route::resource('courses', \App\Http\Controllers\Admin\CourseController::class);
    Route::get('/courses/{id}/statistic', [\App\Http\Controllers\Admin\CourseController::class, 'statistic']);
    Route::get('/courses/{course_id}/{chapter_id}/lessons',[\App\Http\Controllers\Admin\LessonController::class,'index']);
    Route::get('/courses/{course_id}/{chapter_id}/lessons/create',[\App\Http\Controllers\Admin\LessonController::class,'create']);

    Route::get('/lessons',[\App\Http\Controllers\Admin\LessonController::class,'index']);
    Route::post('/lessons',[\App\Http\Controllers\Admin\LessonController::class,'store']);
//    Route::get('/lessons/create',[\App\Http\Controllers\Admin\LessonController::class,'create']);
    Route::get('/lessons/{id}',[\App\Http\Controllers\Admin\LessonController::class,'show']);

    Route::get('/chapters',[\App\Http\Controllers\Admin\ChapterController::class,'index']);


    Route::get('/blogs',[\App\Http\Controllers\Admin\BlogController::class,'index']);
    Route::get('/blogs/create',[\App\Http\Controllers\Admin\BlogController::class,'create']);
    Route::get('/blogs/{id}',[\App\Http\Controllers\Admin\BlogController::class,'show']);
    Route::post('/blogs',[\App\Http\Controllers\Admin\BlogController::class,'store']);
    Route::post('/blogs/{id}',[\App\Http\Controllers\Admin\BlogController::class,'update']);

    Route::get('/messages',[\App\Http\Controllers\Admin\MessageController::class,'index']);


    Route::get('/users',[\App\Http\Controllers\Admin\UserController::class,'index']);
});

