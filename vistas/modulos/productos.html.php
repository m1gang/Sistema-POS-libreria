<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Administrar productos
    </h1>
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-home"></i>Inicio</a></li>
      <li class="active"><i class="fa fa-archive"></i> Administrar productos</li>
    </ol>
  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
          Agregar producto
        </button>

      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

          <thead>

            <tr>
              <th>#</th>
              <th>Imagen</th>
              <th>Codigo</th>
              <th>Descripción</th>
              <th>Categoría</th>
              <th>Stock</th>
              <th>Precio de compra</th>
              <th>Precio de venta</th>
              <th>Agregado</th>
              <th>Acciones</th>
            </tr>
          </thead>

          <tbody>
            <tr>

              <td>1</td>
              <td><img src="vistas/img/productos/default/producto-default.png" class="img-thumbnail" width="40px"></td>
              <td>0001PROD</td>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
              <td>Lorem ipsum</td>
              <td>20</td>
              <td>$ 5.00</td>
              <td>$ 10.00</td>
              <td>2023-09-19 09:17:45</td>
              <td>
                <div class="btn-group">

                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>
              </td>

            </tr>

            <tr>

              <td>1</td>
              <td><img src="vistas/img/productos/default/producto-default.png" class="img-thumbnail" width="40px"></td>
              <td>0001PROD</td>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
              <td>Lorem ipsum</td>
              <td>20</td>
              <td>$ 5.00</td>
              <td>$ 10.00</td>
              <td>2023-09-19 09:17:45</td>
              <td>
                <div class="btn-group">

                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>
              </td>

            </tr>

            <tr>

              <td>1</td>
              <td><img src="vistas/img/productos/default/producto-default.png" class="img-thumbnail" width="40px"></td>
              <td>0001PROD</td>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
              <td>Lorem ipsum</td>
              <td>20</td>
              <td>$ 5.00</td>
              <td>$ 10.00</td>
              <td>2023-09-19 09:17:45</td>
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

<div id="modalAgregarProducto" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="fomr" method="post" enctype="multipart/form-data">
        <!--======================================================================
      // Cabeza del modal
      //======================================================================-->

        <div class="modal-header" style="background:#1f2020;color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar prodcuto</h4>

        </div>

        <!--======================================================================
      // Cuerpo del modal
      //======================================================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- Entrada para el codigo -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-barcode"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoCodigo" placeholder="Ingresar código"
                  required>

              </div>

            </div>

            <!-- Entrada para la Descripción -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-commenting"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaDescripcion"
                  placeholder="Ingresar descripción" required>

              </div>

            </div>

            <!-- Entrada para seleccionar categoria -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-sitemap"></i></span>

                <select name="nuevaCategoria" class="form-control input-lg">

                  <option value="">Seleccionar categoria</option>

                  <option value="Accesorios">Accesorios</option>

                  <option value="Oficina">Oficina</option>

                  <option value="Escritura">Escritura</option>

                  <option value="Servicios">Servicios</option>

                </select>
              </div>

            </div>

            <!-- Entrada para el stock -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-cubes"></i></span>

                <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Stock"
                  required>

              </div>

            </div>

            <!-- Entrada para precio compra -->

            <div class="form-group row">

              <div class="col-xs-6">
                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span>

                  <input type="number" class="form-control input-lg" name="nuevoPrecioCompra" min="0"
                    placeholder="Precio de compra" required>

                </div>
              </div>


              <div class="col-xs-6">

                <!-- Entrada para precio venta -->

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span>

                  <input type="number" class="form-control input-lg" name="nuevoPrecioVenta" min="0"
                    placeholder="Precio de venta" required>

                </div>

                <br>

                <!-- Checkbox para porcentaje -->
                <div class="col-xs-6">

                  <div class="form-group">
                    <label>
                      <input type="checkbox" class="flat-red porcentaje" checked>
                      Utilizar porcentaje
                    </label>
                  </div>

                </div>

                <!-- Entrada para porcentaje -->

                <div class="col-xs-6" style="padding:0">

                  <div class="input-group">

                    <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>

                    <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                  </div>

                </div>

              </div>


            </div>

            <!-- Entrada para subir foto -->
            <div class="form-group">

              <div class="panel">Subir Imagen</div>

              <input type="file" id="nuevaImagen" name="nuevaImagen">

              <p class="help-block">Peso máximo de la imagen 20 mb</p>

              <img src="vistas/img/productos/default/producto-default.png" class="img-thumbnail" width="100px">

            </div>

          </div>

        </div>

        <!--======================================================================
      // Pie de página del modal
      //======================================================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar producto</button>

        </div>

      </form>

    </div>

  </div>
</div>