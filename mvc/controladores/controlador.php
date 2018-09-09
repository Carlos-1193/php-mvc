<?php
    #llamada a la plantilla
    #-------------------------------
class MvcController{
   static public function plantilla(){
        include "vistas/plantilla.php";
    }

    static public function geturlControlador(){
        if (isset($_GET["load"])) {
            $urlControlador = $_GET["load"];
        }else{
            $urlControlador = "inicio";
        }
       
        $res =  MvcModel::geturlModelo($urlControlador);
        include $res;

        
    }
}

?>