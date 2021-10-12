 <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Welcome Bienvenue</h1>
      <h2>Orientation néo-bachelier vous souhaitez la bienvenue  </h2>
      @if (!auth()->check())
         <a href="{{ route('register') }}" class="btn-get-started scrollto">S'inscrir</a>
      @endif
    </div>
  </section><!-- End Hero -->