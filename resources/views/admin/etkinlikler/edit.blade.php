@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-12">
        <div class="content-container">
            <div class="container-fluid">

                <div class="card border-dark mb-3 w-100">
                    <div class="card-header">
                        <p class="pt-7 text-dark">ETKİNLİK TARİHİ: 18/04/2022</p>
                        <a type="button" class="btn btn-warning h-100 mt-4"
                        href='{{ route('etkinlikler') }}'>GERİ DÖN</a>
                    </div>
                    <div class="card-body text-dark">
                        <form action="{{ route('etkinlikler')}} " method="">
                            <input type="hidden" name="id">
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-hover mt-0">
                                    <tr>
                                        <td>Etkinlik Başlığı</td>
                                        <td><input class="form-control" type="text" value="IWA DIPCON 2022 4th Regional Conference on Diffuse Pollution & Eutrophication"></td>
                                    </tr>
                                    <tr>
                                        <th>Etkinlik Metni</th>
                                        <td>
                                            <textarea class="form-control ckeditor" name="shortDescription_tr"></textarea>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Resim</th>
                                        <td><img id="defaultPicture" width="150px"
                                            src="{{asset('site/images/homepage/7.jfif')}}">
                                        <input type="hidden" name="oldImage" value="dfdf">
                                        <img width="150px" id="newImage" />
                                        <input accept="image/*" class="form-control" name="newImage" type='file'
                                            onchange="loadFile(event)" /></td>
                                    </tr>
                                    

                                    <tr class="mt-5">
                                        <td><input class="btn btn-primary" type="submit" value="GUNCELLE">
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
