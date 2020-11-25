<?php

class MvcController{

#LLAMADA A LA PLANTILLA
#---------------------------------------------	
 public function plantilla(){

		include "vista/template.php";
    }

    public function inicio(){

		include "vista/temp.inicio.php";
    }

public function enlacesPaginasController(){

if(isset($_GET["action"])){

$enlacesController = $_GET["action"];
   }
else{
    $enlacesController = "index";
   }
   //   $respuesta = new enlacesPaginas();
   //   $respuesta->enlacesPaginasModel($enlacesController);

   $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
   include $respuesta;
    }


}












