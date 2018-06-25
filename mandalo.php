<?php

	/*Your Website Email*/
	$your_email = "info@ssp-inc.net";
	//$your_email = "adrian@develupme.com";

	/*Form Post*/
	$name			= $_POST['nom'];
	$empresa 		= $_POST['emp'];
	$email 			= $_POST['mail'];
	$tel 			= $_POST['tel'];
	$dir 			= $_POST['dir'];
	$cd 			= $_POST['ciu'];
	$edo 			= $_POST['edo'];
	$zip 			= $_POST['cp'];
	$comments  		= $_POST['msj'];

	$msj = "------------------------------------------------------------ \r\n <br />";
	$msj .= "Haz recibido un comentario de un usuario de la página web  \r\n <br />";
	$msj .= "----------------------------------------------------------- \r\n <br /><br /><br />";
	$msj .= "Nombre: ".$name."\r\n <br />";
	$msj .= "Empresa: ".$empresa."\r\n <br />";
	$msj .= "Correo: ".$email."\r\n <br />";
	$msj .= "Teléfono: ".$tel."\r\n <br />";
	$msj .= "Dirección:  ".$dir."\r\n <br />";
	$msj .= "Ciudad: ".$cd."\r\n <br />";
	$msj .= "Estado: ".$edo."\r\n <br />";
	$msj .= "Cp: ".$zip."\r\n <br />";
	$msj .= "Mensaje: ".$comments."\r\n <br />";
	$msj .= "Mensaje recibido el : ".date('d/F/Y')." A las ".date('H:i')."\r\n <br />";
	$msj .= "----------------------------------------------------------- \r\n <br />";

		$headers   = array();
		$headers[] = "MIME-Version: 1.0";
		$headers[] = "Content-type: text/html; charset=utf-8";
		$headers[] = "From: $name <$email>"; // Sender name and email address
		$headers[] = "Reply-To: Recipient Name <$your_email>"; // Your site e-mail address
		$headers[] = "Subject: Mesaje enviado desde la página web";
		$headers[] = "X-Mailer: PHP/".phpversion();


		/*Check the free space*/
		if(!$name ||  !$tel ){

        echo '<div class="alert alert-danger">Es importante que sepamos tu nombre y telefono</div>';


		}else{


			if (mail($your_email, "Mesaje enviado desde la página web", $msj, implode("\r\n", $headers))) {
			echo '<div class="alert alert-success">Mensaje recibido, en breve nos comunicaremos con usted</div>';
			}else{
	        echo '<div class="alert alert-danger">Algo ha salido mal, por favor reintenta</div>';
			}
	}
?>