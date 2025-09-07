<?php

if($_SESSION["perfil"] == "Especial" || $_SESSION["perfil"] == "Vendedor"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Administrar usuarios
    </h1>
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-home"></i>Inicio</a></li>
      <li class="active"><i class="fa fa-user-plus"></i> Administrar Usuarios</li>
    </ol>
  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuarios">
          Agregar usuario
        </button>

      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

          <thead>

            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Usuario</th>
              <th>Foto</th>
              <th>Perfil</th>
              <th>Estado</th>
              <th>Último login</th>
              <th>Acciones</th>
            </tr>
          </thead>


          <tbody>

            <?php
            $item = null;
            $valor = null;

            $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

            foreach ($usuarios as $key => $value) {

              echo '
            <tr>

              <td>' . ($key+1) . '</td>
              <td>' . $value["nombre"] . '</td>
              <td>' . $value["usuario"] . '</td>';

              if ($value["foto"] != "") {

                echo '<td><img src="' . $value["foto"] . '" class="img-thumbnail" width="40px"></td>';

              } else {

                echo '<td><img src="vistas/img/usuarios/default/userDefault.png" class="img-thumbnail" width="40px"></td>';

              }

              echo '<td>' . $value["perfil"] . '</td>';

              if($value["estado"] != 0){

                echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="0">Activado</button></td>';

              }else{

                echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="1">Desactivado</button></td>';

              }  
              
              
              echo '<td>' . $value["ultimo_login"] . '</td>
              <td>
                <div class="btn-group">

                  <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuarios"><i class="fa fa-pencil"></i></button>

                  <button class="btn btn-danger btnEliminarUsuario" idUsuario="'.$value["id"].'" fotoUsuario="'.$value["foto"].'" usuario="'.$value["usuario"].'"><i class="fa fa-times"></i></button>


                </div>
              </td>

            </tr>
            ';
            }

            ?>

          </tbody>

        </table>

      </div>

    </div>

  </section>

</div>

<!--======================================================================
// Modal agregar usuario
//======================================================================-->

<div id="modalAgregarUsuarios" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">
      <!--======================================================================
      // Cabeza del modal
      //======================================================================-->

        <div class="modal-header" style="background:#1f2020;color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar usuario</h4>

        </div>

        <!--======================================================================
      // Cuerpo del modal
      //======================================================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- Entrada para el nombre -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre"
                  required>

              </div>

            </div>

            <!-- Entrada para el usuario -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoUsuario" id="nuevoUsuario" placeholder="Ingresar usuario"
                  required>

              </div>

            </div>

            <!-- Entrada para la contraseña -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                <input type="password" class="form-control input-lg" name="nuevoPassword"
                  placeholder="Ingresar contraseña" required>

              </div>

            </div>

            <!-- Entrada para seleccionar su perfil -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select name="nuevoPerfil" class="form-control input-lg">

                  <option value="">Seleccionar perfil</option>

                  <option value="Administrador">Adminitrador</option>

                  <option value="Especial">Especial</option>

                  <option value="Vendedor">Vendedor</option>

                </select>
              </div>

            </div>

            <!-- Entrada para subir foto -->
            <div class="form-group">

              <div class="panel">Subir Foto</div>

              <input type="file" class="nuevaFoto" name="nuevaFoto">

              <p class="help-block">Peso máximo de la foto 2 mb</p>

              <img src="vistas/img/usuarios/default/userDefault.png" class="img-thumbnail previsualizar" width="100px">

            </div>

          </div>

        </div>

        <!--======================================================================
      // Pie de página del modal
      //======================================================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar usuario</button>

        </div>

        <?php

        $crearUsuario = new ControladorUsuarios();
        $crearUsuario->ctrCrearUsuario();

        ?>

      </form>

    </div>

  </div>
</div>

<!--======================================================================
// Modal editar usuario
//======================================================================-->

<div id="modalEditarUsuarios" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">
      <!--======================================================================
      // Cabeza del modal
      //======================================================================-->

        <div class="modal-header" style="background:#1f2020;color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar usuario</h4>

        </div>

        <!--======================================================================
      // Cuerpo del modal
      //======================================================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- Entrada para el nombre -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" value=""
                  required>

              </div>

            </div>

            <!-- Entrada para el usuario -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                <input type="text" class="form-control input-lg" id="editarUsuario" name="editarUsuario" value=""
                  readonly>

              </div>

            </div>

            <!-- Entrada para la contraseña -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                <input type="password" class="form-control input-lg" name="editarPassword"
                  placeholder="Escriba la nueva contraseña">

                <input type="hidden" id="passwordActual" name="passwordActual">
              </div>

            </div>

            <!-- Entrada para seleccionar su perfil -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select name="editarPerfil" class="form-control input-lg">

                  <option value="" id="editarPerfil"></option>

                  <option value="Administrador">Adminitrador</option>

                  <option value="Especial">Especial</option>

                  <option value="Vendedor">Vendedor</option>

                </select>
              </div>

            </div>

            <!-- Entrada para subir foto -->
            <div class="form-group">

              <div class="panel">Subir Foto</div>

              <input type="file" class="nuevaFoto" name="editarFoto">

              <p class="help-block">Peso máximo de la foto 2 mb</p>

              <img src="vistas/img/usuarios/default/userDefault.png" class="img-thumbnail previsualizar" width="100px">
              
              <input type="hidden" name="fotoActual" id="fotoActual">
            </div>

          </div>

        </div>

        <!--======================================================================
        // Pie de página del modal
        //======================================================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Modificar usuario</button>

        </div>

        <?php

        $editarUsuario = new ControladorUsuarios();
        $editarUsuario->ctrEditarUsuario();

        ?>

      </form>

    </div>

  </div>

</div>

<?php

$borrarUsuario = new ControladorUsuarios();
$borrarUsuario->ctrBorrarUsuario();

?>