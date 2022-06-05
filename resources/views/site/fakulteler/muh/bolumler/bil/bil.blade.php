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
            @foreach ($haberler as $haber)
            <div class="col-lg-6">
                <div class="item mb-3">
                    <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a
                                href="{{ route('haberDetayPage', ['slug' => $haber->slug]) }}">
                                <img src="{{ $haber->resim }}" alt="" style="width: 100%" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                        </figure>
                        <div class="post-header">

                            <!-- /.post-category -->
                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                    href="{{ route('haberDetayPage', ['slug' => $haber->slug]) }}">
                                    {{ $haber->baslik }}
                                </a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                            <ul class="post-meta">
                                <li class="post-date"><i
                                        class="uil uil-calendar-alt"></i><span>{{ $haber->created_at }}</span>
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
        @endforeach
           
        </div>
    </div>
    @include('site.fakulteler.muh.bolumler.bil.partial2')
@endsection
