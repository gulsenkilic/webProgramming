@extends('site.layouts.index')
@section('content')
    <div class="container pt-lg-10 mb-6">
        <nav aria-label="breadcrumb" class="bg-soft-navy p-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('homepage')}}">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="#">Haberler</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$haber->slug}}</li>
            </ol>
        </nav>
        <h1 class="text-center display-4 pt-2 mb-3">{{$haber->baslik}}</h1>
        {!! $haber->metin !!}
       
    </div>
@endsection
