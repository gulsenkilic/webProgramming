@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-12">
        <div class="content-container">
            <div class="container-fluid">

                <div class="card border-dark mb-3 w-100">
                    <div class="card-header">
                        <p class="pt-7 text-dark">HABER EKLE</p>
                        <a type="button" class="btn btn-warning h-100 mt-4"
                        href='{{ route('haberler') }}'>GERİ DÖN</a>
                    </div>
                    <div class="card-body text-dark">
                        <form action="{{ route('haberler')}} " method="">
                            <input type="hidden" name="id">
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-hover mt-0">
                                    <tr>
                                        <td>Haber Başlığı</td>
                                        <td><input class="form-control" type="text" value="2022-2023 Yılı Erasmus Öğrenci Hareketliliği Başvuruları"></td>
                                    </tr>
                                    <tr>
                                        <th>Haber Metni</th>
                                        <td>
                                            <textarea class="form-control ckeditor" name="shortDescription_tr">Sevgili Öğrencilerimiz,

                                                Hayallerinizi gerçekleştirirken kendinizi de geliştireceğiniz; akademik donanımızı artıracağınız, yabancı dilinizi geliştireceğiniz, farklı kültürlerle tanışıp dünya vatandaşı olma fırsatları sunan Erasmus+ Programı başvurularınızı bekliyor…
                                                
                                                Online Başvuru Dönemi 14-28 Şubat tarihleri arasındadır.
                                                Detaylı bilgiye www.erasmus.yildiz.edu.tr sayfamızdan ulaşabilirsiniz.
                                                
                                                Başarılı bir dönem geçirmeniz dileğiyle…</textarea>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Resim</th>
                                        <td><img id="defaultPicture" width="150px"
                                            src="{{asset('site/images/homepage/3.jpg')}}">
                                        <input type="hidden" name="oldImage" value="dfdf">
                                        <img width="150px" id="newImage" />
                                        <input accept="image/*" class="form-control" name="newImage" type='file'
                                            onchange="loadFile(event)" /></td>
                                    </tr>
                                    <tr>
                                        <th>Kategori</th>
                                        <td><select class="form-select" name="status">
                                            <option value="AKADEMİK">
                                                AKADEMİK
                                            </option>
                                                <option value="EĞİTİM" selected>
                                                    EĞİTİM
                                                </option>
                                               
                                                <option value="GENEL">
                                                    GENEL
                                                </option>
                                                <option value="ETKİNLİK">
                                                    ETKİNLİK
                                                </option>
                                            </select></td>
                                    </tr>

                                    <tr class="mt-5">
                                        <td><input class="btn btn-primary" type="submit" value="GUNCELLE">
                                        </td>
                                    </tr>


                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
