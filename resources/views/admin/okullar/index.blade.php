@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-10">
        <div class="content-container">


            <div class="card border-dark mb-3 ">
                <div class="card-header">
                    <p class="pt-7 text-primary"><b>YÜKSEK OKULLAR </b></p>
                    <a type="button" class="btn btn-primary h-100 mt-4"
                        href=''>YENI YÜKSEK OKUL EKLE</a>
                </div>
                <div class="card-body text-dark">
                    <div class="table-responsive">
                        <table class="table table-hover table-rounded table-striped gy-7 gs-7">

                            <tbody>

                                <tr>
                                    <th scope="row"><img src="{{ asset('site/images/logo/logo.png') }}" alt=""></th>
                                    <td><b>Yabancı Diller Meslek Yüksek Okulu</b> </td>
                                    <td> <a type="reset" href="{{route('okullarDetay')}}" class="btn btn-warning">DETAY</a> </a></td>

                                </tr>
                                <tr>
                                    <th scope="row"><img src="{{ asset('site/images/logo/logo.png') }}" alt=""></th>
                                    <td><b>Sağlık Hizmetleri Meslek Yüksek Okulu</b> </td>
                                    <td> <a type="reset" href="" class="btn btn-warning">DETAY</a> </a></td>

                                </tr>
                                <tr>
                                    <th scope="row"><img src="{{ asset('site/images/logo/logo.png') }}" alt=""></th>
                                    <td><b> Sosyal Bilimler Meslek Yüksek Okulu</b> </td>
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
