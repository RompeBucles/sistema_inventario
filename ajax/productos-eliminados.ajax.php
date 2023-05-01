<?php

require_once "../controladores/bajas.controlador.php";
require_once "../modelos/bajas.modelo.php";

class AjaxProductosEliminados{

	/*=============================================
	EDITAR DEVOLUCION
	=============================================*/	

	public $idProductosE;

	public function ajaxEditarProductosEliminados(){

		$item = "id";
		$valor = $this->idProductosE;

		$respuesta = ControladorProductosEliminados::ctrMostrarProductosEliminados($item, $valor);

		echo json_encode($respuesta);

	}


}

/*=============================================
EDITAR DEVOLUCIONES
=============================================*/
if(isset($_POST["idProductosE"])){

	$editar = new AjaxProductosEliminados();
	$editar -> idProductosE = $_POST["idProductosE"];
	$editar -> ajaxEditarProductosEliminados();

}

