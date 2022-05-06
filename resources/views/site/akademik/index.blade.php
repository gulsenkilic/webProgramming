@extends('site.layouts.index')
@section('content')


    <div class="container py-14 py-md-8">
        <ul class="nav nav-tabs nav-tabs-bg d-flex justify-content-between nav-justified flex-lg-row flex-column text-center ">
            <li class="nav-item"> <a class="nav-link d-flex flex-row active" data-bs-toggle="tab" href="#tab2-1">
                    <div>
                        <h4>Okullar</h4>
                    </div>
                </a> </li>
            <li class="nav-item "> <a class="nav-link" data-bs-toggle="tab" href="#tab2-2">
                    <div>
                        <h4>Fakülteler ve Bölümler</h4>
                    </div>
                </a> </li>
            <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-3">
                    <div>
                        <h4 >Enstitüler</h4>
                    </div>
                </a> </li>
        </ul>
        <div class="tab-content mt-1 mt-lg-2">
            <div class="tab-pane fade show active justify-content-center align-items-center" id="tab2-1">
                <div class="container" id="okul">
                    <div class="table-responsive bg-white p-2">
                        <table class="table table-bordered text-left table-hover">

                            <tr>
                                <td style="width: 10%"><img src="site/images/logo/logo.png" alt=""></td>
                                <td class="text-uppercase text-center"><a href="" class="text-dark"><h4>YABANCI DİLLER YÜKSEKOKULU</h4></a></td>
                            </tr>
                            <tr>
                                <td style="width: 10%"><img src="site/images/logo/logo.png" alt=""></td>
                                <td class="text-uppercase text-center"><a href=""><h4>Sağlık Hizmetleri Meslek Yüksekokulu</h4></a></td>
                            </tr>
                            <tr>
                                <td style="width: 10%"><img src="site/images/logo/logo.png" alt=""></td>
                                <td class="text-uppercase text-center"><a href=""><h4>Sosyal Bilimler Meslek Yüksekokulu</h4></a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!--/.tab-pane -->
            <div class="tab-pane fade" id="tab2-2">
                <div class="container" id="fak-bol">
                    <div class="table-responsive bg-white p-2">
                        <table class="table table-bordered text-left table-hover ">

                            <tr>
                                <td style="width: 10%"><img src="site/images/logo/logo.png" alt=""></td>
                                <td class="text-uppercase text-center"><a href=""><h4>Diş Hekimliği Fakültesi </h4></a></td>
                            </tr>
                            <tr>
                                <td style="width: 10%"><img src="site/images/logo/logo.png" alt=""></td>
                                <td class="text-uppercase text-center"><a href=""><h4>Hukuk Fakültesi</h4></a></td>
                            </tr>
                            <tr>
                                <td style="width: 10%"><img src="site/images/logo/logo.png" alt=""></td>
                                <td class="text-uppercase text-center"><a href=""><h4>Mühendislik Fakültesi</h4></a></td>
                            </tr>


                            <tr>
                                <td style="width: 10%"><img src="site/images/logo/logo.png" alt=""></td>
                                <td class="text-uppercase text-center"><a href=""><h4>Eğitim Bilimleri Fakültesi </h4></a></td>
                            </tr>
                            <tr>
                                <td style="width: 10%"><img src="site/images/logo/logo.png" alt=""></td>
                                <td class="text-uppercase text-center"><a href=""><h4>İletişim Fakültesi</h4></a></td>
                            </tr>
                            <tr>
                                <td style="width: 10%"><img src="site/images/logo/logo.png" alt=""></td>
                                <td class="text-uppercase text-center"><a href=""><h4>Mimarlık Fakültesi</h4></a></td>
                            </tr>
                            <tr>
                                <td style="width: 10%"><img src="site/images/logo/logo.png" alt=""></td>
                                <td class="text-uppercase text-center"><a href=""><h4>Tıp Fakültesi</h4></a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!--/.row -->

            <div class="tab-pane fade" id="tab2-3">
                <div class="container" id="ens">
                    <div class="table-responsive bg-white p-2">
                        <table class="table table-bordered text-left table-hover ">

                            <tr>
                                <td style="width: 10%"><img src="site/images/logo/logo.png" alt=""></td>
                                <td class="text-uppercase text-center"><a href=""><h4>Sağlık Bilimleri Enstitüsü </h4></a></td>
                            </tr>
                            <tr>
                                <td style="width: 10%"><img src="site/images/logo/logo.png" alt=""></td>
                                <td class="text-uppercase text-center"><a href=""><h4>Sosyal Bilimleri Enstitüsü</h4></a></td>
                            </tr>
                            <tr>
                                <td style="width: 10%"><img src="site/images/logo/logo.png" alt=""></td>
                                <td class="text-uppercase text-center"><a href=""><h4>Fen Bilimleri Enstitüsü</h4></a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!--/.row -->
        </div>





    </div>
@endsection
