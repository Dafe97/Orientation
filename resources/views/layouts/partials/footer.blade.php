  <!-- ======= Footer ======= -->
  <footer id="footer">
    @auth
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Orientation</h3>
              <p>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Nos services</h4>
            <ul>
                 <li><i class="bx bx-chevron-right"></i><a href="{{route('job')}}">méties</a></li>
                 <li><i class="bx bx-chevron-right"></i><a href="{{route('university.index')}}">universités</a></li>
                 <li><i class="bx bx-chevron-right"></i><a href="/forums">forums</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Autres</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i><a href="{{route('user')}}" >Nos utilisateur</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="{{route('propos')}}">A propos</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="{{route('service')}}">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>
    @endauth
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Orientation</span></strong>. Tous les droits sont réservés
      </div>
    </div>
  </footer><!-- End Footer -->
