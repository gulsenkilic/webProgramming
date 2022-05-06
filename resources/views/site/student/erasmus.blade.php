@extends('site.layouts.index')
@section('content')
    <div class="container py-14 py-md-9">
        <h3 class="mt-3">ERASMUS</h3>
        <p>Erasmus+ anlaşması kapsamında 22 farklı AB ülkesinde toplamda 36 ikili anlaşma mevcuttur. Erasmus+ Programına hak
            kazanan öğrenciler AB başkanlığından aylık bazda mali destek almaktadırlar. Bu destek Türkiye Ulusal Ajansından
            üniversitemize, üniversiteden de öğrencilerimize aktarılmaktadır. Her yıl okul bazında yaklaşık 190 Erasmus
            öğrenim öğrencisi seçilmektedir. Tüm üniversite programlarında, Türkiye Ulusal Ajansın belirlediği hibeye göre
            190 kişilik Erasmus öğrencisi kotamızdan Mühendisliğe ayrılan hibeli öğrenci sayısı ortalama 35’dir. Ayrıca
            Erasmus Staj programı (yaz aylarında veya mezuniyet sonrası, kendilerinin ayarladıkları bir şirkette- yine AB
            üye ülkesi olmak kaydı ile- staj yapmak için başvurabilirler. Okulumuzdan her sene, her fakülteden 2 staj
            öğrencisi seçilmektedir. Öğrenciler bu fırsattan hibesiz olarak faydalanmak isterlerse, başvuru esnasında
            minimum kriterleri tamamlamış olmaları yeterlidir.</p>
        <p>Detaylı bilgi için: <a
                href=" http://international.bahcesehir.edu.tr/exchange/">http://international.bahcesehir.edu.tr/exchange/</a>
        </p>
        <h4 class="mb-5">Sıkça Sorulan Sorular</h4>
        
            <div class="accordion accordion-wrapper" id="accordionExample">
                <div class="row">
                 
                    <div class="col-12 col-lg-6">
                        <div class="card accordion-item">
                            <div class="card-header" id="heading10">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapse10"
                                    aria-expanded="false" aria-controls="collapse10">
                                    Gittiğim üniversitenin kendi öğrencileri ile, benim sahip olacağım teknik ,sosyal ve ekonomik
                                    imkanlar aynı olacak mı?</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Evet. Örneğin, laboratuar imkanlarından eşit olarak faydalanabilirsiniz. Fakat, diğer
                                        öğrenciler için ücrete tabi olan olanaklar (fotokopi vs.) sizin için de aynı ücret
                                        karşılığını ödemeniz koşuluyla geçerlidir.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card accordion-item">
                            <div class="card-header" id="headingThree">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree"> Öğrenci olarak ben bölümümün
                                    /Yüksekokulun /Enstitünün karşılıklı anlaşma yapması için yazışmaya başlayabilir
                                    miyim?</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Hayır, Karşılıklı anlaşma için yazışmaları bölüm/okul/enstitü koordinatörleri ve/veya
                                        Uluslararası İlişkiler Koordinatörleri yapar.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card accordion-item">
                            <div class="card-header" id="headingTwo">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    Erasmus öğrencisi olmak için nasıl başvurabilirim? </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Erasmus öğrencisi olmak için her yıl Üniversitemiz 3 defa başvuru süresi
                                        belirlemektedir. Gerek ana sayfadan gerekse ofis web sayfasından duyurular ilan
                                        edilmektedir. Bu süre içinde öğrenciler registration aracılığıyla başvurularını
                                        yaparlar.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card accordion-item">
                            <div class="card-header" id="heading3">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapse3"
                                    aria-expanded="false" aria-controls="collapse3">
                                    Öğrenim Anlaşması nedir?
                                </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Öğrenim anlaşması gittiğiniz üniversitede alacağınız dersleri, kredileri ile birlikte
                                        gösteren belgedir. Orada alacağınız dersleri gösterir.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card accordion-item">
                            <div class="card-header" id="heading4">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapse4"
                                    aria-expanded="false" aria-controls="collapse4">
                                    Erasmus Öğrencisi olarak tamamlamam gereken belgeler nelerdir?</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Learning Agreement, Yurtdışı Eğitim Amaçlı Genel Sağlık Sigortası Policesi (Almanya
                                        için AT11 Belgesi), Katılım Sertfikası,Pasaport Giriş-çıkış sayfasının fotokopisi,
                                        Transcript of Records, Nihai Rapor Formu gibi gitmeden önce, oradayken ve döndükten
                                        sonra tamamlaman gereken birçok belge bulunmaktadır. Belgeler için gidiş öncesi ve
                                        dönüş belgeleri hakkında katılımcılara bilgilendirme maili ilgili Danışmanlar
                                        tarafında iletilmektedir. Ayrıca web sayfamızda yer almaktadır.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card accordion-item">
                            <div class="card-header" id="heading6">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapse6"
                                    aria-expanded="false" aria-controls="collapse6">
                                    Erasmus öğrenim hareketliliğine katılan öğrencilerin başarısızlık kriteri nedir?
                                </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Katılımcıların hareketlilikte aldıkları ders yükünün 15 ECTS altında transkripte (Not
                                        Dökümü) sahip olmaları durumunda başarısız olarak değerlendirilir. Hibeli olmaları
                                        durumunda faaliyetlerin %20 oranında kesinti yapılır.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card accordion-item">
                            <div class="card-header" id="heading5">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapse5"
                                    aria-expanded="false" aria-controls="collapse5">
                                    Hangi sağlık sigortasını yaptırmalıyım? </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Gidilen her ülkenin farklı talepleri olmakla birlikte, uluslararası geçerliliği olan
                                        en kapsamlı sağlık sigortasını tercih ediniz. Sigortaların içerikleri ve
                                        kapsamlarının genel merkezlerden öğrenilmesi tavsiye edilmektedir. Ayrıntılı Sigorta
                                        hakkında bilgilendirme maili katılımcılara iletilmektedir.
                                    </p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-6">
                        <div class="card accordion-item">
                            <div class="card-header" id="heading7">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapse7"
                                    aria-expanded="false" aria-controls="collapse7">Erasmus öğrenim hareketliliğine ara
                                    kesintisi nedir?
                                </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Misafir olduğu kurumdan (şehirden / ülkeden) ayrıldığının açıkça bilindiği durumlarda
                                        ek araştırma yapılmasına gerek görülmüş ve öğrencinin aralıksız olarak 7 (yedi)
                                        takvim gününden (haftasonu dâhil) fazla süre ile misafir olunan kurumdan ayrıldığı
                                        tespit edilmişse, söz konusu ayrı kalınan toplam gün sayısı için hibe ödemesi
                                        yapılmaz. Daha önce ödeme yapılmışsa, ödemenin iadesi talep edilir.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card accordion-item">
                            <div class="card-header" id="heading8">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapse8"
                                    aria-expanded="false" aria-controls="collapse8">
                                    Erasmus Katılımcı Anketi nedir? </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Öğrenci Anketi: Hareketlilik Aracı kullanılarak öğrencilerden çevrimiçi AB anketini
                                        (EU Survey) doldurmaları istenir. Faaliyetleri tamamlanan öğrencilerin anketi
                                        doldurması gerekmektedir.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-6">
                        <div class="card accordion-item">
                            <div class="card-header" id="heading1">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapse1"
                                    aria-expanded="false" aria-controls="collapse1">
                                    Erasmus Programı ile yurtdışında ne kadar kalabilirim?
                                </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Erasmus programında öğrenci öğrenim hareketliliği süresi asgari 3 ay ile azami 12 ay
                                        arasında değişmektedir.
                                    </p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                    </div>
                </div>
            </div>
     

    </div>
@endsection
