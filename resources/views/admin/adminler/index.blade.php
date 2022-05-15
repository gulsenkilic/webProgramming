@extends('admin.layouts.index')
@section('content')
<div class="card-body py-3 mt-10">
    <div class="content-container">


        <div class="card border-dark mb-3 ">
            <div class="card-header">
                <p class="pt-7 text-primary"><b>ADMINLER </b></p>
                <a type="button" class="btn btn-primary h-100 mt-4"
                    href='{{route('adminEkle')}}'>YENI ADMIN  EKLE</a>
            </div>
            <div class="card-body text-dark">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col"><b>ID</b></th>
                                <th scope="col"><b>KULLANICI ADI</b></th>
                                <th scope="col"><b>EMAIL</b></th>
                                <th scope="col"><b>TELEFON</b></th>
                                <th scope="col"><b>KULLANICI TİPİ</b></th>
                                <th scope="col"><b>STATU</b></th>
                                <th scope="col"><b>GUNCELLE</b></th>
                            </tr>
                        </thead>
                        <tbody>
                
                            <tr>
                                <th scope="row">10</th>
                                <td>gulsen123</td>
                                <td>glsnklc27@gmail.com</td>
                                <td>0536 365 36 33</td>
                                <td>SUPER ADMIN</td>
                                <td>AKTİF</td>
                <td> <a type="button" class="btn btn-primary" href="{{route('adminEdit')}} ">EDİT </a></td>
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td>admin123</td>
                                <td>admin123@gmail.com</td>
                                <td>0536 396 36 53</td>
                                <td>SUPER ADMIN</td>
                                <td>AKTİF</td>
                <td> <a type="button" class="btn btn-primary" href="{{route('adminEdit')}} ">EDİT </a></td>
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td>sema-125</td>
                                <td>smnr@gmail.com</td>
                                <td>0539 578 32 11</td>
                                <td> ADMIN</td>
                                <td>AKTİF</td>
                <td> <a type="button" class="btn btn-primary" href="{{route('adminEdit')}} ">EDİT </a></td>
                            </tr>
                            <tr>
                                <th scope="row">14</th>
                                <td>yfsd123</td>
                                <td>ysf7@gmail.com</td>
                                <td>0639 895 36 55</td>
                                <td>ADMIN</td>
                                <td>Pasif</td>
                <td> <a type="button" class="btn btn-primary" href="{{route('adminEdit')}} ">EDİT </a></td>
                            </tr>
                
                        </tbody>
                    </table>
                
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
