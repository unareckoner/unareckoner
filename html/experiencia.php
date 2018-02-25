<!DOCTYPE html>
<html>
    <head>
        <title>Experiencia</title>
        <?php include 'head.html' ?> 
            
    </head>

    <body class="experiencia">
        <?php include 'header.html' ?>
        <main>
			<section>
			    <div class="banner-photos">
			        <div class="cont_banner">
			        	<img src="../images/banner_experiencia.jpg" alt="Experiencia">
			        </div>
			    </div>
			    <div class="cont_experiencia">
			    	<h1> Experiencia</h1>
			    	<h2>Dr. Harim Arias Gutiérrez</h2>
			    	<div id="tab1_ex" class="tabs">
                        <h3 class="accordion active">Formación Académica</h3>
                        <div class="cont_tab panel" style="display: block;">
                        	<div class="cont_txt">
	                        	<h4 style="margin-top: 0;">Fellowship en posgrado de Artroscopia y cirugía de rodilla.</h4>
	                        	<p>Médica Sur, La Salle.</p>
	                        	<h4>Miembro AOTrauma Latinoamérica.</h4>
	                        	<p>Especialidad Médica en Traumatologia y Ortopedia. Generación 2010-2014 (IMSS Hospital General Regional #2 Villa Coapa, UNAM).</p>
	                        	<h4>Certificación de Consejo Mexicano de Ortopedia y Traumatología.</h4>
	                        	<p>Médica Sur, La Salle.</p>
	                        	<h4>Miembro titular del Colegio Mexicano de Ortopedia.</h4>
	                        	<h4>Licenciatura Médico Cirujano.</h4>
	                        	<p>Universidad Nacional Autónoma de México. Grupo Núcleo de Calidad Educativa (NUCE), generación 2003 - 2010. Título profesional.</p>
	                        </div>
	                        <div class="cont_img">
	                        	<img src="../images/logos_exp_formacion.png" alt="Formación Académica / La Salle / UNAM / Colegio Mexicano Ortopedia; AO Latinoamerica">
	                        </div>
                        </div>
                    </div>
                    <div id="tab2_ex" class="tabs">
                        <h3 class="accordion">Formación Complementaria</h3>
                        <div class="cont_tab panel">
                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nunc tellus, condimentum non bibendum vitae, volutpat non velit. Mauris in ex a ex tempus iaculis eget euismod ex. Nam vitae metus et urna mattis gravida id nec risus. Cras molestie, leo sed lacinia pharetra, ipsum purus dictum tortor, at congue ipsum ex quis erat. Vivamus cursus ipsum eu ipsum sollicitudin scelerisque. Nunc in vulputate tellus, at lacinia massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam in nunc vitae nunc vehicula varius ac id arcu. Sed suscipit facilisis sapien, id tincidunt nisl ultrices quis. Morbi posuere pellentesque nisl.</p>
                        </div>
                    </div>
                    <div id="tab3_ex" class="tabs">
                        <h3 class="accordion">Áreas de conocimiento</h3>
                        <div class="cont_tab panel">
                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nunc tellus, condimentum non bibendum vitae, volutpat non velit. Mauris in ex a ex tempus iaculis eget euismod ex. Nam vitae metus et urna mattis gravida id nec risus. Cras molestie, leo sed lacinia pharetra, ipsum purus dictum tortor, at congue ipsum ex quis erat. Vivamus cursus ipsum eu ipsum sollicitudin scelerisque. Nunc in vulputate tellus, at lacinia massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam in nunc vitae nunc vehicula varius ac id arcu. Sed suscipit facilisis sapien, id tincidunt nisl ultrices quis. Morbi posuere pellentesque nisl.</p>
                        </div>
                    </div>
                    <div id="tab4_ex" class="tabs">
                        <h3 class="accordion">Experiencia Profesional</h3>
                        <div class="cont_tab panel">
                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nunc tellus, condimentum non bibendum vitae, volutpat non velit. Mauris in ex a ex tempus iaculis eget euismod ex. Nam vitae metus et urna mattis gravida id nec risus. Cras molestie, leo sed lacinia pharetra, ipsum purus dictum tortor, at congue ipsum ex quis erat. Vivamus cursus ipsum eu ipsum sollicitudin scelerisque. Nunc in vulputate tellus, at lacinia massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam in nunc vitae nunc vehicula varius ac id arcu. Sed suscipit facilisis sapien, id tincidunt nisl ultrices quis. Morbi posuere pellentesque nisl.</p>
                        </div>
                    </div>
                    
                    <div class="block_cta">
                    	<p class="message">Soy especialista en el tratamiento de lesiones músculo-esqueléticas. Gracias a mi formación académica y mi experiencia profesional ofrezco diagnóstico, tratamiento y rehabilitación diseñada para acelerar el regreso del paciente a sus actividades normales. Me esfuerzo por aliviar el dolor y mejorar la función lo más rápido posible con un trato cálido y humano.</p>
                    	<p class="message">Estoy ubicado en la Ciudad de México, donde trato una amplia variedad de afecciones y trastornos a costos accesibles.</p>

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
