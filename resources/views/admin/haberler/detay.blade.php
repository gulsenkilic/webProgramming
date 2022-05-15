@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-12">
        <div class="content-container">
            <div class="container-fluid">

                <div class="card border-dark mb-3 w-100">
                    <div class="card-header">
                        <p class="pt-7 text-dark">HABER TARİHİ : 14/04/2022</p>
                        <a type="button" class="btn btn-warning h-100 mt-4"
                        href='{{ route('haberler') }}'>GERİ DÖN</a>
                    </div>
                    <div class="card-body text-dark">
                       
                            <div class="table-responsive">
                                <table class="table table-hover mt-0">
                                    <tr>
                                        <th>Haber Başlığı</th>
                                        <td>2022-2023 Yılı Erasmus Öğrenci Hareketliliği Başvuruları</td>
                                    </tr>
                                    <tr>
                                        <th>Haber Metni</th>
                                        <td>
                                          Sevgili Öğrencilerimiz,

                                                Hayallerinizi gerçekleştirirken kendinizi de geliştireceğiniz; akademik donanımızı artıracağınız, yabancı dilinizi geliştireceğiniz, farklı kültürlerle tanışıp dünya vatandaşı olma fırsatları sunan Erasmus+ Programı başvurularınızı bekliyor…
                                                
                                                Online Başvuru Dönemi 14-28 Şubat tarihleri arasındadır.
                                                Detaylı bilgiye www.erasmus.yildiz.edu.tr sayfamızdan ulaşabilirsiniz.
                                                
                                                Başarılı bir dönem geçirmeniz dileğiyle…

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Resim</th>
                                        <td><img id="defaultPicture" width="150px"
                                            src="{{asset('site/images/homepage/3.jpg')}}">
                                       </td>
                                    </tr>
                                    <tr>
                                        <th>Kategori</th>
                                        <td>EĞİTİM</td>
                                    </tr>

                                    <tr class="mt-5">
                                        <td><a class="btn btn-primary h-100 mt-4" href="{{route('haber1Edit')}}">EDİT</a>
                                        </td>
                                    </tr>


                                </table>
                            </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
