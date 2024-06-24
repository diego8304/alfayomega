<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/admin.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/banner.controlador.php";
require_once "modelos/rutas.php";
require_once "modelos/conexion.php";
require_once "modelos/admin.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/banner.modelo.php";




$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();




?>