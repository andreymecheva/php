<?php
require_once("../7/class.php");
//print_r($_POST);
$tra=new Trabajo();
$tra->add_visitas($_POST["nom"],$_POST["texto"]);
?>