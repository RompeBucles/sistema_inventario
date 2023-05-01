<?php

require_once "../../controladores/servicios.controlador.php";
require_once "../../modelos/servicios.modelo.php";


$reporte = new ControladorServicios();
$reporte -> ctrDescargarReporteServicios();