@extends('site.layouts.index')

@section('content')

<div class="container text-center mt-6">
    <h3 class="display-3 mb-6">Akademik Yönetim Kadrosu</h3>
    <div class="justify-content-center">
        <div class="item">
            <img class="rounded-circle w-20 mx-auto mb-4" src="site/images/about/yonetim/1.jpg" alt="" />
            <h4 class="mb-1">Prof. Dr. GÜLŞEN KILIÇ</h4>
            <div class="meta mb-2 text-primary">Rektör</div>
           
            <nav class="nav social justify-content-center text-center mb-0">
                <a href="#"><i class="uil uil-twitter"></i></a>
                <a href="#"><i class="uil uil-slack"></i></a>
                <a href="#"><i class="uil uil-linkedin"></i></a>
            </nav>
            <!-- /.social -->
        </div>
        <!-- /.item -->
    </div>
    <div class="row mb-6">
        @foreach ($personeller as $personel)
        @if ($loop->index != 0)
            <div class="col-12 col-lg-4">
            <div class="item">
                <img class="rounded-circle w-20 mx-auto mb-4" src="{{$personel->resim}}"alt="" />
                <h4 class="mb-1">{{$personel->ad_soyad}}</h4>
                <div class="meta mb-2 text-primary">{{$personel->unvan}}</div>
               
                <nav class="nav social justify-content-center text-center mb-0">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-slack"></i></a>
                    <a href="#"><i class="uil uil-linkedin"></i></a>
                </nav>
                <!-- /.social -->
            </div>
            <!-- /.item -->
        </div>
        @endif
            
        @endforeach
        
       
    </div>
</div>

@endsection