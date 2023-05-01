<?php

require_once "conexion.php";

class ModeloProductosEliminados{

	/*=============================================
	MOSTRAR USUARIOS ELIMINADOS
	=============================================*/

	static public function mdlMostrarProductosEliminados($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		

		$stmt -> close();

		$stmt = null;

	}



	/*=============================================
	EDITAR USUARIO
	=============================================*/

	static public function mdlEditarProductosEliminados($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET informacion = :informacion, motivo = :motivo  WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":informacion", $datos["informacion"], PDO::PARAM_STR);
		$stmt->bindParam(":motivo", $datos["motivo"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

		/*=============================================
	ACTUALIZAR EMPLEADO
	=============================================*/

	static public function mdlActualizarProductosEliminados($tabla, $item1, $valor1, $valor){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE id = :id");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":id", $valor, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	BORRAR USUARIO
	=============================================*/

	static public function mdlBorrarProductosEliminados($tabla, $datos){ 

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;


	}

}