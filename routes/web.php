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
Route::get('/yabanci-diller-meslek-yuksekokulu',[PagesController::class, 'yabanci'])->name('yabanci');

Route::get('/yabanci-diller-meslek-yuksekokulu/news1',[PagesController::class, 'yabanciNew1'])->name('yabanciNew1');
Route::get('/yabanci-diller-meslek-yuksekokulu/news2',[PagesController::class, 'yabanciNew2'])->name('yabanciNew2');
Route::get('/yabanci-diller-meslek-yuksekokulu/news3',[PagesController::class, 'yabanciNew3'])->name('yabanciNew3');
Route::get('/yabanci-diller-meslek-yuksekokulu/news4',[PagesController::class, 'yabanciNew4'])->name('yabanciNew4');
Route::get('/yabanci-diller-meslek-yuksekokulu/akademik-kadro',[PagesController::class, 'yabanciAkademik'])->name('yabanciAkademik');
Route::get('/yabanci-diller-meslek-yuksekokulu/ydyo-hakkında',[PagesController::class, 'yabanciAbout'])->name('yabanciAbout');
Route::get('/yabanci-diller-meslek-yuksekokulu/duyurular',[PagesController::class, 'yabanciDuyurular'])->name('yabanciDuyurular');
Route::get('/yabanci-diller-meslek-yuksekokulu/duyurular/duyuru1',[PagesController::class, 'yabanciDuyurular1'])->name('yabanciDuyurular1');
Route::get('/yabanci-diller-meslek-yuksekokulu/duyurular/duyuru2',[PagesController::class, 'yabanciDuyurular2'])->name('yabanciDuyurular2');
Route::get('/yabanci-diller-meslek-yuksekokulu/duyurular/duyuru3',[PagesController::class, 'yabanciDuyurular3'])->name('yabanciDuyurular3');
Route::get('/yabanci-diller-meslek-yuksekokulu/ogrenci',[PagesController::class, 'yabanciOgrenci'])->name('yabanciOgrenci');


Route::get('/muhensilik-fakultesi',[PagesController::class, 'muh'])->name('muh');
Route::get('/muhensilik-fakultesi/new1',[PagesController::class, 'muhNew1'])->name('muh-new1');
Route::get('/muhensilik-fakultesi/new2',[PagesController::class, 'muhNew2'])->name('muh-new2');
Route::get('/muhensilik-fakultesi/fakulte-hakkında',[PagesController::class, 'muhAbout'])->name('muhAbout');
Route::get('/muhensilik-fakultesi/akademik-kadro',[PagesController::class, 'muhKadro'])->name('muhKadro');
Route::get('/muhensilik-fakultesi/bolumler',[PagesController::class, 'muhBolumler'])->name('muhBolumler');
Route::get('/muhensilik-fakultesi/duyurular',[PagesController::class, 'muhDuyuru'])->name('muhDuyuru');
Route::get('/muhensilik-fakultesi/duyurular/duyurular/duyuru1',[PagesController::class, 'muhDuyurular1'])->name('muhDuyurular1');
Route::get('/muhensilik-fakultesi/duyurular/duyurular/duyuru2',[PagesController::class, 'muhDuyurular2'])->name('muhDuyurular2');
Route::get('/muhensilik-fakultesi/duyurular/duyurular/duyuru3',[PagesController::class, 'muhDuyurular3'])->name('muhDuyurular3');

Route::get('/muhensilik-fakultesi/bolumler/bilgisayar-muhendisligi',[PagesController::class, 'bilgisayar'])->name('bilgisayar');
Route::get('/muhensilik-fakultesi/bolumler/bilgisayar-muhendisligi/new1',[PagesController::class, 'bilgisayarNew1'])->name('bilgisayarNew1');
Route::get('/muhensilik-fakultesi/bolumler/bilgisayar-muhendisligi/new2',[PagesController::class, 'bilgisayarNew2'])->name('bilgisayarNew2');
Route::get('/muhensilik-fakultesi/bolumler/bilgisayar-muhendisligi/new3',[PagesController::class, 'bilgisayarNew3'])->name('bilgisayarNew3');
Route::get('/muhensilik-fakultesi/bolumler/bilgisayar-muhendisligi/akademik-kadro',[PagesController::class, 'bilgisayarKadro'])->name('bilgisayarKadro');
Route::get('/muhensilik-fakultesi/bolumler/bilgisayar-muhendisligi/duyurular',[PagesController::class, 'bilgisayarDuyuru'])->name('bilgisayarDuyuru');
Route::get('/muhensilik-fakultesi/bolumler/bilgisayar-muhendisligi/duyurular/duyuru1',[PagesController::class, 'bilDuyurular1'])->name('bilDuyurular1');
Route::get('/muhensilik-fakultesi/bolumler/bilgisayar-muhendisligi/duyurular/duyuru2',[PagesController::class, 'bilDuyurular2'])->name('bilDuyurular2');
Route::get('/muhensilik-fakultesi/bolumler/bilgisayar-muhendisligi/duyurular/duyuru3',[PagesController::class, 'bilDuyurular3'])->name('bilDuyurular3');
Route::get('/muhensilik-fakultesi/bolumler/bilgisayar-muhendisligi/iletisim',[PagesController::class, 'bililetisim'])->name('bililetisim');

