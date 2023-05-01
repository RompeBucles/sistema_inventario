<?php

class ControladorProductosEliminados{


	

	/*=============================================
	MOSTRAR USUARIO
	=============================================*/

	static public function ctrMostrarProductosEliminados($item, $valor){

		$tabla = "producto_eliminado";

		$respuesta = ModeloProductosEliminados::MdlMostrarProductosEliminados($tabla, $item, $valor);

		return $respuesta;
	}

	/*=============================================
	EDITAR USUARIO
	=============================================*/

	static public function ctrEditarProductosEliminados(){

		if(isset($_POST["editarInformacion"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarInformacion"]) &&
			preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarMotivo"])){

				
				$tabla = "producto_eliminado";


				$datos = array( "id"=>$_POST["idProductosE"],
				                "informacion" => $_POST["editarInformacion"],
							   "motivo" => $_POST["editarMotivo"]);

				$respuesta = ModeloProductosEliminados::mdlEditarProductosEliminados($tabla, $datos);
				
				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El Registro ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result) {
									if (result.value) {

									window.location = "productos-eliminados";

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

							window.location = "productos-eliminados";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR USUARIO
	=============================================*/

	static public function ctrBorrarProductosEliminados(){

		if(isset($_GET["idProductosE"])){

			$tabla ="producto_eliminado";
			$datos = $_GET["idProductosE"];


			$respuesta = ModeloProductosEliminados::mdlBorrarProductosEliminados($tabla, $datos);

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

								window.location = "productos-eliminados";

								}
							})

				</script>';

			}		

		}

	}


}
	


