@extends('site.layouts.index')
@section('content')
    <div class="container pt-lg-10 mb-6">
        <nav aria-label="breadcrumb" class="bg-soft-navy p-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('homepage')}}">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="#">Duyurular</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$duyuru->slug}}</li>
            </ol>
        </nav>
        <h1 class="text-center display-4 pt-2 mb-3">{{$duyuru->baslik}}</h1>
        {!! $duyuru->metin !!}
    </div>
@endsection
