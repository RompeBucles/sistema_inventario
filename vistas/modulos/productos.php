<?php

if($_SESSION["cargo"] == "Vendedor"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Gestión de productos
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Gestión de productos</li>
    
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
        
       <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Imagen</th>
           <th>Producto</th>
           <th>Características</th>
           <th>Estado del producto</th>
           <th>Tipo de producto</th>
           <th>Marca</th>
           <th>Proveedor</th>
           <th>Estado del proveedor</th>
           <th>Stock</th>
           <th>Precio de venta</th>
           <th>Fecha de Agregado</th>
           <th>Acciones</th>
           
         </tr> 

        </thead>      

       </table>

       <input type="hidden" value="<?php echo $_SESSION['cargo']; ?>" id="perfilOculto">

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar producto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


     <!-- ENTRADA PARA EL PRODUCTO -->

     <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="producto" name="nuevaDescripcion"  pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ' ']{2,60}"  placeholder="Ingresar producto" required>

              </div>

            </div>

            <script>
	
  var nombre = document.getElementById("producto");

  nombre.addEventListener("keyup", function(){
  var expReg = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ' ']{2,60}$/g;
  if(!expReg.test(nombre.value) || nombre.value == ""){
  nombre.setCustomValidity("Introduzca un nombre, NO números, ni símbolos");
   }
    else{
     nombre.setCustomValidity("");
     }

  });
  </script>

            <!-- ENTRADA PARA LA CARACTERISTICAS -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-list-ol"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaCaracteristica" placeholder="Ingresar Características" required>

              </div>

            </div>

            
            <!-- ENTRADA PARA SELECCIONAR SU prodcuto -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <select class="form-control input-lg" name="nuevoEstado" required>

                  <option value="">Selecionar estado del producto</option>

                  <option value="Activo">Activo</option>

                </select>

              </div>

            </div>

                   <!-- ENTRADA PARA SELECCIONAR SU prodcuto -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <select class="form-control input-lg" name="nuevoTipo" required>

                  <option value="">Selecionar tipo de producto</option>

                  <option value="Pieza">Pieza</option>

                  <option value="Accesorio">Accesorio</option>

                  <option value="Refacción">Refacción</option>

                  <option value="Componete">Componete</option>

                  <option value="Electrodoméstico ">Electrodoméstico</option>

                </select>

              </div>

            </div>


            <!-- ENTRADA PARA  MARCA  -->

              <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-registered"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaMarca" placeholder="Ingresar Marca" required>

              </div>

            </div>

      

              <!-- ENTRADA PARA SELECCIONAR SU PROVEEDOR -->

              <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <select class="form-control input-lg" name="nuevoProveedor" required>

                  <option value="">Selecionar Proveedor</option>

                  <option value="Hp México">Hp México</option>

                  <option value="Apple México">Apple México</option>

                  <option value="Samsung Electronics">Samsung Electronics</option>

                  <option value="Adata">Adata México</option>

                  <option value="Dell">Dell México</option>

                  <option value="Razer México">Razer México</option>

                  <option value="Intel México">Intel México</option>

                  <option value="Kingston México">Kingston México</option>

                  <option value="Asus México">Asus México</option>

                  <option value="LG México">LG México</option>

                  <option value="lenovo México">lenovo México</option>

                  <option value="Acer México">Acer México</option>

                  <option value="Logitech México">Logitech México</option>

                </select>

              </div>

            </div>

                 
                  <!-- ENTRADA PARA SELECCIONAR SU prodcuto -->

                  <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <select class="form-control input-lg" name="nuevoEstadoProveedor" required>

                  <option value="">Selecionar estado del proveedor</option>

                  <option value="Activo">Activo</option>

              

                </select>

              </div>

            </div>

         

             <!-- ENTRADA PARA STOCK -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Stock" required>

              </div>

            </div>

             <!-- ENTRADA PARA PRECIO Venta-->

             <div class="form-group row">

          

                <!-- ENTRADA PARA PRECIO VENTA -->

                <div class="col-xs-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                    <input type="number" class="form-control input-lg" name="nuevoPrecioVenta" min="0" placeholder="Precio de venta" required>

                  </div>
                
                  <br>

        

        

                </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR IMAGEN</div>

              <input type="file" id="nuevaImagen" name="nuevaImagen">

              <p class="help-block">Peso máximo de la imagen 2MB</p>

              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="100px">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar producto</button>

        </div>

      </form>

        <?php

          $crearProducto = new ControladorProductos();
          $crearProducto -> ctrCrearProducto();

        ?>  

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR PRODUCTO
======================================-->

