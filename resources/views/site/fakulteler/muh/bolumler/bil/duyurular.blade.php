@extends('site.layouts.index')
@section('content')
@include('site.fakulteler.muh.bolumler.bil.partial')

<h3 class="text-right">Bilgisayar Mühendisliği Bölümü Duyurular</h3> 
    <hr class="my-5"> 
        <div class="card mb-6">
            <div class="card-body">
              <a href="{{route('muhDuyurular1')}}">  
                2021-2022 Bahar Dönemi - Lisans Bitirme ve Bütünleme Sınav Programları güncellendi
              </a>   </div>
            <div class="card-footer">
              Ayrıntılar için tıklayınız.
            </div>
        </div>
        <div class="card mb-6 ">
            <div class="card-body">
            <a href="{{route('bilDuyurular1')}}">
                Mezuniyet Töreni 2022 Hakkında
              </a> 
            </div>
            <div class="card-footer">
                Ayrıntılar için tıklayınız.
            </div>
        </div>
        <div class="card mb-6 ">
            <div class="card-body">
                <a href="{{route('bilDuyurular2')}}">
                    2022 yılı için Üniversiteler Arası Enerji Verimliliği (ÜNVER-1) Yarışması
                  </a> </div>
            <div class="card-footer">
                Ayrıntılar için tıklayınız.
            </div>
        </div>
       
        <div class="card mb-6 ">
            <div class="card-body">
                <a href="https://cdn.istanbulc.edu.tr/FileHandler2.ashx?f=er.pdf">
                    2020-2021 SÖZLEŞME DÖNEMİ ERASMUS STAJ HAREKETLİLİĞİ   BAŞVURULARI İÇİN EK ÇAĞRI
                  </a> </div>
            <div class="card-footer">
                Ayrıntılar için tıklayınız.
            </div>
        </div>
        <div class="card mb-6 ">
            <div class="card-body">
                <a href="{{route('yabanciDuyurular3')}}">
                    
              Arasınavları Online Yapılan Ortak Derslerin Mazeret Sınavı Duyurusu
            
                  </a> </div>
            <div class="card-footer">
                Ayrıntılar için tıklayınız.
            </div>
        </div>
        <div class="card mb-6 ">
            <div class="card-body">
                <a href="{{route('bilDuyurular3')}}">
                    

                    Suriye Uyruklu Öğrencilerimizin Dikkatine!!!
                        
                  </a> </div>
            <div class="card-footer">
                Ayrıntılar için tıklayınız.
            </div>
        </div>

@include('site.fakulteler.muh.bolumler.bil.partial2')
@endsection