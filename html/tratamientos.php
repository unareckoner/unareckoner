<!DOCTYPE html>
<html>
    <head>
        <title>Tratamientos</title>
        <?php include 'head.html' ?> 
            
    </head>

    <body class="servicios">
        <?php include 'header.html' ?>
        <main>
			<section>
			    <div class="banner-photos">
			        <div class="cont_banner">
			        	<img src="../images/banner_tratamientos.png" alt="Experiencia">
			        </div>
			    </div>
			    <div class="cont_servicios">
			    	<h1>TRATAMIENTOS</h1>
                    <ul>
                        <p>Ofrezco <strong>tratamientos conservadores</strong> para:</p>
                        <li><p>Dolor Lumbar</p></li>
                        <li><p>Dolor de Cuello</p></li>
                        <li><p>Dolor de Hombro</p></li>
                        <li><p>Artritis</p></li>
                        <li><p>Fracturas y luxaciones</p></li>
                        <li><p>Inmovilizaciones</p></li>
                        <li><p>Yesos, férulas y fibras de vidrio</p></li>
                        <li><p>Infiltraciones</p></li>
                    </ul>

                    <ul class="list_contenido">
                        <h2>Tipos de lesiones</h2>
                        <li>
                            <h3>Lesión Traumática</h3>
                            <p>Una lesión es el daño producido a los tejidos por un agente o fuerza externo y que de acuerdo a su intensidad puede causar daños como abrasiones por fricción, heridas de diferente espesor y longitud, ruptura total o parcial de músculo, tendones, ligamentos, luxaciones o fracturas que pueden ser cerradas o expuestas, únicas o múltiples. Estas lesiones de acuerdo a su gravedad deberán tener una atención temprana, eficiente y profesional para minimizar las secuelas y complicaciones.</p>
                        </li>
                        <li>
                            <h3>Lesión Crónica</h3>
                            <p>Por lo general son lesiones agudas que no recibieron un tratamiento adecuado o fue de manera insuficiente, aunque en otros casos se presentan por desgaste, sobre entrenamiento o deficiencias en las técnicas. La evolución de estas lesiones va de meses a años y las lesiones a tejidos y articulaciones es variable de acuerdo al daño inicial.</p>
                        </li>
                        <li>
                            <h3>Lesión Degenerativa</h3>
                            <p>Aplica mayormente para las articulaciones y esta se presenta conforme envejecemos, la fricción y el uso desgastan las estructuras que forman las articulaciones presentando pérdida en el rango de movilidad, dolor crónico, limitación progresiva, deformidad angular. Algunas enfermedades como artritis reumatoide o la osteoartrosis degenerativa pueden acelerar y presentar de manera temprana lesiones degenerativas.</p>
                        </li>
                    </ul>

                    <div class="block_cta">
                    	<p class="message">Valoro de forma integral al paciente, desde sus antecedentes de enfermedades previas, hasta la convivencia interfamiliar, para encontrar en conjunto médico-paciente el tratamiento más adecuado para su enfermedad o lesión ortopédica.</p>

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
