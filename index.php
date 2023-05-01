<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
/*require_once "controladores/registro-empleados.controlador.php";*/
require_once "controladores/empleado.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/ventas.controlador.php";
require_once "controladores/devolucion.controlador.php";
require_once "controladores/servicios.controlador.php";
require_once "controladores/eliminados.controlador.php";
require_once "controladores/bajas.controlador.php";

require_once "modelos/usuarios.modelo.php";
/*require_once "modelos/registro-empleados.modelo.php";*/
require_once "modelos/empleado.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/ventas.modelo.php";
require_once "extensiones/vendor/autoload.php";
require_once "modelos/devolucion.modelo.php";
require_once "modelos/servicios.modelo.php";
require_once "modelos/eliminados.modelo.php";
require_once "modelos/bajas.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();