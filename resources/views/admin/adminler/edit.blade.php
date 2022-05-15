@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-12">
        <div class="content-container">
            <div class="container-fluid">

                <div class="card border-dark mb-3 w-100">
                    <div class="card-header">
                        <p class="pt-7 text-dark">ADMİN EDIT</p>
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
                                        <td>gulsen123</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>
                                            glsnklc27@gmail.com

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Telefon</th>
                                        <td>
                                            0536 365 36 33

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kullancı Tipi</th>
                                         <td><select class="form-select" name="status">
                                            
                                            <option value="ADMIN">
                                                ADMIN
                                            </option>
                                            <option value=" SUPER ADMIN" selected>
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
                                           
                                            <option value="AKTIF" selected>
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
