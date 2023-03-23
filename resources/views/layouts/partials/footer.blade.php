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
                <strong>Phone:</strong> + 223 58 96 32 15<br>
                <strong>Email:</strong> hello@oreintation.ml<br>
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
            <h4>Localisation</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d973.2747934898663!2d-8.020484278630649!3d12.641498334463934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sml!4v1663932070618!5m2!1sfr!2sml" width="100%" height="120" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
