<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Restaurant Sumaj Orcko</title>
   </head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
  <body>
    <div class="container-fluid">
       <!--baner-->
	<html lang="en">
	<div class="row">
		<div class="col-md-12">
		<a href= "index.php">
			<img alt="baner" src="{{asset("img/baner.png")}}" width="100%" height="120%">
		</a>
		</div>
	</div>
	<!--menu-->
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="index.php">Restaurant</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="desayuno">Desayunos</a>
								</li>
								<li>
									<a href="almuerzo">Almuerzos</a>
								</li>
								<li>
									<a href="especial">Platos Especiales</a>
								</li>										
							</ul>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicio<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="gastronomia">Gastronomia</a>
								</li>
								<li class="divider"> </li>
								<li>
									<a href="catering">Catering</a>
								</li>
									
							</ul>
						</li>

						<li>
							<a href="informacion">Información</a>
						</li>
						<li>
							<a href="contacto">Contacto</a>
						</li>
						
						<li>
							<a href="reservas">Reservas</a>
						</li>
						<li>
							<a href="#">Administrador</a>
						</li>
					</ul>
					
				</div>
				
			</nav>
		</div>
	</div>

@yield('content')
	<!--pie-->
	<div class="row clearfix">
		<div class="col-md-12 column"> 
			<footer class="text-center">
				<br>Todos los Derechos Reservados <br />
				<dt>Copyright © Carmen Rosa Hinojosa <br/></dt>
				    Potosi - Bolivia  <br />
					2017 <br />
			</footer>
		</div>
	</div>
	</div>
	<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/scripts.js') }}"></script>
     </body>
</html>