<!-- ======= Header ======= -->
  <header id="header" class="fixed-top  d-flex align-items-center">
        <div class="container d-flex justify-content-between">
            <div class="logo">
              <h1>
                <a href="{{route('index')}}" class="d-flex justify-content-center align-items-center">
                  <img src="{{asset('assets/img/favicon.png')}}" alt=""> &nbsp;
                  <span>Orientation</span>
                </a>
              </h1>
              <!-- Uncomment below if you prefer to use an image logo -->
            </div>
            @include('layouts/partials/nav')
        </div>
  </header><!-- End Header -->
