<!DOCTYPE html>
<html>
    <head>
        <title>Dr. Harim Arias</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/header/index.ico" >
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-sass-master/assets/stylesheets/bootstrap.css">
        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
        <script type="text/javascript" src="scripts/nestle.js"></script>
        <script type="text/javascript" src="bootstrap-sass-master/assets/javascripts/bootstrap.min.js"></script>
        <script type="text/javascript" src="bootstrap-sass-master/assets/javascripts/bootstrap-sprockets.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.parallax-scroll.js"></script>
        <link rel="stylesheet" type="text/css" href="css/roundslider.min.css">
        <link rel=stylesheet href="bootstrap-sass-master/assets/stylesheets/bootstrap.css" type="text/css"/>
        <link rel=stylesheet href="css/animate.css" type="text/css"/>
    </head>
    <body class="cms-home cms-page">
        <?php include 'html/header-home.html' ?>
        <main>
            <div class="category">
                <div class="parallax parallax-first">
                    <div class="">
                        <ul class="sections">
                            <li class="first">
                                <a class="cirug">
                                    <span class="hover"><span>Cirugías</span></span>
                                    <img src="images/banner1.png" alt="Cirugías">
                                </a>
                            </li>
                            <li class="second">
                                <a class="rehab">
                                    <span class="hover"><span>Rehabilitacion</span></span>
                                    <img src="images/banner2.png" alt="Cirugías">
                                </a>
                                <a class="hosp">
                                    <span class="hover"><span>Hospitalización</span></span>
                                    <img src="images/banner3.png" alt="Cirugías">
                                </a>
                            </li>
                            <li class="third">
                                <a class="sport">
                                    <span class="hover"><span>Medicina del deporte</span></span>
                                    <img src="images/banner4.png" alt="Medicina del deporte">
                                </a>
                            </li>
                        </ul>
        
                        <!-- <div id="easing" class="lx parallax-coffee skrollable skrollable-between"></div> -->
                        <div class="parallax-bean">
                        </div>
                    </div>
                    
                </div>

                <div class="parallax parallax-second">
                    <div class="benefits">
                        <ul class="list_ico" data-parallax='{"y": 100, "from-scroll": 300}'>
                            <li class="valoracion">
                                <span class="img"><img src="images/ico_valoracion.png" alt="Valoración en Lesiones Esquéleticas"></span>
                                <span class="txt">Valoración</span>
                            </li>
                            <li class="diagnostico">
                                <span class="img"><img src="images/ico_diagnostico.png" alt="Diagnóstico Oportuno"></span>
                                <span class="txt">Diagnóstico</span>
                            </li>
                            <li class="diagnostico">
                                <span class="img"><img src="images/ico_convenio.png" alt="Convenio con aseguradoras"></span>
                                <span class="txt">Convenio con <br>aseguradoras</span>
                            </li>  
                        </ul>
                        <!--<div class="beneficios">
                            <h2  data-parallax='{"y": -100, "from-scroll": 100}'>Las ventajas</h2>
                            <div class="pasos paso1" data-parallax='{"y": -80, "from-scroll": 100}'>

                        </div>-->
                    </div>
                    <!--<img class="fig" src="images/fig_ban5.png" />-->
                </div>
                
                <div class="parallax parallax-third">
                    <div class="content-banner">
                        <h2>
                            <span class="comillas">"</span> 
                            El buen médico trata la enfermedad; <br>el gran médico trata <br>al paciente que tiene <br>la enfermedad."
                            <strong>William Osler</strong>
                        </h2>
                    </div>
                </div>
                <div class="parallax parallax-four">
                    <h3 class="title-red">Nuestros más vendidos</h3>
                    <div class="col-md-1"></div>
                    
                </div>
            </div>

            <div class="col-md-1"></div>
        </main>
        <?php include 'html/footer_index.html' ?>
    </body>
</html>