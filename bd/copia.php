<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PlayStation® Official Site</title>
	<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
	<link href = "https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css"  rel = "stylesheet" >
	<link rel="stylesheet" href="asset/css/estilos.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	</head>

	
<body>

			<!--BARRA DE NAVEGACION-->	
			<nav class="navbar navbar-expand-lg fixed-top lg-ligth bg-light" >

				<div class="container">

					<a class="navbar-brand" href="#"><img src="img/logo.png" class="img-fluid" alt="logo" width="80"></a>
					
					<button class="navbar-toggler navbar-light bg-light" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
				
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="#" >Home</a>
							</li>
							<li class="nav-item active">
									<a class="nav-link" href="#Videos">Videos</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link"  href="#PlayStation" >PlayStation</a>
							</li>
					
							<li class="nav-item active">
								<a class="nav-link " href="#Top5" >Top 5</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link " href="#Estrenos" >Estrenos</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>

	<div  style="margin-top: 100px;">
	</div>

	<section id="Home">
			<div class="container cont-parrafo topmargin-lg" >
			  <h1>¡Bienvenido a Sony - PlayStation® Oficial Site!</h1>
			  <p>El foro oficial de Sony les da la bienvenida a su plataforma virtual, donde podran
				  encontrar toda la informacion relevante de su consola preferida. PS4.
			  </p>
			</div>
	</section>

	<section id="fondo">
				<p class="linea">
					Nothing
				</p>

				<div class="cuadro">
					<?php
						$con=mysqli_connect("localhost","root","","ingcasti_Rubio");
						mysqli_set_charset($con,'utf8');
						$res=$con->query("select * from BANNER;");

					while($fila=mysqli_fetch_row($res)){
						?>

						<img class="img-thumbnail" src="img/banner<?php echo $fila[0]?>.png">	
						<br>						  
						<p class="parrafo"><?php echo $fila[1]?></p>
						<h1 style="color: #0070cc"><?php echo $fila[2]?></h1>
						<br>
						<p>
							<?php echo $fila[3]?>
						</p>
						<button type="button" class="btn btn-primary">
							<?php echo $fila[4]?>
						</button>
						<br><br><br>
					<?php
					}
					?>
					<br><br><br>
				</div>
				  <p  class="linea">
					Nothing
				  </p>
	</section>



	<section id="Videos" style="padding-top:40px">
		<div class="container bg-light-grey">
	
			<div style="text-align: center">
					<br>
					<br>
					<h1>Sony presenta...</h1>
					<br>

				<?php
					$con=mysqli_connect("localhost","root","","ingcasti_Rubio");
					$re=$con->query("select * from VIDEOS;");

				while($fila=mysqli_fetch_row($re)){
					?>

					<div class="col-sm-12 text-center">
                  		<video class="video-fluid z-depth-1" controls>
						  <source src="videos/<?php echo $fila[0]?>.webm" type="video/webm"></video>
						  <br>
                  		</video>
					</div>
				<?php
				}
				$con->close();
				?>
					
			</div>
		</div>
		<br>
			<br><br>
		<p  class="linea">
					Nothing
		</p>
	</section>


	<section id="PlayStation">
	
		<div style="text-align: center;">	
			<p id="bienvenido">
					Consolas PlayStation® 
			</p>
			
				<div class="p-3 mb-2 bg-light text-dark" style="height: 1100px">
					<?php
						$con=mysqli_connect("localhost","root","","ingcasti_Rubio");
						mysqli_set_charset($con,'utf8');
						$res=$con->query("select * from CONSOLAS;");

					while($fila=mysqli_fetch_row($res)){
						?>

						<div class=" container-fluid">
							<img class="img-fluid " src="img/c<?php echo $fila[0] ?>.jpg">	
							<br>						  
							<h1><?php echo $fila[1]?></p>
							<h1 style="color: #0070cc"><?php echo $fila[2] ?></h1>
							<br>
							<p>
								<?php echo $fila[3] ?>
							</p>
						</div>
						<br>
						<br>
					<?php
					}
					$con->close();
					?>

				</div>
				<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<p  class="linea">
					Nothing
			</p>
			
			</div>
	</section>


	<section id="Top5" style="margin-top: 40px">

			<p id="bienvenido">
					Disfruta Nuestro Top-5 de Juegos
		</p>
		<br>
		<p style="color: #0070cc; text-align: center; font-size: 20px">
			Un repaso por los mejores 5 juegos de PlayStation® 4
		</p>
		<br>
		
		<div>
				<?php
					$con=mysqli_connect("localhost","root","","ingcasti_Rubio");
					$res=$con->query("select * from TOPFIVE;");

				while($fila=mysqli_fetch_row($res)){
					?>

					<img src="img/<?php echo $fila[0]?>.jpg" class="img-fluid" alt="topfive">
				
				<?php
				}
				$con->close();
				?>
				<br>
				<br>

		</div>
		
	</section>

	<section id="Estrenos">

			<p id="bienvenido">
					Videojuegos de Estreno
				</p>
				<p style="color: #0070cc; text-align: center; font-size: 20px">
					Mira nuestros más recientes estrenos.
				</p>
			
				<div style="text-align: center">
				<?php
					$con=mysqli_connect("localhost","root","","ingcasti_Rubio");
					$res=$con->query("select * from ESTRENOS;");

				while($fila=mysqli_fetch_row($res)){
					?>

					<img src="img/e<?php echo $fila[0]?>.jpg" class="img-fluid" alt="estrenos" width="400">
				
				<?php
				}
				?>

				</div>
				<br>
				<br>
				<br>
	</section>

	<section id="footer" class="bg-light-image" >
			<div class="container">
					<img src="img/logo.png" class="img-fluid" alt="logo" width="80">
			   <ul class="list-inline">
						<li class="list-inline-item footer-menu"><a href="#">Home</a></li>
						<li class="list-inline-item footer-menu"><a href="#Videos">Videos</a></li>
						<li class="list-inline-item footer-menu"><a href="#PlayStation">PlayStation</a></li>
						<li class="list-inline-item footer-menu"><a href="#Accesorios">Accesorios</a></li>
						<li class="list-inline-item footer-menu"><a href="#Top5">Top5</a></li>
						<li class="list-inline-item footer-menu"><a href="#Estrenos">Estrenos</a></li>
			   </ul>
			   <ul class="list-inline">
				  <li class="list-inline-item"><a href="https://www.instagram.com/playstation/"  target="_blank"><i class="icon ion-logo-instagram"></i></a></li>
				  <li class="list-inline-item"><a href="https://twitter.com/playstation?lang=es" target="_blank" ><i class="icon ion-logo-twitter"  target="_blank"></i></a></li>
				  <li class="list-inline-item"><a href="https://www.youtube.com/user/PlayStation"><i class="icon ion-logo-youtube" target="_blank"></i></a></li>
				  <li class="list-inline-item"><a href="https://www.facebook.com/Latam.PlayStation/?brand_redir=14104316802"><i class="icon ion-logo-facebook" target="_blank"></i></a></li>
			  </ul>
			  <small>©2019 All Rights Reserved.</small>
			</div>
		  </section>


	<script src="js/jquery.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>