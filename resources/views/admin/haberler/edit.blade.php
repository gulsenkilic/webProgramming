@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-12">
        <div class="content-container">
            <div class="container-fluid">

                <div class="card border-dark mb-3 w-100">
                    <div class="card-header">
                        <p class="pt-7 text-dark">HABER EKLEME TARİHİ: <b>{{$haber->created_at}}</b></p>
                        <a type="button" class="btn btn-warning h-100 mt-4"
                        href='{{ route('haberler') }}'>GERİ DÖN</a>
                       
                    </div>
                    <div class="card-body text-dark">
                        <form action="{{ route('processHaberEdit') }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="{{$haber->id}}">
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-hover mt-0">
                                    <tr>
                                        <th>Slug</th>
                                        <td><input name="slug" class="form-control" type="text" value="{{$haber->slug}}"></td> 
                                    </tr>
                                    <tr>
                                        <th>Başlık</th>
                                        <td><input name="baslik" class="form-control" type="text" value="{{$haber->baslik}}"></td> 
                                    </tr>
                                    <tr>
                                        <th>Haber Metni</th>
                                        <td>
                                            <textarea class="form-control ckeditor" name="metin">{{$haber->metin}}</textarea>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Resim</th>
                                        <td>
                                        
                                            <img id="defaultPicture" width="150px"
                                                src="{{asset($haber->resim)}}">
                                            <input type="hidden" name="oldImage" value="{{ @$haber->resim }}">
                                            <img width="150px" id="newImage" />
                                            <input accept="image/*" class="form-control" name="newImage" type='file'
                                                onchange="loadFile(event)">
                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kategori</th>
                                        <td><select class="form-select" name="kategori">
                                            <option {{ @$haber->kategori == 'egitim' ? 'selected' : '' }}  value="egitim">
                                                EĞİTİM
                                            </option>
                                            <option {{ @$haber->kategori == 'universite' ? 'selected' : '' }} value="universite">
                                                ÜNİVERSİTE
                                            </option>
                                            <option {{ @$haber->kategori == 'sosyal' ? 'selected' : '' }} value="sosyal">
                                                SOSYAL
                                            </option>
                                            <option {{ @$haber->kategori == 'basarilar' ? 'selected' : '' }} value="basarilar">
                                                BAŞARILAR
                                            </option>
                                            <option {{ @$haber->kategori == 'diger' ? 'selected' : '' }} value="diger">
                                                DİĞER
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <th>Yayınlanacağı Sayfa</th>
                                        <td><select class="form-select" name="konum">
                                            <option {{ @$haber->konum == 'ana_sayfa' ? 'selected' : '' }} value="ana_sayfa">
                                                ANA SAYFA
                                            </option>
                                            <option  {{ @$haber->konum == 'muhendislik_fak' ? 'selected' : '' }} value="muhendislik_fak">
                                                MÜHENDİSLİK FAKULTESİ
                                            </option>
                                           
                                            <option {{ @$haber->konum == 'edebiyat_fak' ? 'selected' : '' }} value="edebiyat_fak">
                                                EDEBİYAT FAKULTESİ
                                            </option>

                                            <option {{ @$haber->konum == 'fen_fak' ? 'selected' : '' }} value="fen_fak">
                                                FEN FAKULTESİ
                                            </option>
                                            <option {{ @$haber->konum == 'fen_fak' ? 'selected' : '' }} value="fen_fak">
                                                YABANCI DİLLER MESLEK Y.O
                                            </option>
                                           
                                            <option  {{ @$haber->konum == 'bilgisayar_muh' ? 'selected' : '' }} value="bilgisayar_muh">
                                                BİLGİSAYAR MUHENDİSLİĞİ
                                            </option>
                                            <option  {{ @$haber->konum == 'endustri_muh' ? 'selected' : '' }} value="endustri_muh">
                                                ENDUTIRI MUHENDİSLİĞİ
                                            </option>
                                           
                                            <option {{ @$haber->konum == 'makina_muh' ? 'selected' : '' }} value="makina_muh">
                                                MAKİNA MUHENDİSLİĞİ
                                            </option>
                                                
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <th>Statü</th>
                                        <td><select class="form-select" name="statu">
                                            <option {{ @$haber->statu == 'aktif' ? 'selected' : '' }} value="aktif">
                                                AKTİF
                                             </option>
                                             <option {{ @$haber->statu == 'pasif' ? 'selected' : '' }} value="pasif">
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
