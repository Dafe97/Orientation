 <!-- ======= Hero Section ======= -->
   <section id="hero" class="img d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Welcome Bienvenue</h1>
      <h2>Orientation néo-bacheliers vous souhaite la bienvenue  </h2>
      @if (!auth()->check())
         <a href="{{ route('register') }}" class="btn-get-started scrollto">S'inscrir</a>
      @else
        <a id="test-orient" class="btn-get-started scrollto">Faite votre premier test ici</a>
      @endif
    </div>
  </section><!-- End Hero -->