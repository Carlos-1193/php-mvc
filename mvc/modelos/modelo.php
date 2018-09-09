<?php
 class MvcModel{
 	static public function geturlModelo($urlModelo){
 		if ($urlModelo == "nosotros"
 			|| $urlModelo == "contacto" 
 			|| $urlModelo == "servicios") {

 			$modulo = "vistas/modulos/".$urlModelo.".php";
 			
		 }
		 elseif($urlModelo == "inicio"){
			$modulo = "vistas/modulos/inicio.php";
		 } else{
			$modulo = "vistas/modulos/inicio.php";
		 }
     	
 		return $modulo;
    }

 	}
?>