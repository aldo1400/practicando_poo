<?php

  #El index:en el mostraremos la salida delas vistas al usuario y tambien a traves de el enviaremos  las distinas direcciones que el usuario envie al controlador

require_once "controllers/controller.php";
require_once "models/model.php";

$mvc=new MvcController();
$mvc->plantilla();

 ?>
