<?php

class ControladorServicios{


	/*=============================================
	REGISTRO DE SERVICIOS
	=============================================*/

	static public function ctrRegistrarServicio(){

		if(isset($_POST["nuevoServicio"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoServicio"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaDescripcion"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["nuevoMonto"])){

				$tabla = "servicios";

				$datos = array("servicio" => $_POST["nuevoServicio"],
					           "descripcion" => $_POST["nuevaDescripcion"],
							   "monto" => $_POST["nuevoMonto"],
							   "fecha_vencimiento"=>$_POST["nuevaFechaVencimiento"]);
					        

				$respuesta = ModeloServicios::mdlIngresarServicios($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El Pago ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "pagos-servicios";

						}

					});
				

					</script>';


				}	


			}else{

				echo '<script>

					swal({

						type: "error",
						title: "¡El Pago no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "pagos-servicios";

						}

					});
				

				</script>';

			}


		}


	}

	/*=============================================
	MOSTRAR SERVICIOS
	=============================================*/

	static public function ctrMostrarServicios($item, $valor){

		$tabla = "servicios";

		$respuesta = ModeloServicios::MdlMostrarServicios($tabla, $item, $valor);

		return $respuesta;
	}

	/*=============================================
	EDITAR SERVICIOS
	=============================================*/

	static public function ctrEditarServicios(){

		if(isset($_POST["editarServicio"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarServicio"]) &&
			preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarDescripcion"]) &&
			preg_match('/^[0-9.]+$/', $_POST["editarMonto"])){

		

				$tabla = "servicios";


				$datos = array("servicio" => $_POST["editarServicio"],
							   "descripcion" => $_POST["editarDescripcion"],
							   "monto" => $_POST["editarMonto"],
							   "fecha_vencimiento" => $_POST["editarFechaVencimiento"]);

				$respuesta = ModeloServicios::mdlEditarServicios($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El Pago ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result) {
									if (result.value) {

									window.location = "pagos-servicios";

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

							window.location = "pagos-servicios";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR SERVICIOS
	=============================================*/

	static public function ctrEliminarServicios(){

		if(isset($_GET["idServicios"])){

			$tabla ="servicios";
			$datos = $_GET["idServicios"];


			$respuesta = ModeloServicios::mdlBorrarServicios($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El pago ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result) {
								if (result.value) {

								window.location = "pagos-servicios";

								}
							})

				</script>';

			}		

		}

	}

	
	/*=============================================
	RANGO FECHAS
	=============================================*/	

	static public function ctrRangoFechasServicios($fechaInicial, $fechaFinal){

		$tabla = "servicios";

		$respuesta = ModeloServicios::mdlRangoFechasServicios($tabla, $fechaInicial, $fechaFinal);

		return $respuesta;
		
	}

	/*=============================================
	DESCARGAR EXCEL
	=============================================*/

	public function ctrDescargarReporteServicios(){

		if(isset($_GET["reporte_servicios"])){

			$tabla = "servicios";

			if(isset($_GET["fechaInicial"]) && isset($_GET["fechaFinal"])){

				$servicios = ModeloServicios::mdlRangoFechasServicios($tabla, $_GET["fechaInicial"], $_GET["fechaFinal"]);

			}else{

				$item = null;
				$valor = null;

				$servicios = ModeloServicios::mdlMostrarServicios($tabla, $item, $valor);

			}


			/*=============================================
			CREAMOS EL ARCHIVO DE EXCEL
			=============================================*/

			$Name = $_GET["reporte_servicios"].'.xls';

			header('Expires: 0');
			header('Cache-control: private');
			header("Content-type: application/vnd.ms-excel"); // Archivo de Excel
			header("Cache-Control: cache, must-revalidate"); 
			header('Content-Description: File Transfer');
			header('Last-Modified: '.date('D, d M Y H:i:s'));
			header("Pragma: public"); 
			header('Content-Disposition:; filename="'.$Name.'"');
			header("Content-Transfer-Encoding: binary");
		
			echo utf8_decode("<table border='0'> 

					<tr> 
					<td style='font-weight:bold; border:1px solid #eee;'>NOMBRE DEL SERVICIO</td> 
					<td style='font-weight:bold; border:1px solid #eee;'>DESCRIPCION</td>
					<td style='font-weight:bold; border:1px solid #eee;'>MONTO</td>
					<td style='font-weight:bold; border:1px solid #eee;'>FECHA DE VENCIMIENTO</td>
					<td style='font-weight:bold; border:1px solid #eee;'>FECHA DE PAGO</td>
	
					</tr>");

			foreach ($servicios as $row => $item){

				$servicios = ControladorServicios::ctrMostrarServicios("id", $item["id"]);
		
			 echo utf8_decode("<tr>
			 			<td style='border:1px solid #eee;'>".$servicios["servicio"]."</td> 
			 			<td style='border:1px solid #eee;'>".$servicios["descripcion"]."</td>
			 			<td style='border:1px solid #eee;'>".$servicios["monto"]."</td>
						 <td style='border:1px solid #eee;'>".$servicios["fecha_vencimiento"]."</td>
						 <td style='border:1px solid #eee;'>".$servicios["fecha"]."</td>
			 			<td style='border:1px solid #eee;'>");
			}


			echo "</table>";

		}

	}

}





