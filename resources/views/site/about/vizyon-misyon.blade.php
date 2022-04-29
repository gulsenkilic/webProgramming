@extends('site.layouts.index')

@section('content')
<section class="wrapper bg-light">
    <div class="container py-1 py-md-10">
      <div class="row gx-md-8 gy-10 align-items-center">
        <div class="col-lg-6 offset-lg-1 order-lg-2 position-relative">
          <figure class="rounded"><img class="img-fluid" src="site/images/about/4.jpg"  alt="" /></figure>
          <div class="card shadow-lg position-absolute d-none d-md-block" style="top: 15%; left: -7%">
            <div class="card-body py-4 px-5">
              <div class="d-flex flex-row align-items-center">
                <div>
                  <img src="site/images/about/cloud-group.svg" class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-3" alt="" />
                  
                </div>
                <div>
                  <h3 class="fs-25 counter mb-0 text-nowrap">25000+</h3>
                  <p class="fs-16 lh-sm mb-0 text-nowrap">Mezun</p>
                </div>
              </div>
            </div>
            <!--/.card-body -->
          </div>
          <!--/.card -->
          <div class="card shadow-lg position-absolute text-center d-none d-md-block" style="bottom: 10%; left: -10%;">
            <div class="card-body p-6">
              <div class="progressbar semi-circle orange mb-3" data-value="90"></div>
              <h4 class="mb-0">Başarı Oranı</h4>
            </div>
            <!--/.card-body -->
          </div>
          <!--/.card -->
        </div>
        <!--/column -->
        <div class="col-lg-5">
          <h2 class="fs-16 text-uppercase text-orange mb-3">VİZYON VE MİSYONUMUZ</h2>
          <h3 class="display-4 mb-4 me-lg-n5">Vizyonumuz </h3>
          <p class="mb-6">Eğitim, araştırma ve topluma katkıda mükemmelliğe odaklanan uluslararası tanınırlığı yüksek, lider bir
            üniversite olmak.</p>
            <h3 class="display-4 mb-4 me-lg-n5">Misyonumuz </h3>
            <p><b>Gülşen Kılıç Üniversitesi;</b></p>
          <ul class="icon-list bullet-bg bullet-soft-primary">
            <li><i class="uil uil-check"></i>mükemmeliyet alanlarındakiler başta olmak üzere üstün bilimsel çalışmalarla ülkemizin
                ve insanlığın yaşam standartlarını yükseltecek bilginin üretilmesi</li>
            <li><i class="uil uil-check"></i>korunması ve yayılmasına yönelik araştırma
                ve geliştirmeyi öncelikli hedef edinmiş</li>
            <li><i class="uil uil-check"></i>öncü eğitim yöntem ve teknolojilerine dayanarak geliştirdiği çağdaş
                eğitim modelleri ile, sürdürülebilir kalkınma amaçlarına yönelik yenilikçi girişimleriyle fark yaratan,</li>
                <li><i class="uil uil-check"></i> 21.
                    yüzyıl bireysel ve profesyonel yetkinlikleriyle donanmış küresel bireyler yetiştiren; çıktıları ve paydaşlarıyla
                    geliştirdiği işbirlikleri ile yerel ve küresel düzeyde topluma katkı yapan 
                seçkin bir dünya üniversitesidir.</li>
          </ul>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <h5 class="mt-6">KALİTE POLİTİKAMIZ</h5>

            <ul class="icon-list bullet-bg bullet-soft-green">
                <li><span><i class="uil uil-check"></i></span><span>Ülkemizin ve insanlığın yaşam standartlarını yükseltecek bilginin üretilmesi, korunması ve yayılmasına yönelik
                    araştırma ve geliştirme faaliyetlerini gerçekleştirerek, ilgili alanlarda nitelikli yayın sayılarında sürekli
                    iyileştirme sağlamak,</span></li>
                <li><span><i class="uil uil-check"></i></span><span>Eğitim-öğretim, araştırma-geliştirme ve hizmet süreçlerimizin kalitesini sürekli iyileştirerek, öğrencilerimize
                    ve tüm paydaşlarımıza sürekli gelişen değer katmak,</span></li>
                <li><span><i class="uil uil-check"></i></span><span>Öğrencilerimizin öğrenim deneyimlerini kendilerinin de şekillendirmelerine fırsat vermek</span></li>
                <li><span><i class="uil uil-check"></i></span><span>Öğrencilerimize ve tüm paydaşlarımıza adalet, itibar, nezaket ve saygıyla davranmak</span></li>
                <li><span><i class="uil uil-check"></i></span><span>Tüm politikaları ve süreçleri takım ruhu içerisinde düzenli ve etkin bir şekilde izlemek, gözden geçirerek
                    organizasyonel etkinlik ve yetenekleri iyileştirmek,</span></li>
                <li><span><i class="uil uil-check"></i></span><span>Misyonumuza uygun olarak toplumun karşılaştığı sorunlara yaratıcı çözümler bularak katkı sağlamaktır.</span></li>

              </ul>
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
@endsection