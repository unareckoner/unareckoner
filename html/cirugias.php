<!DOCTYPE html>
<html>
    <head>
        <title>Cirugias</title>
        <?php include 'head.html' ?> 
            
    </head>

    <body class="servicios">
        <?php include 'header.html' ?>
        <main>
			<section>
			    <div class="banner-photos">
			        <div class="cont_banner">
			        	<img src="../images/banner_cirugias1.png" alt="Experiencia">
			        </div>
			    </div>
			    <div class="cont_servicios">
			    	<h1>Cirugías</h1>
                    <ul class="cirugia">
                        <li><p>Prótesis total de rodilla y cadera.</p></li>
                        <li><p>Artroscopia de hombro, rodilla y tobillo.</p></li>
                        <li><p>Reconstrucción de ligamento cruzado anterior y posterior de rodilla.</p></li>
                        <li><p>Reconstrucción meniscal y ligamentos colaterales de rodilla.</p></li>
                        <li><p>Reconstrucción de lesiones condrales / cartílago de rodilla.</p></li>
                        <li><p>Reconstrucción de mango rotator de hombro.</p></li>
                        <li><p>Reconstrucción de luxaciones y fracturas de hombro.</p></li>
                        <li><p>Reconstrucción de lesiones de tobillo.</p></li>
                        <li><p>Reconstrucción de fracturas complejas de clavícula, hombro, codo, muñeca, cadera, rodilla, tobillo y pie.</p></li>
                        <li><p>Cirugía mínimamente invasiva de hombro, tibia y pie.</p></li>
                        <li><p>Reducción abierta / cerrada de fracturas de extremidad torácica.</p></li>
                        <li><p>Reducción abierta / cerrada de fracturas de extremidad pélvica.</p></li>
                    </ul>
                    <ul class="list_contenido">
                        <h2>¿Qué tipo de lesiones pueden ser corregidas con una cirugía?</h2>
                        <li>
                            <h3>Cirugía de hombro</h3>
                            <p>Los padecimientos que requieren de una intervención quirúrgica en hombro son muy variados y pueden incluir:</p>
                            <ol>
                                <li>Cirugía de hombro para la estabilización de una fractura.</li>
                                <li>Cirugía de hombro para la reducción de una luxación.</li>
                                <li>Cirugía de hombro para la reparación o reemplazo de una estructura ligamentaria.</li>
                                <li>Cirugía de hombro para lesiones al cartílago.</li>
                                <li>Cirugía de hombro para el reemplazo total de la articulación o cambio de una prótesis.</li>
                            </ol>
                        </li>
                        <li>
                            <h3>Cirugía de rodilla</h3>
                            <p>Los padecimientos que requieren de una intervención quirúrgica o cirugía de rodilla son muy variados, por ejemplo:<p>
                            <ol>
                                <li>Cirugía de rodilla para la estabilización de una fractura.</li>
                                <li>Cirugía de rodilla para la reducción de una luxación.</li>
                                <li>Cirugía de rodilla para la reparación o reemplazo de una estructura ligamentaria.</li>
                                <li>Cirugía de rodilla para reparación meniscos.</li>
                                <li>Cirugía de rodilla para lesiones al cartílago.</li>
                                <li>Cirugía de rodilla para  el reemplazo total de la articulación e incluso el recambio de una prótesis de rodilla.</li>
                            </ol>
                        </li>
                    </ul>

                    

                    <div class="block_cta">
                    	<p class="message">Valoro de forma integral al paciente, desde sus antecedentes de enfermedades previas, hasta la convivencia interfamiliar, para encontrar en conjunto médico-paciente el tratamiento más adecuado para su enfermedad o lesión ortopédica.</p>

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
