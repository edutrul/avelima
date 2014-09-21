<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:og:app_id" content="323924044446462"/>
    <meta property="og:og:title" content="Jugando descubri a esta ave Tambien descubre tu ave!"/>
    <meta property="og:og:type" content="website"/>
    <meta property="og:og:url" content="http://avelima.lalotech.com/"/>
    <meta property="og:description" content="Juega y descubre todas las AVES de Lima en y rankeate con los mejores descubridores del Mundo! Juntos descubriremos nuestras AVES de LIMA." />

    <title>Jugando descubri a esta ave Tambien descubre tu ave!</title>
    <meta name="description" content="Juega y descubre todas las AVES de Lima en y rankeate con los mejores descubridores del Mundo! Juntos descubriremos nuestras AVES de LIMA.">

    <!-- Bootstrap Core CSS -->
    <link href="agency/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="agency/css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="agency/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Puzzle Game -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <!--Custom style for the puzzle -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">AVE LIMA</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Descubre</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">TUS AVES</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Historia</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Ranking</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Tus Datos</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Bienvenido al Juego</div>
                <div class="intro-heading">Descubre las aves del Pantano de Villa!</div>
                <a href="#services" class="page-scroll btn btn-xl">Descubre!</a>
            </div>
        </div>
    </header>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Descubre a la Ave</h2>
                    <h3 class="section-subheading text-muted">Construye/Descubre el Rompecabeza  </h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-16">
                      <div id="puzzle"></div>
                </div>
                <div id="toolbar" class="clearfix">
                    <button class="btn btn-xl" id="shuffle">BARAJEA!</button>
<!--
                    <button id="background">Change Background</button>
                    <lable>Rows: </lable>
                    <button id="rows-dec">-</button>
                    <button id="rows-inc">+</button>
                    <lable>Cols: </lable>
                    <button id="cols-dec">-</button>
                    <button id="cols-inc">+</button>
-->
                    <span>Pasos: <span id="steps">0</span></span>
                </div>
                <!-- END OF PUZZLE -->
            </div>
        </div>
    </section>

    <!-- AVES Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">TUS AVES DESCUBIERTAS</h2>
                    <h3 class="section-subheading text-muted">Descubre la mayor cantidad de Aves y Estaras en nuestro Ranking de Descubridores de Aves.</h3>
                </div>
            </div>
            <div class="row aves-container">

<?php
$file = fopen('monitoreo-de-aves-2014.csv', 'r');
$aves = array();
$i = 0;
while (($line = fgetcsv($file)) !== FALSE) {
  $aves[] = $line;
  if ($i < 58) {
    $nombre_cientifico = isset($line[3]) ? $line[3] : 'fd';
    $nombre_comun = isset($line[4]) ? $line[4] : '';
    $imagen = isset($line[6]) && $line[6] != '' ? $line[6] : 'ave-cenizo.jpg'; 
    $ancho = isset($line[7]) && $line[7] != '' ? $line[7] : 668; 
    $alto = isset($line[8]) && $line[8] != '' ? $line[8] : 400; 
    $class_black_white = 'img-black-white';
    $data_html = <<<HTML
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal$i" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/$imagen" class="img-responsive img-custom $class_black_white"
                        data-width="$ancho" data-height="$alto" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>$nombre_cientifico</h4>
                        <p class="text-muted">$nombre_cientifico</p>
                    </div>
                </div>
HTML;
    print $data_html;
  $i++;
  }
}
fclose($file);


?>

                
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">HISTORIA DE PANTANOS DE VILLA</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="agency/img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="agency/img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="agency/img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="agency/img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">RANKING DE DESCUBRIDORES</h2>
                    <h3 class="section-subheading text-muted">Los top top!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="agency/img/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Descubrio 200 AVES!</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="agency/img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Descubrio 180 AVES!</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="agency/img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Descubrio 160 AVES!</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Agradecemos a cada uno de nuestros Descubridores! Felicitaciones!.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Ingresa Tus Datos</h2>
                    <h3 class="section-subheading text-muted">Ingresa tus datos para que aparescan en el Ranking</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Su nombre *" id="name" required data-validation-required-message="Por favor ingrese su nombre.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Su Correo Electrónico *" id="email" required data-validation-required-message="Por favor ingrese su correo electronico.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Su Teléfono *" id="phone" required data-validation-required-message="Por favor ingrese su dirección.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Su Feedback *" id="message" required data-validation-required-message="Por favor ingrese un mensaje."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar datos</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Elaborado en la cuarta Hackathon de Lima Metropolitana 2014</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Políticias de Privacidad</a>
                        </li>
                        <li><a href="#">Terminos de Uso</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->


<?php

