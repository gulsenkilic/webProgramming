@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-12">
        <div class="content-container">
            <div class="container-fluid">

                <div class="card border-dark mb-3 w-100">
                    <div class="card-header">
                        <p class="pt-7 text-dark">DUYURU TARİHİ: <b>{{$duyuru->created_at}}</b></p>
                        <a type="button" class="btn btn-warning h-100 mt-4"
                        href='{{ route('duyurular') }}'>GERİ DÖN</a>   
                    </div>
                    <div class="card-body text-dark">
                        <form action="{{ route('processDuyuruEdit')}} " method="POST">
                            <input type="hidden" name="id" value="{{$duyuru->id}}">
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-hover mt-0">
                                    <tr>
                                        <th>Slug</th>
                                        <td><input name="slug" class="form-control" type="text" value="{{$duyuru->slug}}"></td> 
                                    </tr>
                                    <tr>
                                        <th>Başlık</th>
                                        <td><input name="baslik" class="form-control" type="text" value="{{$duyuru->baslik}}"></td> 
                                    </tr>
                                    <tr>
                                        <th>Duyuru Metni</th>
                                        <td>
                                            <textarea class="form-control ckeditor" name="metin" >{{$duyuru->metin}}</textarea>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kategori</th>
                                        <td><select class="form-select" name="kategori">
                                                
                                                <option {{ @$duyuru->kategori == 'egitim' ? 'selected' : '' }}  value="egitim">
                                                    EĞİTİM
                                                </option>
                                                <option {{ @$duyuru->kategori == 'universite' ? 'selected' : '' }} value="universite">
                                                    ÜNİVERSİTE
                                                </option>
                                                <option {{ @$duyuru->kategori == 'sosyal' ? 'selected' : '' }} value="sosyal">
                                                    SOSYAL
                                                </option>
                                                <option {{ @$duyuru->kategori == 'basarilar' ? 'selected' : '' }} value="basarilar">
                                                    BAŞARILAR
                                                </option>
                                                <option {{ @$duyuru->kategori == 'diger' ? 'selected' : '' }} value="diger">
                                                    DİĞER
                                                </option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <th>Yayınlanacağı Sayfa</th>
                                        <td><select class="form-select" name="konum">
                                                
                                                <option {{ @$duyuru->konum == 'ana_sayfa' ? 'selected' : '' }} value="ana_sayfa">
                                                    ANA SAYFA
                                                </option>
                                                <option  {{ @$duyuru->konum == 'muhendislik_fak' ? 'selected' : '' }} value="muhendislik_fak">
                                                    MÜHENDİSLİK FAKULTESİ
                                                </option>
                                               
                                                <option {{ @$duyuru->konum == 'edebiyat_fak' ? 'selected' : '' }} value="edebiyat_fak">
                                                    EDEBİYAT FAKULTESİ
                                                </option>

                                                <option {{ @$duyuru->konum == 'fen_fak' ? 'selected' : '' }} value="fen_fak">
                                                    FEN FAKULTESİ
                                                </option>
                                                <option {{ @$duyuru->konum == 'fen_fak' ? 'selected' : '' }} value="fen_fak">
                                                    YABANCI DİLLER MESLEK Y.O
                                                </option>
                                               
                                                <option  {{ @$duyuru->konum == 'bilgisayar_muh' ? 'selected' : '' }} value="bilgisayar_muh">
                                                    BİLGİSAYAR MUHENDİSLİĞİ
                                                </option>
                                                <option  {{ @$duyuru->konum == 'endustri_muh' ? 'selected' : '' }} value="endustri_muh">
                                                    ENDUTIRI MUHENDİSLİĞİ
                                                </option>
                                               
                                                <option {{ @$duyuru->konum == 'makina_muh' ? 'selected' : '' }} value="makina_muh">
                                                    MAKİNA MUHENDİSLİĞİ
                                                </option>
                                                
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <th>Statü</th>
                                        <td><select class="form-select" name="statu">
                                               
                                                <option {{ @$duyuru->statu == 'aktif' ? 'selected' : '' }} value="aktif">
                                                   AKTİF
                                                </option>
                                                <option {{ @$duyuru->statu == 'pasif' ? 'selected' : '' }} value="pasif">
                                                    PASİF
                                                </option>
                                            
                                                
                                            </select></td>
                                    </tr>

                                    <tr class="mt-5">
                                        <td><input class="btn btn-primary h-100 mt-4" type="submit" value="GÜNCELLE">
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
