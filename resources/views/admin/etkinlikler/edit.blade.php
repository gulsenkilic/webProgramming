@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-12">
        <div class="content-container">
            <div class="container-fluid">

                <div class="card border-dark mb-3 w-100">
                    <div class="card-header">
                        <p class="pt-7 text-dark">ETKİNLİK TARİHİ: {{$etkinlik->tarih}}</p>
                        <a type="button" class="btn btn-warning h-100 mt-4"
                        href='{{ route('etkinlikler') }}'>GERİ DÖN</a>
                    </div>
                    <div class="card-body text-dark">
                        <form action="{{ route('processEtkinlikEdit') }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="{{$etkinlik->id}}">
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-hover mt-0">
                                    <tr>
                                        <th>Slug</th>
                                        <td><input name="slug" class="form-control" type="text" value="{{$etkinlik->slug}}"></td> 
                                    </tr>
                                    <tr>
                                        <th>Başlık</th>
                                        <td><input name="baslik" class="form-control" type="text" value="{{$etkinlik->baslik}}"></td> 
                                    </tr>
                                    <tr>
                                        <th>Etkinlik Metni</th>
                                        <td>
                                            <textarea class="form-control ckeditor" name="metin">{{$etkinlik->metin}}</textarea>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Resim</th>
                                        <td>
                                        
                                            <img id="defaultPicture" width="150px"
                                                src="{{asset($etkinlik->resim)}}">
                                            <input type="hidden" name="oldImage" value="{{ @$etkinlik->resim }}">
                                            <img width="150px" id="newImage" />
                                            <input accept="image/*" class="form-control" name="newImage" type='file'
                                                onchange="loadFile(event)">
                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kategori</th>
                                        <td><select class="form-select" name="kategori">
                                            <option {{ @$etkinlik->kategori == 'egitim' ? 'selected' : '' }}  value="egitim">
                                                EĞİTİM
                                            </option>
                                            <option {{ @$etkinlik->kategori == 'universite' ? 'selected' : '' }} value="universite">
                                                ÜNİVERSİTE
                                            </option>
                                            <option {{ @$etkinlik->kategori == 'sosyal' ? 'selected' : '' }} value="sosyal">
                                                SOSYAL
                                            </option>
                                            <option {{ @$etkinlik->kategori == 'basarilar' ? 'selected' : '' }} value="basarilar">
                                                BAŞARILAR
                                            </option>
                                            <option {{ @$etkinlik->kategori == 'diger' ? 'selected' : '' }} value="diger">
                                                DİĞER
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <th>Yayınlanacağı Sayfa</th>
                                        <td><select class="form-select" name="konum">
                                            <option {{ @$etkinlik->konum == 'ana_sayfa' ? 'selected' : '' }} value="ana_sayfa">
                                                ANA SAYFA
                                            </option>
                                            <option  {{ @$etkinlik->konum == 'muhendislik_fak' ? 'selected' : '' }} value="muhendislik_fak">
                                                MÜHENDİSLİK FAKULTESİ
                                            </option>
                                           
                                            <option {{ @$etkinlik->konum == 'edebiyat_fak' ? 'selected' : '' }} value="edebiyat_fak">
                                                EDEBİYAT FAKULTESİ
                                            </option>

                                            <option {{ @$etkinlik->konum == 'fen_fak' ? 'selected' : '' }} value="fen_fak">
                                                FEN FAKULTESİ
                                            </option>
                                            <option {{ @$etkinlik->konum == 'fen_fak' ? 'selected' : '' }} value="fen_fak">
                                                YABANCI DİLLER MESLEK Y.O
                                            </option>
                                           
                                            <option  {{ @$etkinlik->konum == 'bilgisayar_muh' ? 'selected' : '' }} value="bilgisayar_muh">
                                                BİLGİSAYAR MUHENDİSLİĞİ
                                            </option>
                                            <option  {{ @$etkinlik->konum == 'endustri_muh' ? 'selected' : '' }} value="endustri_muh">
                                                ENDUTIRI MUHENDİSLİĞİ
                                            </option>
                                           
                                            <option {{ @$etkinlik->konum == 'makina_muh' ? 'selected' : '' }} value="makina_muh">
                                                MAKİNA MUHENDİSLİĞİ
                                            </option>
                                                
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <th>Statü</th>
                                        <td><select class="form-select" name="statu">
                                            <option {{ @$etkinlik->statu == 'aktif' ? 'selected' : '' }} value="aktif">
                                                AKTİF
                                             </option>
                                             <option {{ @$etkinlik->statu == 'pasif' ? 'selected' : '' }} value="pasif">
                                                 PASİF
                                             </option>
                                                
                                            </select></td>
                                    </tr>

                                    <tr class="mt-5">
                                        <td><input class="btn btn-primary" type="submit" value="GÜNCELLE">
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
