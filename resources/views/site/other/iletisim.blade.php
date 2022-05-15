@extends('site.layouts.index')
@section('content')

<section class="wrapper bg-light">
    <div class="container py-9 py-md-10">
        <h1 class="display-5 text-center mb-6 ">BİZİMLE İLETİŞİME GEÇİN</h1>
      <div class="row">
        <div class="col-xl-10 mx-auto">
          <div class="row gy-10 gx-lg-8 gx-xl-12">
            <div class="col-lg-8">
              <form class="contact-form needs-validation" method="post" action="./assets/php/contact.php" novalidate>
                <div class="messages"></div>
                <div class="row gx-4">
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input id="form_name" type="text" name="name" class="form-control" placeholder="Gülşen" required>
                      <label for="form_name">AD *</label>
                      <div class="valid-feedback">
                        başarılı
                      </div>
                      <div class="invalid-feedback">
                       Lütfen adınızı girin
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Kılıç" required>
                      <label for="form_lastname">Soyad</label>
                      <div class="valid-feedback">
                        başarılı                      </div>
                      <div class="invalid-feedback">
                        Lütfen soyadınızı girin
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
                      <label for="form_email">Email *</label>
                      <div class="valid-feedback">
                        başarılı    
                      </div>
                      <div class="invalid-feedback">
                        Lütfen email girin
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                    <div class="form-select-wrapper">
                      <select class="form-select" id="form-select" name="department" required>
                        <option selected disabled value="">Depatman</option>
                        <option value="Sales">Satış</option>
                        <option value="Marketing">Pazarlama</option>
                        <option value="Customer Support">Eğitim</option>
                      </select>
                      <div class="valid-feedback">
                        başarılı
                      </div>
                      <div class="invalid-feedback">
                        Lütfen Bir seçim yapın
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-12">
                    <div class="form-floating mb-4">
                      <textarea id="form_message" name="message" class="form-control" placeholder="Mesajınız" style="height: 150px" required></textarea>
                      <label for="form_message">Mesajınız *</label>
                      <div class="valid-feedback">
                        başarılı                      </div>
                      <div class="invalid-feedback">
                        Lütfen Bir mesaj yazın
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-12">
                    <div class="form-check mb-4">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                      <label class="form-check-label" for="invalidCheck">
                        I agree to <a href="#" class="hover">terms and policy</a>.
                      </label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-12">
                    <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Mesajı gönder">
                    <p class="text-muted"><strong>*</strong> Bu alanlar gerekli</p>
                  </div>
                  <!-- /column -->
                </div>
                <!-- /.row -->
              </form>
              <!-- /form -->
            </div>
            <!--/column -->
            <div class="col-lg-4">
              <div class="d-flex flex-row">
                <div>
                  <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                </div>
                <div>
                  <h5 class="mb-1">Adres</h5>
                  <address>Çırağan Caddesi

                    Osmanpaşa Mektebi Sokak
                    
                    No: 4 - 6
                    
                    34353 Beşiktaş,
                    
                    İSTANBUL / TÜRKİYE</address>
                </div>
              </div>
              <div class="d-flex flex-row">
                <div>
                  <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                </div>
                <div>
                  <h5 class="mb-1">Telefon</h5>
                  <p>00 (123) 456 78 90 <br class="d-none d-md-block" />00 (987) 654 32 10</p>
                </div>
              </div>
              <div class="d-flex flex-row">
                <div>
                  <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                </div>
                <div>
                  <h5 class="mb-1">E-mail</h5>
                  <p class="mb-0"><a href="mailto:sandbox@email.com" class="text-body">info@gku.com</a></p>
                  <p><a href="mailto:help@sandbox.com" class="text-body">help@gku.com</a></p>
                </div>
              </div>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

@endsection