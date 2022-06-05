@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-10">
        <div class="content-container">
            @if (Session::has('message'))
            <div class="alert alert-danger alert-icon alert-dismissible fade show mt-3" role="alert">
                {{ Session::get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="card border-dark mb-3 ">
                <div class="card-header">
                    <p class="pt-7 text-primary"><b>ADMINLER </b></p>
                    <a type="button" class="btn btn-primary h-100 mt-4" href='{{ route('adminEkle') }}'>YENI ADMIN EKLE</a>
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
                                    <th scope="col"><b>SON LOGIN IP</b></th>
                                    <th scope="col"><b>SON LOGIN DATE</b></th>
                                    <th scope="col"><b>STATU</b></th>
                                    <th scope="col"><b>GUNCELLE</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($adminler as $admin)
                                    <tr>
                                    <th scope="row">{{$admin->id}}</th>
                                    <td>{{$admin->userName}}</td>
                                    <td>{{$admin->email}}</td>
                                    <td>{{$admin->phone}}</td>
                                    <td>{{$admin->userType}}</td>
                                    <td>{{$admin->lastLoginIP}}</td>
                                    <td>{{$admin->lastLoginDate}}</td>
                                    <td>{{$admin->status}}</td>
                                    <td> <a type="button" class="btn btn-primary" href="{{ route('adminEdit',['id'=>$admin->id]) }} ">EDİT </a>
                                    </td>
                                </tr>
                                @endforeach
                                


                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
