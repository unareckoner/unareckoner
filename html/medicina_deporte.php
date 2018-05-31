<!DOCTYPE html>
<html>
    <head>
        <title>Medicina del Deporte</title>
        <?php include 'head.html' ?> 
            
    </head>

    <body class="servicios">
        <?php include 'header.html' ?>
        <main>
			<section>
			    <div class="banner-photos">
			        <div class="cont_banner">
			        	<img src="../images/banner_medicina_deporte.png" alt="Medicina del Deporte / Lesiones Deportivas">
			        </div>
			    </div>
			    <div class="cont_servicios">
			    	<h1>Lesiones deportivas</h1>
                    <ul class="cirugia">
                        <li><p>Tendinitis</p></li>
                        <li><p>Codo de tenista</p></li>
                        <li><p>Codo de golfista</p></li>
                        <li><p>Esguinces</p></li>
                        <li><p>Luxaciones</p></li>
                        <li><p>Bursitis de hombro</p></li>
                        <li><p>Fracturas por fatiga</p></li>
                        <li><p>Fracturas traumáticas</p></li>
                    </ul>

                    <ul class="list_contenido">
                    <h2>Tipos de lesiones deportivas</h2>
                    <li><p><strong>Lesiones deportivas agudas:</strong> Por lo general se relacionan con traumatismos que de acuerdo a su intensidad pueden causar lesiones como abrasiones, heridas, esguinces, rotura de tendones o ligamentos en articulaciones, luxaciones o fracturas que pueden llegar a ser expuestas.</p></li>
                    <li><p><strong>Lesiones deportivas crónicas</strong>: Dentro de las lesiones deportivas crónicas pueden manifestarse inicialmente solo como dolor al final de la práctica deportiva, progresando durante el ejercicio y hasta llegar a la incapacidad en la articulación o extremidad afectada en periodos de tiempo relativamente largos. Entre estas lesiones se encuentra la bursitis de hombro, de codo (codo de tenista, codo de golfista), tendinitis del biceps, pinzamiento subacromial.</p></li>
                    <li><p>Existen otras lesiones deportivas que en su momento fueron agudas pero que al suspender la práctica deportiva o disminuirla se vuelven crónicas y causa de dolor ocasional pero progresivo entre ellas las lesiones meniscales, lesiones de ligamentos cruzados, y roturas de manguito rotador.</p></li>
                    </ul>                    

                    <div class="block_cta">
                    	<p class="message">En la práctica de cualquier deporte se pueden presentar distintos tipos de lesiones, ya sea de manera aguda por traumatismo o crónicas por desgaste y malas técnicas de entrenamiento. En cualquiera de los casos, es muy importante que un especialista de tratamiento oportuno.</p>

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
