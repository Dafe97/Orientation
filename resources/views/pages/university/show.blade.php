@extends('layouts/app')
@section('content')
      <!-- ======= Hero Section ======= -->
      {{-- <section id="hero" class="img-university d-flex flex-column justify-content-center align-items-center">
          <div class="container text-center text-md-left" data-aos="fade-up">
                  <img src="{{asset("storage/".$universitys->img)}}" alt="">
          </div>
      </section><!-- End Hero --> --}}
   <section style="background-color: #FCECDC ;margin-top:-130px">
        <div style="position: relative;height:500px;margin-bottom:100px;background: url('{{asset('assets/img/5251.jpg')}}') center center ; background-size: cover;">
            <figure style ="position: absolute;top:420px;left:15px" >
                  <img class= "rounded-circle"style="height: 200px;width:200px" src="{{asset("storage/".$universitys->img)}}" alt="">
            </figure>
            <p  style ="position: absolute;bottom:-75px;left:220px ;font-weight: 800;
           
            font-size: 20px;">
               {{$universitys->title}} <br>
              {{$universitys->contents}}
            </p>
        </div> 
        <!-- ======= Services Section ======= -->
        {{-- <section id="services" class="services section-bg"style="background-color: #FCECDC">
          <div class="container">
    
            <div class="section-title aos-init aos-animate" data-aos="fade-up">
              Filière de formation
              <p></p>
            </div>
    
            <div class="row">
              @foreach ($formations as $formation)
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-3 aos-init aos-animate" data-aos="fade-up">
                  <div class="icon-box icon-box-pink">
                    <span  class="icon">0{{$counter++}}</span>
                    <h4 class="title mt-4"><a href="">{{$formation->title}}</a></h4>
                    <p class="description">{{$formation->descripion}}</p>
                    <button class="btn mt-3" >voir plus en detail</button>
                  </div>
                </div>
              @endforeach
          </div>
          </div>
        </section> --}}
        <!-- ======= End Services Section ======= -->

          <section id="faq" class="faq section-bg">
              <div class="container">
                <div class="section-title aos-init aos-animate" data-aos="fade-up">
                  <h2>Filière de formation</h2>
                  <p></p>
                </div>
                <div class="faq-list">
                  <ul>
                    @foreach ($formations as $formation)
                        @if ($formation->levels === "dut" )
                            <li data-aos="fade-up" class="aos-init aos-animate">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse collapsed" data-bs-target={{'#faq-list-'.$formation->id_unblocks}} aria-expanded="false">{{$formation->title."(".$formation->descripion.")"." Niveau:".$formation->levels }}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                @if ($training)
                                  <div id= "{{'faq-list-'.$formation->id_unblocks}}" class="collapse" data-bs-parent=".faq-list" style="">
                                    <p>
                                      @foreach ($training as $trainingItem)
                                          @if ($trainingItem->start === $formation->start )
                                            {{$trainingItem->title." ". $trainingItem->descripion}} <br>
                                          @endif
                                      @endforeach
                                    </p>
                                  </div>    
                                @endif
                            </li>
                        @endif
                    @endforeach
                  </ul>
                </div>
              </div>
          </section>
    </section>
@endsection