@extends('site.layouts.index')
@section('content')
@include("site.fakulteler.muh.partial")
    <h3 class="text-right">Mühendislik ve Doğa Bilimleri Fakültesi Duyurular</h3> 
    <hr class="my-5"> 
        <div class="card mb-6">
            <div class="card-body">
              <a href="{{route('muhDuyurular1')}}">  2021-2022 Akademik Yılı Güz Dönemi Azami Süresini Dolduran Öğrenciler için Ek Sınav Programı</a>   </div>
            <div class="card-footer">
              Ayrıntılar için tıklayınız.
            </div>
        </div>
        <div class="card mb-6 ">
            <div class="card-body">
            <a href="{{route('muhDuyurular2')}}">2020-2021 Akademik Yılı Bahar Dönemi Sonu Ek Sınav Programı</a> 
            </div>
            <div class="card-footer">
                Ayrıntılar için tıklayınız.
            </div>
        </div>
        <div class="card mb-6 ">
            <div class="card-body">
                <a href="{{route('muhDuyurular3')}}">2019-2020 Bahar Dönemi Final Bütünleme Listesi Programı</a> </div>
            <div class="card-footer">
                Ayrıntılar için tıklayınız.
            </div>
        </div>
       
        <div class="card mb-6 ">
            <div class="card-body">
                <a href="{{route('yabanciDuyurular3')}}">4 Nisan 2022 Tarihli Toronto İngilizce Yeterlik (Proficiency) Sınavı Sonuçları</a> </div>
            <div class="card-footer">
                Ayrıntılar için tıklayınız.
            </div>
        </div>

@include("site.fakulteler.muh.partial2")
@endsection