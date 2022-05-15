@extends('admin.layouts.index')
@section('content')
<div class="card-body py-3 mt-10">
    <div class="content-container">
        

        <div class="card border-dark mb-3 ">
            <div class="card-header">
                <p class="pt-7 text-primary"><b>ENSTİTÜLER  </b></p>
                <a type="button" class="btn btn-primary h-100 mt-4"
                    href=''>YENI ENSTİTÜ EKLE</a>
            </div>
            <div class="card-body text-dark">
                <div class="table-responsive">
                    <table class="table table-hover table-rounded table-striped gy-7 gs-7">
                        
                        <tbody>
                           
                                <tr>
                                    <th scope="row"><img src="{{ asset('site/images/logo/logo.png') }}" alt=""></th>
                                    <td> <b>Sağlık Bilimleri Enstitüsü</b> </td>
                                    <td> <a type="button" class="btn btn-primary" href=" ">EDİT </a></td>
                                    <td> <a type="reset" href="" class="btn btn-warning">DETAY</a> </a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><img src="{{ asset('site/images/logo/logo.png') }}" alt=""></th>
                                    <td><b> Sosyal Bilimleri Enstitüsü</b> </td>
                                    <td> <a type="button" class="btn btn-primary" href=" ">EDİT </a></td>
                                    <td> <a type="reset" href="" class="btn btn-warning">DETAY</a> </a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><img src="{{ asset('site/images/logo/logo.png') }}" alt=""></th>
                                    <td><b>Fen Bilimleri Enstitüsü</b>  </td>
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
