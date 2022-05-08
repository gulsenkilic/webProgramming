@extends('site.layouts.index')
@section('content')
@include("site.okullar.yabanci-diller.partial")

<h3 class="text-right">4. Modül Sınıf Listeleri</h3> 
<hr class="my-5"> 

<h5 class="text-center">Hazırlık programı 4. modül derslerine hangi sınıfta devam edeceğinizi görmek için buraya tıklayınız.</h5>
<p class="mt-4">Yukarıdaki listeden sınıf kodunuzu öğrendikten sonra aşağıdaki tabloda haftalık ders programınızı görebilirsiniz.   </p>
<img src="{{asset('site/images/yabanci/5.jpg')}}" alt=""  style="width: 100%">

@include("site.okullar.yabanci-diller.partial2")
@endsection