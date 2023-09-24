<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

class AjaxProductos
{

    /*=============================================
    Generar codigo a partir de id categoria
    =============================================*/
    public $idCategoria;

    public function ajaxCrearCodigoProducto()
    {
        $item = "id_categoria";
        $valor = $this->idCategoria;

        $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);

        echo json_encode($respuesta);
    }

    /*=============================================
    Editar producto
    =============================================*/

    public $idProducto;
  
    public function ajaxEditarProducto(){
  
      $item = "id";
      $valor = $this->idProducto;

      $respuesta = ControladorProductos::ctrMostrarProductos($item,$valor);

      echo json_encode($respuesta);
  
    }


}

/*=============================================
Generar codigo a partir de id categoria
=============================================*/

if (isset($_POST["idCategoria"])) {

    $codigoProducto = new AjaxProductos();
    $codigoProducto->idCategoria = $_POST["idCategoria"];
    $codigoProducto->ajaxCrearCodigoProducto();

}

/*=============================================
Editar producto
=============================================*/ 

if(isset($_POST["idProducto"])){

    $editarProducto = new AjaxProductos();
    $editarProducto -> idProducto = $_POST["idProducto"];
    $editarProducto -> ajaxEditarProducto();
  
  }