<?php

	/*Your Website Email*/
	$your_email = "info@gestoriav.com";
	//$your_email = "adrian@develupme.com";

	/*Form Post*/
	$name			= $_POST['name'];
	$email 			= $_POST['email'];
	$phone			= $_POST['phone'];
	$comments  		= $_POST['comments'];

	$msj = "------------------------------------------------------------ \r\n <br />";
	$msj .= "Haz recibido un comentario de un usuario de la página web  \r\n <br />";
	$msj .= "----------------------------------------------------------- \r\n <br /><br /><br />";
	$msj .= "Nombre: ".$name."\r\n <br />";
	$msj .= "Correo ".$email."\r\n <br />";
	$msj .= "Teléfono: ".$phone."\r\n <br />";
	$msj .= "Mensaje: ".$comments."\r\n <br />";
	$msj .= "Mensaje recibido el : ".date('d/F/Y')." A las ".date('H:i')."\r\n <br />";
	$msj .= "----------------------------------------------------------- \r\n <br />";


		/*Check the free space*/
		if(!$name ||  !$phone ){

        echo '<div class="alert alert-danger">Es importante que sepamos tu nombre y telefono</div>';


		}else{

		$headers   = array();
		$headers[] = "MIME-Version: 1.0";
		$headers[] = "Content-type: text/html; charset=utf-8";
		$headers[] = "From: $name <$email>"; // Sender name and email address
		$headers[] = "Reply-To: Recipient Name <$your_email>"; // Your site e-mail address
		$headers[] = "Subject: Mesaje enviado desde la página web";
		$headers[] = "X-Mailer: PHP/".phpversion();

		mail($your_email, "Mesaje enviado desde la página web", $msj, implode("\r\n", $headers));


        echo '<div class="alert alert-success">Mensaje recibido, en breve nos comunicaremos con usted</div>';

			}

	}else{
        echo '<div class="alert alert-danger">Algo ha salido mal, por favor reintenta</div>';
		}
		
?>