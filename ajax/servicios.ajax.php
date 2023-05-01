<?php

require_once "../controladores/servicios.controlador.php";
require_once "../modelos/servicios.modelo.php";

class AjaxServicios{

	/*=============================================
	EDITAR DEVOLUCION
	=============================================*/	

	public $idServicios;

	public function ajaxEditarServicios(){

		$item = "id";
		$valor = $this->idServicios;

		$respuesta = ControladorServicios::ctrMostrarServicios($item, $valor);

		echo json_encode($respuesta);

	}



	/*=============================================
	VALIDAR NO REPETIR SERVICIOS
	=============================================*/	

	public $validarServicios;

	public function ajaxValidarServicios(){

		$item = "producto";
		$valor = $this->validarDevolucion;

		$respuesta = ControladorServicios::ctrMostrarServicios($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR SERVICIOS
=============================================*/
if(isset($_POST["idServicios"])){

	$editar = new AjaxServicios();
	$editar -> idServicios = $_POST["idServicios"];
	$editar -> ajaxEditarServicios();

}


/*=============================================
VALIDAR NO REPETIR SERVICIOS
=============================================*/

if(isset( $_POST["validarServicios"])){

	$valServicios = new ajaxEditarServicios();
	$valServicios -> ajaxValidarServicios = $_POST["validarServicios"];
	$valServicios -> ajaxValidarServicios();

}