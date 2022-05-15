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
                <p class="pt-7 text-primary"><b>DUYURULAR </b></p>
                <a type="button" class="btn btn-primary h-100 mt-4" href='{{ route('haberEkle') }}'>YENI DUYURU
                    EKLE</a>
            </div>
            <div class="card-body text-dark">
                <div class="table-responsive">
                    <table class="table table-hover table-rounded table-striped table-bordered gy-7 gs-7">
                        <thead>
                            <tr>
                                <th>TARIH</th>
                                <th>DUYURU AÇIKLAMA</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td style="width: 10%">18/04/2022</td>
                                <td> <b>4. Modül Etüt Programı (2021-2022)</b> </td>
                                <td> <a type="button" class="btn btn-primary" href="{{ route('duyuru1Edit') }} ">EDİT
                                    </a></td>
                                <td> <a type="reset" href="{{ route('duyuru1detay') }}"
                                        class="btn btn-warning">DETAY</a> </a></td>

                            </tr>
                            <tr>
                                <td style="width: 10%">30/03/2022</td>
                                <td><b> Öğrencileri için 20 Nisan 2022 Tarihli İngilizce Yeterlik Sınavı Sonuçları</b>
                                </td>
                                <td> <a type="button" class="btn btn-primary" href=" ">EDİT </a></td>
                                <td> <a type="reset" href="" class="btn btn-warning">DETAY</a> </a></td>

                            </tr>
                            <tr>
                                <td style="width: 10%">23/01/2022</td>
                                <td><b>Olumsuz Hava Koşulları Nedeniyle 24-25 Ocak 2022 Tarihlerinde Eğitime Ara
                                        Verilmiştir</b> </td>
                                <td> <a type="button" class="btn btn-primary" href=" ">EDİT </a></td>
                                <td> <a type="reset" href="" class="btn btn-warning">DETAY</a> </a></td>

                            </tr>
                            <tr>
                                <td style="width: 10%">21/01/2022</td>
                                <td><b>2021-2022 Bahar Yarıyılı Kurum İçi Yatay Geçiş Başvuru Kılavuzu</b> </td>
                                <td> <a type="button" class="btn btn-primary" href=" ">EDİT </a></td>
                                <td> <a type="reset" href="" class="btn btn-warning">DETAY</a> </a></td>

                            </tr>
                            <tr>
                                <td style="width: 10%">11/01/2022</td>
                                <td><b>S4 Nisan 2022 Tarihli Toronto İngilizce Yeterlik (Proficiency) Sınavı
                                        Sonuçları</b> </td>
                                <td> <a type="button" class="btn btn-primary" href=" ">EDİT </a></td>
                                <td> <a type="reset" href="" class="btn btn-warning">DETAY</a> </a></td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection