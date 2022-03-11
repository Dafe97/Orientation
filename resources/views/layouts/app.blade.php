<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>{{ isset($title)  ? config('app.name')." | ".$title : config('app.name')}}</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
       <!-- Forum Chatter -->
      @if( Request::is( Config::get('chatter.routes.home')) )
          <title>Title for your forum homepage -  Website Name</title>
      @elseif( Request::is( Config::get('chatter.routes.home') . '/' . Config::get('chatter.routes.category') . '/*' ) && isset( $discussion ) )
          <title>{{ $discussion->category->name }} - Website Name</title>
      @elseif( Request::is( Config::get('chatter.routes.home') . '/*' ) && isset($discussion->title))
          <title>{{ $discussion->title }} - Website Name</title>
      @endif

      <!-- Favicons -->
      <link href="{{asset("assets/img/favicon.png")}}" rel="icon">
      <link href="{{asset("assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      
      <!-- Vendor CSS Files -->
      <link href="{{asset("assets/vendor/aos/aos.css")}}" rel="stylesheet">
      <link href="{{asset("assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
      <link href="{{asset("assets/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
      <link href="{{asset("assets/vendor/boxicons/css/boxicons.min.css")}}" rel="stylesheet">
      <link href="{{asset("assets/vendor/glightbox/css/glightbox.min.css")}}" rel="stylesheet">
      <link href="{{asset("assets/vendor/swiper/swiper-bundle.min.css")}}" rel="stylesheet">
      <!-- Template Main CSS File -->
      <link href="{{asset("assets/css/style.css")}}" rel="stylesheet">
      @yield('css')
    </head>
    <body>
        @include('layouts/partials/header')
        
        <main>
           @yield('content')
        </main>

        @include('layouts/partials/footer')
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!--chatter-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        @yield('js')
        <!-- Vendor JS Files -->
        <script src="{{asset("assets/vendor/aos/aos.js")}}"></script>
        <script src="{{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <script src="{{asset("assets/vendor/glightbox/js/glightbox.min.js")}}"></script>
        <script src="{{asset("assets/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
        <script src="{{asset("assets/vendor/php-email-form/validate.js")}}"></script>
        <script src="{{asset("assets/vendor/swiper/swiper-bundle.min.js")}}"></script>
         <!-- js -->
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- Template Main JS File -->
        <script src="{{asset("assets/js/main.js")}}"></script>
         <!--
            mdb

        -->
       
    </body>
</html>
