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

Route::get('/notice1', [PagesController::class, 'notice1'])->name('notice1');
Route::get('/notice2', [PagesController::class, 'notice2'])->name('notice2');
Route::get('/notice3', [PagesController::class, 'notice3'])->name('notice3');
Route::get('/notice4', [PagesController::class, 'notice4'])->name('notice4');
Route::get('/notice5', [PagesController::class, 'notice5'])->name('notice5');

Route::get('/attraction1', [PagesController::class, 'attraction1'])->name('attraction1');
Route::get('/attraction2', [PagesController::class, 'attraction2'])->name('attraction2');
Route::get('/attraction3', [PagesController::class, 'attraction3'])->name('attraction3');
Route::get('/attraction4', [PagesController::class, 'attraction4'])->name('attraction4');
Route::get('/attraction5', [PagesController::class, 'attraction5'])->name('attraction5');

Route::get('/about',[PagesController::class, 'about'])->name('about');
Route::get('/vizyon-misyon',[PagesController::class, 'about2'])->name('about2');
Route::get('/adminstartion',[PagesController::class, 'about3'])->name('about3');

Route::get('/prospective',[PagesController::class, 'prospectiveSt'])->name('prospectiveSt');
Route::get('/cap-yandal',[PagesController::class, 'capyandal'])->name('cap-yandal');
Route::get('/erasmus',[PagesController::class, 'erasmus'])->name('erasmus');
Route::get('/mevlana',[PagesController::class, 'mevlana'])->name('mevlana');
Route::get('/farabi',[PagesController::class, 'farabi'])->name('farabi');

Route::get('/akademik',[PagesController::class, 'akademik'])->name('akademik');

