@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-10">
        <div class="content-container">


            <div class="card border-dark mb-3 ">
                <div class="card-header">
                    <p class="pt-7 text-primary"><b>ETKINLIKLER </b></p>
                    <a type="button" class="btn btn-primary h-100 mt-4"
                        href='{{ route('etkinlikEkle') }}'>YENI ETKİNLİK EKLE</a>
                </div>
                <div class="card-body text-dark">
                    <div class="table-responsive">
                        <table class="table table-hover table-rounded table-striped table-bordered gy-7 gs-7">
                            <thead >
                                <tr>
                                    <th></th>
                                    <th>TARIH</th>
                                    <th>ETKİNLİK BAŞLIK</th>
                                    
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><img src="{{asset('site/images/homepage/7.jfif')}}" width="150px" alt=""  /></td>
                                    <td style="width: 10%">18/04/2022</td>
                                    <td> <b>IWA DIPCON 2022 4th Regional Conference on Diffuse Pollution &
                                        Eutrophication</b> </td>
                                    

                                    <td> <a type="button" class="btn btn-primary" href="{{route('etkinlik1Edit')}} ">EDİT </a></td>
                                    <td> <a type="reset" href="{{route('etkinlik1Detay')}}" class="btn btn-warning">DETAY</a> </a></td>

                                </tr>
                                <tr>
                                    <td><img src="{{asset('site/images/homepage/8.jfif')}}" alt="" width="150px" /></td>
                                    <td style="width: 10%">18/04/2022</td>
                                    <td> <b>VII. İstanbul Hipofiz Sempozyumu</b> </td>
                                   
                                   
                                    <td> <a type="button" class="btn btn-primary" href="{{route('haber1Edit')}} ">EDİT </a></td>
                                    <td> <a type="reset" href="{{route('etkinlik1Detay')}}" class="btn btn-warning">DETAY</a> </a></td>

                                </tr>
                                <tr>
                                    <td> <img src="{{asset('site/images/homepage/9.jfif')}}" alt="" width="150px" /></td>
                                    <td style="width: 10%">18/04/2022</td>
                                    <td> <b>25. Makine & Teknoloji Günleri</b> </td>
                                    
                                  
                                    <td> <a type="button" class="btn btn-primary" href="{{route('haber1Edit')}} ">EDİT </a></td>
                                    <td> <a type="reset" href="{{route('etkinlik1Detay')}}" class="btn btn-warning">DETAY</a> </a></td>

                                </tr>
                                <tr>
                                    <td><img src="{{asset('site/images/homepage/10.jfif')}}" alt="" width="150px" /></td>
                                    <td style="width: 10%">18/04/2022</td>
                                    <td> <b>13. Gelişim Girişim Günleri</b> </td>
                                    
                                    <td> <a type="button" class="btn btn-primary" href="{{route('haber1Edit')}} ">EDİT </a></td>
                                    <td> <a type="reset" href="{{route('etkinlik1Detay')}}" class="btn btn-warning">DETAY</a> </a></td>

                                </tr>
                                <tr>
                                    <td><img src="{{asset('site/images/homepage/11.jfif')}}" alt="" width="150px" /></td>
                                    <td style="width: 10%">18/04/2022</td>
                                    <td> <b>Mühendislikte Topuk Sesleri '22</b> </td>
                                    
                                   
                                    <td> <a type="button" class="btn btn-primary" href="{{route('haber1Edit')}} ">EDİT </a></td>
                                    <td> <a type="reset" href="{{route('etkinlik1Detay')}}" class="btn btn-warning">DETAY</a> </a></td>

                                </tr>
                              

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
