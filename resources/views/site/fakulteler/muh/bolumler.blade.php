@extends('site.layouts.index')
@section('content')
    @include('site.fakulteler.muh.partial')
    <h3 class="text-right">Mühendislik ve Doğa Bilimleri Fakültesi</h3> 
    <hr class="my-5"> 
    <div class="table-responsive bg-white p-2">
       
        <table class="table table-bordered text-left table-hover border-primary border border-2  bg-soft-primary">

            <tr>
                <td style="width: 10%"><img src="{{asset('site/images/logo/logo.png')}}" alt=""></td>
                <td class="text-uppercase text-center"><a href=""><h4>Bilgisayar Mühendisliği </h4></a></td>
            </tr>
            <tr>
                <td style="width: 10%"><img src="{{asset('site/images/logo/logo.png')}}" alt=""></td>
                <td class="text-uppercase text-center"><a href=""><h4>Endüstri Mühendisliği</h4></a></td>
            </tr>
            <tr>
                <td style="width: 10%"><img src="{{asset('site/images/logo/logo.png')}}" alt=""></td>
                <td class="text-uppercase text-center"><a href="{{route('muh')}}"><h4>Makina Mühendisliği</h4></a></td>
            </tr>


            <tr>
                <td style="width: 10%"><img src="{{asset('site/images/logo/logo.png')}}" alt=""></td>
                <td class="text-uppercase text-center"><a href=""><h4>Elektrik-Elektronik Mühensiliği </h4></a></td>
            </tr>
            <tr>
                <td style="width: 10%"><img src="{{asset('site/images/logo/logo.png')}}" alt=""></td>
                <td class="text-uppercase text-center"><a href=""><h4>Yazılım Mühendisliği</h4></a></td>
            </tr>
            <tr>
                <td style="width: 10%"><img src="{{asset('site/images/logo/logo.png')}}" alt=""></td>
                <td class="text-uppercase text-center"><a href=""><h4>Gıda Mühendisliği</h4></a></td>
            </tr>
           
        </table>
    </div>

    @include('site.fakulteler.muh.partial2')
@endsection