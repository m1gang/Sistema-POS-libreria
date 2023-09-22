<?php

class ControladorProductos{

    /*======================================================================
    // Mostrar productos
    //======================================================================*/
    
    static public function ctrMostrarProductos($item, $valor){

        $tabla = "productos";

        $respuesta = ModeloProductos::mdlMostrarProductios($tabla, $item, $valor);

        return $respuesta;
    }
    
}