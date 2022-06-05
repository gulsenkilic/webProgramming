@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-12">
        <div class="content-container">
            <div class="container-fluid">

                <div class="card border-dark mb-3 w-100">
                    <div class="card-header">
                        <p class="pt-7 text-dark">ETKİNLİK TARİHİ : {{$etkinlik->ta}}</p>
                        <a type="button" class="btn btn-warning h-100 mt-4"
                        href='{{ route('etkinlikler') }}'>GERİ DÖN</a>
                    </div>
                    <div class="card-body text-dark">
                       
                            <div class="table-responsive">
                                <table class="table table-hover mt-0">
                                    <tr>
                                        <th>Slug</th>
                                        <td>{{$etkinlik->slug}}</td> 
                                    </tr>
                                    <tr>
                                        <th>Başlık</th>
                                        <td>{{$etkinlik->baslik}}</td> 
                                    </tr>
                                    <tr>
                                        <th>Etkinlik Metni</th>
                                        <td>{{$etkinlik->metin}}</td>
                                    </tr>
                                    <tr>
                                        <th>Resim</th>
                                        <td>
                                        
                                            <img id="defaultPicture" width="150px"
                                                src="{{asset($etkinlik->resim)}}">
                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kategori</th>
                                        <td>{{$etkinlik->kategori}}</td>
                                    </tr>
                                    <tr>
                                        <th>Yayınlanacağı Sayfa</th>
                                        <td>{{$etkinlik->konum}}</td>
                                    </tr>
                                    <tr>
                                        <th>Statü</th>
                                        <td>{{$etkinlik->statu }}</td>
                                    </tr>
                                    <tr>
                                        <th>Son güncelleme</th>
                                        <td>{{$etkinlik->updated_at}} </td>
                                    </tr>

                                    <tr class="mt-5">
                                        
                                        <td><a class="btn btn-primary h-100 mt-4"
                                            href="{{ route('etkinlikEdit', ['id' => "$etkinlik->id"]) }} ">GÜNCELLE</a>
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
