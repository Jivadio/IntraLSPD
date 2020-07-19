@extends('template.template')
@extends('template.header')

@section('title')
    Accueil
@endsection

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-8 bg-dark text-center">
                <h4 style="color: white;">Dernières Annonces</h4>
            </div>
            <div class="col-md-4 blue-gradient text-center">
                <h4 style="color: white;">Avis de Recherche</h4>
                <br>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{!! asset(config('path.images')).'/suspect-1.jpg' !!}" style="width: 75px; height: 75px; border-radius: 150%;">
                        <h5 style="color: white;">Sara Lopez-Aranda</h5>
                        <p style="color: white;">Viol - Délit de Fuite</p>
                      </div>
                      <div class="carousel-item">
                        <img src="{!! asset(config('path.images')).'/suspect-2.jpg' !!}" style="width: 75px; height: 75px; border-radius: 150%;">
                        <h5 style="color: white;">Karim Zenoud</h5>
                        <p style="color: white;">Délit de fuite</p>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                  <br>
            </div>
        </div>
    </div>
@endsection