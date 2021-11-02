@extends('layouts/app')
@section('content')
    <!-- ======= Team Section ======= -->
    
    <section id="team" class="team mt-4">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Les Universités</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit voluptas est optio perferendis expedita quidem incidunt deserunt quo excepturi voluptates modi repellat aperiam illum, molestiae animi, earum impedit fuga quaerat?</p>
          </div>
          <div class="row">
              @foreach ($universitys as $university)
                  <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" >
                    <div class="card mb-2 position-relative" style="width: 18rem; height:400px;">
                      <img src="{{asset("storage/".$university->img)}}" class="card-img-top" alt="..."style ="height:200px">
                      <div class="card-body">
                        <h5 class="card-title">{{$university->title}}</h5>
                        <p class="card-text">{{$university->contents}}</p>
                        <a href="{{$university->href}}" class="btn btn-primary position-absolute bottom-0 start-50 translate-middle">+ Voir plus</a>
                      </div>
                    </div>
                  </div>
              @endforeach
          </div>
      </section><!-- End Team Section -->
@endsection