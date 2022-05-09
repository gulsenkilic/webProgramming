@extends('site.layouts.index')
@section('content')
@include('site.fakulteler.muh.bolumler.bil.partial')

<h3 class="text-right">İletişim</h3>
<hr class="my-5">
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

<br>
<p>Bahçeşehir Üniversitesi Mühendislik ve Doğa Bilimleri Fakültesi D Blok 4. Kat
    <br>
    Dr. Öğr. Üyesi Tevfik Aytekin
<br>
+90 212 381 0000
<br>tevfik.aytekin@eng.gku.edu.tr




</p>
@include('site.fakulteler.muh.bolumler.bil.partial2')
@endsection