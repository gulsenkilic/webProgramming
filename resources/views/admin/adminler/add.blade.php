@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-12">
        <div class="content-container">
            <div class="container-fluid">

                <div class="card border-dark mb-3 w-100">
                    <div class="card-header">
                        <p class="pt-7 text-dark">ADMİN EKLE</p>
                        <a type="button" class="btn btn-warning h-100 mt-4" href='{{ route('adminList') }}'>GERİ DÖN</a>
                    </div>
                    <div class="card-body text-dark">
                        <form action="{{ route('adminList') }} " method="">
                            <input type="hidden" name="id">
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-hover mt-0">
                                    <tr>
                                        <td>Kullanıcı adı</td>
                                        <td><input class="form-control" type="text"></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>
                                            <input class="form-control" type="text">

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Telefon</th>
                                        <td>
                                            <input class="form-control" type="text">

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kullancı Tipi</th>
                                         <td><select class="form-select" name="status">
                                            <option value="">
                                                LÜTFEN BİR SEÇİM YAPIN
                                            </option>
                                            <option value="ADMIN">
                                                ADMIN
                                            </option>
                                            <option value=" SUPER ADMIN">
                                                SUPER ADMIN
                                            </option>
                                            <option value="USER ADMIN">
                                                USER ADMIN
                                            </option>
                                           
                                            
                                        </select></td>
                                
                                    </tr>
                                    <tr>
                                        <th>Statu</th>
                                         <td><select class="form-select" name="status">
                                            <option value="">
                                                LÜTFEN BİR SEÇİM YAPIN
                                            </option>
                                            <option value="AKTIF">
                                                AKTIF
                                            </option>
                                            <option value="PASIF">
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
