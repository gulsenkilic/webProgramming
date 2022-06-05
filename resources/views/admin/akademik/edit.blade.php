@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-12">
        <div class="content-container">
            <div class="container-fluid">

                <div class="card border-dark mb-3 w-100">
                    <div class="card-header">
                        <p class="pt-7 text-dark">AKADEMİK PERSONEL GÜNCELLEME</p>
                        <a type="button" class="btn btn-warning h-100 mt-4"
                        href='{{ route('akademikPanel') }}'>GERİ DÖN</a>
                    </div>
                    <div class="card-body text-dark">
                        
                        <form action="{{ route('processAkademikEdit') }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="{{$personel->id}}">
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-hover mt-0">
                                    <tr>
                                        <th>Resim</th>
                                        <td>
                                        
                                            <img id="defaultPicture" width="150px"
                                                src="{{asset($personel->resim)}}">
                                            <input type="hidden" name="oldImage" value="{{ @$personel->resim }}">
                                            <img width="150px" id="newImage" />
                                            <input accept="image/*" class="form-control" name="newImage" type='file'
                                                onchange="loadFile(event)">
                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Unvan</th>
                                        <td><input name="unvan" class="form-control" type="text" value="{{$personel->unvan}}"></td> 
                                    </tr>
                                    <tr>
                                        <th>Ad - Soyad</th>
                                        <td><input name="ad_soyad" class="form-control" type="text" value="{{$personel->ad_soyad}}"></td> 
                                    </tr>
                                    <tr>
                                        <th>Mail</th>
                                        <td><input name="mail" class="form-control" type="text" value="{{$personel->mail}}"></td> 
                                    </tr>
                                    <tr>
                                        <th>Tel</th>
                                        <td><input name="tel" class="form-control" type="text" value="{{$personel->tel}}"></td> 
                                    </tr>
                                    <tr>
                                        <th>Eğitim Bilgileri</th>
                                        <td>
                                            <textarea class="form-control ckeditor" name="egitim_bilgileri">{{$personel->egitim_bilgileri}}</textarea>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Sosyal Medya</th>
                                        <td>
                                            <textarea class="form-control ckeditor" name="sosyal_medya">{{$personel->sosyal_medya}}</textarea>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Avesis</th>
                                        <td><input name="avesis" class="form-control" type="text" value="{{$personel->avesis}}"></td> 
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th>Yayınlanacağı Sayfa</th>
                                        <td><select class="form-select" name="konum">
                                            <option {{ @$personel->konum == 'ana_sayfa' ? 'selected' : '' }} value="ana_sayfa">
                                                ANA SAYFA
                                            </option>
                                            <option  {{ @$personel->konum == 'muhendislik_fak' ? 'selected' : '' }} value="muhendislik_fak">
                                                MÜHENDİSLİK FAKULTESİ
                                            </option>
                                           
                                            <option {{ @$personel->konum == 'edebiyat_fak' ? 'selected' : '' }} value="edebiyat_fak">
                                                EDEBİYAT FAKULTESİ
                                            </option>

                                            <option {{ @$personel->konum == 'fen_fak' ? 'selected' : '' }} value="fen_fak">
                                                FEN FAKULTESİ
                                            </option>
                                            <option {{ @$personel->konum == 'fen_fak' ? 'selected' : '' }} value="fen_fak">
                                                YABANCI DİLLER MESLEK Y.O
                                            </option>
                                           
                                            <option  {{ @$personel->konum == 'bilgisayar_muh' ? 'selected' : '' }} value="bilgisayar_muh">
                                                BİLGİSAYAR MUHENDİSLİĞİ
                                            </option>
                                            <option  {{ @$personel->konum == 'endustri_muh' ? 'selected' : '' }} value="endustri_muh">
                                                ENDUTIRI MUHENDİSLİĞİ
                                            </option>
                                           
                                            <option {{ @$personel->konum == 'makina_muh' ? 'selected' : '' }} value="makina_muh">
                                                MAKİNA MUHENDİSLİĞİ
                                            </option>
                                                
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <th>Statü</th>
                                        <td><select class="form-select" name="statu">
                                            <option {{ @$personel->statu == 'aktif' ? 'selected' : '' }} value="aktif">
                                                AKTİF
                                             </option>
                                             <option {{ @$personel->statu == 'pasif' ? 'selected' : '' }} value="pasif">
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
