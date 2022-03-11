@extends('layouts/app')
@section('content')
<section class = "university-single" id="sector">
      <div id="sector-hero" class="university-hero mb-0 ">
          <p>
            {{$faculty->descripion}}
          </p>
      </div> 
      <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details mt-0">
      <div class="container">
        <div class="row gy-4">
            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">
                  <div >
                    <img src="{{asset("storage/".$faculty->img)}}" alt="" style="height:500px;">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
                 <div class="portfolio-info">
                     <h3>Parcours</h3>
                     @foreach ($training as $item )
                         <div class="faculty-list">
                           <div class="about4__icon-1--wrapper-1 ">
                             <img src="{{asset("assets/img/icon/check.svg")}}" alt="check svg"> 
                           </div>
                           <p>
                             {{$item->descripion}}
                           </p>
                        </div>
                     @endforeach
                 </div>
                 <br>
                 <div class="portfolio-info">
                     <h3>prérequis</h3>
                     <p>
                        {{$faculty->prereq}}
                     </p>
                 </div>
            </div>
          </div>
          <div class="portfolio-description">
            <h2>En quoi consiste cette formation ? </h2>
            <p>
              {{$faculty->contents}}
            </p>
          </div>
      </div>
    </section><!-- End Portfolio Details Section -->
 </section>
@endsection