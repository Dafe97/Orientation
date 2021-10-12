@extends('layouts/app')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Informatique de gestion</h2>
          <a href="">valider</a>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section  class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-details-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-details-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-details-3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3 class="text-primary underline"><strong>prérequis</strong></h3>
              <ul>
                <li><strong><strong>prérequis</strong></strong>: Web design</li>
                <li><strong>Client</strong>: ASU Company</li>
                <li><strong>Project date</strong>: 01 March, 2020</li>
                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>c'est quoi l'informatique de gestion?</h2>
              <p>
                L’informatique de gestion (IDG) est l'ensemble des connaissances, des technologies, et des outils en rapport avec la gestion de données, c'est-à-dire la collecte, la vérification et l'organisation de grandes quantités d'informations. L'informatique de gestion a de nombreuses applications pratiques dans les entreprises : listes de clients, de fournisseurs, de produits, comptabilité, etc.

En informatique de gestion, les informations sont souvent placées dans des bases de données et traitées par l'intermédiaire de logiciels spécialisés que sont les systèmes de gestion de base de données.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

@endsection