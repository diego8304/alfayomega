<?php

class Usuarios{


	/* Metodo para crear el Usuario administrativos  */

	public function ctrCrearUsuario(){


	if(isset($_POST["usuario"])){


		if(preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"]) && 
			preg_match('/^[a-zA-Z0-9]+$/', $_POST["password"])) {

				$usuario=$_POST["usuario"];
				$nombre=$_POST["nombre"];
				$password=$_POST["password"];
				$email=$_POST["email"];

			

			$password_hashed=crypt($_POST['password'],'$1$rasmusle$');

			

			$datos=array("usuario"=>$usuario,
						"nombre"=>$nombre,
						"email"=>$email,
						"password"=>$password_hashed);

			$tabla="usuarios";

			$registrar=Usuario::mdlCrearUsuario($tabla,$datos);

				if($registrar!="error"){


					echo '<script> swal("OK!", "Usuario Creado Correctamente!", "success");

					if ( window.history.replaceState ) {
						window.history.replaceState( null, null, window.location.href );
					} </script>';

					

				}else{


					echo '<script> 

					swal("OK!", "Error al crear el Usuario!", "error");

					if ( window.history.replaceState ) {
						window.history.replaceState( null, null, window.location.href );
					}



					</script>';
					


				}

		
		}


	}

		

}


	/* Metodo para ingresar el login de usuario */


	public function ctrIngresoAdministrador(){


		if(isset($_POST["usuario"])){

			$tabla="usuarios";
			$valor=$_POST["usuario"];
			$password=$_POST["password"];


			$password_hashed= $password; //crypt($_POST['password'],'$1$rasmusle$');


			$respuesta=Usuario::mdlMostrarAdministradores($tabla,$valor);


			if($respuesta["usuario"]==$valor && $respuesta['password']==$password_hashed){


				$_SESSION["validarSesionBackend"]="ok";
				$_SESSION["usuario"]=$respuesta["usuario"];
				$_SESSION["nombre"]=$respuesta["nombre"];

				echo'<script> window.location="principal" </script>';



			}else{


				echo '<script> 

				swal("Error!", "Usuario o Password incorrecto!", "error");



				if ( window.history.replaceState ) {
					window.history.replaceState( null, null, window.location.href );
				}




				</script>';



			}

		}


	}



	/* Metodo para mostrar la lista de usuarios  */


	static public function ctrMostrarUsuarios(){

		$tabla="usuarios";

		$id=null;

		$respuesta=Usuario::mdlMostrarUsuarios($tabla,$id);

		return $respuesta;


	}


	/* Metodo para traer los datos de los usuarios a editar*/

	static public function ctrEditarUsuario($id){

		$tabla="usuarios";

		$respuesta=Usuario::mdlMostrarUsuarios($tabla,$id);

		return $respuesta;



	}


	/* Metodo para actualizar el usuario */

	public function ctrActualizarUsuario(){

		$password;

		if(isset($_POST["nombre"])){

			$tabla="usuarios";
			$usuario=$_POST["usuario"];
			$nombre=$_POST["nombre"];
			$id=$_POST["id"];
			$password=$_POST["password"];


			if(empty($password)){

				$password=null;

			}


			if($password!=null){


				$password_hashed=crypt($password,'$1$rasmusle$');

				$datos=array("usuario"=>$usuario,"nombre"=>$nombre,"password"=>$password_hashed,"id"=>$id);

			}

			$respuesta=Usuario::mdlActualizarUsuario($tabla,$datos);


			if($respuesta=="ok"){

				echo '<script> 


				swal("OK!", "Actualizacion realizada Correctamente!", "success");


				if ( window.history.replaceState ) {
					window.history.replaceState( null, null, window.location.href );
				}


				</script>';


			}else{


				echo '<script> 

				swal("OK!", "Error al actualizar!", "error");

				if ( window.history.replaceState ) {
					window.history.replaceState( null, null, window.location.href );
				}



				</script>';


			}



		}






	}


	/*Eliminar usuarios  */

	static public function ctrEliminarUsuario($id){

		$tabla="usuarios";

		$respuesta=Usuario::mdlEliminarUsuario($tabla,$id);

		return $respuesta;


	}




}









?>