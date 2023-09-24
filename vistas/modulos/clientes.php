<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Administrar clientes

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-home"></i>Inicio</a></li>

      <li class="active"><i class="fa fa-handshake-o"></i> Administrar clientes</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">

          Agregar cliente

        </button>

      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablas">

          <thead>

            <tr>

              <th style="width:10px">#</th>
              <th>Nombre</th>
              <th>DNI</th>
              <th>Email</th>
              <th>Teléfono</th>
              <th>Dirección</th>
              <th>Fecha de nacimiento</th>
              <th>Total de compras</th>
              <th>Ultima compra</th>
              <th>Ingreso al sistema</th>
              <th>Acciones</th>

            </tr>

          </thead>

          <tbody>

            <tr>

              <td>1</td>

              <td>Alexander Gomez Perez</td>

              <td>76449026</td>

              <td>alexander01@gmail.com</td>

              <td>983645788</td>

              <td>Av. La cantuta #180</td>

              <td>Alexander Gomez Perez</td>

              <td>1987-15-11</td>

              <td>2023-09-22 10:39:26</td>

              <td>25</td>

              <td>2023-09-22 10:39:26</td>

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

<!--=====================================
Modal agregar cliente
======================================-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar cliente</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- Entrada para el nombre -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre"
                  required>

              </div>

            </div>

            <!-- Entrada para el DNI -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId"
                  placeholder="Ingresar DNI" required>

              </div>

            </div>

            <!-- Entrada para el email -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <input type="email" min="0" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email"
                  required>

              </div>

            </div>

            <!-- Entrada para el teléfono -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono"
                  data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>

            <!-- Entrada para la direccíon -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección"
                  required>

              </div>

            </div>

            <!-- Entrada para la fecha de nacimiento -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento"
                  placeholder="Ingresar fecha nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cliente</button>

        </div>

      </form>

    </div>

  </div>

</div>