@extends('site.layouts.index')
@section('content')
@include("site.fakulteler.muh.partial")
    <h3 class="text-right">Mühendislik ve Doğa Bilimleri Fakültesi Duyurular</h3> 
    <hr class="my-5"> 
       
        <div class="container">
            @foreach ($duyurular as $duyuru)
                  <div class="card mb-6">
                <div class="card-body">
                  <a href="{{route('duyuruDetayPage',['slug'=>$duyuru->slug])}}"> {{$duyuru->baslik}}</a>   </div>
                <div class="card-footer">
                  Ayrıntılar için tıklayınız.
                </div>
            </div>
            
            @endforeach
          
           
        </div>
    

@include("site.fakulteler.muh.partial2")
@endsection