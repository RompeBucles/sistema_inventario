<?php

use Mike42\Escpos\Printer;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
class ControladorDevolucion{


	/*=============================================
	MOSTRAR USUARIO
	=============================================*/

	static public function ctrMostrarDevolucion($item, $valor){

		$tabla = "devoluciones";

		$respuesta = ModeloDevolucion::MdlMostrarDevolucion($tabla, $item, $valor);

		return $respuesta;
	}

	/*=============================================
	EDITAR USUARIO
	=============================================*/

	static public function ctrEditarDevolucion(){

		if(isset($_POST["editarMotivos"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarMotivos"]) &&
			preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarEstado"])){

			

				$tabla = "devoluciones";


				$datos = array("id" => $_POST["idDevolucion"],
							   "motivos" => $_POST["editarMotivos"],
							   "estado" => $_POST["editarEstado"]);

				$respuesta = ModeloDevolucion::mdlEditarDevolucion($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El Registro ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result) {
									if (result.value) {

									window.location = "devolucion";

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

							window.location = "devolucion";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR USUARIO
	=============================================*/

	static public function ctrBorrarDevolucion(){

		if(isset($_GET["idDevolucion"])){

			$tabla ="devoluciones";
			$datos = $_GET["idDevolucion"];

			$respuesta = ModeloDevolucion::mdlBorrarDevolucion($tabla, $datos);

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

								window.location = "devolucion";

								}
							})

				</script>';

			}		

		}

	}


}
	


