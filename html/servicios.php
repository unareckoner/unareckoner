<!DOCTYPE html>
<html>
    <head>
        <title>Servicios</title>
        <?php include 'head.html' ?> 
            
    </head>

    <body class="servicios">
        <?php include 'header.html' ?>
        <main>
			<section>
			    <div class="banner-photos">
			        <div class="cont_banner">
			        	<img src="../images/banner_servicios.png" alt="Experiencia">
			        </div>
			    </div>
			    <div class="cont_servicios">
			    	<h1>Servicios</h1>
			    	<ul>
                        <li><a href="tratamientos.php">Tratamientos Ortopédicos</a></li>
                        <li><a>Cirugías</a></li>
                        <li><a>Rehabilitación</a></li>
                        <li><a>Hospitalización</a></li>
                        <li><a>Lesiones Deportivas</a></li>
                    </ul> 
                    
                    <div class="block_cta">
                    	<p class="message">Valoración precisa y opciones para tu tratamiento, manejo médico, terapia física específica o cirugía.</p>

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
