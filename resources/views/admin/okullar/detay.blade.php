@extends('admin.layouts.index')
@section('content')
    <div class="card py-3 mt-10">
        <div class="card border-dark  ">
            <div class="card-header">
                <p class="pt-7 text-primary"><b>YABANCI DILLER MESLEK YUKSEK OKULU </b></p>
                <a type="button" class="btn btn-warning h-75 mt-4" href='{{ route('okullar') }}'>GERİ DÖN</a>
               
            </div>
        </div>
        

        
    </div>
    <div class="card py-3 mt-10">
        <div class="content-container">


            <div class="card border-dark mb-3 ">
                <div class="card-header">
                    <p class="pt-7 text-primary"><b><a href="{{ route('okullarHaber') }}">HABERLER</a> </b></p>
                    <a type="button" class="btn btn-primary h-100 mt-4" href='{{ route('haberEkle') }}'>YENI HABER EKLE</a>
                </div>
             
            </div>
        </div>
    </div>
    <div class="card py-3 mt-10">
        <div class="content-container">


            <div class="card border-dark mb-3 ">
                <div class="card-header">
                    <p class="pt-7 text-primary"><b><a href="{{ route('okullarDuyuru') }}">DUYURULAR</a> </b></p>
                    <a type="button" class="btn btn-primary h-100 mt-4" href='{{ route('haberEkle') }}'>YENI DUYURU
                        EKLE</a>
                </div>
             
            </div>
        </div>
    </div>
    <div class="card py-3 mt-10">
        <div class="content-container">


            <div class="card border-dark mb-3 ">
                <div class="card-header">
                    <p class="pt-7 text-primary"><b><a href="{{ route('okullarAkademik') }}">AKADEMİK KADRO</a> </b></p>
                    <a type="button" class="btn btn-primary h-100 mt-4" href='{{ route('akademikEkle') }}'>YENI PERSONEL
                        EKLE</a>
                </div>
            
            </div>
        </div>
    </div>
    

@endsection
