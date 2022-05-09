@extends('site.layouts.index')
@section('content')
<div class="container mb-3 p-5">
    <section class="wrapper bg-light wrapper-border">
        <div class="container ">
            <h1 class="display-4  mb-3 text-center text-primary"> BİLGİSAYAR MÜHENDİLİĞİ BÖLÜMÜ</h1>
    
            <article>
                <div class="post-slider mt-3">
                    <div class="basic-slider owl-carousel dots-over" data-nav="true" data-margin="5">
                        <div class="item"><img src="{{asset('site/images/muh/7.jpg')}}" class="rounded" alt="" /></div>
                        <div class="item"><img src="{{asset('site/images/muh/8.jpg')}}" class="rounded" alt="" /></div>
                        <div class="item"><img src="{{asset('site/images/muh/9.jpg')}}" class="rounded" alt="" /></div>

                    </div>
                    <!-- /.basic-slider -->
                </div>
                <!-- /.post-slider -->
    
            </article>
            <!-- /.project -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
</div>
    <!--/.hero-slider-wrapper -->
    @include('site.fakulteler.muh.bolumler.bil.partial')


    <h3 class="text-right">SON HABERLER</h3>
    <hr class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="item mb-3">
                    <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a
                                href="{{ route('bilgisayarNew1') }}">
                                <img src="{{ asset('site/images/muh/4.jpg') }}" alt="" style="width: 100%" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                        </figure>
                        <div class="post-header">

                            <!-- /.post-category -->
                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                    href="{{ route('bilgisayarNew1') }}">

                                    Low Code Geliştirme Platformu - AppCube Webinar Serisi (16-23-30 Mart 15:00-16:00)

                                </a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                            <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14
                                        Nisan
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
            </div>
            <div class="col-lg-6">
                <div class="item mb-3">
                    <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a
                                href="{{ route('bilgisayarNew2') }}">
                                <img src="{{ asset('site/images/muh/5.jpg') }}" alt="" style="width: 100%" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                        </figure>
                        <div class="post-header">

                            <!-- /.post-category -->
                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                    href="{{ route('bilgisayarNew2') }}">

                                    HUAWEI ICT Yarışması Türkiye 2021-2022

                                </a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                            <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29
                                        Nisan
                                        2021</span>
                                </li>
                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>9</a></li>
                            </ul>
                            <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                    </article>
                    <!-- /article -->
                </div>
                <!-- /.item -->
            </div>
            <div class="col-lg-6">
                <div class="item mb-3">
                    <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="{{ route('news4') }}">
                                <img src="{{ asset('site/images/homepage/6.jfif') }}" alt="" /></a>
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
            <div class="col-lg-6">
                <div class="item mb-3">
                    <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a
                                href="{{ route('bilgisayarNew3') }}">
                                <img src="{{ asset('site/images/muh/2.jpg') }}" alt="" style="width: 100%" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                        </figure>
                        <div class="post-header">

                            <!-- /.post-category -->
                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                    href="{{ route('bilgisayarNew3') }}">

                                    Huawei ICT Akademi Öğrencileri için Öğrenim Teşviği Yenilendi



                                </a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                            <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>8
                                        Mayıs
                                        2021</span>
                                </li>
                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>8</a></li>
                            </ul>
                            <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                    </article>
                    <!-- /article -->
                </div>
                <!-- /.item -->
            </div>
            <div class="col-lg-6">
                <div class="item mb-3">
                    <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="{{ route('muh-new2') }}">
                                <img src="{{ asset('site/images/muh/3.jpg') }}" alt="" style="width: 100%" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                        </figure>
                        <div class="post-header">

                            <!-- /.post-category -->
                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{ route('muh-new2') }}">
                                    IEEE En İyi Bildiri ve En İyi Sunum Ödülleri GKU’ya!
                                </a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                            <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29
                                        Nisan
                                        2021</span>
                                </li>
                                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>9</a></li>
                            </ul>
                            <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                    </article>
                    <!-- /article -->
                </div>
                <!-- /.item -->
            </div>
        </div>
    </div>
    @include('site.fakulteler.muh.bolumler.bil.partial2')
@endsection
