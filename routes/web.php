<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\PagesController;
use App\Http\Controllers\Admin\AdminController;

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

Route::get('haberDetay/{slug}', [PagesController::class, 'haberDetay'])->name('haberDetayPage');
Route::get('duyuruDetay/{slug}', [PagesController::class, 'duyuruDetay'])->name('duyuruDetayPage');
Route::get('etkinlikDetay/{slug}', [PagesController::class, 'etkinlikDetay'])->name('etkinlikDetayPage');


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
Route::get('/yabanci-diller-meslek-yuksekokulu',[PagesController::class, 'yabanci'])->name('yabanci');


Route::get('/yabanci-diller-meslek-yuksekokulu/akademik-kadro',[PagesController::class, 'yabanciAkademik'])->name('yabanciAkademik');
Route::get('/yabanci-diller-meslek-yuksekokulu/ydyo-hakk??nda',[PagesController::class, 'yabanciAbout'])->name('yabanciAbout');
Route::get('/yabanci-diller-meslek-yuksekokulu/duyurular',[PagesController::class, 'yabanciDuyurular'])->name('yabanciDuyurular');

Route::get('/yabanci-diller-meslek-yuksekokulu/ogrenci',[PagesController::class, 'yabanciOgrenci'])->name('yabanciOgrenci');


Route::get('/muhensilik-fakultesi',[PagesController::class, 'muh'])->name('muh');

Route::get('/muhensilik-fakultesi/fakulte-hakk??nda',[PagesController::class, 'muhAbout'])->name('muhAbout');
Route::get('/muhensilik-fakultesi/akademik-kadro',[PagesController::class, 'muhKadro'])->name('muhKadro');
Route::get('/muhensilik-fakultesi/bolumler',[PagesController::class, 'muhBolumler'])->name('muhBolumler');
Route::get('/muhensilik-fakultesi/duyurular',[PagesController::class, 'muhDuyuru'])->name('muhDuyuru');

Route::get('/muhensilik-fakultesi/bolumler/bilgisayar-muhendisligi',[PagesController::class, 'bilgisayar'])->name('bilgisayar');
Route::get('/muhensilik-fakultesi/bolumler/bilgisayar-muhendisligi/akademik-kadro',[PagesController::class, 'bilgisayarKadro'])->name('bilgisayarKadro');
Route::get('/muhensilik-fakultesi/bolumler/bilgisayar-muhendisligi/duyurular',[PagesController::class, 'bilgisayarDuyuru'])->name('bilgisayarDuyuru');
Route::get('/muhensilik-fakultesi/bolumler/bilgisayar-muhendisligi/iletisim',[PagesController::class, 'bililetisim'])->name('bililetisim');

Route::get('/iletisim',[PagesController::class, 'iletisim'])->name('iletisim');
Route::get('/yerleskeler',[PagesController::class, 'yerleskeler'])->name('yerleskeler');


