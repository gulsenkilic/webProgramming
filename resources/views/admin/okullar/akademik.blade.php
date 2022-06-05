@extends('admin.layouts.index')
@section('content')
<div class=" mt-10">
    <div class="card border-dark  ">
        <div class="card-header">
            <p class="pt-7 text-primary"><b>YABANCI DILLER MESLEK YUKSEK OKULU </b></p>
            <a type="button" class="btn btn-warning h-75 mt-4" href='{{ route('okullarDetay') }}'>GERİ DÖN</a>

        </div>
    </div>
</div>

<div class="card-body ">
    <div class="content-container">


        <div class="card border-dark mb-3 ">
            <div class="card-header">
                <p class="pt-7 text-primary"><b>AKADEMİK KADRO </b></p>
                <a type="button" class="btn btn-primary h-100 mt-4" href='{{ route('akademikEkle') }}'>YENI PERSONEL
                    EKLE</a>
            </div>
            <div class="card-body text-dark">
                <div class="table-responsive">
                    <table class="table table-hover table-rounded table-striped table-bordered gy-7 gs-7">
                        <thead>
                            <tr>
                                <th></th>
                                <th>UNVAN-AD-SOYAD</th>
                                <th>GÖREVİ</th>

                                <th>TEL</th>
                                <th>EMAIL</th>
                                <th>AVESIS LINK</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($personeller as $personel)
                            <tr>
                                <td><img src="{{asset($personel->resim)}}" width="150px" alt=""  /></td>
                                <td>{{$personel->ad_soyad}}</td>
                                <td> <b>{{$personel->unvan}}</b> </td>
                                <td>{{$personel->tel}}</td>
                                <td>{{$personel->mail}}</td>
                                <td><a href="{{$personel->avesis}}">{{$personel->avesis}}</a></td>
                                <td> <a type="button" class="btn btn-primary" href="{{route('akademikEdit',['id'=>$personel->id])}} ">EDİT </a></td>
                                <td> <a type="reset" href="{{route('personelSil',['id'=>$personel->id])}}" class="btn btn-warning" onclick="return confirm('Emin misiniz?')">SIL</a> </a></td>

                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection