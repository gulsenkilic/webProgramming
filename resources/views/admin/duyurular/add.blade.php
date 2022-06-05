@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-12">
        <div class="content-container">
            <div class="container-fluid">

                <div class="card border-dark mb-3 w-100">
                    <div class="card-header">
                        <p class="pt-7 text-dark">DUYURU EKLE</p>
                        <a type="button" class="btn btn-warning h-100 mt-4" href='{{ route('duyurular') }}'>GERİ DÖN</a>
                    </div>
                    <div class="card-body text-dark">
                        <form action="{{ route('processDuyuruEkle') }} " method="POST">
                            <input type="hidden" name="id">
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-hover mt-0">
                                    <tr>
                                        <th>Slug</th>
                                        <td><input name="slug" class="form-control" type="text"></td> 
                                    </tr>
                                    <tr>
                                        <th>Başlık</th>
                                        <td><input name="baslik" class="form-control" type="text"></td> 
                                    </tr>
                                    <tr>
                                        <th>Duyuru Metni</th>
                                        <td>
                                            <textarea class="form-control ckeditor" name="metin"></textarea>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kategori</th>
                                        <td><select class="form-select" name="kategori">
                                                <option value="">
                                                </option>
                                                <option value="egitim">
                                                    EĞİTİM
                                                </option>
                                                <option value="universite">
                                                    ÜNİVERSİTE
                                                </option>
                                                <option value="sosyal">
                                                    SOSYAL
                                                </option>
                                                <option value="basarilar">
                                                    BAŞARILAR
                                                </option>
                                                <option value="diger">
                                                    DİĞER
                                                </option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <th>Yayınlanacağı Sayfa</th>
                                        <td><select class="form-select" name="konum">
                                                <option value="">
                                                   
                                                </option>
                                                <option value="ana_sayfa">
                                                    ANA SAYFA
                                                </option>
                                                <option value="muhendislik_fak">
                                                    MÜHENDİSLİK FAKULTESİ
                                                </option>
                                               
                                                <option value="edebiyat_fak">
                                                    EDEBİYAT FAKULTESİ
                                                </option>

                                                <option value="fen_fak">
                                                    FEN FAKULTESİ
                                                </option>
                                                <option value="yabanci_diller">
                                                    YABANCI DİLLER MESLEK Y.O
                                                </option>
                                               
                                                <option value="bilgisayar_muh">
                                                    BİLGİSAYAR MUHENDİSLİĞİ
                                                </option>
                                                <option value="endustri_muh">
                                                    ENDUTIRI MUHENDİSLİĞİ
                                                </option>
                                               
                                                <option value="makina_muh">
                                                    MAKİNA MUHENDİSLİĞİ
                                                </option>
                                                
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <th>Statü</th>
                                        <td><select class="form-select" name="statu">
                                                <option value="">
                                                    
                                                </option>
                                                <option value="aktif">
                                                   AKTİF
                                                </option>
                                                <option value="pasif">
                                                    PASİF
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
