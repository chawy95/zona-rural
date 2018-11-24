<!DOCTYPE html>
<html>
<head>
	<title>Biemvenidos</title>
 <link rel="stylesheet" type="text/css" href="vendor/css/1.css">
  <link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/carruselgob.css">
</head>
<body onload="cargado()"> 
	<?php 
	require "vista/utilidades/view.nav.php";
	 ?>
	 <div class="fondo-img fixed-top" id="splash">
	 	<img src="imag/ini.jpg" class="imgfondo"/>
	 </div>

	 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="w-100 h-normal" src="imag/p1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="w-100 h-normal" src="imag/p2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="w-100 h-normal" src="imag/p3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<div class="container-fluid py-5">
		<div class="card">
			<div class="card-header">
			<h1>Noticias</h1>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-4">
					<h1>Se pego un tiro con un banano</h1>
				</div>
				<div class="col-md-4">
					<h1>Se pego un tiro con un banano</h1>
				</div>
				<div class="col-md-4">
					<h1>Se pego un tiro con un banano</h1>
				</div>
			</div>
		</div>
		</div>
	</div>
	 <div align="center" class="container-fluid py-3">
	 	<h1>Videos</h1>
	 	<div class="row my-3">
	 		<div class="col-md-4">
	 			<div align="center" class="body-video px-3 py-2 border border-dark">
	 				<p style="background-color: white;">Pikachu</p>
	 				<iframe style="width: 100%; height: 400px;" src="https://www.youtube.com/embed/oijwpQOjttg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	 			</div>	
	 		</div>
	 		<div class="col-md-4">
	 			<div align="center" class="body-video px-3 py-2 border border-dark">
	 				<p style="background-color: white;">Pikachu</p>
	 				<iframe style="width: 100%; height: 400px;" src="https://www.youtube.com/embed/oijwpQOjttg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	 			</div>	
	 		</div>
	 		<div class="col-md-4">
	 			<div align="center" class="body-video px-3 py-2 border border-dark">
	 				<p style="background-color: white;">Pikachu</p>
	 				<iframe style="width: 100%; height: 400px;" src="https://www.youtube.com/embed/oijwpQOjttg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	 			</div>	
	 		</div>
	 	</div>
	 </div>

	 	<?php 
	 	require "vista/utilidades/view.footer.php";

	 	 ?>
	 <script type="text/javascript" src="vendor/js/jquery.js"></script>
	 <script type="text/javascript" src="vendor/js/bootstrap.js"></script>
	 <script type="text/javascript" src="vendor/js/popper.js"></script>
	 <script type="text/javascript" src="js/splash.js"></script>
</body>
</html>