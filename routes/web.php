<?php

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/about-me', [AboutMeController::class, 'show']);

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/projects', [PostController::class, 'indexProjects']);
Route::get('/{post:slug}', [PostController::class, 'show'])->name('view');
