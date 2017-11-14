
@extends('layouts.principal')
@section('content')
 <h1> Servicio de Gastronomía</h1>
  <div class="row">
    <div class="col-md-12">
      <div class="carousel slide" id="carousel-579364">
        <ol class="carousel-indicators">
          <li class="active" data-slide-to="0" data-target="#carousel-579364">
          </li>
          <li data-slide-to="1" data-target="#carousel-579364">
          </li>
          <li data-slide-to="2" data-target="#carousel-579364">
          </li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img alt="Desayunos Internacionales y Locales" src="img/slider-img1.png">
            <div class="carousel-caption">
              <h4>
                Desayunos Internacionales y Locales
              </h4>
              <p>
                Degusta de los desayunos Internacionales como Locales o llamados criollos
                que estan en base a productos de la región. 
              </p>
            </div>
          </div>
          <div class="item">
            <img alt="Carousel Bootstrap Second" src="img/slider-img2.png">
            <div class="carousel-caption">
              <h4>
                Platos Especiales
              </h4>
              <p>
                Los platos que se sirven en el restaurant son en base a la carne de llama, perdiz, con cereales como la quinua real la papa que son representativas de la región.
              </p>
            </div>
          </div>
          <div class="item">
            <img alt="Carousel Bootstrap Third" src="img/slider-img3.png">
            <div class="carousel-caption">
              <h4>
               Almuerzos con ensalada bufet
              </h4>
              <p>
                Se sirve una varieda de almuerzo con entrada de ensaladas a elección, una variedad de almuerzos típicos de Bolivia, asi mismo se tiene los segundos en base a la carne de llama, cerdo, perdiz y res asi mismo se sirve su postre delicio.
              </p>
            </div>
          </div>
        </div> <a class="left carousel-control" href="#carousel-579364" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-579364" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
    </div>
  </div>
@stop