<?php 

class EnlacesPaginas{

	public static function enlacesPaginasModel($enlacesModel){

		if( //$enlacesModel == "inicio" ||
       $enlacesModel == "laptops" ||
       $enlacesModel == "smartphones" ||
       $enlacesModel == "videojuegos"||
       $enlacesModel == "gadgets"||
       $enlacesModel == "gadgets2"||
       $enlacesModel == "gadgets3"||
       $enlacesModel == "gadgets4"||
       $enlacesModel == "gadgets5") {

           $module = "vista/modulos/" .$enlacesModel. ".php";

           }

           else if($enlacesModel == "index"){

               $module = "vista/modulos/inicio.php";

           } //else if($enlacesModel == "nosotros"){

               //$module = "vista/temp.nos.php";

           //}
                   #Lista blanca de palabras. Todo va a inicio.php
           else {
              
              $module = "vista/modulos/inicio.php";

           }
	
    return $module;

    }
  
}


?>





