<?php
/**
 *
 */
class MvcController
{
  #Llamada a la plantilla
  public function plantilla()
  {
    include "views/template.php";
  }

  #interaccion del usuario

  public function enlacesPaginasController()
  {
    if (isset($_GET["action"])) {
        $enlacesController=$_GET["action"];
    }
    else {
      $enlacesController="index";
    }
    $respuesta=enlacesPaginas::enlacesPaginasModel($enlacesController);
    include $respuesta;
  }
}

 ?>
