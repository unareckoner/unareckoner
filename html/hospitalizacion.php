<!DOCTYPE html>
<html>
    <head>
        <title>Hospitalizacion</title>
        <?php include 'head.html' ?> 
            
    </head>

    <body class="servicios">
        <?php include 'header.html' ?>
        <main>
			<section>
			    <div class="banner-photos">
			        <div class="cont_banner">
			        	<img src="../images/banner_hospitalizacion.png" alt="Experiencia">
			        </div>
			    </div>
			    <div class="cont_servicios">
			    	<h1>Hospitalización</h1>
                    <ul class="list-icos">
                        <li>
                            <img src="../images/ico_hospital.png" alt="Hospitalización">
                            <p><strong>Instalaciones <br>de primer nivel</strong> Opciones de corta o larga estancia.</p>
                        </li>
                        <li>
                            <img src="../images/ico_doctor.png" alt="Médico Ortopedista">
                            <p><strong>Equipo multidisciplinario</strong> Expertos en tratamientos quirúrgicos.</p>
                        </li>
                        <li>
                            <img src="../images/ico_anestesia.png" alt="Anestesiología">
                            <p><strong>Equipo de anestesiología</strong> Expertos en procedimientos ortopédicos.</p>
                        </li>
                        <li>
                            <img src="../images/ico_tecnologia.png" alt="tecnología de Punta">
                            <p><strong>Tecnología <br>de punta</strong> Técnicas de vanguardia para  tratamientos quirúrgicos.</p>
                        </li>
                        <li>
                            <img src="../images/ico_attention.png" alt="Atención Personalizada">
                            <p><strong>Atención personalizada</strong></p>
                        </li>
                    </ul>
                   
                    <div class="cont_center">
                        <img src="../images/logo_hospital_tlalpan.png" alt="Hospital Tlalpan">
                        <img src="../images/logo_star_medica.png" alt="Hospital Tlalpan">

                    </div>

                    <div class="block_cta">
                    	<p class="message">Gracias a mi formación especialista y a mi experiencia clínica y quirúrgica la certeza en los diagnósticos es muy alta. Siempre con ayuda de auxiliares diagnósticos de acuerdo a su necesidad ya sea radiografías, ultrasonidos, resonancia magnética.</p>

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
