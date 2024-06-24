<?php


require "extensiones/PHPMailer/src/Exception.php";
require "extensiones/PHPMailer/src/PHPMailer.php";
require "extensiones/PHPMailer/src/SMTP.php";

include_once "controladores/plantilla.controlador.php";
include_once "controladores/producto.controlador.php";
include_once "controladores/usuarios.controlador.php";
include_once "modelos/modelo.controlador.php";
include_once "modelos/plantilla.modelo.php";
include_once "modelos/rutas.php";



/* lLAMAMOS EL METODO DE LA PLANTILLA */

$plantilla= new ControladorPlantilla();

$plantilla->plantilla();





?>

