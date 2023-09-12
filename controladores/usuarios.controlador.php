<?php

class ControladorUsuarios
{

    /*======================================================================
    // Menu lateral
    //======================================================================*/

    static public function ctrIngresoUsuario()
    {
        if (isset($_POST["ingUsuario"]) && isset($_POST["ingPassword"])) {
            if (
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])
            ) {

                $tabla = "usuarios";

                $item = "usuario";

                $valor = $_POST["ingUsuario"];

                $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

                if ($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $_POST["ingPassword"]) {

                    $_SESSION["iniciarSesion"] = "ok";

                    echo '<script>

                        window.location = "inicio";
                        
                    </script>';

                } else {

                    echo '<br><div class="alert alert-danger">Error al ingresar, vueleve a intentarlo</div>';

                }

            }
        }
    }
    /*======================================================================
    // Registro de usuario
    //======================================================================*/

    static public function ctrCrearUsuario()
    {

        if (isset($_POST["nuevoUsuario"])) {

            if (
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/',
                    $_POST["nuevoNombre"]) &&
                preg_match('/^[a-zA-Z0-9]+$/',
                    $_POST["nuevoUsuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/',
                    $_POST["nuevoPassword"])
            ) {


                $tabla = "usuarios";

                $datos = array("nombre" => $_POST["nuevoNombre"],
                "usuario" => $_POST["nuevoUsuario"],
                "password" => $_POST["nuevoPassword"],
                "perfil" => $_POST["nuevoPerfil"]);

                $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla,$datos);

                if ($respuesta == "ok") {

                    echo '<script>
                
                    swal({
                        type:"success",
                        title:"El usuario ha sido guardado correctamente",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
    
                    }).then((result)=>{
    
                        if(resultado.value){
                            
                            window.location = "ususarios";
    
                        }
    
                    });
                   
                    </script>';
                }


            } else {

                echo '<script>
                
                swal({
                    type:"error",
                    title:"¡El usuario no puede ir vacío o llevar caracteres especiales",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar",
                    closeOnConfirm: false

                }).then((result)=>{

                    if(resultado.value){
                        
                        window.location = "ususarios";

                    }

                });
               
                </script>';
            }
        }
    }
}