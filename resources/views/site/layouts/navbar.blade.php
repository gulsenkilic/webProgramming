<nav class="navbar navbar-expand-lg classic transparent navbar-light">
    <div class="container flex-lg-row flex-nowrap align-items-center">
        <div class="navbar-brand w-100">
            <a href="{{ route('homepage') }}">
                <img src="{{ asset('site/images/logo/logo.png') }}" alt="" />
            </a>
        </div>
        <div class="navbar-collapse offcanvas-nav">
            <div class="offcanvas-header d-lg-none d-xl-none">
                <a href="{{ route('homepage') }}"><img src="{{ asset('site/images/logo/logo.png') }}" alt="" /></a>
                <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close"
                    aria-label="Close"></button>
            </div>
            <ul class="navbar-nav">

                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle">Üniversitemiz</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="{{ route('about') }}">Hakkımızda</a>
                        </li>
                        <li class="nav-item"><a class="dropdown-item" href="{{ route('about2') }}">Vizyon ve
                                Misyon</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="{{ route('about3') }}">Üniversite
                                Yönetimi</a></li>

                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{ route('akademik') }}">Akademik</a>
                    <ul class="dropdown-menu mega-menu">
                        <li class="mega-menu-content">
                            <div class="row gx-0 gx-lg-3">
                                <div class="col-lg-3">
                                    <h6 class="dropdown-header">Okullar</h6>

                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="{{ route('yabanci') }}">Yabancı Diller Yüksekokulu</a></li>
                                        <li><a class="dropdown-item" href="{{ route('yabanci') }}">Meslek YüksekOkulu</a></li>
                                        <li><a class="dropdown-item" href="{{ route('yabanci') }}">Sağlık Hizmetleri Meslek</a></li>
                                    </ul>
                                </div>
                                <!--/column -->
                                <div class="col-lg-6">
                                    <h6 class="dropdown-header">Fakülte ve Bölümler</h6>
                                    <div class="row gx-0">
                                        <div class="col-lg-6">
                                            <ul class="list-unstyled">
                                                <li><a class="dropdown-item" href="{{ route('muh') }}">Diş Hekimliği Fakültesi</a></li>
                                                <li><a class="dropdown-item" href="{{ route('muh') }}">Hukuk Fakültesi</a></li>
                                                <li><a class="dropdown-item" href="{{ route('muh') }}">Mühendislik Fakültesi</a></li>
                                                <li><a class="dropdown-item" href="{{ route('muh') }}">Eğitim Bilimleri Fakültesi</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                          <ul class="list-unstyled">
                                              <li><a class="dropdown-item" href="{{ route('muh') }}">İletişim Fakültesi</a></li>
                                              <li><a class="dropdown-item" href="{{ route('muh') }}">Mimarlık Fakültesi</a></li>
                                              <li><a class="dropdown-item" href="{{ route('muh') }}">Tıp Fakültesi</a></li>
                                          </ul>
                                      </div>
                                    </div>
                                </div>
                                <!--/column -->
                                <div class="col-lg-3">
                                    <h6 class="dropdown-header">Enstitüler</h6>
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="{{ route('muh') }}">Sağlık Bilimleri Enstitüler</a></li>
                                        <li><a class="dropdown-item" href="{{ route('muh') }}">Adli Tıp ve Adli Bilimler Enstitüsü</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('muh') }}">Sağlık Bilimleri Enstitüler</a></li>
                                    </ul>
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </li>
                        <!--/.mega-menu-content-->
                    </ul>
                    <!--/.dropdown-menu -->
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" >Öğrenci</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="{{ route('prospectiveSt') }}">Aday
                                Öğrenci</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="{{ route('cap-yandal') }}">Çift
                                Anadal - Yandal</a></li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle">Değişim Programları</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item"
                                        href="{{ route('mevlana') }}">Mevlana</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="{{ route('farabi') }}">Farabi</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="{{ route('erasmus') }}">Erasmus</a></li>

                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{ route('yerleskeler') }}">Yerleşkeler</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('iletisim') }}">İletişim</a></li>

            </ul>
            <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-collapse -->
        <div class="navbar-other ms-lg-4">
            <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                <li class="nav-item"><a class="nav-link" data-toggle="offcanvas-info"><i
                            class="uil uil-info-circle"></i></a></li>
               
                <li class="nav-item d-lg-none">
                    <div class="navbar-hamburger"><button class="hamburger animate plain"
                            data-toggle="offcanvas-nav"><span></span></button></div>
                </li>
            </ul>
            <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-other -->
        <div class="offcanvas-info text-inverse">
            <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-info-close"
                aria-label="Close"></button>
            <a href="{{ route('homepage') }}"><img src="{{ asset('site/images/logo/logo2.png') }}" alt="" /></a>
            <div class="mt-4 widget">
                <p>Gülşen Kılıç Üniversitesi Türkiye ve Dünyanın En Köklü ve En yaratıcı üniversitelerinden biri</p>
            </div>
            <!-- /.widget -->
            <div class="widget">
                <h4 class="widget-title text-white mb-3">İletişim Bilgileri</h4>
                <address> Çırağan Caddesi

                    Osmanpaşa Mektebi Sokak
                    
                    No: 4 - 6
                    
                    34353 Beşiktaş,
                    
                    İSTANBUL / TÜRKİYE</address>
                    <a href="mailto:#">info@gku.com</a><br /> +00 (123) 456 78 90
            </div>
            <!-- /.widget -->
            <div class="widget">
                <h4 class="widget-title text-white mb-3">Daha Fazla</h4>
            <ul class="list-unstyled  mb-0">
              <li><a href="{{ route('about') }}">Hakkımızda</a></li>
              <li><a href="{{ route('about2') }}">Vizyon ve Misyonumuz</a></li>
              <li><a href="{{ route('about3') }}">Üniversite Yönetimi</a></li>
              <li><a href="{{ route('about3') }}">Akademik Kadro</a></li>
              <li><a href="#">İletişim</a></li>
            </ul>
            </div>
            <!-- /.widget -->
            <div class="widget">
                <h4 class="widget-title text-white mb-3">Bizi Takip Edin</h4>
                <nav class="nav social social-white">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                </nav>
                <!-- /.social -->
            </div>
            <!-- /.widget -->
        </div>
        <!-- /.offcanvas-info -->
    </div>
    <!-- /.container -->
</nav>
<!-- /.navbar -->

<!--/.modal -->
