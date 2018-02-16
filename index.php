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
                                    <img src="images/banner1.png" alt="Cirujano ortopedico"  width="100%"/>
                                </a>
                            </li>
                            <li class="second">
                                <a class="rehab"><span>Rehabilitación</span></a>
                                <a class="hosp"><span>Hospitalización</span></a>
                            </li>
                            <li class="third"><a class="sport"><span>Medicina del deporte</span></a></li>
                        </ul>
        
                        <!-- <div id="easing" class="lx parallax-coffee skrollable skrollable-between"></div> -->
                        <div class="parallax-bean">
                        </div>
                    </div>
                    
                </div>

                <div class="parallax parallax-second">
                    <div class="leaves">
                        <div class="leaves-02" data-parallax='{"y": 100, "from-scroll": 300}'>
                            <h3>¿quiénes somos?</h3>
                            
                        </div>
                        <div class="ventajas">
                            <h2  data-parallax='{"y": -100, "from-scroll": 100}'>Las ventajas</h2>
                            <div class="pasos paso1" data-parallax='{"y": -80, "from-scroll": 100}'>

                        </div>
                    </div>

                </div>
                
                <div class="parallax parallax-third">
                    <div class="content-video">
                        <img class="play" src="images/home/buttonplay.png" />
                       

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