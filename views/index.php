<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Inicio &middot; Delicias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">


    <!-- Fav and touch icons -->

    <link rel="shortcut icon" href="../assets/img/minilogo.png">
   <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
=======
    <link rel="shortcut icon" href="../assets/img/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">

    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
  <body>
    <!-- NAVBAR
    ================================================== -->
    <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->


   <!--<div class="top" img src="..assets/img/top2.jpg">-->

   <iframe id="top1"  img src="../assets/img/top3.jpg" ></iframe><!-- /.TOP-->

    <div class="container navbar-wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top" id="header">
        <div class="navbar-inner">
          <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Las Delicias</a>
          <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="nav-header"><a class="nav-button" href="#">Inicio</a></li>
              <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
                <ul class="dropdown-menu">
					<li class="nav-header">Pasteles</li>
					<?php
					foreach ($lista as $obj) {
					if ($obj["tipo"] == 1) 
						echo "<li><a href='#'>".$obj["nombre"]."</a></li>";
					}
					?>
					<li class="nav-header">Cupcakes</li>
					<?php
					foreach ($lista as $obj) {
					if ($obj["tipo"] == 2) 
						echo "<li><a href='#'>".$obj["nombre"]."</a></li>";
					}
					?>
					<li class="nav-header">Pays</li>
					<?php
					foreach ($lista as $obj) {
					if ($obj["tipo"] == 3) 
						echo "<li><a href='#'>".$obj["nombre"]."</a></li>";
					}
					?>
					<li class="nav-header">Panader&iacute;a</li>
					<?php
					foreach ($lista as $obj) {
					if ($obj["tipo"] == 4) 
						echo "<li><a href='#'>".$obj["nombre"]."</a></li>";
					}
					?>
                </ul>
              </li>
			  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nosotros <b class="caret"></b></a>
                <ul class="dropdown-menu">
					<li><a class="nav-button" href="#history">Historia</a></li>
					  <li><a class="nav-button" href="#contact">Contacto</a></li>
					  <li><a class="nav-button" href="#map">Mapa</a></li>
					  <li><a class="nav-button" href="#directory">Directorio</a></li>
					<li><a class="nav-button" href="#galeria">Galeria</a></li>
				</ul>
			  </li>
				<?php if (!(isset($_SESSION['user_type']))){
						echo '<li ><a class="nav-button" href="../controllers/registraCliente.php" >¡Reg&iacute;strate!</a></li>';
			    } elseif ($_SESSION['user_type'] == 3) {
						echo '<li ><a class="nav-button" href="../controllers/smartCart.php" >¡Compra YA!</a></li>';
				}?>
			</ul>
			<?php if (isset($_SESSION['user_type'])){ ?>
				<p class="navbar-text pull-right">
				<a href="#" class="navbar-link"><?php echo $usuario;?></a>
				<a href="../controllers/cerrarSesion.php"><i class="icon-off icon-white"></i> </a>
			<?php } else { ?>
				<form class="navbar-form pull-right" method="POST" action="../controllers/validaUsuario.php">
					<input class="span2" type="text" id="user" name="user" placeholder="Correo">
					<input class="span2" type="password" id="password" name="password" placeholder="Contrase&ntilde;a">
					<button type="submit" class="btn">Entrar</button>
				</form>
			<?php }?>
          </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->
    </div><!-- /.container -->
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" style="padding-top:120px;">
      <div class="carousel-inner">
        <div class="item active">
          <img src="../assets/img/cakes/04.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Simplemente lo mejor</h1>
              <p class="lead">Nuestros pasteles, horneados con el amor y calidad que hacen que tu paladar se sienta en en cielo...</p>
            </div>
          </div>
        </div>
		<?php for ($i = 1; $i <= 10; $i++) {
			echo '<div class="item">';
			if ($i < 10){
				echo  '<img src="../assets/img/cakes/0'.$i.'.jpg" alt="">';
			}else{
				echo  '<img src="../assets/img/cakes/'.$i.'.jpg" alt="">';
			}
				echo '<div class="container">
					<div class="carousel-caption">
					  <h1>Revisa nuestros productos</h1>
					  <p class="lead">Nuestros pasteles, horneados con el amor y calidad que hacen que tu paladar se sienta en en cielo...</p>
					</div>
				  </div>
				</div>';
		}
		?>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
		<?php for ($i = 1; $i <= 3; $i++) {
			echo '<div class="span4">
				  <img class="img-circle" src="../assets/img/social/'.$i.'.png">
				  <h2>Heading</h2>
				  <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
				  <p><a class="btn" href="#">View details &raquo;</a></p>
				</div><!-- /.span4 -->';
		} 
		?>
      </div><!-- /.row -->
	  </div>

