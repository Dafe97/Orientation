@extends('layouts/app')
@section('content')
      <!-- ======= formation Section ======= -->
      <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2>Les méties </h2>
          </div>
        </div>
      </section>
      <section id="job" >
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
      </section><!-- End Services Section -->
@endsection