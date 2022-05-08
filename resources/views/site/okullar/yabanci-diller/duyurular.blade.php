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
        <div class="card mb-6">
            <div class="card-body">
              <a href="{{route('yabanciDuyurular1')}}">  4. Modül Etüt Programı (2021-2022)</a>   </div>
            <div class="card-footer">
              Ayrıntılar için tıklayınız.
            </div>
        </div>
        <div class="card mb-6 ">
            <div class="card-body">
            <a href="{{route('yabanciDuyurular2')}}">Öğrencileri için 20 Nisan 2022 Tarihli İngilizce Yeterlik Sınavı Sonuçları</a> 
            </div>
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
       
    </div>

    @include('site.okullar.yabanci-diller.partial2')
@endsection
