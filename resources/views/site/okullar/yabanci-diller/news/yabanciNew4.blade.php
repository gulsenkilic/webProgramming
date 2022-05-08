@extends('site.layouts.index')
@section('content')
@include("site.okullar.yabanci-diller.partial")

<h3 class="text-right">Bütün Proficiency, Placement ve End of Module sınavları sonuçları    </h3> 
<hr class="my-5"> 

    <p class="mt-4"><a href="{{route('homepage')}}">Sınav sonuçlarını görmek için lütfen buraya tıklayınız.</a> </p>


@include("site.okullar.yabanci-diller.partial2")
@endsection