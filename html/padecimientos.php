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
			        	<div class="contain elbow">
						    <button class="pulse-button" onclick="goelbow(); return false;">Dolor de codo</button>
						</div>
						<div class="contain shoulder">
						    <button class="pulse-button" onclick="goshoulder(); return false;">Dolor de hombro</button>
						</div>
						<div class="contain foot">
						    <button class="pulse-button" onclick="gofoot(); return false;">Dolor de pie</button>
						</div>
						<div class="contain knee">
						    <button class="pulse-button" onclick="goknee(); return false;">Dolor de rodilla</button>
						</div>
						<div class="contain wirst">
						    <button class="pulse-button" onclick="gowirst(); return false;">Dolor de muñeca</button>
						</div>
			            <img src="../images/men.png" alt="Padecimientos ortopédicos">
			        </div>
			    </div>
			    <div class="tipo_padecimientos">
			    	<h2>Padecimientos más comunes</h2>
			    	<div id="tab1" class="tabs elbow">
                        <h3 class="accordion">Dolor de codo</h3>
                        <div class="cont_tab panel">
                            <p>La articulación del <strong>codo</strong> se compone del hueso, cartílago, ligamentos y líquidos. Los músculos y los tendones ayudan a que el codo se mueva en su articulación. Cuando alguna de estas estructuras se lastima o se enferma, surgen los problemas en el codo.</p>
                            <p>Hay muchas cosas que pueden ocasionar dolor en el codo. Una causa común es la tendinitis, una inflamación o lesión de los tendones que unen los músculos al hueso. La tendinitis del codo es una lesión deportiva, con frecuencia por jugar tenis o golf. También puede ocurrir una tendinitis por usar excesivamente el codo.</p>
                            <p>Otras causas de dolor en el codo incluyen:</p>
                        	<ul class="sublist">
                                <li><p><strong>Codo de Tenista (Epicondilitis Lateral)</strong>: Se presenta con dolor en la región lateral del codo y antebrazo, las causas principalmente son laborales y deportivas.</p></li>
                                <li><p><strong>Codo de Golfista (Epicondilitis Medial)</strong>: En el caso del Codo de Golfista el dolor es en la región medial del codo y antebrazo, las causas principalmente son laborales y deportivas.</p></li>
                                <li><p><strong>Bursitis de Codo</strong>: Es la inflamación de la bolsa que cubre la articulación del codo. Sus síntomas son dolor y aumento de volumen en la región del codo y su causa es traumática.</p></li>
                            </ul>
                        </div>
                    </div>
                    <div id="tab2" class="tabs shoulder">
                        <h3 class="accordion">Dolor de hombro</h3>
                        <div class="cont_tab panel">
                            <p>La articulación del <strong>hombro</strong> se compone de tres huesos: la clavícula, el omóplato y el húmero. Sus hombros son las articulaciones más móviles de su cuerpo. También puede ser inestable debido a que la bola de la parte superior del brazo es más grande que la cavidad del hombro que la sujeta. Para permanecer en una posición estable o normal, el hombro debe estar anclado por músculos, tendones y ligamentos.</p>
                            <p>Debido a que su hombro puede ser inestable, puede lesionarse fácilmente. Los problemas comunes incluyen:</p>
                        	<ul class="sublist">
                                <li><p><strong>Pinzamiento Subacromial</strong>: Es un problema que su sintomatología es principalmente dolor en región anterior y lateral del brazo, que se aumenta con algunos de los movimientos del hombro. Sus causas pueden ser degenerativas, laborales, deportivas y traumáticas. Se da el mayor porcentaje de esta lesión del hombro en mujeres.</p></li>
                                <li><p><strong>Bursitis</strong>: Es la inflamación de la capa que cubre el músculo llamado mango rotador, es el primer grado del pinzamiento subacromial, sus causas pueden ser degenerativas o darse por lesiones traumáticas o deportivas y laborales.</p></li>
                                <li><p><strong>Lesión del Mango Rotador</strong>: La lesión del mango es el grado final del pinzamiento subacromial, el cual consiste en la rotura del músculo que principalmente otorga movilidad al hombro. Este puede ser por lesiones traumáticas o degenerativas.</p></li>
                                <li><p><strong>Luxaciones Acromioclavicular</strong>: Esta lesión es causada por lesiones traumáticas, y se puede dividir en 3 grados. El dolor es característico en región superior del hombro y afecta la movilidad del hombro.</p></li>
                                <li><p><strong>Tendinitis Bicipital</strong>: La tendinitis bicipital provoca dolor en la región anterior del hombro, principalmente su lesión se da por actividades deportivas, laborales y lesión traumática.</p></li>
                                <li><p><strong>Luxación Glenohumeral</strong>: La lesión es causada como lesión traumática. Puede causar lesiones en el labrum glenohumeral llamada lesión de Bankart y lesión de la cabeza humeral llamada lesión de Hill Sachs. Esta lesión del hombro se presenta principalmente en hombres.</p></li>
                                <li><p><strong>Artrosis Glenohumeral</strong>: Principalmente es un dolor intenso e incapacidad funcional del hombro. Causada por degenerativo, traumático.</p></li>
                            </ul>
                        </div>
                    </div>
                    <div id="tab3" class="tabs foot">
                        <h3 class="accordion">Dolor de pie</h3>
                        <div class="cont_tab panel">
                        	<p>El hueso del <strong>tobillo</strong> (astrágalo) y el extremo inferior de los dos huesos de la pierna forman la articulación del tobillo. Los ligamentos, que conectan los huesos entre sí, estabilizan y dan soporte a la articulación. Los músculos y tendones lo mueven.</p>
                            <p>Los problemas más comunes del tobillo son las <strong>torceduras</strong> y las <strong>fracturas</strong>. Una torcedura o esguince es una lesión en los ligamentos. Los <strong>esguinces</strong> pueden tardar algunas semanas o hasta varios meses en sanar completamente. Una fractura es una rotura de un hueso. También pueden ocurrir lesiones en otras partes del tobillo como los tendones, que unen los músculos al hueso, y los cartílagos, que amortiguan los roces e impactos de las articulaciones. Las torceduras y las fracturas del tobillo son lesiones deportivas comunes.</p>
                        </div>
                    </div>
                    <div id="tab4" class="tabs knee">
                        <h3 class="accordion">Dolor de rodilla</h3>
                        <div class="cont_tab panel">
                        	<p>La <strong>rodilla</strong> es una articulación compleja, es la más grande del cuerpo y la que soporta más peso estando de pie. Está formada por fémur distal, tibia proximal y la rótula, menisco externo e interno, además de estructuras como ligamentos lateral externo, lateral interno, ligamentos cruzado anterior y posterior que dan estabilidad a la articulación.</p>
                            <p>La rodilla está expuesta a múltiples lesiones traumáticas ya sea por actividad deportiva o laboral.</p>
                            <p>Entre las lesiones puede haber <strong>fracturas por caída de altura o traumatismo directo, luxaciones, heridas, roturas ligamentarias o meniscales</strong>, las lesiones pueden ser únicas o múltiples y causaran desde una discapacidad parcial con dolor e inflamación hasta la deformidad o incapacidad para la función de la misma, la atención de este tipo de lesiones debe ser urgente para minimizar las secuelas y recuperar la función.</p>
                        </div>
                    </div>
                    <div id="tab5" class="tabs wirst">
                        <h3 class="accordion">Dolor de muñeca</h3>
                        <div class="cont_tab panel">
                        	<p>La <strong>muñeca</strong> está formada por ocho huesos pequeños conocidos como carpianos. Éstos forman un conducto que corre a través de su muñeca. Ese conducto, llamado túnel del carpo, contiene tendones y un nervio en el interior. Está cubierto por un ligamento, que lo sostiene en su lugar.</p> 
                            <p>El dolor en la muñeca es común. Los movimientos repetidos pueden lesionar la muñeca. Las actividades cotidianas como trabajar con una computadora, deportes con raqueta o coser, pueden causar dolor e inclusive el síndrome del túnel del carpo. El dolor en la muñeca con hematomas e inflamación puede ser signo de un traumatismo. Los signos de una posible fractura incluyen tanto la deformación de la articulación, como la incapacidad para mover la muñeca. Algunas fracturas de la muñeca son a consecuencia de la osteoporosis.</p>
                            <p>Otras causas comunes de dolor son:</p>
                            <ul class="sublist">
                                <li><p><strong>Torceduras y distensiones</strong></p></li>
                                <li><p><strong>Tendinitis</strong></p></li>
                                <li><p><strong>Artritis</strong></p></li>
                                <li><p><strong>Gota y pseudogota</strong></p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="block_cta">
                    	<p class="message">Si identificas alguno de estos síntomas, o presentas cualquier tipo de molestia adicional, realiza hoy mismo tu cita para una Consulta de Valoración completa. <strong>Tu salud es lo más importante</strong>.</p>

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
