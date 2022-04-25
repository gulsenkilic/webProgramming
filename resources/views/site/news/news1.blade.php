@extends('site.layouts.index')
@section('content')
    <div class="container pt-lg-10 mb-6">
        <nav aria-label="breadcrumb" class="bg-soft-navy p-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('homepage')}}">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="#">Haberler</a></li>
                <li class="breadcrumb-item active" aria-current="page">2022-2023 Yılı Erasmus Öğrenci Hareketliliği Başvuruları</li>
            </ol>
        </nav>
        <h1 class="text-center display-4 pt-2 mb-3">2022-2023 Yılı Erasmus Öğrenci Hareketliliği Başvuruları</h1>
        <hr class="my-3">
        <div class="container">
            <p>Sevgili Öğrencilerimiz,</p>
            <p>Hayallerinizi gerçekleştirirken kendinizi de geliştireceğiniz; akademik donanımızı artıracağınız, yabancı dilinizi geliştireceğiniz, farklı kültürlerle tanışıp dünya vatandaşı olma fırsatları sunan Erasmus+ Programı başvurularınızı bekliyor…</p>
        <b>Online Başvuru Dönemi 14-28 Şubat tarihleri arasındadır.</b>
        <p>Detaylı bilgiye  www.erasmus.yildiz.edu.tr  sayfamızdan ulaşabilirsiniz.</p>
        <p>Başarılı bir dönem geçirmeniz dileğiyle…</p>
        <img src="site/images/homepage/3.jpg" alt="" style="width: 100%">
        </div>
    </div>
@endsection
