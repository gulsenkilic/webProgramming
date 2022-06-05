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
                    <p class="pt-7 text-primary"><b>ANA SAYFA -- HABERLER </b></p>
                    <a type="button" class="btn btn-primary h-100 mt-4"
                        href='{{ route('haberEkle') }}'>YENI HABER EKLE</a>
                </div>
                <div class="card-body text-dark">
                    <div class="table-responsive">
                        <table class="table table-hover table-rounded table-striped table-bordered gy-7 gs-7">
                            <thead >
                                <tr>
                                    <th></th>
                                    <th>TARIH</th>
                                    <th>HABER AÇIKLAMA</th>
                
                                    <th>KATEGORİ</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($haberler as $haber)
                                    <tr>
                                    <td><img src="{{asset($haber->resim)}}" width="150px" alt=""  /></td>
                                    <td style="width: 10%">{{$haber->created_at}}</td>
                                    <td> <b>{{$haber->baslik}}</b> </td>
                                    <td><span
                                        class="badge badge-success">
                                        {{$haber->kategori}}
                                    </span></td>
                                    <td> <a type="button" class="btn btn-primary" href="{{route('haberEdit',['id'=>$haber->id])}} ">EDİT </a></td>
                                    <td> <a type="reset" href="{{route('haberDetay',['id'=>$haber->id])}}" class="btn btn-warning">DETAY</a> </a></td>

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
