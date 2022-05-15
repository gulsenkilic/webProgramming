@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-10">
        <div class="content-container">


            <div class="card border-dark mb-3 ">
                <div class="card-header">
                    <p class="pt-7 text-primary"><b>Mühendislik Fakultesi Bölümleri </b></p>
                    <a type="button" class="btn btn-primary h-100 mt-4 " style="margin-left: 600px"
                    href=''>YENI BÖLÜM EKLE</a>
                    <a type="button" class="btn btn-warning h-75 mt-4" href='{{ route('fakulteDetay') }}'>GERİ DÖN</a>
                </div>
                <div class="card-body text-dark">
                    <div class="table-responsive">
                        <table class="table table-hover table-rounded table-striped gy-7 gs-7">

                            <tbody>

                                <tr>
                                    <th scope="row"><img src="{{ asset('site/images/logo/logo.png') }}" alt=""></th>
                                    <td> <b>Bilgisayar Mühensidliği</b> </td>
                                    <td> <a type="button" class="btn btn-primary" href="">EDİT </a></td>
                                    <td> <a type="reset" href="{{route('fakulteBolumlerBilMuh')}} " class="btn btn-warning">DETAY</a> </a></td>

                                </tr>
                                <tr>
                                    <th scope="row"><img src="{{ asset('site/images/logo/logo.png') }}" alt=""></th>
                                    <td><b> Endüstri Mühensidliği</b> </td>
                                    <td> <a type="button" class="btn btn-primary" href=" ">EDİT </a></td>
                                    <td> <a type="reset" href="" class="btn btn-warning">DETAY</a> </a></td>

                                </tr>
                                <tr>
                                    <th scope="row"><img src="{{ asset('site/images/logo/logo.png') }}" alt=""></th>
                                    <td><b>Makina Mühensidliği</b> </td>
                                    <td> <a type="button" class="btn btn-primary" href=" ">EDİT </a></td>
                                    <td> <a type="reset" href="{{route('fakulteDetay')}}" class="btn btn-warning">DETAY</a> </a></td>

                                </tr>
                                <tr>
                                    <th scope="row"><img src="{{ asset('site/images/logo/logo.png') }}" alt=""></th>
                                    <td><b>Elektrik Elektronik Mühensidliği</b> </td>
                                    <td> <a type="button" class="btn btn-primary" href=" ">EDİT </a></td>
                                    <td> <a type="reset" href="" class="btn btn-warning">DETAY</a> </a></td>

                                </tr>
                                <tr>
                                    <th scope="row"><img src="{{ asset('site/images/logo/logo.png') }}" alt=""></th>
                                    <td><b>Yazılım Mühensidliği</b> </td>
                                    <td> <a type="button" class="btn btn-primary" href=" ">EDİT </a></td>
                                    <td> <a type="reset" href="" class="btn btn-warning">DETAY</a> </a></td>

                                </tr>
                                <tr>
                                    <th scope="row"><img src="{{ asset('site/images/logo/logo.png') }}" alt=""></th>
                                    <td><b> Gıda Mühensidliği</b></td>
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
