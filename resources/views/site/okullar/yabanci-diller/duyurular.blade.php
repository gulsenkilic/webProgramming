@extends('site.layouts.index')
@section('content')
    @include('site.okullar.yabanci-diller.partial')

    <!--div class="table-responsive  bg-white">
        <table class="table text-right  table-hover ">
            <tbody>
                <tr>
                    <td><a href="{{ route('yabanci') }}">ANA SAYFA</a></td>

                </tr>
                <tr>
                    <td><a href="{{ route('yabanciAkademik') }}">AKADEMİK KADRO</a></td>

                </tr>
                <tr>
                    <td><a href="{{ route('yabanciAbout') }}"> YDO HAKKINDA</a></td>

                </tr>
                <tr>
                    <td><a href="">DUYURULAR</a></td>
                </tr>
                <tr>
                    <td><a href="">ÖĞRENCİ </a></td>
                </tr>
            </tbody>
        </table>
    </div-->
    <div class="container">
        @foreach ($duyurular as $duyuru)
              <div class="card mb-6">
            <div class="card-body">
              <a href="{{route('duyuruDetayPage',['slug'=>$duyuru->slug])}}"> {{$duyuru->baslik}}</a>   </div>
            <div class="card-footer">
              Ayrıntılar için tıklayınız.
            </div>
        </div>
        
        @endforeach
      
       
    </div>

    @include('site.okullar.yabanci-diller.partial2')
@endsection
