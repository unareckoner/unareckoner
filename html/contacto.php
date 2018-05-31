<!DOCTYPE html>
<html>
    <head>
        <title>Contacto</title>
        <?php include 'head.html' ?> 
            
    </head>

    <body class="servicios contacto">
        <?php include 'header.html' ?>
        <main>
			<section>
			    <div class="banner-photos">
			        <div class="cont_banner">
			        	<img src="../images/banner_contacto.jpg" alt="Contacto Ortopedia">
			        </div>
			    </div>
			    <div class="cont_servicios contacto">
                    <h1>Contacto</h1>
                    <p class="message">
                        Si requieres más información o tienes alguna duda sobre mis servicios, llena el siguiente formulario y en breve me pondré en contacto contigo.
                    </p>
			    	<form name="contacto" action="send_form_email.php" method="post">
                        <div>
                            <label for="name">Nombre:</label>
                            <input type="text" id="name" />
                        </div>
                        <div>
                            <label for="mail">E-mail:</label>
                            <input type="email" id="mail" />
                        </div>
                        <div>
                            <label for="telephone">Teléfono:</label>
                            <input type="number" id="telephone" />
                        </div>
                        <div>
                            <label for="msg">Mensaje:</label>
                            <textarea id="msg" maxlength="1000" cols="25" rows="6"></textarea>
                        </div>
                        
                        <div class="button">
                            <button class="btn-cta" type="submit">Enviar</button>
                        </div>
                    </form>

                    <div class="block_cta">
                    	<p class="message">Si quieres agendar una consulta de valoración puedes hacerlo ahora mismo.</p>
                    	<button class="btn-cta" onClick="window.open('https://live.vcita.com/site/l3mr675bnttbflne')">Agenda tu consulta</button>
                    </div>
			    </div>    
			</section>
		</main>
        <?php include 'footer.html' ?>
	</body>
</html>
