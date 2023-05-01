<?php

class ControladorEmpleado{

	/*=============================================
	CREAR empleado
	=============================================*/

	static public function ctrCrearEmpleado(){

		if(isset($_POST["nuevoEmpleado"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoEmpleado"]) &&
			   
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevoEmail"]) && 
			   preg_match('/^[()\-0-9 ]+$/', $_POST["nuevoTelefono"]) && 
			   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["nuevaDireccion"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoCargo"]) &&
			   preg_match('/^[()\-0-9 ]+$/', $_POST["nuevoSueldo"])){

			   	$tabla = "empleado";

			   	$datos = array("nombre"=>$_POST["nuevoEmpleado"],				           
					           "email"=>$_POST["nuevoEmail"],
					           "telefono"=>$_POST["nuevoTelefono"],
					           "direccion"=>$_POST["nuevaDireccion"],
					           "fecha_nacimiento"=>$_POST["nuevaFechaNacimiento"],
							   "cargo"=>$_POST["nuevoCargo"],
							   "sueldo"=>$_POST["nuevoSueldo"]);

			   	$respuesta = ModeloEmpleado::mdlIngresarEmpleado($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El Empleado ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "empleado";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El Empleado no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "empleado";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	MOSTRAR Empleado
	=============================================*/

	static public function ctrMostrarEmpleado($item, $valor){

		$tabla = "empleado";

		$respuesta = ModeloEmpleado::mdlMostrarEmpleado($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR Empleado
	=============================================*/

	static public function ctrEditarEmpleado(){

		if(isset($_POST["editarEmpleado"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarEmpleado"]) &&
			   
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["editarEmail"]) && 
			   preg_match('/^[()\-0-9 ]+$/', $_POST["editarTelefono"]) && 
			   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarDireccion"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCargo"]) &&
			   preg_match('/^[()\-0-9 ]+$/', $_POST["editarSueldo"])){ 

			   	$tabla = "empleado";

			   	$datos = array("id"=>$_POST["idEmpleado"],
			   				   "nombre"=>$_POST["editarEmpleado"],
					           
					           "email"=>$_POST["editarEmail"],
					           "telefono"=>$_POST["editarTelefono"],
					           "direccion"=>$_POST["editarDireccion"],
					           "fecha_nacimiento"=>$_POST["editarFechaNacimiento"],
							   "cargo"=>$_POST["editarCargo"],
							   "sueldo"=>$_POST["editarSueldo"]);

			   	$respuesta = ModeloEmpleado::mdlEditarEmpleado($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El Empleado ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "empleado";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El empleado no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "empleado";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	ELIMINAR Empleado
	=============================================*/

	static public function ctrEliminarEmpleado(){

		if(isset($_GET["idEmpleado"])){

			$tabla ="empleado";
			$datos = $_GET["idEmpleado"];

			$respuesta = ModeloEmpleado::mdlEliminarEmpleado($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El empleado ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result){
								if (result.value) {

								window.location = "empleado";

								}
							})

				</script>';

			}		

		}

	}

}

