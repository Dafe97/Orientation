
@extends('layouts/app')
@section('content')
    @include('layouts/partials/banner')
    <!-- ======== About Section ======== -->
      <section id="about" class="about">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-7" data-aos="fade-right">
                <figure>
                  <img src="assets/img/features-1.png" alt="" class="img-fluid">
                </figure>
            </div>
            <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
                <h3 data-aos="fade-up">Nous sommes là pour vous orienter </h3>
                <p data-aos="fade-up">
                  Notre équipe est à votre écoute pour vous aider à choisir la formation qu’il vous faut.            </p>
                <div class="icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4>Orientation</h4>
                  <p>Un système d'Orientation pour vous permettre de faire le meilleur choix</p>
                </div>
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-paste"></i>
                  <h4>Formation</h4>
                  <p>Nous vous aiderons dans le choix des formations nécessaire pour votre 
                    réussite</p>
                </div>
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-conversation"></i>
                  <h4>Forum</h4>
                  <p>Un système de forum est un espace de discussion entre étudiants et néo-bacheliers </p>
                </div>
            </div>
          </div>
        </div>
      </section>
    <!-- ====== End About Section ====== -->

    {{-- <!-- ======= Features Section ======= -->
      <section id="features" class="features">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
                <ul class="nav nav-tabs flex-column">
                  <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                      <h4>Test d'orientation</h4>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et aspernatur optio perspiciatis asperiores, nihil officiis aperiam ab blanditiis quaerat eum maiores atque dicta soluta pariatur libero, labore sit quasi laborum?
                      </p>
                    </a>
                  </li>
                  <li class="nav-item mt-2">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                      <h4>Forum</h4>
                      <p>Voluptas vel esse repudiandae quo excepturi.</p>
                    </a>
                  </li>
                  <li class="nav-item mt-2">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                      <h4>Formation</h4>
                      <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                    </a>
                  </li>
                  <li class="nav-item mt-2">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                      <h4>Universite</h4>
                      <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-7 ml-auto" data-aos="fade-left">
                <div class="tab-content">
                  <div class="tab-pane active show" id="tab-1">
                    <figure>
                      <img src="assets/img/features-1.png" alt="" class="img-fluid">
                    </figure>
                  </div>
                  <div class="tab-pane" id="tab-2">
                    <figure>
                      <img src="assets/img/features-2.png" alt="" class="img-fluid">
                    </figure>
                  </div>
                  <div class="tab-pane" id="tab-3">
                    <figure>
                      <img src="assets/img/features-3.png" alt="" class="img-fluid">
                    </figure>
                  </div>
                  <div class="tab-pane" id="tab-4">
                    <figure>
                      <img src="assets/img/features-4.png" alt="" class="img-fluid">
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section><!-- End Features Section --> 
    --}}

    <!-- ======== Job Section ======== -->
      <section id="job" >
          <div class="header-title">
            <h1>Metiés</h1>
          </div>
          <div class="container">
              <div class="row">
                  @foreach ( $jobs as $job )
                      <div class="col-md-6 col-lg-6 d-flex align-items-stretch  " data-aos="fade-up">
                          <a href="{{route('jobShow',$job)}}" class="card p-4">
                              <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="{{asset('storage/'.$job->img)}}" class="img-fluid rounded-start"style="height:100%" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                      <div class="card-body">
                                        <h5 class="card-title">{{$job->title}}</h5>
                                        <p class="card-text "style ="height : 50px;overflow:hidden;color:#56586a">{{$job->description}}</p>
                                        <button class="btn btn-primary">Voir plus</button>
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </div>
                  @endforeach
              </div>
          </div>
      </section>
    <!-- ======= End job Section ======= -->

    <!-- ========  University Section ======== -->
      <section>
          <div class="header-title">
              <h1>Universités</h1>
          </div>
          <div id="cards_landscape_wrap-2">
              <div class = "container">
                  <div class="row ">
                      @foreach ($universitys as $university)
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 ">
                            <a href="{{route('university.show',$university)}}">
                                <div class="card-flyer">
                                    <div class="text-box">
                                        <div class="image-box">
                                            <img src="{{asset('storage/'.$university->img)}}" alt="" />
                                        </div>
                                        <div class="text-container">
                                            <h6>{{$university->title}}</h6>
                                            <p>
                                              {{$university->contents}}
                                            </p>
                                            <a href="{{route('university.show',$university)}}" class="btn btn-primary">Voir plus</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                      @endforeach
                  </div>
              </div>
          </div>
      </section>
    <!-- ======  End university Section ====== -->
    
    <!-- ======== Testimonials Section ======== -->
      <section id="testimonials" class="testimonials">
          <div class="header-title">
            <h1>Nos utilisateur témoignent</h1>
          </div>
          <div class="container">
              <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                  <div class="swiper-wrapper">
                      <div class="swiper-slide">
                          <div class="testimonial-item">
                              <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                              </p>
                              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                              <h3>Saul Goodman</h3>
                              <h4>Ceo &amp; Founder</h4>
                          </div>
                      </div><!-- End testimonial item -->
                      <div class="swiper-slide">
                          <div class="testimonial-item">
                            <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                          </div>
                      </div><!-- End testimonial item -->
                      <div class="swiper-slide">
                          <div class="testimonial-item">
                            <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                          </div>
                      </div><!-- End testimonial item -->
                      <div class="swiper-slide">
                          <div class="testimonial-item">
                            <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                          </div>
                      </div><!-- End testimonial item -->
                      <div class="swiper-slide">
                          <div class="testimonial-item">
                            <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                          </div>
                      </div><!-- End testimonial item -->
                  </div>
                  <div class="swiper-pagination"></div>
              </div>
          </div>
      </section>
    <!-- =====  End Testimonials Section ====== -->
      
    <!-- ======== Contact Section ======== -->
      <section  class="contact mb-0">
          <div class="container">
              <div class="header-title">
                <h1>Nous contacter</h1>
              </div>
              <div class="row no-gutters justify-content-center  " data-aos="fade-up">
                  <div class="col-lg-5  d-flex flex-column justify-content-center info">
                      <div>
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
                            <p>+1 5589 55488 55s</p>
                          </div>
                      </div>
                      <div>
                        <p class="mt-4">
                          Contactez nous pour en savoir plus sur nous..
                        </p>
                      </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-stretch form-message "> 
                      <form action="{{route('contact.store')}}" method="post" role="form"  style="width: 100%" >
                          @csrf
                          @if (!auth()->check())
                            <div class="row">
                              <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                              </div>
                              <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                              </div>
                            </div>
                          @endif
                          <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                          </div>
                          <div class="form-group mt-3">
                            <textarea class="form-control" name="contents" rows="5" placeholder="Message" required></textarea>
                          </div>
                          <div class="text-right"><button type="submit" class="submit-contact">Send Message</button></div>
                      </form>
                  </div>
              </div>
          </div>
      </section>
    <!--====== End Contact Section ====== -->
@endsection
