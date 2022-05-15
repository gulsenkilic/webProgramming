@extends('admin.layouts.index')
@section('content')
    <div class="card-body py-3 mt-12">
        <div class="content-container">
            <div class="container-fluid">

                <div class="card border-dark mb-3 w-100">
                    <div class="card-header">
                        <p class="pt-7 text-dark">DUYURU TARİHİ: 18/04/2022</p>
                        <a type="button" class="btn btn-warning h-100 mt-4" href='{{ route('duyurular') }}'>GERİ DÖN</a>
                    </div>
                    <div class="card-body text-dark">

                        <table class="table table-hover mt-0">
                            <tr>
                                <th>Duyuru Metni</th>
                                <td>
                                    2022 Yaz Okulu Yurt Ücretleri

                                </td>
                            </tr>
                            <tr>
                                <th>Kategori</th>
                                <td>EĞİTİM</td>
                            </tr>

                            <tr class="mt-5">
                                <td><a class="btn btn-primary h-100 mt-4" href="{{route('duyuru1Edit')}}">EDİT</a>
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
