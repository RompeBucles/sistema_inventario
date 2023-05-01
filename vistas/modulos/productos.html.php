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
        
       <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Imagen</th>
           <th>Producto</th>
           <th>Características</th>
           <th>Tipo de producto</th>
           <th>Marca</th>
           <th>Proveedor</th>
           <th>Stock</th>
           <th>Precio de venta</th>
           <th>Fecha de Agregado</th>
           <th>Acciones</th>
           
           

         </tr> 

        </thead>

        <tbody>
          
          <tr>
            <td>1</td>
            <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
  
            <td>Lorem ipsum dolor sit amet</td>
        
            <td>20</td>
       
            <td>$ 10.00</td>
            <td>2017-12-11 12:05:32</td>
            <td>

              <div class="btn-group">
                  
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                <button class="btn btn-danger"><i class="fa fa-times"></i></button>

              </div>  

            </td>

          </tr>

           <tr>

            <td>1</td>
            <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
          
            <td>Lorem ipsum dolor sit amet</td>
          
            <td>20</td>
     
            <td>$ 10.00</td>
            <td>2017-12-11 12:05:32</td>
            <td>

              <div class="btn-group">
                  
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                <button class="btn btn-danger"><i class="fa fa-times"></i></button>

              </div>  

            </td>

          </tr>

          <tr>
            <td>1</td>
            <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
       
            <td>Lorem ipsum dolor sit amet</td>
       
            <td>20</td>
        
            <td>$ 10.00</td>
            <td>2017-12-11 12:05:32</td>
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
              
                <span class="input-group-addon"><i class="fa fa-archive "></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoProducto" placeholder="Ingresar Producto" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CARACTERISTICAS -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-list-ol"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaCaracteristica" placeholder="Ingresar Características" required>

              </div>

            </div>

             <!-- ENTRADA PARA  TIPO DE PRODUCTO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTipo" placeholder="Ingresar tipo de producto" required>

              </div>

            </div>

            <!-- ENTRADA PARA  MARCA  -->

              <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-registered"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaMarca" placeholder="Ingresar Marcas" required>

              </div>

            </div>

               <!-- ENTRADA PARA  PROVEEDOR  -->

               <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-cube"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoProveedor" placeholder="Ingresar proveedor" required>

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

    </div>

  </div>

</div>


