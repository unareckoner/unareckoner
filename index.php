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
                    <div class="catego catego-insumos">
                        
                        <div class="container-fluid slide-content">
                            <p class="title-01">La combinación<br> perfecta para<br> tu negocio</p>
                            <p class="title-02">Conozca nuestras<br> marcas y el mejor<br> para tu negocio.</p>
                            <button class="button-slide"  onclick="location.href='html/categorias.php'">Mira los productos</button>
                        </div>
                        <!-- <div id="easing" class="lx parallax-coffee skrollable skrollable-between"></div> -->
                        <div class="parallax-bean">
                        </div>
                    </div>
                    
                </div>

                <div class="parallax parallax-second">
                    <div class="leaves">
                        <div class="leaves-02" data-parallax='{"y": 100, "from-scroll": 300}'>
                            <h3>¿quiénes somos?</h3>
                            <span>Nescafé</span>
                            <p>Soluciones<br>&nbsp;prácticas,<br>&nbsp;&nbsp;&nbsp;ágiles e<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inteligentes<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;para tu <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;negocio.</p>
                        </div>
                        <div class="ventajas">
                            <h2  data-parallax='{"y": -100, "from-scroll": 100}'>Las ventajas</h2>
                            <div class="pasos paso1" data-parallax='{"y": -80, "from-scroll": 100}'><span class="step">Elija el mejor<br>modo de pago para ti<br><span>Pague con la tarjeta, factura<br> o depósito, al contado o fraccionada.</span></span></div>

                            <!--<div class="pasos paso2"><span class="step">Programe el auto-delivery<br><span>Cuente con un sistema de<br>agendamiento customizado.</span></span></div>-->

                            <div class="pasos paso3"  data-parallax='{"y": -60, "from-scroll": 100}'><span class="step">Rastree sus pedidos<br><span>Sepa exactamente cuándo van<br>a llegar y dónde están sus compras.</span></span></div>

                            <div class="pasos paso4"  data-parallax='{"y": -40, "from-scroll": 100}'><span class="step">Es rápido, simple y todo online</span></div>
                            <button class="button-white" onclick="location.href='html/categorias.php'">Accede a la tienda</button>
                            <img class="top-photo" src="images/home/top-photo.png"  />
                            <img class="bottom-photo" src="images/home/bottom-photo.png" data-parallax='{"x": -30}'/>
                        </div>
                    </div>

                </div>
                
                <div class="parallax parallax-third">
                    <div class="content-video">
                        <img class="play" src="images/home/buttonplay.png" />
                        <!--<div class="getapp">
                            <span class="download">Descarga gratuitamente<br><span>Nescafé app</span></span>
                        </div>-->

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