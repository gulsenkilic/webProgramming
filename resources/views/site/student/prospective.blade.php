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
                        <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-8">
                            <div>
                                <h4>Sıkça Sorulan Sorular</h4>
                            </div>
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-5">
                            <div>
                                <h4>Tanıtım Filmimiz</h4>
                            </div>
                        </a> </li>
                    <!--li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-6">
                                                    <div>
                                                        <h4>Tanıtım Broşürlerimiz</h4>
                                                    </div>
                                                </a> </li-->
                    <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-7">
                            <div>
                                <h4>Yerleşkelere Ulaşım</h4>
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
                        <p class="mt-5">Gülşen Kılıç Üniversitesi, İstanbul'da yer alan devlet üniversitesidir. 5
                            Mayıs 2018 tarihli, 30425 sayılı Resmi Gazetede yayımlanarak yürürlüğe giren 7141 sayılı kanun
                            ile İstanbul Üniversitesi'nden ayrılarak kurulmuştur. Bünyesinde 9 fakülte, 6 enstitü, 1
                            yüksekokul, 5 meslek yüksekokulu ve 13 araştırma merkezi bulunmaktadır. Toplamda 8 yerleşkesi
                            bulunan Üniversitemizin Rektörlüğü Beşiktaş Yerleşkesinde yer almaktadır.</p>
                        <p class="mt-3">Günümüz dünyası, artık üniversitelerden kendisine gelen bireyleri bilgi
                            ile donatmasının yanında; öğrenmeyi öğrenen bireyler yetiştirmesini; bilgi ve teknoloji üreten
                            ve ürettikleri ile içinde bulundukları toplum için katma değer oluşturan kurumlar olmaları
                            beklenmektedir. Üniversitemiz bu bağlamda Yükseköğretim Kurulu’nun onayı ile “Araştırma
                            Üniversitesi” payesine sahip olmuştur. Gülşen Kılıç Üniversitesi, kendisine yüklenen görevin
                            bilinci ile toplumsal katma değeri yüksek ve toplumun gelişmesine katkı sağlayacak,
                            girişimciliği teşvik edici yeni bir model ile teknolojinin üretildiği ve üretilen teknolojinin
                            dağıtıldığı bir merkez haline gelmeyi hedeflemektedir. Ayrıca Üniversitemiz, üniversite-sanayi,
                            üniversite-STK ve üniversite-şehir etkileşimlerini de ön planda tutarak; nitelikli bilgi ve
                            nitelikli insan gücü eşitliğinin de sağlıklı ve doğru kurulması yolunda ciddi adımlar atmıştır
                            ve atmaya devam etmektedir. </p>
                        <p class="mt-3">Gülşen Kılıç Üniversitesi, 1453 yılına dayanan kökleri ile barındırdığı
                            deneyim ve kurumsal hafızayı, dinamizmi ile birleştirmeyi hedefleyen bir kurumdur. Yükseköğretim
                            Kurulu (YÖK) tarafından gerçekleştirilen yeniden yapılanma ve misyon farklılaşmasının devam eden
                            ilerleme ve atılımı içinde, bu yapının en önde gelen ve en önemli bileşenlerinden biri olmak,
                            Gülşen Kılıç Üniversitesi'nın ana hedeflerinden biridir.</p>
                        <ul class="icon-list bullet-bg bullet-soft-yellow">
                            <li><i class="uil uil-check"></i>Sonuçlanan ve devam eden projelerin yüzde 75’ini kurum dışı
                                destek ile yapan, araştırma bütçe kalemlerini kurum dışı fonlar ve uluslararası fonlardan
                                sağlayan,</li>
                            <li><i class="uil uil-check"></i>TÜBİTAK ve/veya diğer ulusal kaynaklardan destekli 775 projesi
                                tamamlanan ve bu kaynaklardan desteklenen 323 devam eden projesi bulunan,</li>
                            <li><i class="uil uil-check"></i>Bilimsel Araştırma Projeleri (BAP)Koordinatörlüğü destekli 769
                                projesi tamamlanan, 529 projesi devam eden,</li>
                            <li><i class="uil uil-check"></i>137 ülke ile ortak araştırma yürüten,</li>
                            <li><i class="uil uil-check"></i>29 ülke ve aralarında Harvard, Cornell, Cambridge, ABD
                                National Institute of Health (NIH) ve kanser çalışmalarıyla ünlü MD Anderson Tıp Merkezi’nin
                                de yer aldığı 206 kurum ile ikili işbirliği bulunan,</li>
                            <li><i class="uil uil-check"></i>113’ü uluslararası 136 patent, tescillenmiş 10 marka, 9
                                endüstriyel tasarıma sahip,</li>
                            <li><i class="uil uil-check"></i>Nükleer tıp, rejenaratif ve restoratif tıp ve biyomalzemeler
                                yanında kanser, nörobilim, biyomühendislik, nanoteknoloji, biyoteknoloji, ilaç geliştirme,
                                savunma sanayi, enerji, göç çalışmaları gibi alanlarda disiplinlerarası iş birliği, alt
                                yapı, donanım ve akademik birikime sahip, bu alanlarda yüksek etkili araştırma çıktıları
                                yaratan,</li>
                            <li><i class="uil uil-check"></i>İleri düzey araştırmalar için güçlü ve öne çıkan
                                laboratuvarlara ev sahipliği yapan,</li>
                            <li><i class="uil uil-check"></i>Araştırma çıktıları ve performansı ile uluslararası tanınırlık
                                kazanmış, dünyanın ilk 500 üniversite arasına girme başarısı göstermiş bir üniversite…</li>

                        </ul>
                        <a href="{{ route('about') }}" class="btn btn-yellow mt-2">Daha Fazla</a>

                        <!--/.row -->
                    </div>
                    <!--/.tab-pane -->
                    <div class="tab-pane fade" id="tab2-2">

                        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                            <div class="justify-content-center">
                                <div class="item">
                                    <img class="rounded-circle  mb-4" src="site/images/about/yonetim/1.jpg" alt="" />
                                    <h4 class="mb-1 d">Prof. Dr. GÜLŞEN KILIÇ</h4>
                                    <div class="meta mb-2 text-primary">Rektör</div>
                                </div>
                                <!-- /.item -->
                            </div>
                            <p class="mt-5">Gülşen Kılıç Üniversitesi, Uygulamalı eğitimi ortaöğretimden başlatma
                                kültürüne sahip ve bu bilinci ve deneyimini Türkiye yükseköğretim hayatına taşıyan, Bilimi
                                ve Teknolojiyi birleştirerek uygulamaya dönüştüren genç ve dinamik yapısı ile sizlere hizmet
                                vermektedir. </p>
                            <p class="mt-5"> 2010 Yılında kurulan GKU Meslek Yüksek Okulu ile Türkiye
                                Yükseköğretim hayatına başlayan Üniversitemiz, güçlü uygulamalı eğitim geçmişi üzerine
                                kurulmuş altyapısı ile bilime ve teknolojiye dayalı, yenilikçi ve sürekli geliştirici bir
                                vizyona sahip olan, araştırma geliştirme odaklı, Üniversite-Sanayi işbirliğinin merkezinde
                                yer alan, toplam kalite yaklaşımını tüm akademik ve idari birimlerine yaymış, tüm alanlarda
                                uluslararasılaşmayı hedef haline getiren bir dünya Üniversitesidir.</p>
                            <p class="mt-5"> Üniversitemiz, öğrencileri, akademik ve idari çalışanları için vermiş
                                olduğu hizmetlerde; kaliteyi ön planda tutarak mutlu, huzurlu, sağlıklı ve başarılı bir
                                çalışma ortamı sunan; eğitim-öğretim temelinde öğrenmeyi öğrenen, öğrendiklerini uygulamaya
                                dönüştüren, yapmış oldukları araştırma-geliştirme projeleri ile bilime katkı sunan, uygulama
                                ve araştırma merkezleri ile ulusal ve uluslararası ölçekteki sorunlara çözüm sunmayı bir
                                görev kabul ederek saygın mükemmel bir üniversite olmayı hedeflemiştir.</p>
                            <p class="mt-5"> Kurucumuz Gülşen Kılıç’a “Dünyanın bir yerinde, bir mühendis, bir
                                icat yapmış ise ben de yapmalıyım” dedirten özgüveni ve çalışma azmini öğrencilerimize ve
                                çalışanlarımıza kazandırarak, sadece mühendislik alanında değil aynı zamanda fen, sosyal,
                                sağlık ve tüm disiplinlerde uygulamaya dönüştürmek için çalışmalarımız sürekli olarak devam
                                edecektir. Bu kapsamda eğitim-öğretim programlarımızda teorik bilginin yanı sıra uygulamalı
                                eğitimler vererek bilgilerin gerçeğe dönüştürülmesi sağlanacak, yapacağımız aktif saha
                                uygulamaları ile öğrencilerimizin eğitim aldıkları her sektörü yakından tanımalarını ve
                                kendilerini mesleki yaşamlarına hazırlanmasını sağlayacağız.</p>
                            <p class="mt-5"> Üniversitemiz, 2020 li yıllarda kendi teknolojisini üreten bir
                                Türkiye hedefine katkı sağlamak ve bu hedefte kendine yer edinmek için öğrencilerimizin, tüm
                                akademik eğitim ve öğretim programlarındaki yaşadığımız yüzyılın gerekliklerini ve
                                yetkinliklerini kazanmaları için gerekli düzenlemelerin sürekliliğini sağlayarak, kendi
                                ideallerine ulaşacak geniş ufuklara sahip, özgür düşünen bireyler yetiştirmek temel
                                hedeflerimizdir.</p>
                            <p class="mt-5">Kalite yaklaşımın temel kabul edildiği, Fen, Sağlık, Sosyal ve Spor
                                alanlarını içeren her bir disiplinde, bilimsel düşüncenin teknoloji ile birleştiği ve
                                uygulamaya dönüştüğü Üniversitemiz, sizleri bilimsel, teknolojik, toplumsal, sosyal
                                alanlarda farklılık ve yenilik getirecek etkinliklerimiz ve projelerimiz ile
                                buluşturacaktır. </p>
                            <p class="mt-5">Sevgi ve saygılarımla, </p>


                        </div>
                        <!--/.row -->
                    </div>
                    <!--/.tab-pane -->
                    <div class="tab-pane fade" id="tab2-3">
                        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

                            <h2>Araştırma, Lisans Eğitiminde Başlar</h2>
                            <p>YÖK’ün 26 Eylül 2017 tarihli kararıyla Araştırma Üniversitesi ilan edilen GKU,kuruluşundan
                                bu yana geçen 52 yılda, Türk bilimine yaptığı nitelikli ve özgün katkılarıve kattıklarıyla
                                marka üniversite niteliği kazanarak Türkiye’nin evrensel bilime açılankapısı olmuştur.
                                Bilime, topluma, insanlığa katkıları ve dünya başarıları ile ülkemizinismini duyuran, her
                                biri gurur kaynağımız on binlerce mezun vermiştir.</p>
                            <img src="site/images/about/aday/2.jpg" alt="">
                            <p>GKU’de araştırma, lisans eğitiminde başlar. Ülke çapında ve uluslararası pek çok sosyal,
                                teknolojik, kültürel ve tarihi araştırma ve projeler, öğrencilerle birlikte yürütülür.
                                Her düzeyden araştırmacıya kütüphaneleri, laboratuvarları, bilişim olanakları, araştırma
                                ve uygulama merkezleriyle eşsiz bir araştırma ortamı sunan GKU, tüm bu olanakları ve
                                birikimlerini, bu olanaklarla yetişmiş öğretim üyeleri ve mezunlarıyla toplum hizmetine
                                verir.</p>
                            <img src="site/images/about/aday/3.jpg" alt="">
                            <p>İlkleriyle fark yaratan GKU Üniversitesi’ni özgün ve özel kılan özelliklerinin başında
                                multidisipliner anlayış gelir. Tıp-sağlık bilimlerinden sosyal-beşeri bilimlere,
                                fen-mühendislik bilimlerinden güzel sanatlara ve konservatuvara kadar çok geniş bir
                                yelpazede çağdaş ve nitelikli eğitim veren GKU Üniversitesi, bu yönü ile ülkemizdeki diğer
                                tüm yükseköğretim kurumlarından ayrılmaktadır. İnsanlığın sorunlarını keşfedip sorgulayan,
                                analiz edip anlayan, bilgi birikimini kullanarak çözümleyen alanının lideri profesyoneller
                                GKU’de yetişmektedir.</p>
                            <img src="site/images/about/aday/4.jpg" alt="">

                        </div>
                        <!--/.row -->
                    </div>
                    <!--/.tab-pane -->
                    <div class="tab-pane fade" id="tab2-4">
                        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">


                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/dishekimligi-scaled.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">Diş Hekimliği Fakültesi</h4>

                                    <!-- /.social -->
                                </div>
                            </div>
                            <!-- /.item -->

                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/ecza_banner.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">Eczacılık Fakültesi</h4>

                                    <!-- /.social -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/edebiyatfakultesi-scaled.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">Edebiyat Fakültesi</h4>

                                </div>
                                <!-- /.item -->
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/egitim_banner.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">Eğitim Fakültesi</h4>

                                    <!-- /.social -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/ftr_banner.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">Fizik Tedavi ve Rehabilitasyon Fakültesi</h4>

                                    <!-- /.social -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/fenfakultesi-scaled.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">Fen Fakültesi</h4>

                                    <!-- /.social -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/gsf-scaled.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">Güzel Sanatlar Fakültesi</h4>

                                    <!-- /.social -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/hemsirelik_banner-1.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">Hemşirelik Fakültesi</h4>

                                    <!-- /.social -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/hukuk_banner.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">Hukuk Fakültesi</h4>

                                    <!-- /.social -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/iletisim_banner.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">İletişim Fakültesi</h4>

                                    <!-- /.social -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/iktisadi_banner.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">İktisadi ve İdari Bilimler Fakültesi</h4>

                                    <!-- /.social -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/muhendislik-fakultesi-scaled.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">Mühendislik Fakültesi</h4>

                                    <!-- /.social -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/saglik_banner.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">Sağlık Bilimleri Fakültesi</h4>

                                    <!-- /.social -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/saglikbilimleri_banner.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">Spor Bilimleri Fakültesi</h4>

                                    <!-- /.social -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/tipfakultesi-scaled.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">Tıp Fakültesi</h4>

                                    <!-- /.social -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/04/kapak_konservatuvar.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">Ankara Devlet Konservatuvarı</h4>

                                    <!-- /.social -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/04/kapak_mtyo.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">Mesleki Teknoloji Yüksekokulu</h4>

                                    <!-- /.social -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/04/kapak_ydyo.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">Yabancı Diller Yüksekokulu</h4>

                                    <!-- /.social -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/04/kapak_aso.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">GKU ASO 1. OSB Meslek Yüksekokulu</h4>

                                    <!-- /.social -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/07/kapak_baskent1.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">Başkent OSB Teknik Bilimler Meslek Yüksekokulu</h4>

                                    <!-- /.social -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/04/kapaksagbil.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">Sağlık Hizmetleri Meslek Yüksekokulu</h4>

                                    <!-- /.social -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="rounded  mb-2"
                                        src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/04/kapak_sosbil.jpg"
                                        alt="" />
                                    <h4 class="mb-1 d">Sosyal Bilimler Meslek Yüksekokulu</h4>

                                    <!-- /.social -->
                                </div>
                                <!-- /.item -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2-5">
                        <div class="container">
                            <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="j_Y2Gwaj7Gs">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2-7">
                        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                            <div class="container">
                                <h3 class="text-center">7/24 Yaşayan Yerleşkeler</h3>
                                <h5>Şehrin ortasındaki vaha</h5>
                                <p>Hangi bölüm olursa olsun GKU ders temposu yoğundur. Ancak GKU, iyi bir planlama
                                    yapmak koşuluyla öğrencilerine sosyal, kültürel, sanatsal ve sportif etkinlikler
                                    açısından geniş bir yelpaze sunar. GKU’de öğrencilerin aldıkları eğitimin sosyal,
                                    kültürel ve sportif etkinliklerle desteklenmediği sürece eksik kalacağına inanılır.
                                    Her an yaşayan yerleşkeleri tüm bu faliyetleri gerçekleştirebilmeleri için öğrencilere
                                    bir çok imkan sunar.</p>
                                <img src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/aday_sihhiye.jpg"
                                    alt="" style="width: 100%">
                                <p class="mt-5 mb-5">Öğrencilerin ilgi ve yetenekleri doğrultusunda etkinliklere
                                    katılabilmeleri için resim, fotoğrafçılık, el sanatları, halk oyunları, klasik danslar
                                    ve müzik alanlarında çalışma grupları, korolar ve kurslar oluşturulur. Bu grupların
                                    konser, gösteri, sergi gibi ulusal ve uluslararası etkinliklere katılımı desteklenir.
                                </p>
                                <img src="https://universitem.hacettepe.edu.tr/wp-content/uploads/2021/03/aday_beytepe.jpg"
                                    alt="" style="width: 100%">
                                <p class="mt-5">Yerleşkelerinde gezinirken, yurtlarında barınırken,
                                    kafeteryalarında beslenirken, dinlenme alanlarında sohbet ederken ya da spor yaparken
                                    edebiyat, tıp, mühendislik, sağlık bilimleri, iktisadi ve idari bilimler, konservatuar,
                                    eczacılık, diş hekimliği, spor bilimleri, fen bilimleri, hukuk, güzel sanatlar
                                    fakültelerinde okuyan öğrenciler ile aynı anda karşılaşabileceğiniz bir başka üniversite
                                    ülkemizde yoktur. GKU öğrencileri böylesine zengin bir akademik çeşitliliğin sunduğu
                                    fırsatlara ve ayrıcalıklara sahiptir.</p>
                                <p class="mt-5">Gülşen Kılıç Üniversitesi yerleşkelerinde öğrencilerimize
                                    barınma, beslenme, sağlık, kültür, sanat, spor ve sosyal faaliyet alanlarında sunulan
                                    hizmetlerin kalitesi, etkinliği ve yeterliliği Sağlık, Kültür ve Spor Daire Başkanlığı
                                    güvencesi altındadır. Gülşen Kılıç Üniversitesi beslenme ve barınma gibi temel
                                    hizmetlerde kalite standartlarından asla taviz vermez. Öğrencilere kaliteli beslenme ve
                                    barınma hizmetleri piyasa şartlarının çok altında düşük fiyatlarla sunulur.</p>
                                <h3 class="mt-5">Ulaşım Hizmetleri</h3>
                                <h5>Sıhhiye Yerleşkesi’ne Ulaşım</h5>
                                <p>Sıhhiye Yerleşkesi, Ankara’nın ilk yerleşim bölgesi olan Ulus semti ile Hamamönü semtleri
                                    arasındaki bölgede yer alır. Bu yerleşke; Sıhhiye, Kurtuluş, Kızılay, Opera ve
                                    Samanpazarı’ndan 10-15 dakikalık yürüme mesafesindedir. Beytepe Yerleşkesi ile Sıhhiye
                                    Yerleşkesi arası ulaşım, ring seferleriyle sağlanmaktadır. Sıhhiye Yerleşkesi’ne çeşitli
                                    semt ve ilçelerden ulaşım, belediye otobüsü ve dolmuşun yanı sıra banliyö treni, metro
                                    ve Ankaray ile sağlanabilir. Özel aracı ile gelecek olan ziyaretçilerimiz yerleşkeye,
                                    Sıhhiye veya Kurtuluş ana giriş kapısından giriş yapabilirler. </p>
                                <h6>Sıhhiye Yerleşkesi’ne Ulaşım</h6>
                                <p>Beytepe Yerleşkesi, Eskişehir Yolu Üniversiteler Mahallesinde yer almaktadır.</p>
                                <h6>TOPLU TAŞIMA İLE ULAŞIM:</h6>
                                <p>(M2) ANKARA METROSU-2 (KIZILAY- ÇAYYOLU) ile Beytepe Yerleşkesine ulaşım sağlanabilir.
                                    Metrodan Beytepe durağında indikten sonra, Beytepe Köprüsü üzerinde bulunan Beytepe
                                    otobüs durağından yerleşkemizden hareket eden “BEYTEPE METRO İSTASYONU – BEYTEPE
                                    KAMPÜSÜ” otobüsleri ile yerleşkemize ulaşmak mümkündür. Hareket saatleri ve hatla ilgili
                                    ayrıntılı bilgi için tıklayınız. Toplu taşıma ile ilgili bilgiyi EGO web sayfasından
                                    edinebilirsiniz.</p>
                                <h6>ÖZEL ARAÇ İLE ULAŞIM:</h6>
                                <p>Ankara-Eskişehir yolu üzerinden, Beytepe Köprüsü ile yerleşkenin A ana giriş kapısına
                                    ulaşılır. Köprüden önce “Hacettepe” yönlendirme tabelaları mevcuttur. Ana giriş
                                    kapısından girildikten 3 km sonra yerleşke içi yönlendirme levhaları size yardımcı
                                    olacaktır.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2-8">
                        <div class="container">
                            <div class="accordion accordion-wrapper" id="accordionExample">
                                <div class="card accordion-item">
                                    <div class="card-header" id="heading1">
                                        <button class="collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                            Kampüslere ulaşım nasıl sağlanmakta? Toplu taşıma kullanarak nasıl ulaşabilirim?
                                        </button>
                                    </div>
                                    <!--/.card-header -->
                                    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Üniversitemizin yerleşkelerine ulaşım bilgileri için <a
                                                    href="https://www.marmara.edu.tr/bilgilendirme/iletisim-bilgileri">https://www.marmara.edu.tr/bilgilendirme/iletisim-bilgileri</a>
                                                sayfasını ziyaret edebilirsiniz.</p>
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!--/.accordion-collapse -->
                                </div>
                                <!--/.accordion-item -->
                                <div class="card accordion-item">
                                    <div class="card-header" id="headingTwo">
                                        <button class="collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Yurt dışında eğitim imkanlarından nasıl faydalanabilirim? </button>
                                    </div>
                                    <!--/.card-header -->
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Üniversitemizde öğrenim gören öğrencilerin öğrenim hayatlarının bir bölümünü
                                                yurt dışında bulunan başka bir üniversitede sürdürmeleri mümkündür. Konuyla
                                                ilgili koşul ve açıklamalara ulaşmak için <a
                                                    href="https://uluslararasi.marmara.edu.tr/">https://uluslararasi.marmara.edu.tr/</a>
                                                sayfasını ziyaret edebilirsiniz.</p>
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!--/.accordion-collapse -->
                                </div>
                                <!--/.accordion-item -->
                                <div class="card accordion-item">
                                    <div class="card-header" id="headingThree">
                                        <button class="collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree"> Gülşen Kılıç Üniversitesi’nde hangi öğrenci
                                            kulüpleri var? </button>
                                    </div>
                                    <!--/.card-header -->
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Öğrenci kulüpleri listesine <a
                                                    href="https://sks.marmara.edu.tr/ogrenci-kulupleri/ogrenci-kulupleri/kulup-listesi-ve-faaliyetleri">https://sks.marmara.edu.tr/ogrenci-kulupleri/ogrenci-kulupleri/kulup-listesi-ve-faaliyetleri</a>
                                                sayfasından ulaşabilirsiniz.</p>
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!--/.accordion-collapse -->
                                </div>
                                <!--/.accordion-item -->
                                <div class="card accordion-item">
                                    <div class="card-header" id="heading3">
                                        <button class="collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            Gülşen Kılıç Üniversitesi’ne şehir dışından geliyorum, yurt imkanı var mı?
                                        </button>
                                    </div>
                                    <!--/.card-header -->
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>İstanbul Büyükşehir Belediyesi sınırları dışında ikamet eden öğrencilerin
                                                başvurabileceği yurt olanakları hakkında bilgi almak için <a
                                                    href="https://www.marmara.edu.tr/kampuste-yasam/barinma/yurtlar">https://www.marmara.edu.tr/kampuste-yasam/barinma/yurtlar</a>
                                                sayfasına ulaşabilirsiniz.</p>
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!--/.accordion-collapse -->
                                </div>
                                <!--/.accordion-item -->
                                <div class="card accordion-item">
                                    <div class="card-header" id="heading4">
                                        <button class="collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            Üniversitenizde Çift Anadal İmkanı Var Mı? Koşulları Nelerdir?</button>
                                    </div>
                                    <!--/.card-header -->
                                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Üniversitemizde tüm lisans bölümlerinde ve önlisans programlarında çift
                                                anadal imkanı bulunmaktadır. Şartları sağlayan öğrencilerimiz (ortalama,
                                                sınıfında ilk %20 dilimde olmak gibi) başvuru yapmaları durumunda
                                                başvuruları değerlendirilir ve kontenjan dahilinde çift anadal eğitimine
                                                başlayabilir. Çift anadal programlarını başarıyla tamamlayan öğrenciler
                                                ikinci bir program diploması ile mezun olmuş olurlar.</p>
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!--/.accordion-collapse -->
                                </div>
                                <!--/.accordion-item -->
                                <div class="card accordion-item">
                                    <div class="card-header" id="heading5">
                                        <button class="collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                            Gülşen Kılıç Üniversitesi’nin yemekhaneleri ve kafeteryalarından nasıl
                                            faydalanabilirim? </button>
                                    </div>
                                    <!--/.card-header -->
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Üniversitemizdeki yemekhane hizmetlerinden yararlanmak için Kampüs Kart
                                                sahibi olmak gerekmektedir. Kafeteryalara giriş için ise herhangi bir işleme
                                                gerek bulunmamaktadır. Kampüs kart işlemleri hakkında detaylı bilgilere <a
                                                    href="https://oidb.marmara.edu.tr/ogrenci/kampus-kart/">https://oidb.marmara.edu.tr/ogrenci/kampus-kart/</a>
                                                sayfasından ulaşabilirsiniz.</p>
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!--/.accordion-collapse -->
                                </div>
                                <!--/.accordion-item -->
                                <div class="card accordion-item">
                                    <div class="card-header" id="heading6">
                                        <button class="collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                            Akademik Kadronuz Hakkında Bilgi Alabilir Miyim? </button>
                                    </div>
                                    <!--/.card-header -->
                                    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Akademik kadromuz alanlarında öne çıkmış, saygın araştırmacı öğretim
                                                üyelerinden oluşmaktadır. Gerekli bilgileri ilgili bölüm sayfalarından
                                                bulabilirsiniz.</p>
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!--/.accordion-collapse -->
                                </div>
                                <!--/.accordion-item -->
                                <div class="card accordion-item">
                                    <div class="card-header" id="heading7">
                                        <button class="collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse7" aria-expanded="false"
                                            aria-controls="collapse7">Üniversitenizde Uzaktan Eğitim Programları Mevcut Mu?
                                        </button>
                                    </div>
                                    <!--/.card-header -->
                                    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Lisans bölümlerimiz ve önlisans programlarımız bu yıl örgün eğitim
                                                vermektedir. Fakat bazı derslerimiz için ihtiyaç duyulur ise uzaktan eğitim
                                                verilebilir. Bunlar Atatürk İlkeleri ve İnkılap Tarihi, Türk Dili gibi
                                                zorunlu derslerdir.</p>
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!--/.accordion-collapse -->
                                </div>
                                <!--/.accordion-item -->
                                <div class="card accordion-item">
                                    <div class="card-header" id="heading8">
                                        <button class="collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                            Özel Yetenek Sınavı ile Öğrenci Kabul Eden Bölüm Var Mı? </button>
                                    </div>
                                    <!--/.card-header -->
                                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Üniversitemizde özel yetenek sınavı ile öğrenci alan bölümümüz
                                                bulunmamaktadır.</p>
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!--/.accordion-collapse -->
                                </div>
                                <!--/.accordion-item -->
                                <div class="card accordion-item">
                                    <div class="card-header" id="heading9">
                                        <button class="collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                            Harfli Sistemde Not Karşılıkları Nelerdir? </button>
                                    </div>
                                    <!--/.card-header -->
                                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Harfli sistemde notların karşılığı AA – 4.00, BA -3.5, BB – 3.00, CB – 2.5,
                                                CC – 2.00,DC – 1.5, DD – 1.0, FF – 0 şeklindedir. Not karşılıklarını ve
                                                değerlendirmeleri ilgili öğretim elemanı belirlemektedir.</p>
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!--/.accordion-collapse -->
                                </div>
                                <!--/.accordion-item -->
                                <div class="card accordion-item">
                                    <div class="card-header" id="heading10">
                                        <button class="collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                            Üniversitenizde Lisans ve Önlisans Programlarında İkinci Öğretim Programları Var
                                            Mıdır? Saatleri Nelerdir? </button>
                                    </div>
                                    <!--/.card-header -->
                                    <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Sağlık Hizmetleri Meslek Yüksekokulu’nda Anestezi, Ameliyathane Hizmetleri,
                                                İlk ve Acil Yardım, Tıbbi Görüntüleme Teknikleri programlarımızın ikinci
                                                öğretimi bulunmaktadır. Eğitimler ders programına göre şekillenecek olup
                                                genellikle saat 17:00-22:00 arasında yapılacaktır.</p>
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!--/.accordion-collapse -->
                                </div>
                                <!--/.accordion-item -->
                            </div>
                            <!--/.accordion -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2-9">
                        <div class="container">
                            <div class="row">
                                <h4 class="text-center">MESAJINIZI BIRAKIN!</h4>
                                <div class="col-xl-10 mx-auto">
                                    <div class="row gy-10 gx-lg-8 gx-xl-12">

                                        <form class="contact-form needs-validation" method="post"
                                            action="./assets/php/contact.php" novalidate>
                                            <div class="messages"></div>
                                            <div class="row gx-4">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-4">
                                                        <input id="form_name" type="text" name="name"
                                                            class="form-control" placeholder="Jane" required>
                                                        <label for="form_name">Ad *</label>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Lütfen adınızı girin.
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /column -->
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-4">
                                                        <input id="form_lastname" type="text" name="surname"
                                                            class="form-control" placeholder="Doe" required>
                                                        <label for="form_lastname">Soyad *</label>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Lütfen soyadınızı girin </div>
                                                    </div>
                                                </div>
                                                <!-- /column -->
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-4">
                                                        <input id="form_email" type="email" name="email"
                                                            class="form-control" placeholder="jane.doe@example.com"
                                                            required>
                                                        <label for="form_email">Email *</label>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Lütfen email girin
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /column -->
                                                <div class="col-md-6">
                                                    <div class="form-select-wrapper">
                                                        <select class="form-select" id="form-select" name="department"
                                                            required>
                                                            <option selected disabled value="">Bir Konu seçin</option>
                                                            <option value="Sales">Eğitim</option>
                                                            <option value="Marketing">Reklam</option>
                                                            <option value="Customer Support">Diğer
                                                            </option>
                                                        </select>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Bir konu seçin
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /column -->
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-4">
                                                        <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px"
                                                            required></textarea>
                                                        <label for="form_message">Mesajınız *</label>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Lütfen bir mesaj girin
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /column -->
                                                <div class="col-12">
                                                    <div class="form-check mb-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="invalidCheck" required>
                                                        <label class="form-check-label" for="invalidCheck">
                                                            I agree to <a href="#" class="hover">terms
                                                                and policy</a>.
                                                        </label>
                                                        <div class="invalid-feedback">
                                                            You must agree before submitting.
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /column -->
                                                <div class="col-12">
                                                    <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3"
                                                        value="Mesajı Gönder">
                                                    <p class="text-muted"><strong>*</strong>Bu alanlar gerekli.</p>
                                                </div>
                                                <!-- /column -->
                                            </div>
                                            <!-- /.row -->
                                        </form>
                                        <!-- /form -->



                                    </div>
                                    <!--/.row -->
                                </div>
                                <!-- /column -->
                            </div>

                            <!-- /section -->
                        </div>
                    </div>
                    <!--/.row -->
                </div>
                <!--/.tab-pane -->
            </div>
        </div>


    </div>
@endsection