<!-- Galeria
    ================================================== -->
	<div class=slide id="galeria" >
	<center><iframe class="galery" src="../assets/3dcarousel/index.html" alt=""  name="cont">		
		</iframe></center>
	</div>    


    <!-- Historia
    ================================================== -->
    <hr class="featurette-divider">
	<div id="history">
      <div class="hero-unit">
        <img src="../assets/img/logo2.png" alt="" align="right">
        <h1>Nuestra historia</h1>
        <p class="lead">Delicias nace 30 años atras, en la cocina de Julieta Hern&aacute;ndez (Julietita), quien siendo secretaria biling&uuml;e decidi&oacute; tomar cursos de reposter&iacute;a
        para as&iacute; deleitar el paladar de su familia, creando pasteles y postres de un sabor inigualable.</p>
        <p class="lead">Con el paso del tiempo, sus postres fueron aceptados por m&aacute;s personas quienes se convirtieron en clientes permanentes de Julietita, para asi dar inicio a 
        Delicias, la empresa que hoy en d&iacute;a le ofrece nuestra tradici&oacute;n de ayer, sabor de hoy y calidad de siempre.</p>
        <p class="lead">Nuestro compromiso con usted es ofrecerle lo mejor de la reposter&iacute;a fina para aquellos momentos importantes que perdurar&aacute;n POR SIEMPRE.</p>
        <p class="lead">Cumplea&ntilde;os, cenas, aniversarios, reuniones o tan solo por el gusto de compartir, pasteler&iacute;a Delicias siempre estar&aacute; con usted para hacer de
        su reuni&oacute;n un evento memorable.</p>
        <p class="lead">Desde nuestra tienda y ahora en internet si&eacute;ntase como en su casa con sus amigos de Delicias, donde le ofrecemos trato personalizado y con la amabilidad que
        nos caracteriza.</p>
		<img src="../assets/img/pasteles.png" alt="" align="left">
        <h1>Misi&oacute;n</h1>
        </br>
        <p class="lead">Generar uni&oacute;n y felicidad en las familias, elaborando pasteles y postres de alta calidad, conservando siempre el sabor tradicional que satisface a nuestros clientes,
        buscando al mismo tiempo ser una empresa eficiente que genere beneficios a sus integrantes, accionistas y a la sociedad.</p>
		<img src="../assets/img/postres.png" alt="" align="right">
        <h1>Visi&oacute;n</h1>
        <p class="lead">Ser una empresa l&iacute;der en reposter&iacute;a reconocida a nivel nacional por la calidad en la elaboracion de sus productos, sabor inconfundible y excelente servicio.</p>     
	  </div>     
    </div>
<!-- Contacto
    ================================================== -->
	<hr class="featurette-divider">
	<div id="contact">
      <div class="hero-unit-3" align="center">
	  <h1>Contacto</h1>
      <form method="post" action="../controllers/contacto.php">
        <h2>Queremos saber tu opini&oacute;n</h2>
        <p class="lead">D&eacute;janos tu comentario!!</p>
        </br>
		<div style="display:table-cell; padding:10px; text-align:left;">
        <p class="lead">Nombre: <br/>
        <input type="text" id="nombre" class="text-input" name="nombre" placeholder="Escribe tu nombre"></p>	
		<p class="lead">Correo:<br/>
		<input type="text" id="correo" class="text-input" name="correo" placeholder="Escribe tu direccion de Email"/></p>
		</div>
		<div style="display:table-cell; padding:10px; text-align:left;">
        <p class="lead">Mensaje:<br/>
        <textarea type="textarea" rows="10" class="span4" id="mensaje"  name="mensaje" placeholder="Escribe tu comentario"/></textarea></p>
		</div>
		<button type="submit" class="btn">Enviar comentario</button>
	  </form>
      </div>
  </div>    
<!-- Mapa
    ================================================== -->
    <hr class="featurette-divider">
	<div id="map"> 
      <div class="hero-unit-4">
      <h1><center>Mapa del sitio</center></h1></br>
	<div class="span4" align="center">
          <p class="lead">*Inicio </br>
          <OL><Dl><h5>-Ingresa a la pagina principal</h5></Dl></OL></p>
          <p class="lead">*Contacto </br>
          <OL><Dl><h5>-D&eacute;janos tu comentario</h5></Dl></OL></p>
          <p class="lead">*Productos </br>
          <OL><Dl><h5>-Pasteles</h5></Dl></OL>
          <OL><OL><Dl><h6>->Bodas</h6></Dl></OL></OL>
          <OL><OL><Dl><h6>->XV A&ntilde;os</h6></Dl></OL></OL>
          <OL><OL><Dl><h6>->Infantiles</h6></Dl></OL></OL>
          <OL><OL><Dl><h6>->Frutales</h6></Dl></OL></OL>
          <OL><OL><Dl><h6>->Caseros</h6></Dl></OL></OL>
          <OL><OL><Dl><h6>->Ocasi&oacute;n Especial</h6></Dl></OL></OL>
          <OL><Dl><h5>-Cup Cakes</h5></Dl></OL></p>
          <OL><Dl><h5>-Pays</h5></Dl></OL></p>
          <OL><Dl><h5>-Bocadillos</h5></Dl></OL></p>
          <OL><Dl><h5>-Panader&iacute;a</h5></Dl></OL></p>
      </div>
 	  </div>
    </div>
<!-- Directorio
    ================================================== -->
    <hr class="featurette-divider">
	<div  id="directory">
      <div class="hero-unit-2" align="center">
        <h1 align="center">Colaboradoras</h1>
        <p class="lead">*Guzm&aacute;n F&eacute;lix Claudia Cristina</p>
        <p class="lead">*Leyva Mill&aacute;n Karen Maricela</p>
        <p class="lead">*Meza Hern&aacute;ndez Elidia</p>
        <p class="lead">*Ochoa Regalado Maira Gabriela</p>
      </div>

 <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
	<div class = "slide" id="">	
		<?php for ($i = 1; $i <= 1; $i++) {
		echo '
      <div class="featurette">
        <img class="featurette-image pull-right" src="../assets/img/more/'.$i.'.jpg">
        <h2 class="featurette-heading">Galletas navide&ntilde;as <span class="muted"> Una alegria de sabor</span></h2>
        <p class="lead">Porque tu lo pediste, reinventamos la forma de comer galletas. Prueba nuestras nuevas galletas navide&ntilde;as que haran que tu paladar no pueda olvidarse de nosotros.</p>
      </div>

      <hr class="featurette-divider">';
		} ?>
      <!-- /END THE FEATURETTES -->

    </div>
	<!-- /.container -->
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2012 Cristina Guzm&aacute;n. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    <!--javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
  </body>
</html>
