<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\PagesController;

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

Route::get('/', [PagesController::class, 'index'])->name('homepage');
Route::get('/news1', [PagesController::class, 'news1'])->name('news1');
Route::get('/news2', [PagesController::class, 'news2'])->name('news2');
Route::get('/news3', [PagesController::class, 'news3'])->name('news3');
Route::get('/news4', [PagesController::class, 'news4'])->name('news4');

