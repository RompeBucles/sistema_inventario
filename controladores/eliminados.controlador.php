<?php

class ControladorUsuariosEliminados{


	

	/*=============================================
	MOSTRAR USUARIO
	=============================================*/

	static public function ctrMostrarUsuariosEliminados($item, $valor){

		$tabla = "usuario_eliminado";

		$respuesta = ModeloUsuariosEliminados::MdlMostrarUsuariosEliminados($tabla, $item, $valor);

		return $respuesta;
	}

	/*=============================================
	EDITAR USUARIO
	=============================================*/

	static public function ctrEditarUsuariosEliminados(){

		if(isset($_POST["editarDescripcion"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarDescripcion"]) &&
			preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarMotivo"])){

				
				$tabla = "usuario_eliminado";


				$datos = array( "id"=>$_POST["idUsuariosE"],
				                "descripcion" => $_POST["editarDescripcion"],
							   "motivo" => $_POST["editarMotivo"]
							   );

				$respuesta = ModeloUsuariosEliminados::mdlEditarUsuariosEliminados($tabla, $datos);
				
				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El Registro ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result) {
									if (result.value) {

									window.location = "usuarios-eliminados";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El campo no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result) {
							if (result.value) {

							window.location = "usuarios-eliminados";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR USUARIO
	=============================================*/

	static public function ctrBorrarUsuariosEliminados(){

		if(isset($_GET["idUsuariosE"])){

			$tabla ="usuario_eliminado";
			$datos = $_GET["idUsuariosE"];


			$respuesta = ModeloUsuariosEliminados::mdlBorrarUsuariosEliminados($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El registro ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result) {
								if (result.value) {

								window.location = "usuarios-eliminados";

								}
							})

				</script>';

			}		

		}

	}


}
	