<div id="modalEditarProducto" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar producto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

      
            <!-- ENTRADA PARA LA PRODUCTO -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="editarDescripcion" name="editarDescripcion" readonly>

              </div>

            </div>


             <!-- ENTRADA PARA LA CARACTERISTICAS -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-list-ol"></i></span> 

                <input type="text" class="form-control input-lg" id="editarCaracteristica"  name="editarCaracteristica" placeholder="Ingresar Características" required>

              </div>

            </div>

                  <!-- ENTRADA PARA SELECCIONAR SU prodcuto -->

                  <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <select class="form-control input-lg"  name="editarEstado" required>

                  <option id="editarEstado" value="">Selecionar estado del producto</option>

                  <option value="Activo">Activo</option>

                  <option value="Descontinuado">Descontinuado</option>

                </select>

              </div>

            </div>


              <!-- ENTRADA PARA SELECCIONAR SU prodcuto -->

              <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <select class="form-control input-lg" name="editarTipo" required>

                  <option id="editarTipo" value="">Selecionar tipo de producto</option>

                  <option value="Pieza">Pieza</option>

                  <option value="Accesorio">Accesorio</option>

                  <option value="Refacción">Refacción</option>

                  <option value="Componete">Componete</option>

                  <option value="Electrodoméstico ">Electrodoméstico</option>


                </select>

              </div>

            </div>


            <!-- ENTRADA PARA  MARCA  -->

              <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-registered"></i></span> 

                <input type="text" class="form-control input-lg" id="editarMarca"  name="editarMarca" placeholder="Ingresar Marca" required>

              </div>

            </div>

              <!-- ENTRADA PARA SELECCIONAR SU PROVEEDOR -->

              <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <select class="form-control input-lg" name="editarProveedor" required>

                  <option id="editarProveedor" value="">Selecionar Proveedor</option>

                  <option value="Hp México">Hp México</option>

                  <option value="Apple México">Apple México</option>

<option value="Samsung Electronics">Samsung Electronics</option>

<option value="Adata">Adata México</option>

<option value="Dell">Dell México</option>

<option value="Razer México">Razer México</option>

<option value="Intel México">Intel México</option>

<option value="Kingston México">Kingston México</option>

<option value="Asus México">Asus México</option>

<option value="LG México">LG México</option>

<option value="lenovo México">lenovo México</option>

<option value="Acer México">Acer México</option>

<option value="Logitech México">Logitech México</option>
                </select>

              </div>

            </div>

            
                  <!-- ENTRADA PARA SELECCIONAR SU prodcuto -->

                  <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <select class="form-control input-lg" name="editarEstadoProveedor" required>

                  <option id="editarEstadoProveedor" value="">Selecionar estado del proveedor</option>

                  <option value="Activo">Activo</option>

                  <option value="inactivo">inactivo</option>

                </select>

              </div>

            </div>


             <!-- ENTRADA PARA STOCK -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" id="editarStock" name="editarStock" min="0" required>

              </div>

            </div>

             <!-- ENTRADA PARA PRECIO VENTA -->

             <div class="form-group row">

       

                <!-- ENTRADA PARA PRECIO VENTA -->

                <div class="col-xs-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                    <input type="number" class="form-control input-lg" id="editarPrecioVenta" name="editarPrecioVenta" step="any" min="0"  required>

                  </div>
                
                  <br>


             

                </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR IMAGEN</div>

              <input type="file" class="nuevaImagen" name="editarImagen">

              <p class="help-block">Peso máximo de la imagen 2MB</p>

              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

              <input type="hidden" name="imagenActual" id="imagenActual">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>

        <?php

          $editarProducto = new ControladorProductos();
          $editarProducto -> ctrEditarProducto();

        ?>      

    </div>

  </div>

</div>

<?php

  $eliminarProducto = new ControladorProductos();
  $eliminarProducto -> ctrEliminarProducto();

?>      



