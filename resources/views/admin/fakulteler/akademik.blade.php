@extends('admin.layouts.index')
@section('content')
<div class="card-body mt-10">
    <div class="card border-dark  ">
        <div class="card-header">
            <p class="pt-7 text-primary"><b>YABANCI DILLER MESLEK YUKSEK OKULU </b></p>
            <a type="button" class="btn btn-warning h-75 mt-4" href='{{ route('okullarDetay') }}'>GERİ DÖN</a>

        </div>
    </div>
    

    
</div>

<div class="card-body py-3 mt-10">
    <div class="content-container">


        <div class="card border-dark mb-3 ">
            <div class="card-header">
                <p class="pt-7 text-primary"><b>AKADEMİK KADRO </b></p>
                <a type="button" class="btn btn-primary h-100 mt-4" href='{{ route('akademikEkle') }}'>YENI PERSONEL
                    EKLE</a>
            </div>
            <div class="card-body text-dark">
                <div class="table-responsive">
                    <table class="table table-hover table-rounded table-striped table-bordered gy-7 gs-7">
                        <thead>
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
                                <td><img src="{{ asset('site/images/about/yonetim/t4.jpg') }}" width="150px" alt="" />
                                </td>
                                <td>Öğr. Gör. Mehmet ATASAGUN</td>
                                <td> <b>Müdür</b> </td>
                                <td>0212 765 44 78</td>
                                <td>mehmet.atasagun@sfl.bau.edu.tr</td>
                                <td><a href="http://akademik.gku.edu.tr/web/gku">http://akademik.gku.edu.tr/web/gku</a>
                                </td>
                                <td> <a type="button" class="btn btn-primary" href="{{ route('akademikEdit') }} ">EDİT
                                    </a></td>
                                <td> <a type="reset" href="{{ route('akademikPanel') }}"
                                        class="btn btn-warning">SIL</a> </a></td>

                            </tr>
                            <tr>
                                <td><img src="{{ asset('site/images/about/yonetim/t1.jpg') }}" width="150px" alt="" />
                                </td>
                                <td>Öğr. Gör. Serhat UZUN </td>
                                <td> <b>Müdür Yardımcısı</b> </td>
                                <td>0212 765 44 78</td>
                                <td>serhat.uzun@sfl.bau.edu.tr</td>
                                <td><a href="http://akademik.gku.edu.tr/web/gku">http://akademik.gku.edu.tr/web/gku</a>
                                </td>

                                <td> <a type="button" class="btn btn-primary" href="{{ route('akademikEdit') }} ">EDİT
                                    </a></td>
                                <td> <a type="reset" href="{{ route('akademikPanel') }}"
                                        class="btn btn-warning">SIL</a> </a></td>

                            </tr>
                            <tr>
                                <td><img src="{{ asset('site/images/about/yonetim/t2.jpg') }}" width="150px" alt="" />
                                </td>
                                <td>Öğr. Gör. Akif Yavuz ÖZDEMİREL </td>
                                <td> <b>İdari Koordinatör</b> </td>
                                <td>0212 765 44 78</td>
                                <td>akifyavuz.ozdemirel@sfl.bau.edu.tr</td>
                                <td><a href="http://akademik.gku.edu.tr/web/gku">http://akademik.gku.edu.tr/web/gku</a>
                                </td>

                                <td> <a type="button" class="btn btn-primary" href="{{ route('akademikEdit') }} ">EDİT
                                    </a></td>
                                <td> <a type="reset" href="{{ route('akademikPanel') }}"
                                        class="btn btn-warning">SIL</a> </a></td>

                            </tr>
                            <tr>
                                <td><img src="{{ asset('site/images/about/yonetim/t3.jpg') }}" width="150px" alt="" />
                                </td>
                                <td>Öğr. Gör. Çağla MİTRANİ </td>
                                <td> <b>Ölçme ve Değerlendirme Birimi Koordinatörü</b> </td>
                                <td>0212 765 44 78</td>
                                <td>cagla.mitrani@sfl.bau.edu.tr</td>
                                <td><a href="http://akademik.gku.edu.tr/web/gku">http://akademik.gku.edu.tr/web/gku</a>
                                </td>

                                <td> <a type="button" class="btn btn-primary" href="{{ route('akademikEdit') }} ">EDİT
                                    </a></td>
                                <td> <a type="reset" href="{{ route('akademikPanel') }}"
                                        class="btn btn-warning">SIL</a> </a></td>

                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection