@extends('site.layouts.index')
@section('content')
    <div class="container pt-lg-10 mb-6">
        <nav aria-label="breadcrumb" class="bg-soft-navy p-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('homepage')}}">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="#">Duyurular</a></li>
                <li class="breadcrumb-item active" aria-current="page">Olumsuz Hava Koşulları Nedeniyle Eğitime Ara </li>
            </ol>
        </nav>
        <h1 class="text-center display-4 pt-2 mb-3">Olumsuz Hava Koşulları Nedeniyle 24-25 Ocak 2022 Tarihlerinde Eğitime Ara Verilmiştir</h1>
        <hr class="my-3">
        <div class="container justify-content-center">
            <p>İstanbul'daki olumsuz hava şartları nedeniyle <b> Ocak 2022 (Pazartesi-Salı) tarihlerinde</b> eğitime ara verilmiştir.  </p>

             <p>   Bu tarihlerde yapılacak dersler ve sınavlar ileri bir tarihe ertelenmiştir.</p>
           <h6>Gülşen Kılıç Üniversitesi Rektörlüğü</h6>
        </div>
    </div>
@endsection
