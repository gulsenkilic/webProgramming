@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-10">
        <div class="content-container">
            @if (Session::has('message'))
            <div class="alert alert-primary alert-icon alert-dismissible fade show mt-3" role="alert">
                {{ Session::get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

            <div class="card border-dark mb-3 ">
                <div class="card-header">
                    <p class="pt-7 text-primary"><b>ANA SAYFA -- DUYURULAR </b></p>
                    <a type="button" class="btn btn-primary h-100 mt-4"
                        href='{{ route('duyuruEkle') }}'>YENI DUYURU EKLE</a>
                </div>
                <div class="card-body text-dark">
                    <div class="table-responsive">
                        <table class="table table-hover table-rounded table-striped table-bordered gy-7 gs-7">
                            <thead>
                                <tr>
                                    <th>TARIH</th>
                                    <th>DUYURU AÇIKLAMA</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($duyurular as $duyuru)
                                    <tr>
                                        <td style="width: 10%">{{$duyuru->created_at}}</td>
                                        <td> <b>{{$duyuru->baslik}}</b> </td>
                                        <td><a type="button" class="btn btn-primary" href="{{route('duyuruEdit', ['id' => "$duyuru->id"])}} ">EDİT </a></td>
                                        <td><a type="reset" href="{{route('duyuruDetay',['id' => "$duyuru->id"])}}" class="btn btn-warning">DETAY</a> </a></td>
                                    </tr>
                                    @endforeach
                                

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