$i = 0;
foreach($aves as $line) {
  if ($i < 10) {
    $id = isset($line[0]) ? $line[0] : '';
    $orden = isset($line[1]) ? $line[1] : '';
    $familia = isset($line[2]) ? $line[2] : '';
    $nombre_cientifico = isset($line[3]) ? $line[3] : '';
    $nombre_comun = isset($line[4]) ? $line[4] : '';
    $nombre_ingles = isset($line[5]) ? $line[5] : '';
    $imagen = isset($line[6]) && $line[6] != '' ? $line[6] : 'ave-cenizo.jpg'; 
    $ancho = isset($line[7]) ? $line[7] : '';
    $alto = isset($line[8]) ? $line[8] : '';
    $categoria_amenaza = isset($line[9]) ? $line[9] : '';
    $status_migratorio = isset($line[10]) ? $line[10] : '';
    $enero = isset($line[11]) && $line[11] != '' ? $line[11] : '0';
    $febrero = isset($line[12]) && $line[12] != '' ? $line[12] : '0';
    $marzo = isset($line[13]) && $line[13] != '' ? $line[13] : '0';
    $abril = isset($line[14]) && $line[14] != '' ? $line[14] : '0';
    $mayo = isset($line[15]) && $line[15] != '' ? $line[15] : '0';
    $junio = isset($line[16]) && $line[16] != '' ? $line[16] : '0';

    $categoria_amenaza_value = '';
    $status_migratorio_value = '';
    
    switch ($categoria_amenaza) {
      case 'CR':
        $categoria_amenaza_value = 'En peligro critico';
        break;
      case 'EN':
        $categoria_amenaza_value = 'En peligro';
        break;
      case 'VU':
        $categoria_amenaza_value = 'Vulnerable';
        break;
      case 'NT':
        $categoria_amenaza_value = 'Casi amezada';
        break;
      case 'DD':
        $categoria_amenaza_value = 'Datos insuficientes';
        break;
      default:
        $categoria_amenaza_value = 'Datos insuficientes';
        break;
    }

    switch ($status_migratorio) {
      case 'R':
        $status_migratorio_value = 'Residente';
        break;
      case 'ML':
        $status_migratorio_value = 'Migratorio Local';
        break;
      case 'MN':
        $status_migratorio_value = 'Migratorio del Norte';
        break;
      case 'MAN':
        $status_migratorio_value = 'Migratorio Andino';
        break;
      case 'MS':
        $status_migratorio_value = 'Migratorio del Sur';
        break;
      default:
        $status_migratorio_value = 'Desconcido';
        break;
    }
    
    $modal_html = <<<HTML
    <!-- Portfolio Modal 19 -->
    <div class="portfolio-modal modal fade" id="portfolioModal$i" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Ave Details Go Here -->
                            <h2>$nombre_comun</h2>
                            <p class="item-intro text-muted">Nombre Cientifico: $nombre_cientifico</p>
                            <img class="img-responsive img-centered" src="img/$imagen" alt="">

                            Orden: $orden<br>
                            Familia: $familia<br>
                            Nombre Cientifico: $nombre_cientifico<br>
                            Nombre Comun: $nombre_comun<br>
                            Nombre Ingles: $nombre_ingles<br>
                            Imagen: $imagen<br>
                            Categoria Amenaza: $categoria_amenaza_value<br>
                            Status Migratorio: $status_migratorio_value<br>
                            Viene en:<br>
                            Enero: $enero Ave(s)<br>
                            Febrero: $febrero Ave(s)<br>
                            Marzo: $marzo Ave(s)<br>
                            Abril: $abril Ave(s)<br>
                            Mayo: $mayo Ave(s)<br>
                            Junio: $junio Ave(s)<br>
                             <a id="button"
                                href="http://www.facebook.com/sharer.php?s=100&p[url]=http://avelima.lalotech.com/&p[images][0]=http://avelima.lalotech.com/img/ave-cenizo.jpg&p[title]=Jugando descubri a $nombre_comun Tambien descubre tu ave!&p[summary]=Juega y descubre todas las AVES de Lima en y rankeate con los mejores descubridores del Mundo! Juntos descubriremos nuestras AVES de LIMA"><img src="agency/img/compartir-facebook.png"></a>
                            

                            <a href="https://twitter.com/home?status=Jugando descubri $nombre_comun ave de Lima http://avelima.lalotech.com/ #hackathon2014" ><img src="agency/img/tweet-image.png"></a>
                            <p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar Ventana</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
HTML;
  print $modal_html;
  $i++;
  }
}

?>
    

    <!-- jQuery Version 1.11.0 -->
    <script src="agency/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="agency/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="agency/js/classie.js"></script>
    <script src="agency/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="agency/js/jqBootstrapValidation.js"></script>
    <script src="agency/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="agency/js/agency.js"></script>

    <!-- Cookie JS -->
    <!--<script type="text/javascript" src="js/jquery.cookie.js"></script>-->
    
    <!-- Puzzle Javascript -->
    <script type="text/javascript" src="js/puzzle.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <!-- END OF PUZZLE -->
</body>

</html>