//ADMİN
//Route::middleware(['IsLogin'])->group(function () { //eğer login yapmşşsa loginle devam eder
    Route::get('unv-admin', [AdminController::class, 'redirectToLogin'])->name('adminRedirectToLogin');
    Route::get('unv-admin/login', [AdminController::class, 'login'])->name('adminLoginPage');
    //Route::post('unv-admin/login/process', [AdminController::class, 'loginProcess'])->name('adminLoginProcess');//BACKEND İLE KONTRL EDİLİR
//});
//Route::middleware(['IsAdmin'])->group(function () {
    Route::get('unv-admin/logout', [AdminController::class, 'logout'])->name('adminLogoutPage');
    Route::get('unv-admin/dashboard', [AdminController::class, 'dashboard'])->name('adminDashboardPage');
    /*Route::get('unv-admin/passes', [AdminController::class, 'passes'])->name('adminPassesPage');
    Route::get('unv-admin/attractions', [AdminController::class, 'attractions'])->name('adminAttractionsPage');
    Route::get('unv-admin/bookings', [AdminController::class, 'bookings'])->name('adminBookingsPage');
    Route::get('unv-admin/reservations', [AdminController::class, 'reservations'])->name('adminReservationsPage');
    Route::get('unv-admin/payments', [AdminController::class, 'payments'])->name('adminPaymentsPage');
    Route::get('unv-admin/pass/add', [AdminController::class, 'redirectToPass'])->name('adminPassAddPage');
    Route::post('unv-admin/pass/add/process', [AdminController::class, 'addPass'])->name('adminPassAddProcessPage');
    Route::get('unv-admin/pass/edit', [AdminController::class, 'redirectToPassEdit'])->name('adminPassEditPage');
    Route::post('unv-admin/pass/edit/process', [AdminController::class, 'editPass'])->name('adminPassEditProcessPage');
    Route::get('unv-admin/attraction/add', [AdminController::class, 'redirectToAttraction'])->name('adminAttractionAddPage');
    Route::post('unv-admin/attraction/add/process', [AdminController::class, 'addAttraction'])->name('adminAttractionAddProcessPage');
    Route::get('unv-admin/attraction/edit', [AdminController::class, 'redirectToAttractionEdit'])->name('adminAttractionEditPage');
    Route::post('unv-admin/attraction/edit/process', [AdminController::class, 'editAttraction'])->name('adminAttractionEditProcessPage');
    Route::get('unv-admin/bookings', [AdminController::class, 'bookings'])->name('adminBookingsPage');
    Route::get('unv-admin/booking/detail', [AdminController::class, 'redirectToBookingDetail'])->name('adminBookingDetailPage');
    Route::get('unv-admin/booking/edit', [AdminController::class, 'redirectToBookingEdit'])->name('adminBookingEditPage');
    Route::post('unv-admin/booking/edit/process', [AdminController::class, 'editBooking'])->name('adminBookingEditProcessPage');
    Route::post('unv-admin/bookings/detail/reservation/edit', [AdminController::class, 'editReservation'])->name('adminBookingDetailReservation');
    Route::get('unv-admin/reservation/edit', [AdminController::class, 'editReservationInfos'])->name('adminReservationEditPage');
    Route::post('unv-admin/reservation/edit/process', [AdminController::class, 'updateReservation'])->name('adminReservationUpdate');
    Route::get('unv-admin/adminlist', [AdminController::class, 'listAdmins'])->name('adminListPage');
    Route::get('unv-admin/admin/add', [AdminController::class, 'redirectToAddAdmin'])->name('adminAddAdminPage');
    Route::post('unv-admin/admin/add/process', [AdminController::class, 'addAdmin'])->name('adminAddProcessPage');
    Route::get('unv-admin/admin/edit', [AdminController::class, 'redirectToEditAdmin'])->name('adminEditAdminPage');
    Route::post('unv-admin/admin/edit/process', [AdminController::class, 'editAdmin'])->name('adminEditAdminProcessPage');
    Route::get('unv-admin/bookings/detail/qrandpnr', [AdminController::class, 'redirectToQrAndPnr'])->name('adminBookingDetailQrAndPnr');
    Route::get('unv-admin/payments', [AdminController::class, 'payments'])->name('adminPaymentsPage');
    Route::get('unv-admin/reviews', [AdminController::class, 'reviews'])->name('adminReviewsPage');
    Route::get('unv-admin/review/edit', [AdminController::class, 'redirectToEditReview'])->name('adminReviewEditPage');
    Route::post('unv-admin/review/edit/process', [AdminController::class, 'editReview'])->name('adminReviewEditProcessPage');
    Route::get('unv-admin/discounts', [AdminController::class, 'discounts'])->name('adminDiscountsPage');
    Route::get('unv-admin/discount/edit', [AdminController::class, 'redirectToEditDiscount'])->name('adminDiscountEditPage');
    Route::post('unv-admin/discount/edit/process', [AdminController::class, 'editDiscount'])->name('adminDiscountEditProcessPage');
    Route::get('unv-admin/discount/add', [AdminController::class, 'redirectToAddDiscount'])->name('adminDiscountAddPage');
    Route::post('unv-admin/discount/add/process', [AdminController::class, 'addDiscount'])->name('adminDiscountAddProcessPage');

    Route::get('unv-admin/blogs', [AdminController::class, 'blogs'])->name('adminBlogPage');
    Route::get('unv-admin/blog/delete/{id}', [AdminController::class, 'deleteBlog'])->name('deleteBlog');
    Route::get('unv-admin/blog/edit/{id}', [AdminController::class, 'editBlog'])->name('editBlog');
    Route::post('unv-admin/blog/process', [AdminController::class, 'processBlog'])->name('processBlog');*/
//});


