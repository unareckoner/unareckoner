<!DOCTYPE html>
<html>
    <head>
        <title>Padecimientos</title>
        <?php include 'head.html' ?> 
            
    </head>

    <body class="padecimientos">
        <?php include 'header.html' ?>
        <main>
			<section>
			    <div class="banner-men">
			        <div class="cont_img">
			        	<h1>¿Qué te duele?</h1>
			            <img src="../images/men.png" alt="Padecimientos ortopédicos">
			        </div>
			    </div>
			    <div class="tipo_padecimientos">
			    	<h2>Padecimientos más comunes</h2>
			    	<div id="tab1" class="tabs elbow">
                        <h3 class="accordion">Dolor de codo</h3>
                        <div class="cont_tab panel">
                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nunc tellus, condimentum non bibendum vitae, volutpat non velit. Mauris in ex a ex tempus iaculis eget euismod ex. Nam vitae metus et urna mattis gravida id nec risus. Cras molestie, leo sed lacinia pharetra, ipsum purus dictum tortor, at congue ipsum ex quis erat. Vivamus cursus ipsum eu ipsum sollicitudin scelerisque. Nunc in vulputate tellus, at lacinia massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam in nunc vitae nunc vehicula varius ac id arcu. Sed suscipit facilisis sapien, id tincidunt nisl ultrices quis. Morbi posuere pellentesque nisl.</p>
                        	<p>In interdum mauris ac leo finibus viverra. Sed ut interdum ante. Suspendisse potenti. Maecenas aliquam tellus ut ante bibendum pulvinar eu posuere ligula. Pellentesque sem elit, maximus fringilla tristique in, consectetur sed massa. Nullam rhoncus neque quis enim blandit, ut gravida libero sollicitudin. Mauris non quam vitae purus rhoncus accumsan. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus condimentum tincidunt tortor, vel fermentum turpis. Quisque eleifend placerat aliquam. Morbi pretium mauris vitae velit malesuada scelerisque ut vel tellus. Vivamus varius, nisi id commodo maximus, felis ipsum egestas tellus, quis accumsan purus erat eu ante.</p>
                        </div>
                    </div>
                    <div id="tab2" class="tabs shoulder">
                        <h3 class="accordion">Dolor de hombro</h3>
                        <div class="cont_tab panel">
                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nunc tellus, condimentum non bibendum vitae, volutpat non velit. Mauris in ex a ex tempus iaculis eget euismod ex. Nam vitae metus et urna mattis gravida id nec risus. Cras molestie, leo sed lacinia pharetra, ipsum purus dictum tortor, at congue ipsum ex quis erat. Vivamus cursus ipsum eu ipsum sollicitudin scelerisque. Nunc in vulputate tellus, at lacinia massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam in nunc vitae nunc vehicula varius ac id arcu. Sed suscipit facilisis sapien, id tincidunt nisl ultrices quis. Morbi posuere pellentesque nisl.</p>
                        </div>
                    </div>
                    <div id="tab3" class="tabs foot">
                        <h3 class="accordion">Dolor de pie</h3>
                        <div class="cont_tab panel">
                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nunc tellus, condimentum non bibendum vitae, volutpat non velit. Mauris in ex a ex tempus iaculis eget euismod ex. Nam vitae metus et urna mattis gravida id nec risus. Cras molestie, leo sed lacinia pharetra, ipsum purus dictum tortor, at congue ipsum ex quis erat. Vivamus cursus ipsum eu ipsum sollicitudin scelerisque. Nunc in vulputate tellus, at lacinia massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam in nunc vitae nunc vehicula varius ac id arcu. Sed suscipit facilisis sapien, id tincidunt nisl ultrices quis. Morbi posuere pellentesque nisl.</p>
                        </div>
                    </div>
                    <div id="tab4" class="tabs knee">
                        <h3 class="accordion">Dolor de rodilla</h3>
                        <div class="cont_tab panel">
                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nunc tellus, condimentum non bibendum vitae, volutpat non velit. Mauris in ex a ex tempus iaculis eget euismod ex. Nam vitae metus et urna mattis gravida id nec risus. Cras molestie, leo sed lacinia pharetra, ipsum purus dictum tortor, at congue ipsum ex quis erat. Vivamus cursus ipsum eu ipsum sollicitudin scelerisque. Nunc in vulputate tellus, at lacinia massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam in nunc vitae nunc vehicula varius ac id arcu. Sed suscipit facilisis sapien, id tincidunt nisl ultrices quis. Morbi posuere pellentesque nisl.</p>
                        </div>
                    </div>
                    <div id="tab4" class="tabs wirst">
                        <h3 class="accordion">Dolor de muñeca</h3>
                        <div class="cont_tab panel">
                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nunc tellus, condimentum non bibendum vitae, volutpat non velit. Mauris in ex a ex tempus iaculis eget euismod ex. Nam vitae metus et urna mattis gravida id nec risus. Cras molestie, leo sed lacinia pharetra, ipsum purus dictum tortor, at congue ipsum ex quis erat. Vivamus cursus ipsum eu ipsum sollicitudin scelerisque. Nunc in vulputate tellus, at lacinia massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam in nunc vitae nunc vehicula varius ac id arcu. Sed suscipit facilisis sapien, id tincidunt nisl ultrices quis. Morbi posuere pellentesque nisl.</p>
                        </div>
                    </div>
                    <div class="block_cta">
                    	<p class="message">Si identificas alguno de estos síntomas, o presentas cualquier tipo de molestia adicional, realiza hoy mismo tu cita para una Consulta de Valoración completa. <strong>Tu salud es lo más importante</strong>.</p>

                    	<button class="btn-cta">Agenda tu consulta</button>
                    </div>
			    </div>    
			</section>
		</main>
        <?php include 'footer.html' ?>
	</body>
<script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].onclick = function(){
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.display === "block") {
                        panel.style.display = "none";
                    } else {
                        panel.style.display = "block";
                    }
                }
            }
        </script>
    </body>
</html>
