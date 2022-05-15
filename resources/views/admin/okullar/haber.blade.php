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
                <p class="pt-7 text-primary"><b>HABERLER </b></p>
                <a type="button" class="btn btn-primary h-100 mt-4" href='{{ route('haberEkle') }}'>YENI HABER EKLE</a>
            </div>
            <div class="card-body text-dark">
                <div class="table-responsive">
                    <table class="table table-hover table-rounded table-striped table-bordered gy-7 gs-7">
                        <thead>
                            <tr>
                                <th></th>
                                <th>TARIH</th>
                                <th>HABER AÇIKLAMA</th>

                                <th>KATEGORİ</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><img src="{{ asset('site/images/yabanci/1.jpg') }}" width="150px" alt="" /></td>
                                <td style="width: 10%">18/04/2022</td>
                                <td> <b> 4. Modül Sınıf Listeleri</b> </td>

                                <td><span class="badge badge-success">
                                        Eğitim
                                    </span></td>
                                <td> <a type="button" class="btn btn-primary" href="{{ route('haber1Edit') }} ">EDİT
                                    </a></td>
                                <td> <a type="reset" href="{{ route('haber1Detay') }}" class="btn btn-warning">DETAY</a>
                                    </a></td>

                            </tr>
                            <tr>
                                <td><img src="{{ asset('site/images/yabanci/2.jpg') }}" alt="" width="150px" /></td>
                                <td style="width: 10%">18/04/2022</td>
                                <td> <b>YLSY Bursiyerleri 2021/1. Dönem için İngilizce Kursu Bilgilendirmesi</b> </td>

                                <td><span class="badge badge-success">
                                        Üniversite
                                    </span></td>
                                <td> <a type="button" class="btn btn-primary" href="{{ route('haber1Edit') }} ">EDİT
                                    </a></td>
                                <td> <a type="reset" href="{{ route('haber1Detay') }}" class="btn btn-warning">DETAY</a>
                                    </a></td>

                            </tr>
                            <tr>
                                <td> <img src="{{ asset('site/images/yabanci/3.jpg') }}" alt="" width="150px" /></td>
                                <td style="width: 10%">18/04/2022</td>
                                <td> <b>Proficiency, Placement ve End of Module sınavlarına dair bilgilendirmeler</b>
                                </td>

                                <td><span class="badge badge-success">
                                        Sosyal
                                    </span></td>
                                <td> <a type="button" class="btn btn-primary" href="{{ route('haber1Edit') }} ">EDİT
                                    </a></td>
                                <td> <a type="reset" href="{{ route('haber1Detay') }}" class="btn btn-warning">DETAY</a>
                                    </a></td>

                            </tr>
                            <tr>
                                <td><img src="{{ asset('site/images/homepage/6.jfif') }}" alt="" width="150px" /></td>
                                <td style="width: 10%">18/04/2022</td>
                                <td> <b>Mühendislik Fakültesi Öğretim Üyelerimiz “Kimya
                                        Bilimine
                                        Yön
                                        Veren 100 Türk” Listesi’nde Yer Aldı</b> </td>

                                <td><span class="badge badge-success">
                                        Eğitim
                                    </span></td>
                                <td> <a type="button" class="btn btn-primary" href="{{ route('haber1Edit') }} ">EDİT
                                    </a></td>
                                <td> <a type="reset" href="{{ route('haber1Detay') }}"
                                        class="btn btn-warning">DETAY</a> </a></td>

                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>



@endsection