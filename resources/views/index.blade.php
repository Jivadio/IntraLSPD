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
                <!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
        <h3 style="color: white;">Session de recrutement Juillet 2020</h3>
        <p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed tellus at velit tempus pretium nec vel neque. Integer justo leo, tincidunt eu malesuada in, mattis sed orci. Pellentesque vitae vestibulum est, quis pulvinar eros. Phasellus ac felis vel risus gravida aliquam sed vitae sapien. In egestas ante urna, vel euismod justo elementum ac. Ut semper facilisis accumsan. Duis metus risus, porttitor id sem vitae, dapibus malesuada sapien. Etiam sagittis metus ac urna vulputate interdum. Aliquam interdum sagittis nisl eu venenatis. Suspendisse a elementum erat. Sed tempus euismod ex, ut pharetra urna condimentum ac. Proin vulputate risus at blandit sollicitudin.</p>
      </div>
      <!--/First slide-->
      <!--Second slide-->
      <div class="carousel-item">
        <h3 style="color: white;">Changement de direction</h3>
        <p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed tellus at velit tempus pretium nec vel neque. Integer justo leo, tincidunt eu malesuada in, mattis sed orci. Pellentesque vitae vestibulum est, quis pulvinar eros. Phasellus ac felis vel risus gravida aliquam sed vitae sapien. In egestas ante urna, vel euismod justo elementum ac. Ut semper facilisis accumsan. Duis metus risus, porttitor id sem vitae, dapibus malesuada sapien. Etiam sagittis metus ac urna vulputate interdum. Aliquam interdum sagittis nisl eu venenatis. Suspendisse a elementum erat. Sed tempus euismod ex, ut pharetra urna condimentum ac. Proin vulputate risus at blandit sollicitudin.</p>
      </div>
      <!--/Second slide-->
      <!--Third slide-->
      <div class="carousel-item">
        <h3 style="color: white;">Frère j'ai pas d'idée</h3>
        <p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed tellus at velit tempus pretium nec vel neque. Integer justo leo, tincidunt eu malesuada in, mattis sed orci. Pellentesque vitae vestibulum est, quis pulvinar eros. Phasellus ac felis vel risus gravida aliquam sed vitae sapien. In egestas ante urna, vel euismod justo elementum ac. Ut semper facilisis accumsan. Duis metus risus, porttitor id sem vitae, dapibus malesuada sapien. Etiam sagittis metus ac urna vulputate interdum. Aliquam interdum sagittis nisl eu venenatis. Suspendisse a elementum erat. Sed tempus euismod ex, ut pharetra urna condimentum ac. Proin vulputate risus at blandit sollicitudin.</p>
      </div>
      <!--/Third slide-->
    </div>
    <br>
    <!--/.Slides-->
  </div>
  <!--/.Carousel Wrapper-->
        </div>
            <div class="col-md-4 blue-gradient text-center">
                <h4 style="color: white;">Avis de Recherche</h4>
                <br>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{!! asset(config('path.suspect')).'/suspect-1.jpg' !!}" style="width: 75px; height: 75px; border-radius: 150%;">
                        <h5 style="color: white;">Sara Lopez-Aranda</h5>
                        <p style="color: white;">Viol - Délit de Fuite</p>
                        <br>
                        <h6 style="color: white;">Individu Très Dangereux</h6>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{!! asset(config('path.suspect')).'/suspect-2.jpg' !!}" style="width: 75px; height: 75px; border-radius: 150%;">
                        <h5 style="color: white;">Karim Zenoud</h5>
                        <p style="color: white;">Délit de fuite</p>
                        <br>
                        <h6 style="color: white;">Individu Calme</h6>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{!! asset(config('path.suspect')).'/suspect-3.jpg' !!}" style="width: 75px; height: 75px; border-radius: 150%;">
                        <h5 style="color: white;">Charles Fauchaux</h5>
                        <p style="color: white;">Excès de Vitesse Récidiviste</p>
                        <br>
                        <h6 style="color: white;">Individu Dangereux</h6>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
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
    <br>
    <div class='w-100 blue-gradient fixed-bottom'>
        <p class='text-light text-center p-1 m-0'>
            &copy; - 2020 | 
            Version de développement | 
            00/00/0000
        </p>
    </div>
@endsection