@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-12">
        <div class="content-container">
            <div class="container-fluid">

                <div class="card border-dark mb-3 w-100">
                    <div class="card-header">
                        <p class="pt-7 text-dark">DUYURU TARİHİ: {{ $duyuru->created_at }}</p>
                        <a type="button" class="btn btn-warning h-100 mt-4" href='{{ route('duyurular') }}'>GERİ DÖN</a>
                    </div>
                    <div class="card-body text-dark">

                        <table class="table table-hover table-bordered mt-0">
                            <tr>
                                <th>Slug</th>
                                <td>{{ $duyuru->slug }}</td>
                            </tr>
                            <tr>
                                <th>Başlık</th>
                                <td>{{ $duyuru->baslik }}</td>
                            </tr>
                            <tr>
                                <th>Duyuru Metni</th>

                                <td>{{ $duyuru->metin }}</td>


                            </tr>
                            <tr>
                                <th>Kategori</th>
                                <td>{{ $duyuru->kategori }}</td>
                            </tr>
                            <tr>
                                <th>Yayınlanacağı Sayfa</th>
                                <td>{{ $duyuru->konum }}</td>
                            </tr>
                            <tr>
                                <th>Statü</th>
                                <td>{{ $duyuru->statu }}</td>
                            </tr>
                            <tr>
                                <th>Son güncelleme tarihi</th>
                                <td>{{ $duyuru->updated_at }}</td>
                            </tr>

                            <tr class="mt-5">
                                <td><a class="btn btn-primary h-100 mt-4"
                                        href="{{ route('duyuruEdit', ['id' => "$duyuru->id"]) }} ">EDİT</a>
                                </td>
                            </tr>


                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
