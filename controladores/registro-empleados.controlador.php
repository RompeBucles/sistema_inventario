<?php

class ControladorEmpleado{

	/*=============================================
	CREAR EMPLEADOS
	=============================================*/

	static public function ctrCrearEmpleado(){

		if(isset($_POST["nuevoEmpleado"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoEmpleado"])){

				$tabla = "empleados";

				$datos = $_POST["nuevoEmpleado"];

				$respuesta = ModeloEmpleado::mdlIngresarEmpleado($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El empleado ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "registro-empleados";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El registro no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "registro-empleados";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	MOSTRAR CATEGORIAS
	=============================================*/

	static public function ctrMostrarEmpleado($item, $valor){

		$tabla = "empleados";

		$respuesta = ModeloEmpleado::mdlMostrarEmpleado($tabla, $item, $valor);

		return $respuesta;
	
	}

	/*=============================================
	EDITAR CATEGORIA
	=============================================*/

	static public function ctrEditarEmpleado(){

		if(isset($_POST["editarEmpleado"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarEmpleado"])){

				$tabla = "empleados";

				$datos = array("empleado"=>$_POST["editarEmpleado"],
							   "id"=>$_POST["idEmpleado"]);

				$respuesta = ModeloEmpleado::mdlEditarEmpleado($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El registro ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "registro-empleados";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El registro no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "registro-empleados";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR CATEGORIA
	=============================================*/

	static public function ctrBorrarEmpleado(){

		if(isset($_GET["idEmpleado"])){

			$tabla ="empleados";
			$datos = $_GET["idEmpleado"];

			$respuesta = ModeloEmpleado::mdlBorrarEmpleado($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "El registro ha sido borrado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "registro-empleados";

									}
								})

					</script>';
			}
		}
		
	}
}
