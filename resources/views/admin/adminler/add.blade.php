@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-12">
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
            <div class="container-fluid">

                <div class="card border-dark mb-3 w-100">
                    <div class="card-header">
                        <p class="pt-7 text-dark">ADMİN EKLE</p>
                        <a type="button" class="btn btn-warning h-100 mt-4" href='{{ route('adminList') }}'>GERİ DÖN</a>
                    </div>
                    <div class="card-body text-dark">
                        <form action="{{ route('adminEkleProcess') }} " method="Post">
                            <input type="hidden" name="id">
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-hover mt-0">
                                    <tr>
                                        <td>Kullanıcı adı</td>
                                        <td><input class="form-control" type="text" name="userName"></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>
                                            <input class="form-control" type="text" name="email">

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Telefon</th>
                                        <td>
                                            <input class="form-control" type="text" name="phone">

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Şifre</th>
                                        <td>
                                            <input class="form-control" type="text" name="password">

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kullancı Tipi</th>
                                         <td><select class="form-select" name="userType">
                                            <option value="">
                                               
                                            </option>
                                            <option value="admin">
                                                ADMIN
                                            </option>
                                            <option value="superAdmin">
                                                SUPER ADMIN
                                            </option>
                                         
                                           
                                            
                                        </select></td>
                                
                                    </tr>
                                    <tr>
                                        <th>Statu</th>
                                         <td><select class="form-select" name="status">
                                            <option value="">
                                            </option>
                                            <option value="active">
                                                AKTIF
                                            </option>
                                            <option value="passive">
                                               PASIF
                                            </option>
                                          
                                           
                                            
                                        </select></td>
                                
                                    </tr>
                                    <tr class="mt-5">
                                        <td><input class="btn btn-primary" type="submit" value="EKLE">
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
