@extends('site.layouts.index')

@section('content')
    <div class="container py-14 py-md-16">
        <div class="row">
            <div class="col-12 col-lg-3">
                <ul class="nav nav-tabs nav-tabs-bg d-flex justify-content-between nav-justified flex-lg-row flex-column">
                    <li class="nav-item"> <a class="nav-link d-flex flex-row active" data-bs-toggle="tab"
                            href="#tab2-1">
                            <div>
                                <h4>Üniversitemiz Hakkında</h4>
                            </div>
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-2">
                            <div>
                                <h4>Rektörümüzün Mesajı</h4>
                            </div>
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-3">
                            <div>
                                <h4>Akademik Bilgiler</h4>
                            </div>
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-4">
                            <div>
                                <h4>Akademik Birimler</h4>
                            </div>
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-5">
                            <div>
                                <h4>Tanıtım Filmimiz</h4>
                            </div>
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-6">
                            <div>
                                <h4>Tanıtım Broşürlerimiz</h4>
                            </div>
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-7">
                            <div>
                                <h4>Yerleşkelere Ulaşım</h4>
                            </div>
                        </a> </li>

                    <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-8">
                            <div>
                                <h4>Sıkça Sorulan Sorular</h4>
                            </div>
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-9">
                            <div>
                                <h4>İletişim Formu</h4>
                            </div>
                        </a> </li>
                </ul>
            </div>
            <div class="col-12 col-lg-9">
                <div class="tab-content mt-1 mt-lg-2">
                    <div class="tab-pane fade show active justify-content-center align-items-center" id="tab2-1">
                                <div class="row gx-md-5 gy-5">

                                <img src="site/images/about/aday/1.jpg" alt="">
                                </div>
                                <p class="mt-5">Gülşen Kılıç Üniversitesi, İstanbul'da yer alan devlet üniversitesidir. 5 Mayıs 2018 tarihli, 30425 sayılı Resmi Gazetede yayımlanarak yürürlüğe giren 7141 sayılı kanun ile İstanbul Üniversitesi'nden ayrılarak kurulmuştur. Bünyesinde 9 fakülte, 6 enstitü, 1 yüksekokul, 5 meslek yüksekokulu ve 13 araştırma merkezi bulunmaktadır. Toplamda 8 yerleşkesi bulunan Üniversitemizin Rektörlüğü Beşiktaş  Yerleşkesinde yer almaktadır.</p>
                                <p class="mt-3">Günümüz dünyası, artık üniversitelerden kendisine gelen bireyleri bilgi ile donatmasının yanında; öğrenmeyi öğrenen bireyler yetiştirmesini; bilgi ve teknoloji üreten ve ürettikleri ile içinde bulundukları toplum için katma değer oluşturan kurumlar olmaları beklenmektedir. Üniversitemiz bu bağlamda Yükseköğretim Kurulu’nun onayı ile “Araştırma Üniversitesi” payesine sahip olmuştur. Gülşen Kılıç Üniversitesi, kendisine yüklenen görevin bilinci ile toplumsal katma değeri yüksek ve toplumun gelişmesine katkı sağlayacak, girişimciliği teşvik edici yeni bir model ile teknolojinin üretildiği ve üretilen teknolojinin dağıtıldığı bir merkez haline gelmeyi hedeflemektedir. Ayrıca Üniversitemiz, üniversite-sanayi, üniversite-STK ve üniversite-şehir etkileşimlerini de ön planda tutarak; nitelikli bilgi ve nitelikli insan gücü eşitliğinin de sağlıklı ve doğru kurulması yolunda ciddi adımlar atmıştır ve atmaya devam etmektedir. </p>
                                <p class="mt-3">Gülşen Kılıç Üniversitesi, 1453 yılına dayanan kökleri ile barındırdığı deneyim ve kurumsal hafızayı, dinamizmi ile birleştirmeyi hedefleyen bir kurumdur. Yükseköğretim Kurulu (YÖK) tarafından gerçekleştirilen yeniden yapılanma ve misyon farklılaşmasının devam eden ilerleme ve atılımı içinde, bu yapının en önde gelen ve en önemli bileşenlerinden biri olmak, Gülşen Kılıç Üniversitesi'nın ana hedeflerinden biridir.</p>
                                <ul class="icon-list bullet-bg bullet-soft-yellow">
                                    <li><i class="uil uil-check"></i>Sonuçlanan ve devam eden projelerin yüzde 75’ini kurum dışı destek ile yapan, araştırma bütçe kalemlerini kurum dışı fonlar ve uluslararası fonlardan sağlayan,</li>
                                    <li><i class="uil uil-check"></i>TÜBİTAK ve/veya diğer ulusal kaynaklardan destekli 775 projesi tamamlanan ve bu kaynaklardan desteklenen 323 devam eden projesi bulunan,</li>
                                    <li><i class="uil uil-check"></i>Bilimsel Araştırma Projeleri (BAP)Koordinatörlüğü destekli 769 projesi tamamlanan, 529 projesi devam eden,</li>
                                    <li><i class="uil uil-check"></i>137 ülke ile ortak araştırma yürüten,</li>
                                    <li><i class="uil uil-check"></i>29 ülke ve aralarında Harvard, Cornell, Cambridge, ABD National Institute of Health (NIH) ve kanser çalışmalarıyla ünlü MD Anderson Tıp Merkezi’nin de yer aldığı 206 kurum ile ikili işbirliği bulunan,</li>
                                    <li><i class="uil uil-check"></i>113’ü uluslararası 136 patent, tescillenmiş 10 marka, 9 endüstriyel tasarıma sahip,</li>
                                    <li><i class="uil uil-check"></i>Nükleer tıp, rejenaratif ve restoratif tıp ve biyomalzemeler yanında kanser, nörobilim, biyomühendislik, nanoteknoloji, biyoteknoloji, ilaç geliştirme, savunma sanayi, enerji, göç çalışmaları gibi alanlarda disiplinlerarası iş birliği, alt yapı, donanım ve akademik birikime sahip, bu alanlarda yüksek etkili araştırma çıktıları yaratan,</li>
                                    <li><i class="uil uil-check"></i>İleri düzey araştırmalar için güçlü ve öne çıkan laboratuvarlara ev sahipliği yapan,</li>
                                    <li><i class="uil uil-check"></i>Araştırma çıktıları ve performansı ile uluslararası tanınırlık kazanmış, dünyanın ilk 500 üniversite arasına girme başarısı göstermiş bir üniversite…</li>

                                  </ul>
                                <a href="{{route('about')}}" class="btn btn-yellow mt-2">Daha Fazla</a>
                     
                        <!--/.row -->
                    </div>
                    <!--/.tab-pane -->
                    <div class="tab-pane fade" id="tab2-2">
                      
                        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                          <div class="justify-content-center">
                            <div class="item">
                                <img class="rounded-circle w-20 mx-auto mb-4" src="site/images/about/yonetim/1.jpg" alt="" />
                                <h4 class="mb-1">Prof. Dr. GÜLŞEN KILIÇ</h4>
                                <div class="meta mb-2 text-primary">Rektör</div>
                            </div>
                            <!-- /.item -->
                        </div>
                                <p class="mt-5">Gülşen Kılıç Üniversitesi, Uygulamalı eğitimi ortaöğretimden başlatma kültürüne sahip ve bu bilinci ve deneyimini Türkiye yükseköğretim hayatına taşıyan, Bilimi ve Teknolojiyi birleştirerek uygulamaya dönüştüren genç ve dinamik yapısı ile sizlere hizmet vermektedir. </p>
                                <p class="mt-5"> 2010 Yılında kurulan GKU Meslek Yüksek Okulu ile Türkiye Yükseköğretim hayatına başlayan Üniversitemiz, güçlü uygulamalı eğitim geçmişi üzerine kurulmuş altyapısı ile bilime ve teknolojiye dayalı, yenilikçi ve sürekli geliştirici bir vizyona sahip olan, araştırma geliştirme odaklı, Üniversite-Sanayi işbirliğinin merkezinde yer alan, toplam kalite yaklaşımını tüm akademik ve idari birimlerine yaymış, tüm alanlarda uluslararasılaşmayı hedef haline getiren bir dünya Üniversitesidir.</p>
                                <p class="mt-5"> Üniversitemiz, öğrencileri, akademik ve  idari çalışanları için vermiş olduğu hizmetlerde; kaliteyi ön planda tutarak mutlu, huzurlu, sağlıklı ve başarılı bir çalışma ortamı sunan; eğitim-öğretim temelinde öğrenmeyi öğrenen, öğrendiklerini uygulamaya dönüştüren, yapmış oldukları araştırma-geliştirme projeleri ile bilime katkı sunan, uygulama ve araştırma merkezleri ile ulusal ve uluslararası ölçekteki sorunlara çözüm sunmayı bir görev kabul ederek saygın mükemmel bir üniversite olmayı hedeflemiştir.</p>
                                <p class="mt-5"> Kurucumuz Gülşen Kılıç’a  “Dünyanın bir yerinde, bir mühendis, bir icat yapmış ise ben de yapmalıyım” dedirten özgüveni ve çalışma azmini öğrencilerimize ve çalışanlarımıza kazandırarak, sadece mühendislik alanında değil aynı zamanda fen, sosyal, sağlık ve tüm disiplinlerde uygulamaya dönüştürmek için çalışmalarımız sürekli olarak devam edecektir. Bu kapsamda eğitim-öğretim programlarımızda teorik bilginin yanı sıra uygulamalı eğitimler vererek bilgilerin gerçeğe dönüştürülmesi sağlanacak, yapacağımız aktif saha uygulamaları ile öğrencilerimizin eğitim aldıkları her sektörü yakından tanımalarını ve kendilerini mesleki yaşamlarına hazırlanmasını sağlayacağız.</p>
                                <p class="mt-5"> Üniversitemiz, 2020 li yıllarda kendi teknolojisini üreten bir Türkiye hedefine katkı sağlamak ve bu hedefte kendine yer edinmek için öğrencilerimizin, tüm akademik eğitim ve öğretim programlarındaki yaşadığımız yüzyılın gerekliklerini ve yetkinliklerini kazanmaları için gerekli düzenlemelerin sürekliliğini sağlayarak, kendi ideallerine ulaşacak geniş ufuklara sahip, özgür düşünen bireyler yetiştirmek temel hedeflerimizdir.</p>
                                <p class="mt-5">Kalite yaklaşımın temel kabul edildiği, Fen, Sağlık, Sosyal ve Spor alanlarını içeren her bir disiplinde, bilimsel düşüncenin teknoloji ile birleştiği ve uygulamaya dönüştüğü Üniversitemiz, sizleri bilimsel, teknolojik, toplumsal, sosyal alanlarda farklılık ve yenilik getirecek etkinliklerimiz ve projelerimiz ile buluşturacaktır. </p>
                                <p class="mt-5">Sevgi ve saygılarımla, </p>
                                
                          
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/.tab-pane -->
                    <div class="tab-pane fade" id="tab2-3">
                        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                            
                                <h2>Araştırma, Lisans Eğitiminde Başlar</h2>
                                <p>YÖK’ün 26 Eylül 2017 tarihli kararıyla Araştırma Üniversitesi ilan edilen GKU,kuruluşundan bu yana geçen 52 yılda, Türk bilimine yaptığı nitelikli ve özgün katkılarıve kattıklarıyla marka üniversite niteliği kazanarak Türkiye’nin evrensel bilime açılankapısı olmuştur. Bilime, topluma, insanlığa katkıları ve dünya başarıları ile ülkemizinismini duyuran, her biri gurur kaynağımız on binlerce mezun vermiştir.</p>
                                <img src="site/images/about/aday/2.jpg" alt="">
                                <p>GKU’de araştırma, lisans eğitiminde başlar. Ülke çapında ve uluslararası pek çok sosyal, teknolojik, kültürel ve tarihi araştırma ve projeler, öğrencilerle birlikte yürütülür. Her düzeyden araştırmacıya kütüphaneleri, laboratuvarları, bilişim olanakları, araştırma ve uygulama merkezleriyle eşsiz bir araştırma ortamı sunan GKU, tüm bu olanakları ve birikimlerini, bu olanaklarla yetişmiş öğretim üyeleri ve mezunlarıyla toplum hizmetine verir.</p>
                                <img src="site/images/about/aday/3.jpg" alt="">
                                <p>İlkleriyle fark yaratan GKU Üniversitesi’ni özgün ve özel kılan özelliklerinin başında multidisipliner anlayış gelir. Tıp-sağlık bilimlerinden sosyal-beşeri bilimlere, fen-mühendislik bilimlerinden güzel sanatlara ve konservatuvara kadar çok geniş bir yelpazede çağdaş ve nitelikli eğitim veren GKU Üniversitesi, bu yönü ile ülkemizdeki diğer tüm yükseköğretim kurumlarından ayrılmaktadır. İnsanlığın sorunlarını keşfedip sorgulayan, analiz edip anlayan, bilgi birikimini kullanarak çözümleyen alanının lideri profesyoneller GKU’de yetişmektedir.</p>
                                <img src="site/images/about/aday/4.jpg" alt="">

                        </div>
                        <!--/.row -->
                    </div>
                    <!--/.tab-pane -->
                    <div class="tab-pane fade" id="tab2-4">
                      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                          
                        <div class="container">
                          <div class="row"><a title="Diş Hekimliği Fakültesi"
                            href="https://universitem.hacettepe.edu.tr/dis-hekimligi-fakultesi/" aria-label="Diş Hekimliği Fakültesi"
                            class="w-image-h"><img width="2560" height="768"
                                src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/dishekimligi-scaled.jpg"
                                class="attachment-full size-full" alt="" loading="lazy"
                                srcset="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/dishekimligi-scaled.jpg 2560w, https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/dishekimligi-300x90.jpg 300w, https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/dishekimligi-1024x307.jpg 1024w, https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/dishekimligi-1536x461.jpg 1536w"
                                sizes="(max-width: 2560px) 100vw, 250px"></a>
                        <div class="w-image-meta">
                            <div class="w-image-title">Diş Hekimliği Fakültesi</div>
                        </div>
                    </div>
                        </div>

                      </div>
                      <!--/.row -->
                  </div>
                  <!--/.tab-pane -->
                </div>
            </div>
        </div>
    </div>
    
@endsection
