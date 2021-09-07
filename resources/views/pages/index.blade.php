@extends('layouts.master')

@section('content')


<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="carousel-background">
              <img src="{{ asset('assets_client/img/slide/slide.png') }}" style="width: 200px; height: 200px" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">CAAURI</span></h2>
                <p class="animate__animated animate__fadeInUp" id="title1" style="font-size: 48px;"> Nous sommes le Caauri qui vous manquait pour réussir votre aventure.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">  CONSULTEZ
                </a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="carousel-background">
              <img src="{{ asset('assets_client/img/slide/slide.png') }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">CAAURI</h2>
                <p class="animate__animated animate__fadeInUp" style="font-size: 48px;">Découvrez notre savoir faire.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">CONSULTEZ</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item">
            <div class="carousel-background">
              <img src="{{ asset('assets_client/img/slide/slide.png') }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">CAAURI</h2>
                <p class="animate__animated animate__fadeInUp" style="font-size: 48px;">Prêt à lancer vos Caauris ?</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">CONSULTEZ</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-thin-double-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-thin-double-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->



  <main id="main">

   

    

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Catalogue</h2>
          <p>Nous sommes le Caauri qui vous manquait pour réussir votre aventure digitale mieux appréhender/examiner votre aventure digitale.<br>
Caauri est dédié à tout type de prestataire de service, (de l’artisan au chef d’entreprise, d’une personnalité publique à une personne lambda).</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tous</li>
              <li data-filter=".filter-app">Web</li>
              <li data-filter=".filter-card">Apps</li>
              <li data-filter=".filter-web">Campagne</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          @foreach($servClt as $ele)
            <div class="{{ switchTypeFront($ele->type) }}">
              <div class="portfolio-wrap">
                
                <img src="{{ asset($ele->imgPrincipale) }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $ele->entreprise }}</h4>
                  <p>{{ $ele->nom }}</p>
                </div>
                <div class="portfolio-links">
                  <a href="{{ asset($ele->imgPrincipale) }}" data-gall="portfolioGallery" class="venobox" data-overlay="rgba(121,143,165,0.8)" title="{{ $ele->entreprise }}"><i class="bx bx-show-alt"></i></a>
                  @foreach(getImg($ele->id) as $img)
                  <a href="{{ asset($img->lien) }}" data-gall="portfolioGallery" class="venobox" title="{{ $ele->entreprise }}"></a>
                  @endforeach

                </div>
              </div>
            </div>
          @endforeach



        </div>

      </div>
    </section> 

  @endsection