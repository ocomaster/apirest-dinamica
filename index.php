<?php 
/*=======================
    Mostrar Errores
=======================*/

ini_set('display_errors', 1);
ini_set("log_errors", 1);
ini_set("error_log", "C://xamp/htdocs/apirest-dinamica/php_error_log");


/*=======================
   Requerimientos
=======================*/

require_once("controllers/routes.controller.php");
//Para instanciar en index la clase llamda RoutesController, y asi se ejecuta el metodo

$index = new RoutesController();
$index->index();