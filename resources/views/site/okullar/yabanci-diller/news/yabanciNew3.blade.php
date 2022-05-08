@extends('site.layouts.index')
@section('content')
@include("site.okullar.yabanci-diller.partial")

<h3 class="text-right">YLSY Bursiyerleri 2021/1. Dönem için İngilizce Kursu Bilgilendirmesi</h3> 
<hr class="my-5"> 

    <p class="mt-4"><a href="{{route('homepage')}}">Bütün sınavlarla ilgili bilgilendirmeler için lütfen buraya tıklayınız.</a></p>


@include("site.okullar.yabanci-diller.partial2")
@endsection