//ADM??N
Route::middleware(['IsLogin'])->group(function () { 
    Route::get('unv-admin', [AdminController::class, 'redirectToLogin'])->name('adminRedirectToLogin');
    Route::get('unv-admin/login', [AdminController::class, 'login'])->name('adminLoginPage');
    Route::post('unv-admin/login/process', [AdminController::class, 'loginProcess'])->name('adminLoginProcess');
});
Route::middleware(['IsAdmin'])->group(function () {
    Route::get('unv-admin/logout', [AdminController::class, 'logout'])->name('adminLogoutPage');
    Route::get('unv-admin/dashboard', [AdminController::class, 'dashboard'])->name('adminDashboardPage');
    Route::get('unv-admin/yuksek-okullar', [AdminController::class, 'okullar'])->name('okullar');
    Route::get('unv-admin/fakulteler', [AdminController::class, 'fakulteler'])->name('fakulteler');
    Route::get('unv-admin/enstituler', [AdminController::class, 'enstituler'])->name('enstituler');

    Route::get('unv-admin/duyurular', [AdminController::class, 'duyurular'])->name('duyurular');
    Route::get('unv-admin/duyuru-ekle', [AdminController::class, 'duyuruEkle'])->name('duyuruEkle');
    Route::post('unv-admin/duyuru-ekle/process', [AdminController::class, 'processDuyuruEkle'])->name('processDuyuruEkle');
    Route::get('unv-admin/duyuru/edit/{id}', [AdminController::class, 'duyuruEdit'])->name('duyuruEdit');
    Route::post('unv-admin/duyuru/edit/process', [AdminController::class, 'processDuyuruEdit'])->name('processDuyuruEdit');
    Route::get('unv-admin/duyuru/detay/{id}', [AdminController::class, 'duyuruDetay'])->name('duyuruDetay');

    Route::get('unv-admin/haberler', [AdminController::class, 'haberler'])->name('haberler');
    Route::get('unv-admin/haberler/ekle', [AdminController::class, 'haberEkle'])->name('haberEkle');
    Route::post('unv-admin/haberler/ekle/process', [AdminController::class, 'processHaberEkle'])->name('processHaberEkle');
    Route::get('unv-admin/haberler/edit/{id}', [AdminController::class, 'haberEdit'])->name('haberEdit');
    Route::post('unv-admin/haberler/edit/process', [AdminController::class, 'processHaberEdit'])->name('processHaberEdit');
    Route::get('unv-admin/haberler/detay/haber/{id}', [AdminController::class, 'haberDetay'])->name('haberDetay');


    Route::get('unv-admin/etkinlikler', [AdminController::class, 'etkinlikler'])->name('etkinlikler');
    Route::get('unv-admin/etkinlikler/ekle', [AdminController::class, 'etkinlikEkle'])->name('etkinlikEkle');
    Route::post('unv-admin/etkinlikler/ekle/process', [AdminController::class, 'processEtkinlikEkle'])->name('processEtkinlikEkle');
    Route::get('unv-admin/etkinlikler/edit/{id}', [AdminController::class, 'etkinlikEdit'])->name('etkinlikEdit');
    Route::post('unv-admin/etkinlikler/edit/process', [AdminController::class, 'processEtkinlikEdit'])->name('processEtkinlikEdit');
    Route::get('unv-admin/etkinlikler/detay/etkinlik/{id}', [AdminController::class, 'etkinlikDetay'])->name('etkinlikDetay');


    Route::get('unv-admin/akademik-kadro', [AdminController::class, 'akademik'])->name('akademikPanel');
    Route::get('unv-admin/akademik-kadro/ekle', [AdminController::class, 'akademikEkle'])->name('akademikEkle');
    Route::post('unv-admin/akademik-kadro/ekle/process', [AdminController::class, 'processAkademikEkle'])->name('processAkademikEkle');
    Route::get('unv-admin/akademik-kadro/edit/{id}', [AdminController::class, 'akademikEdit'])->name('akademikEdit');
    Route::post('unv-admin/akademik-kadro/edit/process', [AdminController::class, 'processAkademikEdit'])->name('processAkademikEdit');
    Route::get('unv-admin/akademik-kadro/sil/{id}', [AdminController::class, 'personelSil'])->name('personelSil');



    Route::get('unv-admin/admin-list', [AdminController::class, 'adminList'])->name('adminList');
    Route::get('unv-admin/admin-list/ekle', [AdminController::class, 'adminEkle'])->name('adminEkle');
    Route::post('unv-admin/admin-list/ekle/process', [AdminController::class, 'adminEkleProcess'])->name('adminEkleProcess');
    Route::get('unv-admin/admin-list/edit/{id}', [AdminController::class, 'adminEdit'])->name('adminEdit');
    Route::post('unv-admin/admin-list/edit/process', [AdminController::class, 'adminEditProcess'])->name('adminEditProcess');


    Route::get('unv-admin/yuksek-okullar/yabanci-diller-meslek-y??ksek-okulu/detay', [AdminController::class, 'okullarDetay'])->name('okullarDetay');
    Route::get('unv-admin/yuksek-okullar/yabanci-diller-meslek-y??ksek-okulu/haberler', [AdminController::class, 'okullarHaber'])->name('okullarHaber');
    
    Route::get('unv-admin/yuksek-okullar/yabanci-diller-meslek-y??ksek-okulu/duyurular', [AdminController::class, 'okullarDuyuru'])->name('okullarDuyuru');
    Route::get('unv-admin/yuksek-okullar/yabanci-diller-meslek-y??ksek-okulu/akademik-kadro', [AdminController::class, 'okullarAkademik'])->name('okullarAkademik');
    Route::get('unv-admin/fak??lteler/m??hendislik-fak??ltesi/detay', [AdminController::class, 'fakulteDetay'])->name('fakulteDetay');
    Route::get('unv-admin/fak??lteler/m??hendislik-fak??ltesi/bolumler', [AdminController::class, 'fakulteBolumler'])->name('fakulteBolumler');
    Route::get('unv-admin/fak??lteler/m??hendislik-fak??ltesi/bolumler/bilgisayar-m??hendisligi-bolumu/detay', [AdminController::class, 'fakulteBolumlerBilMuh'])->name('fakulteBolumlerBilMuh');
    
});


