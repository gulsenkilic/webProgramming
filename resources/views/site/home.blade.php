@extends('site.layouts.index')

@section('content')
    <div class="hero-slider-wrapper bg-dark ">
        <div class="hero-slider owl-carousel dots-over" data-nav="true" data-dots="true" data-autoplay="true">
            <div class="owl-slide d-flex align-items-center bg-overlay bg-overlay-1500"
                style="background-image: url(site/images/homepage/2.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start">
                            <h2 class="display-1 fs-56 mb-4 text-white animated-caption" data-anim="animate__slideInDown"
                                data-anim-delay="500">GULSEN KILIC UNIVERSITY</h2>
                            <p class="lead fs-23 lh-sm mb-7 text-white animated-caption" data-anim="animate__slideInRight"
                                data-anim-delay="1000">Türkiye'nin ve dünyanın <span class="typer text-primary"
                                    data-delay="100" data-words="en köklü, en yaratıcı, en aktif">
                                </span><span class="cursor text-primary" data-owner="typer"></span> üniversitelerinden biri!
                            </p>
                            <div class="animated-caption" data-anim="animate__slideInUp" data-anim-delay="1500"><a href="#"
                                    class="btn btn-lg btn-outline-white rounded-pill">Daha Fazlası</a></div>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/.container -->
            </div>
            <!--/.owl-de -->
            <div class="owl-slide d-flex align-items-center bg-overlay bg-overlay-1500"
                style="background-image: url(site/images/homepage/1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
                            <h2 class="display-1 fs-56 mb-4 text-white animated-caption" data-anim="animate__slideInDown"
                                data-anim-delay="500">Gülşen Kılıç Üniversitesinden üç alanda birincilik başarısı</h2>
                            <p class="lead fs-23 lh-sm mb-7 text-white animated-caption" data-anim="animate__slideInRight"
                                data-anim-delay="1000">Yükseköğretim Kurulu (YÖK), üniversitelerin 2021 yılındaki
                                performanslarını değerlendiren 2021 Yılı Üniversite İzleme ve Değerlendirme Raporu’nu
                                yayımladı.</p>
                            <div class="animated-caption" data-anim="animate__slideInUp" data-anim-delay="1500"><a href="#"
                                    class="btn btn-lg btn-outline-white rounded-pill">Daha Fazlası</a></div>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/.container -->
            </div>
            <!--/.owl-slide -->
            <div class="owl-slide d-flex align-items-center bg-overlay bg-overlay-1500"
                style="background-image: url(site/images/homepage/3.webp);">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start">
                            <h2 class="display-1 fs-56 mb-4 text-white animated-caption" data-anim="animate__slideInDown"
                                data-anim-delay="500">Doğru yerdesiniz.</h2>
                            <p class="lead fs-23 lh-sm mb-7 text-white animated-caption" data-anim="animate__slideInRight"
                                data-anim-delay="1000">Bilgiyi, Eğitimi ve Girişimciliği Destekleyen Eğitim Ekosistemi</p>
                            <div class="animated-caption" data-anim="animate__slideInUp" data-anim-delay="1500"><a href="#"
                                    class="btn btn-lg btn-outline-white rounded-pill">Keşfet</a></div>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/.container -->
            </div>
            <!--/.owl-slide -->
        </div>
        <!--/.hero-slider -->
    </div>
    <!--/.hero-slider-wrapper -->

    <div class="container pt-md-15">
        <div class="row gx-md-8 gy-9 text-center " data-cues="slideInDown" data-group="services">

            <div class=" col-md-6 col-lg-3">
                <div class="icon btn btn-circle btn-lg btn-orange disabled mb-5 text-center"> <i
                        class="uil uil-building"></i>
                </div>
                <h4>Modern Kampüsler!</h4>
                <p class="mb-4">Öğrencilerimizin kendini rahat ve konforlu hissedebileceği modern kampüsler </p>
            </div>
            <!--/column -->
            <div class=" col-md-6 col-lg-3 ">
                <div class="icon btn btn-circle btn-lg btn-orange disabled mb-5"> <i class="uil uil-package"
                        style="justify-content:'center'"></i> </div>
                <h4>Araştırma Üniversitesi</h4>
                <p class="mb-6">YÖK tarafından Gülşen Kılıç Üniversitesi Araştırma Üniversitesi olarak seçildi.
                </p>
            </div>
            <!--/column -->
            <div class=" col-md-6 col-lg-3">
                <div class="icon btn btn-circle btn-lg btn-orange disabled mb-5"> <i class="uil uil-medal"></i></i>
                </div>
                <h4>Birçok Dalda Madalya!</h4>
                <p class="mb-3">Üniversitemiz sanattan spora, spordan mühendislik alanlarına kadar birçok dalda
                    madalya sahibi.</p>
            </div>
            <!--/column -->
            <div class=" col-md-6 col-lg-3">
                <div class="icon btn btn-circle btn-lg btn-orange disabled mb-5"> <i class="uil uil-bolt"></i> </div>
                <h4>Yurtdışında İş İmkanı</h4>
                <p class="mb-3">Öğrencilerimizin ilgi alanları ve yetenekleri doğrultusunda yurdışında iş imkanı
                    sağlıyoruz.</p>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- container -->


    <!-- /section -->


    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
                <div class="col-lg-4 mt-lg-2">
                    <h2 class="display-4 mb-3">Üniversitemizden Son Haberler</h2>
                    <p class="lead fs-lg mb-6 pe-xxl-5"> </p>
                    <a href="#" class="btn btn-soft-primary rounded-pill">Hepsini Gör</a>
                </div>
                <!-- /column -->
                <div class="col-lg-8">
                    <div class="carousel owl-carousel blog grid-view" data-margin="30" data-dots="true" data-autoplay="true"
                        data-nav="true" data-autoplay-timeout="5000"
                        data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                        <div class="item">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="{{ route('news1') }}">
                                        <img src="site/images/homepage/3.jpg" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <div class="post-category text-line">
                                        <a href="#" class="hover" rel="category">Eğitim</a>
                                    </div>
                                    <!-- /.post-category -->
                                    <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                            href="{{ route('news1') }}">
                                            2022-2023 Yılı Erasmus Öğrenci Hareketliliği Başvuruları
                                        </a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Nisan
                                                2021</span>
                                        </li>
                                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.post-footer -->
                            </article>
                            <!-- /article -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="{{ route('news2') }}">
                                        <img src="site/images/homepage/4.webp" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <div class="post-category text-line">
                                        <a href="#" class="hover" rel="category">Üniversite</a>
                                    </div>
                                    <!-- /.post-category -->
                                    <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                            href="{{ route('news2') }}">İstanbul Üniversitesi ile Gülşen Kılıç
                                            Üniversitesi
                                            Arasında
                                            İş Birliği Protokolü İmzalandı</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mart
                                                2021</span>
                                        </li>
                                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.post-footer -->
                            </article>
                            <!-- /article -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="{{ route('news3') }}">
                                        <img src="site/images/homepage/5.jpg" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <div class="post-category text-line">
                                        <a href="#" class="hover" rel="category">Sosyal</a>
                                    </div>
                                    <!-- /.post-category -->
                                    <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                            href="{{ route('news3') }}">Bahçeköy Yerleşkesi'nde Organize Edilen Etkinlikte
                                            Fidanlar
                                            Toprakla Buluştu</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Şubat
                                                2021</span>
                                        </li>
                                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.post-footer -->
                            </article>
                            <!-- /article -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="{{ route('news4') }}">
                                        <img src="site/images/homepage/6.jfif" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <div class="post-category text-line">
                                        <a href="#" class="hover" rel="category">Başarılar</a>
                                    </div>
                                    <!-- /.post-category -->
                                    <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                            href="{{ route('news4') }}">Mühendislik Fakültesi Öğretim Üyelerimiz “Kimya
                                            Bilimine
                                            Yön
                                            Veren 100 Türk” Listesi’nde Yer Aldı</a></h2>
                                </div>
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Haziran
                                                2021</span>
                                        </li>
                                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>2</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.post-footer -->
                            </article>
                            <!-- /article -->
                        </div>
                        <!-- /.item -->
                    </div>
                    <!-- /.owl-carousel -->
                    <!-- /.owl-carousel -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <section class="wrapper bg-light">
        <div class="container py-15 py-md-1">
            <div class="row text-center">
                <div class="col-lg-10 mx-auto position-relative">
                    <div class="position-relative">
                        <div class="shape pale-pink rellax w-18 h-18" data-rellax-speed="1"
                            style="top: 1rem; left: -4.2rem;">
                            <img src="site/images/homepage/hex.svg" class="svg-inject icon-svg w-100 h-100" alt="" />
                        </div>
                        <div class="shape pale-primary rellax w-18 h-18" data-rellax-speed="1"
                            style="bottom: 2rem; right: -3.5rem;">
                            <img src="site/images/homepage/circle.svg" class="svg-inject icon-svg w-100 h-100" alt="" />
                        </div>
                        <video poster="site/images/homepage/movie.jpg" class="player" playsinline controls
                            preload="none">
                            <source src="site/images/homepage/movie.mp4" type="video/mp4">
                            <source src="site/images/homepage/movie.webm" type="video/webm">
                        </video>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->

        </div>
        <!-- /.container -->
    </section>
    <hr class="double my-8" />
    <div class="container">

        <div class="row">
            <table class="table table-hover table-duyurular bg-gradient-reverse-red">
                <tbody>
                    <tr class="">
                        <td colspan="2">
                            <h3 class="text-center"><span class="typer" data-loop="false" data-delay="100"
                                    data-words="ÜNİVERİSTEMİZDEN SON DUYURULAR,ÜNİVERİSTEMİZDEN SON DUYURULAR,ÜNİVERİSTEMİZDEN SON DUYURULAR,ÜNİVERİSTEMİZDEN SON DUYURULAR">
                                </span><span class="cursor text-primary" data-owner="typer"></span></h3>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="text-white text-center bg-orange">Pazartesi</td>
                                    </tr>
                                    <tr>
                                        <td> 18 Nisan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td><a href="{{ route('notice1') }}">
                                <h5>2022 Yaz Okulu Yurt Ücretleri</h5>
                            </a></td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="text-white text-center bg-orange">Çarşamba</td>
                                    </tr>
                                    <tr>
                                        <td> 30 Mart</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td><a href="{{ route('notice2') }}">
                                <h5>TÜBİTAK 2022 Yılı Üniversite Öğrencisi Stajyer Alımı</h5>
                            </a></td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="text-white text-center bg-orange">Pazar</td>
                                    </tr>
                                    <tr>
                                        <td> 23 Ocak</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td><a href="{{ route('notice3') }}">
                                <h6>Olumsuz Hava Koşulları Nedeniyle 24-25 Ocak 2022 Tarihlerinde Eğitime Ara Verilmiştir
                                </h6>
                            </a></td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="text-white text-center bg-orange">Cuma</td>
                                    </tr>
                                    <tr>
                                        <td> 21 Ocak</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td><a href="{{ route('notice4') }}">
                                <h5>2021-2022 Bahar Yarıyılı Kurum İçi Yatay Geçiş Başvuru Kılavuzu</h5>
                            </a></td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="text-white text-center bg-orange">Salı</td>
                                    </tr>
                                    <tr>
                                        <td> 11 Ocak</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td><a href="{{ route('notice5') }}">
                                <h5>Siber Güvenlik Girişimlerine Özel Hızlandırma Programı Cybercube'un Başvuruları Devam
                                    Ediyor!</h5>
                            </a></td>
                    </tr>
                </tbody>
            </table>
            <!--div class="col-12 col-md-6">
                                <table class="table table-hover table-duyurular">
                                    <tbody>
                                        <tr>
                                            <td colspan="2"><h3 class="text-center">ÜNİVERİSTEMİZİN SON ETKİNLİKLERİ</h3></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="site/images/homepage/7.jfif" alt="" width="100px">
                                            </td>
                                            <td><a href="#"><h5>IWA DIPCON 2022 4th Regional Conference on Diffuse Pollution & Eutrophication</h5></a>
                                                <i class="uil uil-calendar-alt"></i><span>24 Ekim 2022</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="site/images/homepage/8.jfif" alt="" width="100px">
                                            </td>
                                            <td><a href="#"><h5>
                                                VII. İstanbul Hipofiz Sempozyumu</h5></a>
                                                <i class="uil uil-calendar-alt"></i><span>115 Nisan 2022</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="site/images/homepage/9.jfif" alt="" width="100px">
                                            </td>
                                            <td><a href="#"><h6>25. Makine & Teknoloji Günleri</h6></a>
                                                <i class="uil uil-calendar-alt"></i><span>12 Nisan 2022 </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="site/images/homepage/10.jfif" alt="" width="100px">
                                            </td>
                                            <td><a href="#"><h5>13. Gelişim Girişim Günleri</h5></a>
                                                <i class="uil uil-calendar-alt"></i><span>18 Mart 2022</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="site/images/homepage/11.jfif" alt="" width="100px">
                                            </td>
                                            <td><a href="#"><h5>Mühendislikte Topuk Sesleri '22</h5></a>
                                                <i class="uil uil-calendar-alt"></i><span>15 Mart 2022</span>
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div-->
        </div>
    </div>
    <!-- div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <table class="table table-hover table-duyurular">
                                    <tbody>
                                        <tr>
                                            <td colspan="2"><h3 class="text-center">ÜNİVERİSTEMİZDEN SON DUYURULAR</h3></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                                <table>
                                                    <tbody>
                                                        <tr><td style="background-color: black" class="text-white text-center">Pazartesi</td></tr>
                                                        <tr><td> 18 Nisan</td></tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td><a href="#"><h5>2022 Yaz Okulu Yurt Ücretleri</h5></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table>
                                                    <tbody>
                                                        <tr><td style="background-color: black" class="text-white text-center">Çarşamba</td></tr>
                                                        <tr><td> 30 Mart</td></tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td><a href="#"><h5>TÜBİTAK 2022 Yılı Üniversite Öğrencisi Stajyer Alımı</h5></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table>
                                                    <tbody>
                                                        <tr><td style="background-color: black" class="text-white text-center">Pazar</td></tr>
                                                        <tr><td> 23 Ocak</td></tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td><a href="#"><h6>Olumsuz Hava Koşulları Nedeniyle 24-25 Ocak 2022 Tarihlerinde Eğitime Ara Verilmiştir</h6></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table>
                                                    <tbody>
                                                        <tr><td style="background-color: black" class="text-white text-center">Cuma</td></tr>
                                                        <tr><td> 21 Ocak</td></tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td><a href="#"><h5>2021-2022 Bahar Yarıyılı Kurum İçi Yatay Geçiş Başvuru Kılavuzu</h5></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table>
                                                    <tbody>
                                                        <tr><td style="background-color: black" class="text-white text-center">Salı</td></tr>
                                                        <tr><td> 11 Ocak</td></tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td><a href="#"><h5>Siber Güvenlik Girişimlerine Özel Hızlandırma Programı Cybercube'un Başvuruları Devam Ediyor!</h5></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div >
                            
                                <table class="table table-hover table-duyurular">
                                    <tbody>
                                        <tr>
                                            <td colspan="2"><h3 class="text-center">ÜNİVERİSTEMİZİN SON ETKİNLİKLERİ</h3></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="site/images/homepage/7.jfif" alt="" width="150px">
                                            </td>
                                            <td><a href="#"><h5>IWA DIPCON 2022 4th Regional Conference on Diffuse Pollution & Eutrophication</h5></a>
                                                <i class="uil uil-calendar-alt"></i><span>24 Ekim 2022</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="site/images/homepage/8.jfif" alt="" width="150px">
                                            </td>
                                            <td><a href="#"><h5>
                                                VII. İstanbul Hipofiz Sempozyumu</h5></a>
                                                <i class="uil uil-calendar-alt"></i><span>115 Nisan 2022</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="site/images/homepage/9.jfif" alt="" width="150px">
                                            </td>
                                            <td><a href="#"><h6>25. Makine & Teknoloji Günleri</h6></a>
                                                <i class="uil uil-calendar-alt"></i><span>12 Nisan 2022 </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="site/images/homepage/10.jfif" alt="" width="150px">
                                            </td>
                                            <td><a href="#"><h5>13. Gelişim Girişim Günleri</h5></a>
                                                <i class="uil uil-calendar-alt"></i><span>18 Mart 2022</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="site/images/homepage/11.jfif" alt="" width="150px">
                                            </td>
                                            <td><a href="#"><h5>Mühendislikte Topuk Sesleri '22</h5></a>
                                                <i class="uil uil-calendar-alt"></i><span>15 Mart 2022</span>
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
                           
                        </div>
                    </div -->
    <section id="snippet-1" class="wrapper bg-light wrapper-border">
        <div class="container pt-md-10 pb-5 pb-md-1">
            <h2 class="display-4 mb-3 text-center">ETKİNLİK TAKVİMİ</h2>
            <div class="carousel owl-carousel blog grid-view" data-margin="30" data-dots="true" data-autoplay="true"
                data-nav="true" data-autoplay-timeout="5000"
                data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                <div class="item">
                    <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="{{ route('attraction1') }}">
                                <img src="site/images/homepage/7.jfif" alt="" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">IWA DIPCON 2022 4th Regional Conference on Diffuse Pollution &
                                    Eutrophication</h5>
                            </figcaption>
                        </figure>
                        <!--div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover" rel="category">Eğitim</a>
                                            </div>
                                         
                                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{ route('attraction1') }}">
                                                IWA DIPCON 2022 4th Regional Conference on Diffuse Pollution & Eutrophication
                                           </a></h2>
                                        </div-->
                        <!-- /.post-header -->
                        <div class="post-footer">
                            <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Nisan 2021</span>
                                </li>
                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                            </ul>
                            <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                    </article>
                    <!-- /article -->
                </div>
                <!-- /.item -->
                <div class="item">
                    <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="{{ route('attraction2') }}">
                                <img src="site/images/homepage/8.jfif" alt="" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">VII. İstanbul Hipofiz Sempozyumu</h5>
                            </figcaption>
                        </figure>
                        <!--div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover" rel="category">Üniversite</a>
                                            </div>
                                         
                                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{ route('attraction2') }}">VII. İstanbul Hipofiz Sempozyumu</a></h2>
                                        </div -->
                        <!-- /.post-header -->
                        <div class="post-footer">
                            <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mart 2021</span>
                                </li>
                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li>
                            </ul>
                            <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                    </article>
                    <!-- /article -->
                </div>
                <!-- /.item -->
                <div class="item">
                    <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="{{ route('attraction3') }}">
                                <img src="site/images/homepage/9.jfif" alt="" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">25. Makine & Teknoloji Günleri</h5>
                            </figcaption>
                        </figure>
                        <!--div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover" rel="category">Sosyal</a>
                                            </div>
                                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                    href="{{ route('attraction3') }}">25. Makine & Teknoloji Günleri</a></h2>
                                        </div-->
                        <!-- /.post-header -->
                        <div class="post-footer">
                            <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Şubat 2021</span>
                                </li>
                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a></li>
                            </ul>
                            <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                    </article>
                    <!-- /article -->
                </div>
                <!-- /.item -->
                <div class="item">
                    <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="{{ route('attraction4') }}">
                                <img src="site/images/homepage/10.jfif" alt="" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">13. Gelişim Girişim Günleri</h5>
                            </figcaption>
                        </figure>
                        <!--div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover" rel="category">Başarılar</a>
                                            </div>
                                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{ route('attraction4') }}">13. Gelişim Girişim Günleri</a></h2>
                                        </div-->
                        <div class="post-footer">
                            <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Haziran 2021</span>
                                </li>
                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>2</a></li>
                            </ul>
                            <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                    </article>
                    <!-- /article -->
                </div>
                <!-- /.item -->
                <div class="item">
                    <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="{{ route('attraction5') }}">
                                <img src="site/images/homepage/11.jfif" alt="" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Mühendislikte Topuk Sesleri '22</h5>
                            </figcaption>
                        </figure>
                        <!--div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover" rel="category">Başarılar</a>
                                            </div>
                                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{ route('attraction5') }}">Mühendislikte Topuk Sesleri '22</a></h2>
                                        </div-->
                        <div class="post-footer">
                            <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Haziran 2021</span>
                                </li>
                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>2</a></li>
                            </ul>
                            <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                    </article>
                    <!-- /article -->
                </div>
                <!-- /.item -->
            </div>
            <!-- /.owl-carousel -->
        </div>
        <!-- /.container -->
        <div class="container">
            <section class="wrapper bg-light">
                <div class="container py-14 py-md-14">
                    <div class="row">
                        <div class="col-xl-10 mx-auto">
                            <div class="row align-items-center counter-wrapper gy-6 text-center">
                                <div class="col-md-3">
                                    <img src="site/images/about/check.svg"
                                        class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                                    <h3 class="counter">7518</h3>
                                    <p>Öğrenci</p>
                                </div>
                                <!--/column -->
                                <div class="col-md-3">
                                    <img src="site/images/about/user.svg"
                                        class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                                    <h3 class="counter">3472</h3>
                                    <p>Çalışan</p>
                                </div>
                                <!--/column -->
                                <div class="col-md-3">
                                    <img src="site/images/about/briefcase-2.svg"
                                        class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                                    <h3 class="counter">21848</h3>
                                    <p>Mezun</p>
                                </div>
                                <!--/column -->
                                <div class="col-md-3">
                                    <img src="site/images/about/award-2.svg"
                                        class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                                    <h3 class="counter">403</h3>
                                    <p>Ödül</p>
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /section -->
            <!--hr class="double my-2" />

                <h1 class="text-center display-4 mb-3"><span class="underline-3 style-1 yellow"><i
                            class="uil uil-location-pin-alt"></i> BİZ NERDEYİZ?</span></h1>
                <div class="row mb-10">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12037.314669014475!2d28.99603911954346!3d41.0399411602627!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdcd33e38cf3b830b!2zRG9sbWFiYWjDp2UgU2FyYXnEsQ!5e0!3m2!1str!2str!4v1650873696018!5m2!1str!2str"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div-->
        </div>

    </section>
@endsection
