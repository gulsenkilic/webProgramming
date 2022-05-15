@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-12">
        <div class="content-container">
            <div class="container-fluid">

                <div class="card border-dark mb-3 w-100">
                    <div class="card-header">
                        <p class="pt-7 text-dark">ETKİNLİK TARİHİ : 14/04/2022</p>
                        <a type="button" class="btn btn-warning h-100 mt-4"
                        href='{{ route('etkinlikler') }}'>GERİ DÖN</a>
                    </div>
                    <div class="card-body text-dark">
                       
                            <div class="table-responsive">
                                <table class="table table-hover mt-0">
                                    <tr>
                                        <th>Etkinlik Başlığı</th>
                                        <td>IWA DIPCON 2022 4th Regional Conference on Diffuse Pollution &
                                            Eutrophication</td>
                                    </tr>
                                    <tr>
                                        <th>Etkinlik Metni</th>
                                        <td>
                                         

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Resim</th>
                                        <td><img id="defaultPicture" width="150px"
                                            src="{{asset('site/images/homepage/7.jfif')}}">
                                       </td>
                                    </tr>
                                   
                                    <tr class="mt-5">
                                        <td><a class="btn btn-primary h-100 mt-4" href="{{route('etkinlik1Edit')}}">EDİT</a>
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
