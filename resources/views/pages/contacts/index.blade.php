@extends('layouts/app')
@section('content')
   <!-- ======= Contact Section ======= -->
    <section  class="contact mt-4">
        <div class="container">

          <div class="section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>

          <div class="row no-gutters justify-content-center" data-aos="fade-up">

              <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                  <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p>A108 Adam Street, New York, NY 535022</p>
                  </div>

                  <div class="email mt-4">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>info@example.com</p>
                  </div>

                  <div class="phone mt-4">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>+ 223 58 96 32 15</p>
                  </div>

                </div>

              </div>

              <div class="col-lg-7 d-flex align-items-stretch">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Nom" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjet" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-right"><button type="submit" >Envoyer</button></div>
                </form>
              </div>

          </div>

          <div class="row mt-5 justify-content-center" data-aos="fade-up">
            <div class="col-lg-10">

            </div>

          </div>

        </div>
    </section>
   <!-- End Contact Section -->
@endsection
