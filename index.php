<?php session_start();
include __DIR__ . '/LoginRegistro/login_registrar.php';
include __DIR__ . '/LoginRegistro/conexion.php';

/*Consulta Usuario*/
$iduser = $_SESSION['id_usuario'];
$consulta_sql = mysqli_query($conn,"SELECT id, fullname FROM contacts WHERE id = '$iduser'");
$nombre_user = mysqli_fetch_array($consulta_sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Percent V1.0</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    <!-- Fonts CSS-->
    <link href="css/Estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/heading.css">
    <link rel="stylesheet" href="css/body.css">
    <link rel="Shortcut Icon" href="Images/Logo_percent.ico" type="image/x-icon"/>

</head>

<body id="page-top">

    <!-- Alerta de clase comenzando-->
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-e00ca6d0-e68e-4ed4-aa1c-38b9b49ee4c5"></div>


    <!-- Tip Calculo-->
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-865758d2-31c7-4fb8-a417-ac77efc33c4d"></div>

    <!-- Tip programacion-->
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-52f7e695-1e00-40ba-b7ac-41f4769bfab2"></div>

    <!-- Barra de navegacion-->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">PERCENT</a>
            <img src="Images/Logo_percent Claro.png" class="img-fluid" width="50px" alt="Hola">
            <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded"
                type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#portfolio">Mi Progreso</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#Horario">Mi horario</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#simulator">Simulador</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#contact">Ayuda</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                        href="LoginRegistro/salir.php">Cerrar Sesión <i class="fas fa-door-open"></i></a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header (Inicio)-->
    <header class="masthead bg-primary text-white text-center" id="inicio">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="Images/chico.png" alt="">
            <!-- Masthead Heading-->
            <h1 class="masthead-heading mb-0">Bienvenido, <?php echo ucwords(utf8_decode($nombre_user['fullname'])); ?> !!</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-user-graduate"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!--Barra Progreso-->
            <div class="progress green">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">90%</div>
            </div>
            <!-- Masthead Subheading-->
            <p class="pre-wrap masthead-subheading font-weight-light mb-0">&quot;La educación es el arma mas poderosa&quot; </p>
        </div>
    </header>
    <!-- Mi progreso-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <div class="text-center">
                <h2 class="page-section-heading text-secondary mb-0 d-inline-block">Mi Progreso</h2>
            </div>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-award"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Items-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card text-center border-warning">
                        <div class="card-header bg-warning text-light">
                            <h5 class="card-title">Hoy, <?php setlocale(LC_ALL,"es_CO"); echo date("d"); ?> de <?php setlocale(LC_TIME, "spanish"); echo ucwords(strftime("%B")); ?></h5>
                        </div>
                        <div class="card-body">
                            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                                <div
                                    class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"><i
                                            class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid align center" src="Images/CalendarioHoy.jpg" alt="Log Cabin" />

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card text-center border-danger">
                        <div class="card-header bg-danger text-light">
                            <h5 class="card-title">Semana 5</h5>
                        </div>
                        <div class="card-body">
                            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                                <div
                                    class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"><i
                                            class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid align center" src="Images/CalendarioSemana.jpg" alt="Log Cabin" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card text-center border-info">
                        <div class="card-header bg-info text-light">
                            <h5 class="card-title">Periodo #3</h5>
                        </div>
                        <div class="card-body">
                            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                                <div
                                    class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"><i
                                            class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid align center" src="Images/CalendarioSemesv2.jpg" alt="Log Cabin" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dia-->
    <div class="portfolio-modal modal fade" id="portfolioModal0" tabindex="-1" role="dialog"
        aria-labelledby="#portfolioModal0Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content rounded border border-warning">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                <div class="modal-body text-center" style="border-width:20px; padding: 0.7rem 0.7rem!important; background-color:#ffc107!important;">
                    <div class="container bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 padding-portfolio">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-warning mb-0">Hoy, <?php setlocale(LC_ALL,"es_CO"); echo date("d"); ?> de <?php setlocale(LC_TIME, "spanish"); echo ucwords(strftime("%B")); ?></h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-calendar-day"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <!-- Portfolio Modal - Text-->
                                <div class="progress green">
                                    <span class="progress-left">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value">90%</div>
                                </div>
                                <div class="card text-center">
                                    <div class="card-body" style="padding-top:10px;">
                                        <div class="container">
                                            <div style="padding-top:10px;">
                                                <h5>Aplicaciones distractoras utilizadas:</h5>
                                            </div>
                                            <div class="d-flex justify-content-center espacio-icono text-center">
                                                <div class="row justify-content-center" role="group" id="BotonesIconos">
                                                    <div class="mr-2">
                                                        <span class="iconoWhats input-group-text icono"><i class="tamaño-icono fab fa-whatsapp"></i>
                                                            <input type="number" class="form-control iconos-input" id="PorcentajeWssp" value="0" readonly>
                                                        </span>
                                                    </div> 
                                                    <div class="mr-2 ">
                                                        <span class="iconoFace input-group-text icono"><i class="tamaño-icono fab fa-facebook"></i>
                                                            <input type="number" class="form-control iconos-input" id="PorcentajeFace" value="0" readonly>
                                                        </span>
                                                    </div>                                                 
                                                    <div class="mr-2">
                                                        <span class="instagram icono input-group-text"><i class="tamaño-icono fab fa-instagram"></i>
                                                            <input type="number" class="form-control iconos-input" id="PorcentajeInsta" value="0" readonly>
                                                        </span>
                                                    </div>
                                                    <div class="mr-2">
                                                        <span class="iconoTwit input-group-text icono"><i class="tamaño-icono fab fa-twitter"></i>
                                                            <input type="number" class="form-control iconos-input" id="PorcentajeTw" value="0" readonly>
                                                        </span>
                                                            
                                                    </div>
                                                    <div class="mr-2">
                                                        <span class="iconoYou input-group-text icono"><i class="tamaño-icono fab fa-youtube"></i>
                                                            <input type="number" class="form-control iconos-input" id="PorcentajeYout" value="0" readonly>
                                                        </span>
                                                    </div>
                                                    <div class="mr-2">
                                                        <span class="iconoTik input-group-text icono">
                                                            <span class="iconify tamaño-icono" data-icon="simple-icons:tiktok" data-inline="false"></span>
                                                            <input type="number" class="form-control iconos-input" id="PorcentajeTik" value="0" readonly>
                                                        </span>
                                                    </div>
                                                    <div class="mr-2">
                                                        <span class="iconoGam input-group-text icono"><i class="tamaño-icono fas fa-gamepad"></i>
                                                            <input type="number" class="form-control iconos-input" id="PorcentajeGame" value="0" readonly>
                                                        </span>
                                                        
                                                            
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Semana-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog"
        aria-labelledby="#portfolioModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content rounded border border-danger">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="fas fa-times"></i></span></button>
                <div class="modal-body borde-portfolio text-center" style="border-width:20px; padding: 0.7rem 0.7rem!important; background-color:#dc3545!important;">
                    <div class="container bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 padding-portfolio">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-danger mb-0">Semana 5</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-calendar-week"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <div class="progress yellow">
                                    <span class="progress-left">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value">75%</div>
                                </div>
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Mollitia neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam
                                    velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.
                                </p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Periodo-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog"
        aria-labelledby="#portfolioModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content rounded border border-info">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="fas fa-times"></i></span></button>
                <div class="modal-body text-center" style="border-width:20px; padding: 0.7rem 0.7rem!important; background-color:#17a2b8!important;">
                    <div class="container bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 padding-portfolio">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-info mb-0">Periodo 3</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-calendar-alt"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <div class="progress pink">
                                    <span class="progress-left">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value">60%</div>
                                </div>
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Mollitia neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam
                                    velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.
                                </p>
                               </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Horario-->
    <section class="page-section bg-primary text-white mb-0" id="Horario">
        <!-- Shedule Section Heading-->
        <div class="container">
            <div class="row justify-content-center">
                <!-- Shedule is from elfsight.com
                <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                <div class="elfsight-app-aa2dbf55-5af6-47f9-af65-8d50d3bd5eeb"></div>
                -->
            </div>
        </div>
        <!-- About Section Content-->
        <!--
                <div class="row">
                    <div class="col-lg-4 ml-auto">
                        <p class="pre-wrap lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p>
                    </div>
                    <div class="col-lg-4 mr-auto">
                        <p class="pre-wrap lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p>
                    </div>
                </div>
                -->
    </section>

    <!-- Simulador-->
    <section class="page-section portfolio" id="simulator">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <div class="text-center">
                <h2 class="page-section-heading text-secondary mb-0 d-inline-block">SIMULADOR</h2>
            </div>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-play-circle"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Items-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card text-center border-success">
                        <div class="card-header bg-success text-light">
                            <h5 class="card-title">Calculo</h5>
                        </div>
                        <div class="card-body">
                            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#SimulacionCalculo">
                                <div
                                    class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"><i
                                            class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid align center" src="Images/Calculov2.png" alt="Log Cabin" />

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card text-center border-info">
                        <div class="card-header bg-info text-light">
                            <h5 class="card-title">Programacion</h5>
                        </div>
                        <div class="card-body">
                            <div class="portfolio-item mx-auto" data-toggle="modal"
                                data-target="#SimulacionProgramacion">
                                <div
                                    class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"><i
                                            class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid align center" src="Images/Programacion.png" alt="Log Cabin" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Simulacion calculo-->
    <div class="portfolio-modal modal fade" id="SimulacionCalculo" tabindex="-1" role="dialog"
        aria-labelledby="#SimulacionCalculoLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content rounded border border-success">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="fas fa-times"></i></span></button>
                <div class="modal-body borde-portfolio text-center" style="border-width:20px; padding: 0.7rem 0.7rem!important; background-color:green!important;">
                    <div class="container bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 padding-portfolio"> 
                                <!-- Title-->
                                <h2 class="portfolio-modal-title text-success mb-0">Calculo</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-square-root-alt"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>

                                <!-- Portfolio Modal - content-->
                                <div class="container ">
                                    <!-- Simulator Section Heading-->

                                    <!-- Simulator Section Content-->
                                    <div class="row justify-content-center">

                                        <!--Scripts Porcentajes Simulacion -->
                                        <script type="text/x-templete" id="progress-circle">
                                            <div class="progress-circle">
                                                <div class="progress-circle-inner" :style="innerStyle">
                                                    <svg viewBox="0 0 100 100">
                                                        <circle class="progress-circle-trail" cx="50" cy="50" r="40" fill="none" :style="trailStyle"></circle>
                                                        <circle class="progress-circle-path" cx="50" cy="50" r="40" fill="none" :style="strokeStyle"></circle>
                                                    </svg>
                                                </div>
                                                <span class="progress-circle-text"><slot><slot></span>
                                            </div>
                                        </script>

                                        <script type="text/x-templete" id="main-page">
                                            <div>

                                                <div class="demo1">
                                                    <progress-circle
                                                        :percent="percent"
                                                        :strokeColor="strokeColor"
                                                        :strokeWidth="strokeWidth"
                                                        :size="size">

                                                            <div v-show="percent!=100">{{percent}}%</div>
                                                            <div class="progress-success-iconwrap" :class="{active: percent===100}">
                                                                <svg viewBox="0 0 80 60">
                                                                    <path d="M10,30 l20,20 l40,-40" fill="none" :stroke="strokeColor" stroke-width="4" stroke-linecap="round" id="successPath" :style="pathStyle" class="progress-success-icon"></path>
                                                                </svg>
                                                            </div>
                                                        
                                                    </progress-circle>
                                                </div>
                                                                                                                                                                                    
                                                <div class="text-center"  style="padding-bottom:20px;"">

                                                    <!-- Botones  + - Simulacion-->
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                    <!--
                                                        <button type="button" class="btn btn-outline-primary btn-sm" @click="dec">-</button>
                                                        <button type="button" class="btn btn-outline-primary btn-sm" @click="add">+</button>
                                                    -->
                                                        <button type="button" class="btn btn-outline-primary btn-sm" @click="Restart">Restablecer</button>
                                                    </div>
                                                    
                                                </div>

                                                <!-- APLICACIONES DISTRACTORAS -->
                                                <div class="card ">
                                                    <div class="container card-header" style="padding-top:20px;">

                                                        <form id="horasForm1">
                                                            <div class="row justify-content-center align-items-center">
                                                                <div class="col-md-6 col-sm-12 form-group mb-2" style="padding-right:0px;">
                                                                    <h6>Duracion de la clase:</h6>
                                                                </div>
                                                                <div class="col-md-4 col-sm-12 form-group mb-2" style="padding-left:0px;">
                                                                    <label for="inputHoras" class="sr-only">Horas</label>
                                                                    <input type="number" class="form-control" id="inputHoras" placeholder="Horas">
                                                                </div>
                                                            </div>
                                                        </form>

                                                        <form id="minutosForm1">
                                                            <div class="row justify-content-center align-items-center">
                                                                <div class="col-md-6 col-sm-12 form-group mb-2" style="padding-right:0px;">
                                                                    <h6>Cantidad de minutos en aplicación:</h6>
                                                                </div>
                                                                <div class="col-md-4 col-sm-12 form-group mb-2" style="padding-left:0px;">
                                                                    <label for="inputMinutes" class="sr-only">Minutos</label>
                                                                    <input type="number" class="form-control" id="inputMinutes" placeholder="Minutos">
                                                                </div>
                                                            </div>
                                                        </form>
                                                       
                                                    </div>
                                                    <div class="card-body" style="padding-top:10px;">
                                                        <div class="container">
                                                            <div style="padding-top:10px;">
                                                                <h5>Selecciona la aplicacion distractora:</h5>
                                                            </div>
                                                            <div class="d-flex justify-content-center espacio-icono">
                                                                
                                                                <div class="row" role="group" id="BotonesIconos">
                                                                    <div class="mr-2">
                                                                            <button type="button" class="btn btn-sm padding-Iconos" @click="wssp">
                                                                                <span class="iconoWhats input-group-text icono"><i class="tamaño-icono fab fa-whatsapp"></i></span>
                                                                            </button></div> 
                                                                    <div class="mr-2">
                                                                            <button type="button" class="btn btn-sm padding-Iconos" @click="facebook">
                                                                                <span class="iconoFace input-group-text icono"><i class="tamaño-icono fab fa-facebook"></i></span>
                                                                            </button>
                                                                    </div>                                                 
                                                                    <div class="mr-2">
                                                                            <button type="button" class="btn btn-sm padding-Iconos" @click="instagram">
                                                                                <span class="instagram icono input-group-text"><i class="tamaño-icono fab fa-instagram"></i></span>
                                                                            </button>
                                                                           </div>
                                                                    <div class="mr-2">
                                                                            <button type="button" class="btn btn-sm padding-Iconos" @click="twitter">
                                                                                <span class="iconoTwit input-group-text icono"><i class="tamaño-icono fab fa-twitter"></i></span>
                                                                            </button>
                                                                           </div>
                                                                    <div class="mr-2">
                                                                            <button type="button" class="btn btn-sm padding-Iconos" @click="youtube">
                                                                                <span class="iconoYou input-group-text icono"><i class="tamaño-icono fab fa-youtube"></i></span>
                                                                            </button>
                                                                    </div>
                                                                    <div class="mr-2">
                                                                            <button type="button" class="btn btn-sm padding-Iconos" @click="tiktok">
                                                                                <span class="iconoTik input-group-text icono"><span class="iconify tamaño-icono" data-icon="simple-icons:tiktok" data-inline="false"></span></span>
                                                                            </button>
                                                                            </div>
                                                                    <div class="mr-2">
                                                                            <button type="button" class="btn btn-sm padding-Iconos" @click="game">
                                                                                <span class="iconoGam input-group-text icono"><i class="tamaño-icono fas fa-gamepad"></i></span>
                                                                            </button>
                                                                            </div> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div v-show="percent>=80">
                                                    <h5 class="text-success" style="font-size:30px;"> </br> </br> Estudiante atento  <i class="fas fa-check-circle"></i></h5>
                                                    <h5 style="font-size:20px;"> </br> La mayor parte del tiempo te mantienes atento a tus actividades academicas y no cuentas con muchas distracciones, Felicidades!!</h5>
                                                </div>
                                                
                                                <div v-show="percent<80 && percent>55">
                                                    <h5 class="text-warning" style="font-size:30px;"> </br> </br>Estudiante distraido <i class="fas fa-exclamation-circle"></i></h5>
                                                    <h5 style="font-size:20px;"> </br> Te distraes un poco durante las actividades academicas, trata de evitar las distraciones y concentrate en tus clases</h5>
                                                    <div style="padding-top:40px;">
                                                        <button class="btn btn-primary" id="tip">Tip<i class="far fa-calendar-check"></i></button>
                                                    </div>
                                                </div>

                                                <div v-show="percent<=55">
                                                    <h5 class="text-danger" style="font-size:30px;"> </br> </br>Estudiante Muy distraido <i class="fas fa-thumbs-down"></i></h5>
                                                    <h5 style="font-size:20px;" > </br> Te distraes mucho, evita las distracciones a toda costa ya que estas podrian afectar tu apredizaje y rendimiento academico</h5>
                                                    <div style="padding-top:40px;">
                                                        <button class="btn btn-primary" id="tip">Tip<i class="far fa-calendar-check"></i></button>
                                                    </div>
                                                </div>                                       
                                                
                                            </div>

                                                                                                                                                                    

                                        </script>
                                        
                                        <div id="app"></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Simulacion Programacion-->
    <div class="portfolio-modal modal fade" id="SimulacionProgramacion" tabindex="-1" role="dialog"
        aria-labelledby="#SimulacionProgramacionLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content rounded border border-info">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="fas fa-times"></i></span></button>
                <div class="modal-body text-center borde-portfolio"style="border-width:20px;padding: 0.7rem 0.7rem!important; background-color:#007bff!important;">
                    <div class="container bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 padding-portfolio"> 
                                <!-- Title-->
                                <h2 class="portfolio-modal-title text-info mb-0">Programacion</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-laptop-code"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <div class="container ">
                                    <div class="row justify-content-center">
                                        <script type="text/x-templete" id="progress-circle">
                                            <div class="progress-circle">
                                                <div class="progress-circle-inner" :style="innerStyle">
                                                    <svg viewBox="0 0 100 100">
                                                        <circle class="progress-circle-trail" cx="50" cy="50" r="40" fill="none" :style="trailStyle"></circle>
                                                        <circle class="progress-circle-path" cx="50" cy="50" r="40" fill="none" :style="strokeStyle"></circle>
                                                    </svg>
                                                </div>
                                                <span class="progress-circle-text"><slot><slot></span>
                                            </div>
                                        </script>

                                        <script type="text/x-templete" id="main-page2">
                                                <div>
                                                    <div class="demo1">
                                                        <progress-circle
                                                            :percent="percent"
                                                            :strokeColor="strokeColor"
                                                            :strokeWidth="strokeWidth"
                                                            :size="size">
                                                                <div v-show="percent!=100">{{percent}}%</div>
                                                                <div class="progress-success-iconwrap" :class="{active: percent===100}">
                                                                    <svg viewBox="0 0 80 60">
                                                                        <path d="M10,30 l20,20 l40,-40" fill="none" :stroke="strokeColor" stroke-width="4" stroke-linecap="round" id="successPath" :style="pathStyle" class="progress-success-icon"></path>
                                                                    </svg>
                                                                </div>
                                                        </progress-circle>
                                                    </div>
                                                    <div class="text-center"  style="padding-bottom:20px;"">

                                                        <!-- Botones  + - Simulacion-->
                                                        
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                        <!--
                                                            <button type="button" class="btn btn-outline-primary btn-sm" @click="dec">-</button>
                                                            <button type="button" class="btn btn-outline-primary btn-sm" @click="add">+</button>
                                                        -->
                                                            <button type="button" class="btn btn-outline-primary btn-sm" @click="Restart">Restablecer</button>
                                                        </div>
                                                        
                                                    </div>

                                                    <!-- APLICACIONES DISTRACTORAS -->
                                                    <div class="card ">
                                                        <div class="container card-header" style="padding-top:20px;">
                                                            <form id="horasForm2">
                                                                <div class="row justify-content-center align-items-center">
                                                                    <div class="col-md-6 col-sm-12 form-group mb-2" style="padding-right:0px;">
                                                                        <h6>Duracion de la clase:</h6>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12 form-group mb-2" style="padding-left:0px;">
                                                                        <label for="inputHoras2" class="sr-only">Horas</label>
                                                                        <input type="number" class="form-control" id="inputHoras2" placeholder="Horas">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <form id="minutosForm2" >
                                                                <div class="row justify-content-center align-items-center">
                                                                    <div class="col-md-6 col-sm-12 form-group mb-2" style="padding-right:0px;">
                                                                        <h6>Cantidad de minutos en aplicación:</h6>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12 form-group mb-2" style="padding-left:0px;">
                                                                        <label for="inputMinutes2" class="sr-only">Minutos</label>
                                                                        <input type="number" class="form-control" id="inputMinutes2" placeholder="Minutos">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        
                                                        </div>
                                                        <div class="card-body" style="padding-top:10px;">
                                                            <div class="container">
                                                                <div style="padding-top:10px;">
                                                                    <h5>Selecciona la aplicacion distractora:</h5>
                                                                </div>
                                                                <div class="d-flex justify-content-center espacio-icono">
                                                                    
                                                                    <div class="row" role="group" id="BotonesIconos">
                                                                        <div class="mr-2">
                                                                                <button type="button" class="btn btn-sm padding-Iconos" @click="wssp">
                                                                                    <span class="iconoWhats input-group-text icono"><i class="tamaño-icono fab fa-whatsapp"></i></span>
                                                                                </button>
                                                                                <input type="number" class="form-control" id="PorcentajeWssp2" value="0" readonly style="width:65px">
                                                                        </div> 
                                                                        <div class="mr-2">
                                                                                <button type="button" class="btn btn-sm padding-Iconos" @click="facebook">
                                                                                    <span class="iconoFace input-group-text icono"><i class="tamaño-icono fab fa-facebook"></i></span>
                                                                                </button>
                                                                                <input type="number" class="form-control" id="PorcentajeFace2" value="0" readonly style="width:65px">
                                                                        </div>                                                 
                                                                        <div class="mr-2">
                                                                                <button type="button" class="btn btn-sm padding-Iconos" @click="instagram">
                                                                                    <span class="instagram icono input-group-text"><i class="tamaño-icono fab fa-instagram"></i></span>
                                                                                </button>
                                                                                <input type="number" class="form-control" id="PorcentajeInsta2" value="0" readonly style="width:65px">
                                                                        </div>
                                                                        <div class="mr-2">
                                                                                <button type="button" class="btn btn-sm padding-Iconos" @click="twitter">
                                                                                    <span class="iconoTwit input-group-text icono"><i class="tamaño-icono fab fa-twitter"></i></span>
                                                                                </button>
                                                                                <input type="number" class="form-control" id="PorcentajeTw2" value="0" readonly style="width:65px">
                                                                        </div>
                                                                        <div class="mr-2">
                                                                                <button type="button" class="btn btn-sm padding-Iconos" @click="youtube">
                                                                                    <span class="iconoYou input-group-text icono"><i class="tamaño-icono fab fa-youtube"></i></span>
                                                                                </button>
                                                                                <input type="number" class="form-control" id="PorcentajeYout2" value="0" readonly style="width:65px">
                                                                        </div>
                                                                        <div class="mr-2">
                                                                                <button type="button" class="btn btn-sm padding-Iconos" @click="tiktok">
                                                                                    <span class="iconoTik input-group-text icono"><span class="iconify tamaño-icono" data-icon="simple-icons:tiktok" data-inline="false"></span></span>
                                                                                </button>
                                                                                <input type="number" class="form-control" id="PorcentajeTik2" value="0" readonly style="width:65px">
                                                                        </div>
                                                                        <div class="mr-2">
                                                                                <button type="button" class="btn btn-sm padding-Iconos" @click="game">
                                                                                    <span class="iconoGam input-group-text icono"><i class="tamaño-icono fas fa-gamepad"></i></span>
                                                                                </button>
                                                                                <input type="number" class="form-control" id="PorcentajeGame2" value="0" readonly style="width:65px">
                                                                        </div> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div v-show="percent>=80">
                                                        <h5 class="text-success" style="font-size:30px;"> </br> </br> Estudiante atento  <i class="fas fa-check-circle"></i></h5>
                                                        <h5 style="font-size:20px;"> </br> La mayor parte del tiempo te mantienes atento a tus actividades academicas y no cuentas con muchas distracciones, Felicidades!!</h5>
                                                    </div>
                                                    
                                                    <div v-show="percent<80 && percent>55">
                                                        <h5 class="text-warning" style="font-size:30px;"> </br> </br>Estudiante distraido <i class="fas fa-exclamation-circle"></i></h5>
                                                        <h5 style="font-size:20px;"> </br> Te distraes un poco durante las actividades academicas, trata de evitar las distraciones y concentrate en tus clases</h5>
                                                        <div style="padding-top:40px;">
                                                            <button class="btn btn-primary" id="tip2">Tip<i class="far fa-calendar-check"></i></button>
                                                        </div>
                                                    </div>

                                                    <div v-show="percent<=55">
                                                        <h5 class="text-danger" style="font-size:30px;"> </br> </br>Estudiante Muy distraido <i class="fas fa-thumbs-down"></i></h5>
                                                        <h5 style="font-size:20px;" > </br> Te distraes mucho, evita las distracciones a toda costa ya que estas podrian afectar tu apredizaje y rendimiento academico</h5>
                                                        <div style="padding-top:40px;">
                                                            <button class="btn btn-primary" id="tip2">Tip<i class="far fa-calendar-check"></i></button>
                                                        </div>
                                                    </div>     

                                                </div>
                                        </script>

                                        <div id="app2"></div>
                                        <!-- partial -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contacto-->
    <section class="page-section bg-primary text-white mb-0" id="contact">
        <div class="container ">
            <!-- Contact Section Heading-->
            <div class="text-center">
                <h2 class="page-section-heading text-secondary d-inline-block mb-0">CONTACTO - AYUDA</h2>
            </div>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-info-circle"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Content-->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="d-flex flex-column align-items-center">
                        <div class="icon-contact mb-3"><i class="far fa-envelope"></i></div>
                            <a class="lead font-weight-bold text-white mifuente" 
                            href="mailto:name@example.com">UNALGrupo8ISYC@Servicioalcliente.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Terminos y condiciones-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 href='https://www.google.com/' class="mb-4"><a href='https://www.google.com/'>TERMINOS Y
                            CONDICIONES</a></h4>
                    <h4 href='https://www.google.com/' class="mb-4"><a href='https://www.google.com/'>POLITICA DE
                            PRIVACIDAD</a></h4>
                </div>
                <div class="col-lg-4">
                        <h4 class="mb-4">SOBRE Percent</h4>
                        <img src="Images/Logo_percent Claro.png" class="img-fluid" width="50px" alt="Hola">
                        <!-- Copyright-->
                        
                        <div class="container" style="padding-top:20px;"><small class="pre-wrap">Copyright © Percent 2020<br>Todos los derechos reservados</small></div>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="mb-4">REDES SOCIALES</h4><a class="btn btn-outline-light btn-social mx-1"
                        href="https://www.facebook.com/StartBootstrap"><i class="fab fa-fw fa-facebook-f"></i></a><a
                        class="btn btn-outline-light btn-social mx-1" href="https://www.twitter.com/sbootstrap"><i
                            class="fab fa-fw fa-twitter"></i></a><a class="btn btn-outline-light btn-social mx-1"
                        href="https://www.linkedin.com/in/startbootstrap"><i class="fab fa-fw fa-linkedin-in"></i></a><a
                        class="btn btn-outline-light btn-social mx-1" href="https://www.dribble.com/startbootstrap"><i
                            class="fab fa-fw fa-dribbble"></i></a>
                </div>
               
                   
                
            </div>
        </div>
    </footer>
    

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top d-lg-none position-fixed"><a
            class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i
                class="fa fa-chevron-up"></i></a></div>
    <!-- Bootstrap core JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <!-- Core theme JS-->

    <!-- JS simulador-->
    <script src="js/scripts.js"></script>
    <!--Vue JS-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js'></script>
    <script src="js/script_simulador.js"></script>
    <!--Iconify JS -->
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</body>

</html>