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

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
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
   <div class="top" img src="..assets/img/top2.jpg">
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
              <li class="divider"><a class="nav-button" href="#">Inicio</a></li>
              <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
                <ul class="dropdown-menu">
					<li class="divider"></li>
					<li class="nav-header">Pasteles</li>
					<?php
					foreach ($lista as $obj) {
					if ($obj["tipo"] == 1) 
						echo "<li><a href='#'>".$obj["nombre"]."</a></li>";
					}
					?>
					<li class="divider"></li>
					<li class="nav-header">Cupcakes</li>
					<?php
					foreach ($lista as $obj) {
					if ($obj["tipo"] == 2) 
						echo "<li><a href='#'>".$obj["nombre"]."</a></li>";
					}
					?>
					<li class="divider"></li>
					<li class="nav-header">Pays</li>
					<?php
					foreach ($lista as $obj) {
					if ($obj["tipo"] == 3) 
						echo "<li><a href='#'>".$obj["nombre"]."</a></li>";
					}
					?>
					<li class="divider"></li>
					<li class="nav-header">Panader&iacute;a</li>
					<?php
					foreach ($lista as $obj) {
					if ($obj["tipo"] == 3) 
						echo "<li><a href='#'>".$obj["nombre"]."</a></li>";
					}
					?>
                </ul>
              </li>
			  <li><a class="nav-button" href="#history">Historia</a></li>
              <li><a class="nav-button" href="#contact">Contacto</a></li>
			  <li><a class="nav-button" href="#map">Mapa</a></li>
			  <li><a class="nav-button" href="#directory">Directorio</a></li>
            </ul>
			<form class="navbar-form pull-right" method="POST" action="../controllers/validaUsuario.php">
			  <input class="span2" type="text" id="user" name="user" placeholder="Correo">
			  <input class="span2" type="password" id="password" name="password" placeholder="Contrase&ntilde;a">
			  <button type="submit" class="btn">Entrar</button>
            </form>
          </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->

    </div><!-- /.container -->
  </div><!-- /.TOP-->


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
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
				  <h5>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</h5>
				  <p><a class="btn" href="#">View details &raquo;</a></p>
				</div><!-- /.span4 -->';
		} 
		?>
      </div><!-- /.row -->

    <!-- Historia
    ================================================== -->
    <div  class="slide" id="history">
      <div class="container">
        </br></br></br></br>
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
      </div>
      <div class="container">
        </br></br>
        <img src="../assets/img/pasteles.png" alt="" align="left">
        <h1>Misi&oacute;n</h1>
        </br>
        <p class="lead">Generar uni&oacute;n y felicidad en las familias, elaborando pasteles y postres de alta calidad, conservando siempre el sabor tradicional que satisface a nuestros clientes,
        buscando al mismo tiempo ser una empresa eficiente que genere beneficios a sus integrantes, accionistas y a la sociedad.</p>
      </div>
      <div class="container">
        </br></br>
        <img src="../assets/img/postres.png" alt="" align="right">
        <h1>Visi&oacute;n</h1>
        <p class="lead">Ser una empresa l&iacute;der en reposter&iacute;a reconocida a nivel nacional por la calidad en la elaboracion de sus productos, sabor inconfundible y excelente servicio.</p>
      </div>
    </div>

<!-- Contacto
    ================================================== -->
<div class="slide" id="contact">
      <div class="container" align="center">
      <form method="post" action="../controllers/contacto.php">
        </br></br></br></br>
        <h1>Queremos saber tu opini&oacute;n</h1>
        <p class="lead">D&eacute;janos tu comentario!!</p>
        </br>
        <p class="lead">Nombre:</br>
        <input type="text" id="nombre" class="text-input" name="nombre" placeholder="Escribe tu nombre"><br/></p>
        <p class="lead">Correo:</br>
        <input type="text" id="correo" class="text-input" name="correo" placeholder="Escribe tu direccion de Email"/><br/></p>
        <p class="lead">Mensaje:</br>
        <textarea type="textarea" cols="60" rows="5" id="mensaje"  name="mensaje" placeholder="Escribe tu comentario"/></textarea><br/></p>
        <button type="submit" class="btn">Enviar comentario</button>
      </form>
      </div>
  </div>    

<!-- Mapa
    ================================================== -->
    <div class="slide" id="map"> 
      </br></br></br></br>
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
      <div class="span4" align="center">
        <p class="lead">*Historia </br>
        <OL><Dl><h5>-Nuestra historia</h5></Dl></OL>
        <OL><Dl><h6>-Misi&oacute;n</h6></Dl></OL>
        <OL><Dl><h6>-Visi&oacute;n</h6></Dl></OL></p>
        <p class="lead">*Contacto </br>
        <OL><Dl><h5>-D&eacute;janos tu comentario</h5></Dl></OL></p>
        <p class="lead">*Mapa </br>
        <OL><Dl><h5>-Mapa del sitio</h5></Dl></OL></p>
        <p class="lead">*Directorio </h5></br>
        <OL><Dl><h5>-Colaboradoras</h5></Dl></OL></p>
        </br></br></br>
        <img src="../assets/img/cupcake.png">
      </div>
    </div>

<!-- Directorio
    ================================================== -->
    <div class="slide" id="directory">
      <div class="container" align="center">
        </br></br></br></br></br></br>
        </br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="../assets/img/logo.png" align="center">
      </div>
      <div class="container" align="center">
        <h1 align="center">Colaboradoras</h1>
        <p class="lead">*Guzm&aacute;n F&eacute;lix Claudia Cristina</p>
        <p class="lead">*Leyva Mill&aacute;n Karen Maricela</p>
        <p class="lead">*Meza Hern&aacute;ndez Elidia</p>
        <p class="lead">*Ochoa Regalado Maira Gabriela</p>
      </div>
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
	</div><!-- /.container -->
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2012 Delicias &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

   



    <!-- Le javascript
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
