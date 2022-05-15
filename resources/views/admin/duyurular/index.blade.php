@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-10">
        <div class="content-container">


            <div class="card border-dark mb-3 ">
                <div class="card-header">
                    <p class="pt-7 text-primary"><b>DUYURULAR </b></p>
                    <a type="button" class="btn btn-primary h-100 mt-4"
                        href='{{ route('duyuruEkle') }}'>YENI DUYURU EKLE</a>
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
                                    <td> <b>2022 Yaz Okulu Yurt Ücretleri</b> </td>
                                    <td> <a type="button" class="btn btn-primary" href="{{route('duyuru1Edit')}} ">EDİT </a></td>
                                    <td> <a type="reset" href="{{route('duyuru1detay')}}" class="btn btn-warning">DETAY</a> </a></td>

                                </tr>
                                <tr>
                                    <td style="width: 10%">30/03/2022</td>
                                    <td><b> TÜBİTAK 2022 Yılı Üniversite Öğrencisi Stajyer Alımı</b> </td>
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
                                    <td><b>Siber Güvenlik Girişimlerine Özel Hızlandırma Programı Cybercube'un Başvuruları
                                            Devam
                                            Ediyor!</b> </td>
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
