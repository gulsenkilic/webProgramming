@extends('site.layouts.index')
@section('content')
        <section class="wrapper bg-light">
            <div class="row mt-5">
                <img src="site/images/student/cap-yandal.jpg" alt="">
            </div>
            <div class="container py-14 py-md-9">

                <ul class="nav nav-tabs nav-tabs-bg d-flex justify-content-between nav-justified flex-lg-row flex-column">
                    <li class="nav-item"> <a class="nav-link d-flex flex-row active" data-bs-toggle="tab"
                            href="#tab2-1">
                            <div><i class="uil uil-medal svg-inject icon-svg icon-svg-md text-yellow me-4"></i></div>
                            <div>
                                <h4>ÇAP</h4>
                                <p>Üniversitemiz Çift-Anadal Programı</p>
                            </div>
                        </a> </li>
                    <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-2">
                            <div><i class="uil uil-dumbbell svg-inject icon-svg icon-svg-md text-green me-4"></i></div>
                            <div>
                                <h4>YANDAL</h4>
                                <p>Üniversitemiz Yandal Programı</p>
                            </div>
                        </a> </li>
                </ul>
                <!-- /.nav-tabs -->
                <div class="tab-content mt-6 mt-lg-8">
                    <div class="tab-pane fade show active" id="tab2-1">
                        <div class="container gx-lg-8 gx-xl-12 gy-10 align-items-center">

                            <h2>Çift Anadal Nedir?</h2>
                            <p>Ön lisans/ lisans öğretim programına (birinci anadal) kayıtlı olan öğrencilerin, üniversitelerindeki başka bir bölümün/programın belirlediği tüm derslerini alarak, aynı zaman dilimi içinde her iki programı da başarıyla tamamlayıp, ikinci bir dalda lisans/ön lisans diplomasına sahip olmalarıdır. </p>
                            <h2>Hangi Bölüm ve Programlarla Çift Anadal Yapabilirsiniz? *</h2>
                            <ul class="icon-list bullet-bg bullet-soft-yellow">
                                <p>Yüksek öğretim Kurulunun (YÖK) ilgili yönetmelik değişikliğine göre aynı yüksek öğretim kurumunda yürütülen</p>
                                <li><i class="uil uil-check"></i>önlisans diploma programları ile diğer önlisans programları arasında,</li>
                                <li><i class="uil uil-check"></i>lisans programları ile diğer lisans programları arasında</li>
                                <li><i class="uil uil-check"></i>lisans programları ile önlisans programları arasında</li>
                                <p>ilgili bölümlerin ve fakülte/yüksekokul kurullarının önerisi üzerine senatonun onayı ile çift anadal programı açılabilir.</p>
                            </ul>
                            <h3>Çift Anadal’a Ne Zaman Başvurabilirsiniz?*</h3>
                            <ul class="icon-list bullet-bg bullet-soft-yellow">
                                <li><i class="uil uil-check"></i>4 yıllık anadal lisans diploma programında en erken 3. yarıyılın başında, en geç  5. yarıyılın başında,</li>
                                <li><i class="uil uil-check"></i>5 yıllık anadal lisans diploma programında en erken 3. yarıyılın başında, en geç 7.yarıyılın başında,</li>
                                <li><i class="uil uil-check"></i>6 yıllık anadal lisans diploma programında en erken 3. yarıyılın başında, en geç 9. yarıyılın başında,</li>
                                <li><i class="uil uil-check"></i>2 yıllık anadal önlisans diploma programında en erken 2. yarıyılın başında, en geç 3.yarıyılın başında</li>
                                <p>başvurabilir.</p>
                            </ul>
                            <h3>Çift Anadal Başvuru, Kabul ve Devam Koşulları Nelerdir? **</h3>
                            <ul class="icon-list bullet-bg bullet-soft-yellow">
                                <li><i class="uil uil-cube"></i>Başvuru anında anadal diploma programındaki genel not ortalaması en az 4 üzerinden 3,00 olan ve anadal diploma programının ilgili sınıfında başarı sıralaması itibari ile en üst yüzde yirmisinde bulunan öğrenciler ikinci anadal diploma programına başvurabilirler.</li>
                                <li><i class="uil uil-cube"></i> Çift anadal diploma programına başvurabilmesi için öğrencinin başvurduğu yarıyıla kadar anadal diploma programında aldığı tüm dersleri başarıyla tamamlaması gerekir.</li>
                                <li><i class="uil uil-cube"></i></i>Öğrencinin çift anadal programından mezun olabilmesi için genel not ortalamasının en az 4 üzerinden 2,72 olması gerekir. Tüm çift anadal öğrenimi süresince öğrencinin genel not ortalaması bir defaya mahsus olmak üzere 4 üzerinden 2,50'ye kadar düşebilir. Genel not ortalaması ikinci kez 4 üzerinden 2,50'in altına düşen öğrencinin ikinci anadal diploma programından kaydı silinir.</li>
                                <li><i class="uil uil-cube"></i></i>İkinci anadal lisans programına devam eden öğrenciye mezuniyet diploması ancak devam ettiği birinci anadal diploma programından mezun olması halinde verilebilir.</li>
                                <li><i class="uil uil-cube"></i> Çift anadal ikinci diploma programında öğrenim gören öğrencinin anadal programında almış olduğu ve eşdeğerlikleri kabul edilen dersler, not çizelgesinde gösterilir. </li>
                                <li><i class="uil uil-cube"></i></i> Anadal programından mezuniyet hakkını elde eden ancak çift anadal programını bitiremeyen öğrencilerin öğrenim süresi çift anadal programına kayıt yaptırdığı eğitim öğretim yılından itibaren 2547 sayılı Kanunun 44’üncü maddesinin (c) fıkrasında belirtilen azami süredir.</li>
                                <li><i class="uil uil-cube"></i></i>Çift anadal programından iki yarıyıl üst üste ders almayan öğrencinin ikinci anadal diploma programından kaydı silinir.</li>
                                <li><i class="uil uil-cube"></i>Çift anadal programından çıkarılan öğrencilerin ikinci anadal programında almış oldukları derslerin ne şekilde değerlendirileceği, senato tarafından belirlenir.</li>
                                <li><i class="uil uil-cube"></i>Senato kararı ile, çift anadal programlarına ilişkin bu Yönetmelikte belirtilenlere ilave olarak yeni koşullar getirilebilir, öngörülen asgari başarı notları yükseltilebilir.</li>
                                <li><i class="uil uil-cube"></i>Aynı anda iki çift anadal yapılamaz. Bir çift anadal bir yandal program yapılabilir.</li>
                            </ul>
                           <h4>Bölümler Arası Geçişler;</h4>
                           <p>Önlisans programlarında en erken 2. Döneme, lisans programlarında en erken 3. Dönemde kurumlar arası yatay geçiş başvurusunda bulunulabilir. Öğrenci kayıtlı olduğu programdan farklı bir programa geçmek ister ise ortalama şartını ve YÖK kurum içi yatay geçiş şartlarını sağlaması durumunda başvuru yapıp kontenjan dahilinde geçişleri yapılabilir. Daha önceki almış olduğu derslerden uygun görülenleri geçiş yapılan programda sayılır.</p>

                        </div>
                        <!--/.row -->
                    </div>
                    <!--/.tab-pane -->
                    <div class="tab-pane fade" id="tab2-2">
                        <div class="container gx-lg-8 gx-xl-12 gy-10 align-items-center">

                            <h2>Yandal Nedir?</h2>
                            <p>Lisans öğretim programına (birinci anadal) kayıtlı olan öğrencilerin, üniversitelerindeki başka bir bölümden/programdan bazı dersleri eş zamanlı ve başarıyla tamamlayıp sertifika almalarıdır.</p>
                            
                            <h3>Yandal Başvuru, Kabul ve Devam Koşulları</h3>
                            <ul class="icon-list bullet-bg bullet-soft-green">
                                <li><i class="uil uil-cube"></i>Öğrenci, yandal programına, anadal lisans programının en erken üçüncü, en geç altıncı yarıyılın başında başvurabilir.</li>
                                <li><i class="uil uil-cube"></i>Yandal programına, başvurduğu yarıyıla kadar aldığı lisans programındaki tüm kredili dersleri başarıyla tamamlamış olan öğrenciler başvurabilir.</li>
                                <li><i class="uil uil-cube"></i></i>Öğrencinin başvuru sırasında anadal programındaki genel not ortalamasının en az 4 üzerinden 2,50 olması gerekir.</li>
                                <li><i class="uil uil-cube"></i></i>Yandal programına devam edebilmesi için öğrencinin anadal programındaki not ortalamasının en az 4 üzerinden 2,29 olması şarttır. Bu şartı sağlayamayan öğrencinin yandal programından kaydı silinir.</li>
                                <li><i class="uil uil-cube"></i> Anadal programından mezuniyet hakkını elde eden ancak yandal programını bitiremeyen öğrencilere ilgili yönetim kurullarının kararı ile en fazla iki yarıyıl ek süre tanınır.</li>
                                <li><i class="uil uil-cube"></i></i>Öğrencinin yandal programındaki başarı durumu, anadal programındaki mezuniyetini etkilemez. </li>
                                <li><i class="uil uil-cube"></i></i> Yandal öğrencisi, öğrenim sürecinin herhangi bir yarıyılında programı kendi isteğiyle bırakabilir. Yandal programından kayıt sildiren öğrenci, aynı yandal programına tekrar kayıt yaptıramaz.</li>
                                <li><i class="uil uil-cube"></i>Yandal programından iki yarıyıl üst üste ders almayan öğrencinin bu programdan kaydı silinir. </li>
                                <li><i class="uil uil-cube"></i>Yandal programından çıkarılan öğrencilerin yandal programında almış oldukları derslerin ne şekilde değerlendirileceği, senato tarafından belirlenir</li>
                                <li><i class="uil uil-cube"></i>Senato kararı ile, yandal programlarına ilişkin bu Yönetmelikte belirtilenlere ilave olarak yeni koşullar getirilebilir öngörülen asgari başarı notları yükseltilebilir. </li>
                            </ul>
                           <h4>Bölümler Arası Geçişler;</h4>
                           <p>Önlisans programlarında en erken 2. Döneme, lisans programlarında en erken 3. Dönemde kurumlar arası yatay geçiş başvurusunda bulunulabilir. Öğrenci kayıtlı olduğu programdan farklı bir programa geçmek ister ise ortalama şartını ve YÖK kurum içi yatay geçiş şartlarını sağlaması durumunda başvuru yapıp kontenjan dahilinde geçişleri yapılabilir. Daha önceki almış olduğu derslerden uygun görülenleri geçiş yapılan programda sayılır.</p>


                        </div>
                        <!--/.row -->
                    </div>
                    <!--/.tab-pane -->
                  
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
@endsection
