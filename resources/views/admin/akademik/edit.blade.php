@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-12">
        <div class="content-container">
            <div class="container-fluid">

                <div class="card border-dark mb-3 w-100">
                    <div class="card-header">
                        <p class="pt-7 text-dark">AKADEMİK GÜNCELLEME</p>
                        <a type="button" class="btn btn-warning h-100 mt-4"
                        href='{{ route('akademikPanel') }}'>GERİ DÖN</a>
                    </div>
                    <div class="card-body text-dark">
                        <form action="{{ route('akademikPanel')}} " method="">
                            <input type="hidden" name="id">
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-hover mt-0">
                                    <tr>
                                        <td>UNVAN</td>
                                        <td><input class="form-control" type="text" value="PROF. DR."></td>
                                    </tr>
                                    <tr>
                                        <td>AD-SOYAD</td>
                                        <td><input class="form-control" type="text" value=" GÜLŞEN KILIÇ"></td>
                                    </tr>
                                    <tr>
                                        <th>GÖREVİ</th>
                                        <td><select class="form-select" name="status">
                                           
                                                <option value="EĞİTİM">
                                                    REKTÖR
                                                </option>
                                                <option value="AKADEMİK">
                                                    REKTÖR YARDIMCISI
                                                </option>
                                                <option value="GENEL">
                                                    GENEL SEKRETER
                                                </option>
                                                <option value="ETKİNLİK">
                                                    MUHENDİSLİK FAKULTESI DEKANI
                                                </option>
                                                <option value="ETKİNLİK">
                                                    DİŞ HEKİMLİĞİ FAKULTESI DEKANI
                                                </option>
                                                <option value="ETKİNLİK">
                                                    EĞİTİM FAKULTESI DEKANI
                                                </option>
                                                <option value="ETKİNLİK">
                                                    FEN FAKULTESI DEKANI
                                                </option>
                                                <option value="ETKİNLİK">
                                                    FEM EDEBİYAT FAKULTESI DEKANI
                                                </option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>TELEFON</td>
                                        <td><input class="form-control" type="text" value="0212 767 44 77"></td>
                                    </tr>
                                    <tr>
                                        <td>EMAIL</td>
                                        <td><input class="form-control" type="text" value="gulsen@gku.edu.tr"> </td>
                                    </tr>
                                    <tr>
                                        <td>AVESIS LINK</td>
                                        <td><input class="form-control" type="text" value="http://akademik.gku.edu.tr/web/gku"></td>
                                    </tr>
                                    <tr>
                                        <th>Resim</th>
                                        <td><input name="image" class="form-control" type="file"></td>
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
