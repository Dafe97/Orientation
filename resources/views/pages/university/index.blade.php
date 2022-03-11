@extends('layouts/app')
@section('content')
    <!-- ======= Team Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Les Universités </h2>
          </div>
  
        </div>
      </section><!-- Breadcrumbs Section -->
    <section class="mt-0 pt-0">
        <div class="container mt-0">
          <div id="cards_landscape_wrap-2">
              <div class="container">
                  <div class="row ">
                      @foreach ($universitys as $university)
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
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
      </section><!-- End Team Section -->
@endsection