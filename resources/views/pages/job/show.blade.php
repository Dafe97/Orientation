@extends("layouts.app")
@section("content")

     <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Métie {{$jobs->title}}</h2>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">
            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">
                  <div class="swiper-slide">
                    <img src="{{asset('storage/'.$jobs->img)}}" alt="" style="height:400px">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="portfolio-info">
                <h3>Bon à savoir</h3>
                <p>
                  {{$jobs->advice}}
                </p>
              </div>
            </div>
          </div>
          <div class="portfolio-description">
            <h2>En quoi consiste ce métier ? {{$jobs->title}}</h2>
            <p>
              {{$jobs->description}}
            </p>
          </div>
      </div>
    </section><!-- End Portfolio Details Section -->
@endsection