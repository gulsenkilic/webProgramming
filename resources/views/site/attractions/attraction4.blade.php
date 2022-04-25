@extends('site.layouts.index')
@section('content')
    <div class="container pt-lg-10 mb-6">
        <nav aria-label="breadcrumb" class="bg-soft-navy p-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('homepage')}}">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="#">Etkinlikler</a></li>
                <li class="breadcrumb-item active" aria-current="page">13. Gelişim Girişim Günleri</li>
            </ol>
        </nav>
        <h1 class="text-center display-4 pt-2 mb-3">13. Gelişim Girişim Günleri</h1>
        <hr class="my-3">
        <div class="container">
          
        <img src="site/images/homepage/10.jfif" alt="" style="width: 100%">
        </div>
    </div>
@endsection
