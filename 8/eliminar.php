<?php
require_once("../7/class.php");
$tra=new Trabajo();
$tra->eliminar_visita($_GET["id"]);
?>