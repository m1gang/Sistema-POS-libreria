<?php

require_once "conexion.php";

class ModeloUsuarios
{

    /*======================================================================
    // Mostrar usuarios
    //======================================================================*/

    public static function mdlMostrarUsuarios($tabla, $item, $valor)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();

        $stmt = null;
    }

    /*======================================================================
    // Ingresar Usuarios
    //======================================================================*/

    static public function mdlIngresarUsuario($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, usuario, password, perfil) VALUES (:nombre, :usuario, :password, :perfil)");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
        
        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }

        $stmt->close();
        $stmt = null;
    }

}