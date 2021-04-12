<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
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

/* Landing Page Routes - PagesController */
Route::get('/', [PagesController::class, 'index']);
Route::get('/services', [PagesController::class, 'services']);
//Route::get('/functions', [PagesController::class, 'functions']);
Route::get('/blog', [PagesController::class, 'blog']);
Route::get('/contact', [PagesController::class, 'contact']);


Route::get('/admin-panel', function () {
    return view('admin_panel.index');
})->middleware(['auth'])->name('admin_panel');

Route::get('/admin-panel/kalender', function () {
    return view('admin_panel.calendar');
})->middleware(['auth'])->name('admin_panel.calendar');

Route::get('/admin-panel/cms', function () {
    return view('admin_panel.cms');
})->middleware(['auth'])->name('admin_panel.cms');

require __DIR__.'/auth.php';
