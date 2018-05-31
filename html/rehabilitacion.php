<!DOCTYPE html>
<html>
    <head>
        <title>Rehabilitación</title>
        <?php include 'head.html' ?> 
            
    </head>

    <body class="servicios">
        <?php include 'header.html' ?>
        <main>
			<section>
			    <div class="banner-photos">
			        <div class="cont_banner">
			        	<img src="../images/banner_rehabilitacion.jpg" alt="Rehabilitación ortopédica">
			        </div>
			    </div>
			    <div class="cont_servicios">
			    	<h1>Rehabilitación</h1>
                    <p>Las siguientes lesiones pueden tratarse con un programa de Rehabilitación Ortopédica:</p>
                    <ul class="cirugia">
                        <li><p>Escoliosis</p></li>
                        <li><p>Cifosis</p></li>
                        <li><p>Espondilolistesis</p></li>
                        <li><p>Luxaciones</p></li>
                        <li><p>Hallux valgus</p></li>
                        <li><p>Pie plano</p></li>
                        <li><p>Síndrome de túnel del carpo</p>
                        <li><p>Esguinces</p>
                    </ul>
                    <ul class="list_contenido">
                    <h3>¿Qué tipo de pacientes pueden recibir Rehabilitación?</h3>
                    <li><p>Personas que presenten <strong>dolor muscular</strong> que les impida realizar diferentes actividades ya sean laborales, recreativas o de su vida normal.</p></li>
                    <li><p>Personas que presenten <strong>lesiones o traumatismos severos</strong> que impidan tener una óptima calidad de vida como esguinces, luxaciones o problemas musculares.</p></li>
                    <li><p>Pacientes postoperados.</p></li>
                    </ul>                    

                    <div class="block_cta">
                    	<p class="message">Ofrezco un programa de <strong>Rehabilitación Ortopédica y Traumatológica</strong>, diseñado para pacientes con discapacidades musculoesqueléticas debidas a enfermedades, traumatismos o cirugía, que mejoran su capacidad funcional, reducen los síntomas y ayudan a retornar al paciente a su actividad habitual en el menor tiempo posible.</p>

                    	<button class="btn-cta" onClick="window.open('https://live.vcita.com/site/l3mr675bnttbflne')">Agenda tu consulta</button>
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
