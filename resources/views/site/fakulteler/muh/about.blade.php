@extends('site.layouts.index')
@section('content')
@include("site.fakulteler.muh.partial")
<section class="wrapper bg-light">
    <h3 class="text-right">Mühendislik ve Doğa Bilimleri Fakültesi</h3> 
    <hr class="my-5"> 
    <div class="container py-14 py-md-9">
        <ul class="nav nav-tabs nav-tabs-bg d-flex justify-content-between nav-justified flex-lg-row flex-column">
            <li class="nav-item"> <a class="nav-link d-flex flex-row active" data-bs-toggle="tab"
                    href="#tab2-1">
                    <div><i class="uil uil-medal svg-inject icon-svg icon-svg-md text-yellow me-4"></i></div>
                    <div>
                        <h4>DEKAN MESAJI</h4>
                      
                    </div>
                </a> </li>
            <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-2">
                    <div><i class="uil uil-dumbbell svg-inject icon-svg icon-svg-md text-green me-4"></i></div>
                    <div>
                        <h4>VİZYON-MİSYON</h4>
                        
                    </div>
                </a> </li>
        </ul>
        <!-- /.nav-tabs -->
        <div class="tab-content mt-6 mt-lg-8">
            <div class="tab-pane fade show active" id="tab2-1">
                <div class="container gx-lg-8 gx-xl-12 gy-10 align-items-center">

                   <p class="mb-3">Gülşen Kılıç Üniversitesi Mühendislik ve Doğa Bilimleri Fakültesi ülkemizin teknolojik gelişiminde lider, dünyanın saygın fakültelerinden birisi olma vizyonuyla; bir taraftan,   </p>
                   <p class="mb-3"> İnsanlığın refah ve mutluluğunu yükseltecek bilginin üretilmesi, ürüne dönüştürülmesi ve yayılmasına yönelik araştırma ve proje geliştirme faaliyetlerini yürütürken, diğer taraftan,  </p>
                   <p class="mb-3"> Etik değerleri yüksek, özelikle 4. Sanayi devriminin ihtiyaç duyduğu 21. YY yetkinliklerine sahip, girişimci , lider mühendis ve bilim insanları yetiştirmek amacıyla evrensel standartlarda eğitim öğretim yapmaktadır. </p>
                   <p class="mb-3"> Fakültemiz bünyesindeki bölümlerde tamamen İngilizce eğitim verilmekte olup, ders programlarının ve içeriklerinin hazırlanmasında, toplumun bugünkü ve gelecekteki gereksinimleri dikkate alınmıştır. Ayrıca mezunlarımızın globalleşen dünyanın her yerinde görev alabilmeleri hedeflenmiştir. Öğrencilerimizin uygulamanın içinde, üniversitemizin uluslararası imkanlarından da faydalanabilecekleri bir ders müfredatı sunularak meslek hayatlarına en hazır halde mezun olmaları için Endüstri ile iç içe farklı işbirliği modelleri uygulanmaktadır. Bu kapsamda 2000’in üzerinde firmayla Coop işbirliği anlaşmamız mevcuttur. </p>
                   <p class="mb-3">Tüm bölümlerimizde öğrencilerimizin yenilikçi ve yaratıcılığını, eleştirel düşünme ve problem çözme yeteneklerini, iletişim ve işbirliği vasıflarını geliştirebilecekleri her türlü imkan ve ortam yaratılmaktadır. Fakültemizde Uzaktan Eğitim Teknolojileri en üst düzeyde kullanılmakta, öğrencilerimizin bilgiye zaman ve mekandan bağımsız bir şekilde erişimi ve öğretim üyeleriyle sürekli etkileşimi sağlanmaktadır.  </p>
                   <p class="mb-3"> Gülşen Kılıç Üniversitesi'nin çağdaş eğitim felsefesine paralel olarak; Amerika, Avrupa ve Uzak Doğu’daki seçkin üniversiteler ile öğrenci ve öğretim üyesi değişim programları ve ortak bilimsel çalışmalar yürütülmektedir. Bu şekilde, öğrencilerimizin ufuklarını genişletilmesi, kültürel zenginliklere erişimleri ve onların etkin iletişim tekniklerini kullanabilen bireyler olarak topluma kazandırılmalarını planlanmaktadır. </p>
                   <p class="mb-3"> Ayrıca lisans programlarımızın birçoğunda uluslararası geçerliliğe sahip MÜDEK akreditasyonu alınmış, diğerlerinde ise değerlendirme süreci devam etmektedir. Eğer siz de 21. YY Yetkinliklerine sahip lider, araştırmacı, yenilikçi ve girişimci mühendisler, bilim insanları olmayı hedefliyorsanız sizleri Fakültemize bekliyorum. </p>
                   <p class="mb-3"> Mühendislik ve Doğa Bilimleri Fakültesi <br>

                    Dekanı Prof. Dr. Nafiz ARICA </p>
                </div>
                <!--/.row -->
            </div>
            <!--/.tab-pane -->
            <div class="tab-pane fade" id="tab2-2">

                
              
                    <h3 class="display-4 mb-4 me-lg-n5">MÜHENDİSLİK FAKÜLTESİNİN VİZYONU
                    </h3>
                    <p class="mb-6">GKU ailesinin amiral gemisi olarak; ülkemizin teknolojik gelişiminde lider, bilimsel yayınlar ve projeler konusunda dünyada ilk 500 içinde yer alan, öğrencileri ulusal ve uluslararası düzeyde aranan, toplumsal ilerlemeye hizmet eden, çağın önünde bir fakülte olmak.</p>
                    <h3 class="display-4 mb-4 me-lg-n5">MÜHENDİSLİK FAKÜLTESİNİN MİSYONU </h3>
                    <p><b>Aidiyet hissi yüksek, yenilikçi ve kendini sürekli geliştiren akademik kadrosuyla; </b></p>
                    <ul class="icon-list bullet-bg bullet-soft-primary">
                        <li><i class="uil uil-check"></i>ülkemizin ve tüm insanlığın refah ve mutluluğunu yükseltecek bilginin üretilmesi, korunması, ürün/hizmete dönüştürülmesi ve yayılmasına yönelik araştırma ve geliştirmeye öncülük eden, </li>
                        <li><i class="uil uil-check"></i>gerek ulusal gerekse uluslararası düzeyde, toplumun, devletin, sanayinin ve sivil toplum kuruluşlarının çözüm ortağı olan, </li>
                        <li><i class="uil uil-check"></i>etik değerleri yüksek, yaratıcı, girişimci, değişime, teknolojik dönüşümlere öncülük eden çok yönlü ve evrensel bireyler yetiştiren bir Mühendislik ve Doğa Bilimleri Fakültesidir.</li>
            
                    </ul>
                <!--/column -->
            </div>
            <!--/.tab-pane -->
          
        </div>
        <!-- /.tab-content -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->


@include("site.fakulteler.muh.partial2")
@endsection