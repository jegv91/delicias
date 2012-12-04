<!DOCTYPE html>
<html>
	<head>
		<title>Historia &middot; Delicias</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<!-- Le styles -->
		<link href="../assets/css/bootstrap.css" rel="stylesheet">
		<link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
		<style>

		/* GLOBAL STYLES
		-------------------------------------------------- */
		/* Padding below the footer and lighter body text */

		body {
		  background: -webkit-linear-gradient(rgba(255,230,233,1), rgba(255,255,255,1));
		  padding-bottom: 40px;
		  color: #4c3119;
		}



		/* CUSTOMIZE THE NAVBAR
		-------------------------------------------------- */

		/* Special class on .container surrounding .navbar, used for positioning it into place. */
		.navbar-wrapper {
		  position: relative;
		  z-index: 10;
		  margin-top: 20px;
		  margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
		}

		/* Remove border and change up box shadow for more contrast */
		.navbar .navbar-inner {
		  border: 0;
		  -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
			 -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
				  box-shadow: 0 2px 10px rgba(0,0,0,.25);
		}

		/* Downsize the brand/project name a bit */
		.navbar .brand {
		  padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
		  font-size: 16px;
		  font-weight: bold;
		  text-shadow: 0 -1px 0 rgba(0,0,0,.5);
		}

		/* Navbar links: increase padding for taller navbar */
		.navbar .nav > li > a {
		  padding: 15px 20px;
		}

		/* Offset the responsive button for proper vertical alignment */
		.navbar .btn-navbar {
		  margin-top: 10px;
		}



		/* CUSTOMIZE THE NAVBAR
		-------------------------------------------------- */

		/* Carousel base class */
		.carousel {
		  margin-bottom: 60px;
		}

		.carousel .container {
		  position: absolute;
		  right: 0;
		  bottom: 0;
		  left: 0;
		}

		.carousel-control {
		  background-color: transparent;
		  border: 0;
		  font-size: 120px;
		  margin-top: 0;
		  text-shadow: 0 1px 1px rgba(0,0,0,.4);
		}

		.carousel .item {
		  height: 500px;
		}
		.carousel img {
		  min-width: 100%;
		  height: 500px;
		}

		.carousel-caption {
		  background-color: rgba(193,93,99,.7);;
		  position: static;
		  max-width: 550px;
		  padding: 0 20px;
		  margin-bottom: 100px;
		  border-radius:7px;
		  -moz-border-radius: 7px; 
		  -webkit-border-radius : 7px;	  
		}
		.carousel-caption h1,
		.carousel-caption .lead {
		  margin: 0;
		  line-height: 1.25;
		  color: #fff;
		  text-shadow: 0 1px 1px rgba(0,0,0,.4);
		}
		.carousel-caption .btn {
		  margin-top: 10px;
		}



		/* MARKETING CONTENT
		-------------------------------------------------- */

		/* Center align the text within the three columns below the carousel */
		.marketing .span4 {
		  text-align: center;
		}
		.marketing h2 {
		  font-weight: normal;
		}
		.marketing .span4 p {
		  margin-left: 10px;
		  margin-right: 10px;
		}


		/* Featurettes
		------------------------- */

		.featurette-divider {
		  margin: 80px 0; /* Space out the Bootstrap <hr> more */
		}
		.featurette {
		  padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
		  overflow: hidden; /* Vertically center images part 2: clear their floats. */
		}
		.featurette-image {
		  margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
		}

		/* Give some space on the sides of the floated elements so text doesn't run right into it. */
		.featurette-image.pull-left {
		  margin-right: 40px;
		}
		.featurette-image.pull-right {
		  margin-left: 40px;
		}

		/* Thin out the marketing headings */
		.featurette-heading {
		  font-size: 50px;
		  font-weight: 300;
		  line-height: 1;
		  letter-spacing: -1px;
		}



		/* RESPONSIVE CSS
		-------------------------------------------------- */

		@media (max-width: 979px) {

		  .container.navbar-wrapper {
			margin-bottom: 0;
			width: auto;
		  }
		  .navbar-inner {
			border-radius: 0;
			margin: -20px 0;
		  }

		  .carousel .item {
			height: 500px;
		  }
		  .carousel img {
			width: auto;
			height: 500px;
		  }

		  .featurette {
			height: auto;
			padding: 0;
		  }
		  .featurette-image.pull-left,
		  .featurette-image.pull-right {
			display: block;
			float: none;
			max-width: 40%;
			margin: 0 auto 20px;
		  }
		}


		@media (max-width: 767px) {

		  .navbar-inner {
			margin: -20px;
		  }

		  .carousel {
			margin-left: -20px;
			margin-right: -20px;
		  }
		  .carousel .container {

		  }
		  .carousel .item {
			height: 300px;
		  }
		  .carousel img {
			height: 300px;
		  }
		  .carousel-caption {
			width: 65%;
			padding: 0 70px;
			margin-bottom: 40px;
		  }
		  .carousel-caption h1 {
			font-size: 30px;
		  }
		  .carousel-caption .lead,
		  .carousel-caption .btn {
			font-size: 18px;
		  }

		  .marketing .span4 + .span4 {
			margin-top: 40px;
		  }

		  .featurette-heading {
			font-size: 30px;
		  }
		  .featurette .lead {
			font-size: 18px;
			line-height: 1.5;
		  }

		}
		</style>
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
    <div class="container navbar-wrapper">
      <div class="navbar navbar-inverse">
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
              <li class="active"><a href="../views/index.php">Inicio</a></li>
              <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
                <ul class="dropdown-menu">
				  <li class="divider"></li>
					  <li class="nav-header">Pasteles</li>
					  <li><a href="#">Chocolate</a></li>
					  <li><a href="#">Vainilla</a></li>
					  <li><a href="#">Combinados</a></li>
					  <li><a href="#">Tres leches</a></li>
					  <li class="divider"></li>
					  <li class="nav-header">Pan</li>
					  <li><a href="#">Bigotes</a></li>
					  <li><a href="#">Cuernitos</a></li>
					  <li><a href="#">Mantecadas</a></li>
                </ul>
              </li>
			  <li><a href="../views/historia.php">Historia</a></li>
              <li><a href="#contact">Contacto</a></li>
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
	<div>
		<div class="container">
			</br></br></br></br>
			<img src="../assets/img/logo2.png" alt="" align="right">
			<h1>Nuestra historia</h1>
            <p class="lead">Delicias nace 30 años atras, en la cocina de Julieta Hern&aacute;ndez (Julietita), quien siendo secretaria biling&uuml;e decidi&oacute; tomar cursos de reposter&iacute;a
			para as&iacute; deleitar el paladar de su familia, creando pasteles y postres de un sabor inigualable.</p>
			<p class="lead">Con el paso del tiempo, sus postres fueron aceptados por m&aacute;s personas quienes se convirtieron en clientes permanentes de Julietita, para asi dar inicio a 
			Delicias, la empresa que hoy en d&iacute;a le ofrece nuestra tradicion de ayer, sabor de hoy y calidad de siempre.</p>
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
</html>