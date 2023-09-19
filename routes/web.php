<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\DetailtextController;

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

Route::get('/', [HomeController::class, 'show'])->name('welcome')->middleware('auth');

Route::post('/detail/{id}', [DetailtextController::class, 'detail_create'])->name('detail_create');

Route::get('/detail/{id}', [DetailtextController::class, 'detail'])->name('detail');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/create', [HomeController::class, 'create'])->name('create');

Route::get('/person', [PersonController::class, 'person_show'])->name('person_show');

Route::post('/person', [PersonController::class, 'person_create'])->name('person_create');

Route::get('/diary', [HomeController::class, 'diary_show'])->name('diary_show');

Route::post('/diary', [DiaryController::class, 'diary_create'])->name('diary_create');

Route::get('/diary_detail_list/{id}', [DiaryController::class, 'diary_detail_show'])->name('diary_detail_show');

Route::get('/diary_detail/{id}', [DiaryController::class, 'diary_detail_show_detail'])->name('diary_detail_show_detail');

Route::get('/opinion', [HomeController::class, 'opinion_show'])->name('opinion_show');

Route::post('/opinion', [HomeController::class, 'opinion'])->name('opinion');