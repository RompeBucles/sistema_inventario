<?php

require_once "../controladores/eliminados.controlador.php";
require_once "../modelos/eliminados.modelo.php";

class AjaxUsuariosEliminados{

	/*=============================================
	EDITAR DEVOLUCION
	=============================================*/	

	public $idUsuariosE;

	public function ajaxEditarUsuariosEliminados(){

		$item = "id";
		$valor = $this->idUsuariosE;

		$respuesta = ControladorUsuariosEliminados::ctrMostrarUsuariosEliminados($item, $valor);

		echo json_encode($respuesta);

	}


}

/*=============================================
EDITAR DEVOLUCIONES
=============================================*/
if(isset($_POST["idUsuariosE"])){

	$editar = new AjaxUsuariosEliminados();
	$editar -> idUsuariosE = $_POST["idUsuariosE"];
	$editar -> ajaxEditarUsuariosEliminados();

}

