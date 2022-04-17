@extends('site.layouts.index')
@section('content')
    <div class="hero-slider-wrapper bg-dark ">
        <div class="hero-slider owl-carousel dots-over" data-nav="true" data-dots="true" data-autoplay="true">
            <div class="owl-slide d-flex align-items-center bg-overlay bg-overlay-1500"
                style="background-image: url(site/images/homepage/1.jpg);">
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
                style="background-image: url(site/images/homepage/2.jpg);">
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

    <div class="container pt-md-10">
        <div class="row gx-md-8 gy-8 text-center " data-cues="slideInDown" data-group="services">

            <div class=" col-md-6 col-lg-3">
                <div class="icon btn btn-circle btn-lg btn-ash disabled mb-5 text-center"> <i class="uil uil-building"></i>
                </div>
                <h4>Modern Kampüsler!</h4>
                <p class="mb-4">Öğrencilerimizin kendini rahat ve konforlu hissedebileceği modern kampüsler </p>
            </div>
            <!--/column -->
            <div class=" col-md-6 col-lg-3 ">
                <div class="icon btn btn-circle btn-lg btn-ash disabled mb-5"> <i class="uil uil-package"
                        style="justify-content:'center'"></i> </div>
                <h4>Araştırma Üniversitesi</h4>
                <p class="mb-6">YÖK tarafından Gülşen Kılıç Üniversitesi Araştırma Üniversitesi olarak seçildi.
                </p>
            </div>
            <!--/column -->
            <div class=" col-md-6 col-lg-3">
                <div class="icon btn btn-circle btn-lg btn-ash disabled mb-5"> <i class="uil uil-medal"></i></i>
                </div>
                <h4>Birçok Dalda Madalya!</h4>
                <p class="mb-3">Üniversitemiz sanattan spora, spordan mühendislik alanlarına kadar birçok dalda
                    madalya sahibi.</p>
            </div>
            <!--/column -->
            <div class=" col-md-6 col-lg-3">
                <div class="icon btn btn-circle btn-lg btn-ash disabled mb-5"> <i class="uil uil-bolt"></i> </div>
                <h4>Yurtdışında İş İmkanı</h4>
                <p class="mb-3">Öğrencilerimizin ilgi alanları ve yetenekleri doğrultusunda yurdışında iş imkanı
                    sağlıyoruz.</p>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- container -->


    <section id="snippet-1" class="wrapper bg-light wrapper-border">
        <div class="container pt-md-10 pb-13 pb-md-15">
            <h2 class="display-4 mb-3 text-center">Üniversitemizden Son Haberler</h2>
            <!-- p class="lead fs-lg mb-10 text-center px-md-16 px-lg-21 px-xl-0">Here are the latest company news from our blog
                that got the most attention.</p -->
            <div class="carousel owl-carousel blog grid-view" data-margin="30" data-dots="true" data-autoplay="true"  data-nav="true"
                data-autoplay-timeout="5000"
                data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                <div class="item">
                    <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                                    src="site/images/homepage/3.jpg" alt="" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                        </figure>
                        <div class="post-header">
                            <div class="post-category text-line">
                                <a href="#" class="hover" rel="category">Eğitim</a>
                            </div>
                            <!-- /.post-category -->
                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="../../blog-post.html">
                              2022-2023 Yılı Erasmus Öğrenci Hareketliliği Başvuruları 
                           </a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                            <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2021</span></li>
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
                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                                    src="site/images/homepage/4.webp" alt="" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                        </figure>
                        <div class="post-header">
                            <div class="post-category text-line">
                                <a href="#" class="hover" rel="category">Üniversite</a>
                            </div>
                            <!-- /.post-category -->
                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="../../blog-post.html">İstanbul Üniversitesi ile Gülşen Kılıç Üniversitesi Arasında İş Birliği Protokolü İmzalandı</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                            <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2021</span></li>
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
                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                                    src="site/images/homepage/5.jpg" alt="" /></a>
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
                                    href="site/images/homepage/2.jpg">Bahçeköy Yerleşkesi'nde Organize Edilen Etkinlikte Fidanlar Toprakla Buluştu</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                            <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2021</span></li>
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
                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                                    src="site/images/homepage/6.jfif" alt="" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                        </figure>
                        <div class="post-header">
                            <div class="post-category text-line">
                                <a href="#" class="hover" rel="category">Başarılar</a>
                            </div>
                            <!-- /.post-category -->
                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="../../blog-post.html">Mühendislik Fakültesi Öğretim Üyelerimiz “Kimya Bilimine Yön Veren 100 Türk” Listesi’nde Yer Aldı</a></h2>
                        </div>
                        <div class="post-footer">
                            <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan 2021</span>
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
        
    </section>
    <!-- /section -->
@endsection
