@extends('layouts/app')
@section('content')
  <!-- ======= Portfolio Section ======= -->
  <section  class="portfolio section-bg mt-4">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Test d'orientation</h2>
            <p>
                {{-- Nous avions filtre et selection l'ensenble des filières qui vont avec votre filière du bac --}}
                Magnam dolores commodi suscipit. Necessitatibus 
                us consequatur ex aliquid fuga eum quidem. Sit
                 sint consectetur velit. Quisquam quos quisquam 
                 cupiditate. Et nemo qui impedit suscipit alias
                  ea. Quia fugiat sit in iste officiis commodi 
                  quidem hic quas.
            </p>
          </div>
  
          <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">TSECO</li>
                <li data-filter=".filter-card">TLL</li>
                <li data-filter=".filter-web">TSS</li>
                <li data-filter=".filter-web">TEXP</li>
              </ul>
            </div>
          </div>
  
          <div class="row portfolio-container" data-aos="fade-up">
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{asset("assets/img/portfolio/ig.jpg")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>IG</h4>
                  <p>Informatique de gestion</p>
                  <div class="portfolio-links">
                    <a href="{{asset("assets/img/portfolio/portfolio-1.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="{{url("test-orientation.show",['id' => 1])}}" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{asset("assets/img/portfolio/portfolio-2.jpg")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="{{asset("assets/img/portfolio/portfolio-2.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="/show" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{asset("assets/img/portfolio/portfolio-3.jpg")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a href="{{asset("assets/img/portfolio/portfolio-3.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                    <a href="/show" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{asset("assets/img/portfolio/portfolio-4.jpg")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 2</h4>
                  <p>Card</p>
                  <div class="portfolio-links">
                    <a href="{{asset("assets/img/portfolio/portfolio-4.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                    <a href="/show" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{asset("assets/img/portfolio/portfolio-5.jpg")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 2</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="{{asset("assets/img/portfolio/portfolio-5.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                    <a href="/show" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{asset("assets/img/portfolio/portfolio-6.jpg")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a href="{{asset("assets/img/portfolio/portfolio-6.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                    <a href="/show" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{asset("assets/img/portfolio/portfolio-7.jpg")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 1</h4>
                  <p>Card</p>
                  <div class="portfolio-links">
                    <a href="{{asset("assets/img/portfolio/portfolio-7.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                    <a href="/show" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{asset("assets/img/portfolio/portfolio-8.jpg")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 3</h4>
                  <p>Card</p>
                  <div class="portfolio-links">
                    <a href="{{asset("assets/img/portfolio/portfolio-8.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                    <a href="/show" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{asset("assets/img/portfolio/portfolio-9.jpg")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="{{asset("assets/img/portfolio/portfolio-9.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="/show" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
  </section><!-- End Portfolio Section -->
  
      <!-- ======= Team Section ======= -->
@endsection