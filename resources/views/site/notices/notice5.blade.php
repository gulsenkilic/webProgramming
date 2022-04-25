@extends('site.layouts.index')
@section('content')
    <div class="container pt-lg-10 mb-6">
        <nav aria-label="breadcrumb" class="bg-soft-navy p-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('homepage')}}">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="#">Haberler</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cybercube Başvuruları</li>
            </ol>
        </nav>
        <h1 class="text-center display-4 pt-2 mb-3">Siber Güvenlik Girişimlerine Özel Hızlandırma Programı Cybercube'un Başvuruları Devam Ediyor!</h1>
        <hr class="my-3">
        <div class="container justify-content-center">
            <p>İstanbul Kalkınma Ajansı tarafından desteklenen “Siber Güvenlik Hızlandırma ve Kuluçka Programı: Cybercube” projesi  kapsamında hazırlanan Cybercube Programı; Teknopark İstanbul ve İstanbul Üniversitesi Cerrahpaşa ortaklığında ve siber güvenlik ekosisteminin güçlü oyuncularıyla birlikte altyapı, eğitim, mentorluk ve danışmanlık destekleriyle 15 siber güvenlik girişimini hızlandırıyor,  siber güvenlik girişimleri bu programda iş modellerini doğruluyor, teknolojilerini geliştiriyor, ürün ve hizmetlerini satışa hazır hale getiriyor.</p>
            <img src="site/images/notices/2.jfif" alt="" style="width: 50%">
            <br>
            <br>
        <p>Detaylı bilgi ve başvuruya <a href="https://www.cubeincubation.com/basvur">buradan</a> ulaşabilirsiniz.</p>
        
        </div>
    </div>
@endsection
