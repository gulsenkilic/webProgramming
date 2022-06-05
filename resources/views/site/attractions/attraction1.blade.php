@extends('site.layouts.index')
@section('content')
    <div class="container pt-lg-10 mb-6">
        <nav aria-label="breadcrumb" class="bg-soft-navy p-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('homepage')}}">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="#">Etkinler</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$etkinlik->slug}}</li>
            </ol>
        </nav>
        <h1 class="text-center display-4 pt-2 mb-3">{{$etkinlik->baslik}}</h1>
        <hr class="my-3">
        <div class="container">
            
        {!! $etkinlik->metin !!}
        <br>
        </div>
    </div>
@endsection
