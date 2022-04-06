<?php


class ControladorUsuarios{


public function ctrFormularioContactenos(){

		

					/*=============================================
					ENVIO DE CORREO ELECTRONICO 
					=============================================*/


					date_default_timezone_set("America/Bogota");

					$url = Ruta::ctrRuta();	

					
					$mail = new PHPMailer\PHPMailer\PHPMailer(true);

					try{
						$mail->SMTPDebug=0;
						$mail->isSMTP();
						$mail->Host='smtp.hostinger.com';
						$mail->SMTPAuth=true;
						$mail->Username='servicioalcliente@enchapesyacabadosalfayomega.com';
						$mail->Password='Qaz098*in';
						$mail->SMTPSecure='tls';
						$mail->Port=587;

						$mail->CharSet = 'UTF-8';
						$mail->setFrom('servicioalcliente@enchapesyacabadosalfayomega.com', 'Consulta de Usuario');
						$mail->addAddress("servicioalcliente@enchapesyacabadosalfayomega.com", 'Informativo');
						$mail->isHTML(true);
						$mail->Subject = "Ha recibido una consulta del sitio web";
						$mail->Body='<div style="width:100%; background:#eee; position:relative; font-family:sans-serif; padding-bottom:40px">

						<div style="position:relative; margin:auto; width:600px; background:white; padding-bottom:20px">

						<center>

						<img style="padding-top:20px; width:15%" src="https://enchapesyacabadosalfayomega.com/almacen/LogoF.png">


						<h3 style="font-weight:100; color:#999;">HA RECIBIDO UNA CONSULTA</h3>

						<hr style="width:80%; border:1px solid #ccc">

						<h4 style="font-weight:100; color:#999; padding:0px 20px; text-transform:uppercase">'.$_POST['nombreContactenos'].'</h4>

						<h4 style="font-weight:100; color:#999; padding:0px 20px;">De: '.$_POST['emailContactenos'].'</h4>

						<h4 style="font-weight:100; color:#999; padding:0px 20px">'.$_POST['mensajeContactenos'].'</h4>

						<h4 style="font-weight:100; color:#999; padding:0px 20px">'.$_POST['telefonoContactenos'].'</h4>

						<hr style="width:80%; border:1px solid #ccc">

						</center>

						</div>

						</div>';

						 $mail->Send();

						 if($mail==true){


							echo '<script>
		

								swal("Mensaje Enviado!", "Mensaje Enviado Correctamente!", "success");


								if ( window.history.replaceState ) {
									window.history.replaceState( null, null, window.location.href );
								
								}


								window.location = "inicio"

								</script>';





						 }
					

					}catch (Exception $e){


						echo 'Hubo un Error al enviar le mensaje', $mail->ErrorInfo;

					}

		


				


				
				
		
	
	}




	
}


?>





