@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-12">
        <div class="content-container">
            <div class="container-fluid">

                <div class="card border-dark mb-3 w-100">
                    <div class="card-header">
                        <p class="pt-7 text-dark">DUYURU EKLE</p>
                        <a type="button" class="btn btn-warning h-100 mt-4"
                        href='{{ route('duyurular') }}'>GERİ DÖN</a>
                    </div>
                    <div class="card-body text-dark">
                        <form action="{{ route('duyurular')}} " method="">
                            <input type="hidden" name="id">
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-hover mt-0">
                                    <tr>
                                        <th>Duyuru Metni</th>
                                        <td>
                                            <textarea class="form-control ckeditor" name="shortDescription_tr"></textarea>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kategori</th>
                                        <td><select class="form-select" name="status">
                                            <option value="">
                                                LÜTFEN BİR KATEGORİ BELİRLEYİN
                                            </option>
                                                <option value="EĞİTİM">
                                                    EĞİTİM
                                                </option>
                                                <option value="AKADEMİK">
                                                    AKADEMİK
                                                </option>
                                                <option value="GENEL">
                                                    GENEL
                                                </option>
                                                <option value="ETKİNLİK">
                                                    ETKİNLİK
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
