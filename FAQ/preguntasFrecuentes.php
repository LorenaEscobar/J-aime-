<?php

session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>J'AIME</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js" =""></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../CSS/Estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">


</head>
<body>


	<!-----------------LOGO----------------------------->
	<div class="container">
		<div class="row">
			<div class="logo">
					<div class="col-sm-12">
						<a href="../indexx.php"><img src="../CSS/Imagenes/logonuevosinsombra.png"></a>
					</div>
			</div>
		</div>
	</div>
	<!-----------------LOGO----------------------------->

	<!-----------------MENU----------------------------->
		<div class="container menu">
		<nav class="navbar navbar-expand-lg navbar-light bg-white">
			<!-------------------INICIO SESION---------------------------->
			
			
			<?php if (!isset ($_SESSION["emailUsuario"])) { ?>
				<a href="login-out/logIn.php"><i class="fas fa-users carrito"></i></a>
				<?php } else { ?>
				  <button type="button" class="btn btn-outline-success active" title="<?php echo $_SESSION["nombreUsuario"]?>">ON</button>
				  <button type="button" class="btn btn-outline-danger" title="Cerrar Sesion">OFF</button>
		  <?php } ?>

  			<!-------------------INICIO SESION---------------------------->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../indexx.php">Inicio</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorías
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../secciones/cocina.php">Cocina</a>
          <a class="dropdown-item" href="../secciones/infantil.php">Infantil</a>
          <a class="dropdown-item" href="../secciones/frases.php">Frases</a>
          <a class="dropdown-item" href="../secciones/zen.php">Zen</a>
          <a class="dropdown-item" href="../secciones/musica.php">Música</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../contacto.php">Contacto</a>
      </li>

    </ul>

      <i class="fas fa-shopping-cart carrito"></i>

  </div>
</nav>
<hr>
</div>

	<!-----------------MENU----------------------------->



	<!-----------------PREGUNTAS FRECUENTES----------------------------->
		<section class="faq">
			<div class="container">
			<h1>FAQ</h1>
			<hr>

				<h2>¿Es fácil de colocar?</h2>
				<p>Es muy fácil de colocar y con el vinilo enviamos un instructivo paso a paso, cualquier duda nos podés preguntar.</p>

				<h2>¿Dónde se puede colocar el vinilo?</h2>
				<p>Lo podés colocar sobre cualquier superficie limpia, lisa y seca para conseguir una mayor duración del vinilo.
					Quedan muy bien sobre paredes, vidrios, mamparas, espejos, ventanas, vidrieras, heladeras, puertas, muebles, etc.</p>

				<h2>¿Se puede quitar el vinilo y aplicar en otro lugar?</h2>
				<p>No, una vez colocado, si lo despegás el vinilo perderá su adherencia, así que antes de colocarlo presentalo sobre la superficie para ver previamente la posición que más te gusta.</p>

				<h2>¿Cuánto dura?</h2>
				<p>Una vez pegado su durabilidad es ilimitada en interiores y en el caso de su colocación en exteriores, el color puede verse afectado pasado un plazo de aproximadamente 3 a 7 años. Siempre y cuando sea colocado por un profesional.</p>

				<h2>¿Cómo se quita? </h2>
				<p>Simplemente despegá una punta y tirá a 90 grados de la pared. Si la pared no estuviera en condiciones es posible que salte la pintura debido al adhesivo. Podés ayudarte aplicando calor con un secador de pelo para lograr aflojar el pegamento.</p>

				<hr>
              <br>
			</div>
		</section>

	<!-----------------PREGUNTAS FRECUENTES----------------------------->

	<!-----------------FOOTER----------------------------->
	<section class="footer">
		<div class="container">
			<div class="row">

					<div class="col-sm-12">
						<h3>DESARROLLADO POR EQUIPO ROCKET</h3>
					</div>
			</div>
		</div>
	</section>

	<!-----------------FOOTER----------------------------->






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
