@extends('site.layouts.index')
@section('content')
    @include('site.okullar.yabanci-diller.partial')

    <div class="col-xs-12 col-sm-12 col-md-12  col-lg-9 ">
        <h1 class="mb-4">Yabanci Diller YüksekOkulu - Akademik Kadro</h1>
        @foreach ($personeller as $personel)
            <hr class="my-5">

            <div class="row mb-2 pb-2">
                <div class="col-12 col-md-4">
                    <img style="width: 200px; height: 200px; max-width: initial; border-radius: 50%;"
                        src="{{ $personel->resim }}">
                </div>
                <div class="col-12 col-md-8 pt-3">
                    <p class="pt-0 pb-1 font-weight-bold">{{ $personel->ad_soyad }}
                        ({{ $personel->unvan }})
                    </p>
                    <p class="pt-0 pb-1">
                        <span class="mr-2">
                            <a href="{{ $personel->avesis }}"><i class="fa fa-download" aria-hidden="true"></i>
                                Özgeçmiş (CV)</a>
                        </span>
                        <span class="mr-2">{{ $personel->tel }}</span> {{ $personel->mail }}
                    </p>
                    <!--p class="pt-0 pb-1"><span class="font-weight-bold pr-2">Lisans:</span>Samsun Ondokuzmayıs Üniversitesi
                    </p>
                    <p class="pt-0 pb-1"><span class="font-weight-bold pr-2">Y. Lisans:</span>Doğu Akdeniz Üniversitesi</p>
                    <p class="pt-0 pb-1"><span class="font-weight-bold pr-2">Doktora:</span>İstanbul Üniversitesi</p-->
                    {!! $personel->egitim_bilgileri !!}
                </div>
            </div>
        @endforeach


    </div>

    @include('site.okullar.yabanci-diller.partial2')
@endsection
