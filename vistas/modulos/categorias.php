<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Administrar categorías
    </h1>
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-home"></i>Inicio</a></li>
      <li class="active"><i class="fa fa-user-plus"></i> Administrar categorías</li>
    </ol>
  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">
          Agregar categoría
        </button>

      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

          <thead>

            <tr>
              <th width="10px">#</th>
              <th>Categoria</th>
              <th>Acciones</th>
            </tr>
          </thead>

          <tbody>
            <tr>

              <td>1</td>

              <td>Accesorios</td>

              <td>
                <div class="btn-group">

                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>
              </td>

            </tr>

            <tr>

              <td>2</td>

              <td>Oficina</td>

              <td>
                <div class="btn-group">

                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>
              </td>

            </tr>

            <tr>

              <td>3</td>

              <td>Servicios</td>

              <td>
                <div class="btn-group">

                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>
              </td>

            </tr>

          </tbody>

        </table>

      </div>

    </div>

  </section>

</div>

<!--======================================================================
// Modal agregar usuario
//======================================================================-->

<div id="modalAgregarCategoria" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">
        <!--======================================================================
      // Cabeza del modal
      //======================================================================-->

        <div class="modal-header" style="background:#1f2020;color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar categoría</h4>

        </div>

        <!--======================================================================
      // Cuerpo del modal
      //======================================================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- Entrada para el nombre -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-sitemap"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaCategoría" placeholder="Ingresar categoría"
                  required>

              </div>

            </div>

          </div>

        </div>

        <!--======================================================================
      // Pie de página del modal
      //======================================================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar categoría</button>

        </div>

      </form>

    </div>

  </div>
</div>