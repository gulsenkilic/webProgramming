@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-10">
        <div class="content-container">


            <div class="card border-dark mb-3 ">
                <div class="card-header">
                    <p class="pt-7 text-primary"><b>AKADEMİK KADRO </b></p>
                    <a type="button" class="btn btn-primary h-100 mt-4"
                        href='{{route('akademikEkle')}}'>YENI PERSONEL EKLE</a>
                </div>
                <div class="card-body text-dark">
                    <div class="table-responsive">
                        <table class="table table-hover table-rounded table-striped table-bordered gy-7 gs-7">
                            <thead >
                                <tr>
                                    <th></th>
                                    <th>UNVAN-AD-SOYAD</th>
                                    <th>GÖREVİ</th>
                                    
                                    <th>TEL</th>
                                    <th>EMAIL</th>
                                    <th>AVESIS LINK</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><img src="{{asset('site/images/about/yonetim/1.jpg')}}" width="150px" alt=""  /></td>
                                    <td>Prof. Dr. GÜLŞEN KILIÇ</td>
                                    <td> <b>Rektör</b> </td>
                                    <td>0212 765 44 78</td>
                                    <td>gulsen@gku.edu.tr</td>
                                    <td><a href="http://akademik.gku.edu.tr/web/gku">http://akademik.gku.edu.tr/web/gku</a></td>
                                    <td> <a type="button" class="btn btn-primary" href="{{route('akademikEdit')}} ">EDİT </a></td>
                                    <td> <a type="reset" href="{{route('akademikPanel')}}" class="btn btn-warning">SIL</a> </a></td>

                                </tr>
                                <tr>
                                    <td><img src="{{asset('site/images/about/yonetim/t1.jpg')}}" width="150px" alt=""  /></td>
                                    <td>Prof. Dr. SEMANUR KILIÇ</td>
                                    <td> <b>Rektör Yardımcsı</b> </td>
                                    <td>0212 765 44 78</td>
                                    <td>gulsen@gku.edu.tr</td>
                                    <td><a href="http://akademik.gku.edu.tr/web/gku">http://akademik.gku.edu.tr/web/gku</a></td>

                                    <td> <a type="button" class="btn btn-primary" href="{{route('akademikEdit')}} ">EDİT </a></td>
                                    <td> <a type="reset" href="{{route('akademikPanel')}}" class="btn btn-warning">SIL</a> </a></td>

                                </tr>
                                <tr>
                                    <td><img src="{{asset('site/images/about/yonetim/t2.jpg')}}" width="150px" alt=""  /></td>
                                    <td>Prof. Dr. ŞEBNEM DEMİRCİ</td>
                                    <td> <b>Rektör Yardımcsı</b> </td>
                                    <td>0212 765 44 78</td>
                                    <td>gulsen@gku.edu.tr</td>
                                    <td><a href="http://akademik.gku.edu.tr/web/gku">http://akademik.gku.edu.tr/web/gku</a></td>

                                    <td> <a type="button" class="btn btn-primary" href="{{route('akademikEdit')}} ">EDİT </a></td>
                                    <td> <a type="reset" href="{{route('akademikPanel')}}" class="btn btn-warning">SIL</a> </a></td>

                                </tr>
                                <tr>
                                    <td><img src="{{asset('site/images/about/yonetim/t3.jpg')}}" width="150px" alt=""  /></td>
                                    <td>Prof. Dr. UMUT CAN DEMİRCİ</td>
                                    <td> <b>Rektör Yardımcsı</b> </td>
                                    <td>0212 765 44 78</td>
                                    <td>gulsen@gku.edu.tr</td>
                                    <td><a href="http://akademik.gku.edu.tr/web/gku">http://akademik.gku.edu.tr/web/gku</a></td>

                                    <td> <a type="button" class="btn btn-primary" href="{{route('akademikEdit')}} ">EDİT </a></td>
                                    <td> <a type="reset" href="{{route('akademikPanel')}}" class="btn btn-warning">SIL</a> </a></td>

                                </tr>
                                <tr>
                                    <td><img src="{{asset('site/images/about/yonetim/t4.jpg')}}" width="150px" alt=""  /></td>
                                    <td>Prof. Dr. DENİZ ATAY</td>
                                    <td> <b>Eğitim Bilimleri Fakültesi Dekanı</b> </td>
                                    <td>0212 765 44 78</td>
                                    <td>gulsen@gku.edu.tr</td>
                                    <td><a href="http://akademik.gku.edu.tr/web/gku">http://akademik.gku.edu.tr/web/gku</a></td>

                                    <td> <a type="button" class="btn btn-primary" href="{{route('akademikEdit')}} ">EDİT </a></td>
                                    <td> <a type="reset" href="{{route('akademikPanel')}}" class="btn btn-warning">SIL</a> </a></td>

                                </tr>
                                <tr>
                                    <td><img src="{{asset('site/images/about/yonetim/t6.jpg')}}" width="150px" alt=""  /></td>
                                    <td>Prof. Dr. SELÇUK BASALMA</td>
                                    <td> <b>Diş Hekimliği Fakültesi Dekan</b> </td>
                                    <td>0212 765 44 78</td>
                                    <td>gulsen@gku.edu.tr</td>
                                    <td><a href="http://akademik.gku.edu.tr/web/gku">http://akademik.gku.edu.tr/web/gku</a></td>

                                    <td> <a type="button" class="btn btn-primary" href="{{route('akademikEdit')}} ">EDİT </a></td>
                                    <td> <a type="reset" href="{{route('akademikPanel')}}" class="btn btn-warning">SIL</a> </a></td>

                                </tr>
                                <tr>
                                    <td><img src="{{asset('site/images/about/yonetim/t7.jpg')}}" width="150px" alt=""  /></td>
                                    <td>Prof. Dr. EMRE YILMAZ</td>
                                    <td> <b>Hukuk Fakültesi Dekanı</b> </td>
                                    <td>0212 765 44 78</td>
                                    <td>gulsen@gku.edu.tr</td>
                                    <td><a href="http://akademik.gku.edu.tr/web/gku">http://akademik.gku.edu.tr/web/gku</a></td>

                                    <td> <a type="button" class="btn btn-primary" href="{{route('akademikEdit')}} ">EDİT </a></td>
                                    <td> <a type="reset" href="{{route('akademikPanel')}}" class="btn btn-warning">SIL</a> </a></td>

                                </tr>
                                <tr>
                                    <td><img src="{{asset('site/images/about/yonetim/t2.jpg')}}" width="150px" alt=""  /></td>
                                    <td>Prof. Dr. MEHMET DÜNDAR</td>
                                    <td> <b>Mimarlık ve Tasarım Fakültesi Dekanı </b> </td>
                                    <td>0212 765 44 78</td>
                                    <td>gulsen@gku.edu.tr</td>
                                    <td><a href="http://akademik.gku.edu.tr/web/gku">http://akademik.gku.edu.tr/web/gku</a></td>

                                    <td> <a type="button" class="btn btn-primary" href="{{route('akademikEdit')}} ">EDİT </a></td>
                                    <td> <a type="reset" href="{{route('akademikPanel')}}" class="btn btn-warning">SIL</a> </a></td>

                                </tr>
                                <tr>
                                    <td><img src="{{asset('site/images/about/yonetim/t3.jpg')}}" width="150px" alt=""  /></td>
                                    <td>Prof. Dr. İPEK  ARICA</td>
                                    <td> <b>Mühendislik ve Doğa Bilimleri Fakültesi Dekanı </b> </td>
                                    <td>0212 765 44 78</td>
                                    <td>gulsen@gku.edu.tr</td>
                                    <td><a href="http://akademik.gku.edu.tr/web/gku">http://akademik.gku.edu.tr/web/gku</a></td>

                                    <td> <a type="button" class="btn btn-primary" href="{{route('akademikEdit')}} ">EDİT </a></td>
                                    <td> <a type="reset" href="{{route('akademikPanel')}}" class="btn btn-warning">SIL</a> </a></td>

                                </tr>
                                <tr>
                                    <td><img src="{{asset('site/images/about/yonetim/t6.jpg')}}" width="150px" alt=""  /></td>
                                    <td>Prof. Dr. ŞEYMA TOKTAŞ</td>
                                    <td> <b>Tıp Fakültesi Dekanı </b> </td>
                                    <td>0212 765 44 78</td>
                                    <td>gulsen@gku.edu.tr</td>
                                    <td><a href="http://akademik.gku.edu.tr/web/gku">http://akademik.gku.edu.tr/web/gku</a></td>

                                    <td> <a type="button" class="btn btn-primary" href="{{route('akademikEdit')}} ">EDİT </a></td>
                                    <td> <a type="reset" href="{{route('akademikPanel')}}" class="btn btn-warning">SIL</a> </a></td>

                                </tr>
                                <tr>
                                    <td><img src="{{asset('site/images/about/yonetim/t3.jpg')}}" width="150px" alt=""  /></td>
                                    <td>Prof. Dr. KEMAL SUHER</td>
                                    <td> <b>İletişim Fakültesi Dekanı </b> </td>
                                    <td>0212 765 44 78</td>
                                    <td>gulsen@gku.edu.tr</td>
                                    <td><a href="http://akademik.gku.edu.tr/web/gku">http://akademik.gku.edu.tr/web/gku</a></td>

                                    <td> <a type="button" class="btn btn-primary" href="{{route('akademikEdit')}} ">EDİT </a></td>
                                    <td> <a type="reset" href="{{route('akademikPanel')}}" class="btn btn-warning">SIL</a> </a></td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
