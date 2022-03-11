@extends('layouts/app')
@section('content')
      <!-- ======= Hero Section ======= -->
      {{-- <section id="hero" class="img-university d-flex flex-column justify-content-center align-items-center">
            <div class="container text-center text-md-left" data-aos="fade-up">
                    <img src="{{asset("storage/".$universitys->img)}}" alt="">
            </div>
          </section><!-- End Hero --> 
      --}}
   <section class = "university-single">
        <div class="university-hero mb-0">
            <div>
                  <img class= "rounded-circle" src="{{asset("storage/".$universitys->img)}}" alt="">
            </div>
            <p>
               {{$universitys->title}} 
               {{$universitys->contents}}
            </p>
        </div> 
        <div id="faq" class="faq container university-containt mt-5">
             <div >
                  <div class="section-title aos-init aos-animate" data-aos="fade-up">
                    <h2>Filière de formation</h2>
                    <p></p>
                  </div>
                  <div class="faq-list">
                    <ul>
                      @foreach ($formations as $formation)
                          @if ($formation->levels === "dut" )
                              <li data-aos="fade-up" class="aos-init aos-animate">
                                  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse collapsed" data-bs-target={{'#faq-list-'.$formation->id_unblocks}} aria-expanded="false">{{$formation->title."(".$formation->descripion.")"." Niveau:". Str::upper($formation->levels) }}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                  @if ($training)
                                    <div id= "{{'faq-list-'.$formation->id_unblocks}}" class="collapse" data-bs-parent=".faq-list" style="">
                                        <p>
                                          @foreach ($training as $trainingItem)
                                              @if ($trainingItem->start === $formation->start )
                                                  <i class="bx bx-chevron-right"></i>
                                                  {{$trainingItem->title." ". $trainingItem->descripion}}
                                                  <br>
                                              @endif
                                          @endforeach 
                                          <a href="{{route('sector',$formation->id_unblocks)}}" class="btn">+</a>
                                        </p>
                                     </div>    
                                  @endif
                              </li>
                          @endif
                      @endforeach
                    </ul>
                  </div>
              </div>
        </div>
    </section>
@endsection