<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('home'); // WelcomeController@Index
Route::get('/projects', [WelcomeController::class, 'projects'])->name('projects'); // WelcomeController@projects
Auth::routes();

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard/projects', [HomeController::class, 'projects'])->name('dashboard.projects');
Route::post('/dashboard/projects/tags', [HomeController::class, 'createTags'])->name('createTags'); // WelcomeController@createTags

