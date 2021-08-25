<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ContentsController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get("/",[PagesController::class,'index'])->name('index');

// category route
Route::get('/category_list', [PagesController::class, 'category_list'])->name('category_list');


Route::get('/category_create', [PagesController::class, 'category_create'])->name('category.create');

Route::post('/category_create', [PagesController::class, 'category_store'])->name('category.store');


Route::get('/category/edit/{id}', [PagesController::class, 'category_edit'])->name('category.edit');

Route::post('/category/edit/{id}', [PagesController::class, 'category_update'])->name('category.update');

/* Route::post('delete/{id}', [PagesController::class, 'category_delete'])->name('category.delete');*/
Route::get('delete/{id}',[PagesController::class,'category_delete']);



//course route

Route::get('/course_list', [CoursesController::class, 'course_list'])->name('course_list');


Route::get('/course_create', [CoursesController::class, 'course_create'])->name('course.create');

Route::post('/course_create', [CoursesController::class, 'course_store'])->name('course.store');


Route::get('/course/edit/{id}', [CoursesController::class, 'course_edit'])->name('course.edit');

Route::post('/course/edit/{id}', [CoursesController::class, 'course_update'])->name('course.update');

Route::get('delete/{id}',[CoursesController::class,'course_delete']);




///content route

Route::get('/content_list', [ContentsController::class, 'content_list'])->name('content_list');


Route::get('/content_create', [ContentsController::class, 'content_create'])->name('content.create');

Route::post('/content_create', [ContentsController::class, 'content_store'])->name('content.store');


Route::get('/content/edit/{id}', [ContentsController::class, 'content_edit'])->name('content.edit');

Route::post('/content/edit/{id}', [ContentsController::class, 'content_update'])->name('content.update');

Route::get('delete/{id}',[ContentsController::class,'content_delete']);


