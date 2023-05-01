<?php

$item = null;
$valor = null;
$orden = "id";

$ventas = (new ControladorVentas)->ctrSumaTotalVentas();

$usuario= ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
$totalUsuario = count($usuario);

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
$totalProductos = count($productos);

$empleado= ControladorEmpleado::ctrMostrarEmpleado($item, $valor);
$totalEmpleado = count($empleado);

$empleado= ControladorEmpleado::ctrMostrarEmpleado($item, $valor);
$totalEmpleado = count($empleado);

$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);
$totalClientes = count($clientes);

$devolucion = ControladorDevolucion::ctrMostrarDevolucion($item, $valor);
$totalDevoluciones = count($devolucion);

$usuarios = ControladorUsuariosEliminados::ctrMostrarUsuariosEliminados($item, $valor);
$totalUsuarios = count($usuarios);

$productosE = ControladorProductosEliminados::ctrMostrarProductosEliminados($item, $valor);
$totalproductosE = count($productosE);

$servicios= ControladorServicios::ctrMostrarServicios($item, $valor);
$totalServicios = count($servicios);



?>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-black">
    
    <div class="inner">
    
      <h3><?php echo number_format($totalUsuario); ?></h3>

      <p>Registro de usuarios</p>
  
    </div>
    
    <div class="icon">
    
      <i class="ion ion-person-add"></i>
    
    </div>
    
    <a href="usuarios" class="small-box-footer">

      Más info <i class="fa fa-arrow-circle-right"></i>

    </a>
    <span class="input-group-addon"><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modalAgregarUsuario" data-dismiss="modal">Agregar usuario</button></span>
  </div>

</div>


<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-orange">
  
    <div class="inner">
    
      <h3><?php echo number_format($totalProductos); ?></h3>

      <p>Registrar Productos</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-cube"></i>
    
    </div>
    
    <a href="productos" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>
    <span class="input-group-addon"><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modalAgregarProducto" data-dismiss="modal">Agregar producto</button></span>
  </div>

</div>


<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-maroon">
    
    <div class="inner">
    
      <h3><?php echo number_format($totalEmpleado); ?></h3>

      <p>Registro de empleados</p>
  
    </div>
    
    <div class="icon">
    
      <i class="ion ion-man"></i>
    
    </div>
    
    <a href="empleado" class="small-box-footer">

      Más info <i class="fa fa-arrow-circle-right"></i>

    </a>
    <span class="input-group-addon"><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modalAgregarEmpleado" data-dismiss="modal">Agregar empleado</button></span>
  </div>

</div>


<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-gray">
    
    <div class="inner">
    
    <h3><?php echo number_format($totalClientes); ?></h3>

      <p>Registro de clientes</p>
  
    </div>
    
    <div class="icon">
    
      <i class="ion ion-person-add"></i>
    
    </div>
    
    <a href="clientes" class="small-box-footer">

      Más info <i class="fa fa-arrow-circle-right"></i>

    </a>
    <span class="input-group-addon"><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modalAgregarCliente" data-dismiss="modal">Agregar clientes</button></span>
  </div>
</div>



<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-aqua">
    
    <div class="inner">
      
    <h3>$</h3>

      <p>Ventas</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-ios-cart"></i>
    
    </div>
    
    <a href="crear-venta" class="small-box-footer">
    
      
    Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>
  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-aqua">
    
    <div class="inner">
      
    <h3>$<?php echo number_format($ventas["total"],2); ?></h3>

      <p>Historial de compras</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-social-usd"></i>
    
    </div>
    
    <a href="ventas" class="small-box-footer">
    
      
    Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>
  </div>

</div>


<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-fuchsia">
    
    <div class="inner">
    
    <h3><?php echo number_format($totalDevoluciones); ?></h3>

      <p> Devoluciones</p>
  
    </div>
    
    <div class="icon">
    
      <i class="ion ion-sad-outline"></i>
    
    </div>
    
    <a href="devolucion" class="small-box-footer">

      Más info <i class="fa fa-arrow-circle-right"></i>

    </a>
   
  </div>

</div>



<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-black">
    
    <div class="inner">
      
    <h3><?php echo number_format($totalUsuarios); ?></h3>

      <p>Reporte usuarios eliminados</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-close-circled"></i>
    
    </div>
    
    <a href="usuarios-eliminados" class="small-box-footer">
    
      
    Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>
  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-orange">
    
    <div class="inner">
      
    <h3><?php echo number_format($totalproductosE); ?></h3>

      <p>Reporte productos eliminados</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-close-circled"></i>
    
    </div>
    
    <a href="productos-eliminados" class="small-box-footer">
    
      
    Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>
  </div>

</div>


<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-olive">
  
    <div class="inner">
    
      <h3><?php echo number_format($totalServicios); ?></h3>

      <p>Registrar Pago de servicios</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-settings"></i>
    
    </div>
    
    <a href="pagos-servicios" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>
    <span class="input-group-addon"><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modalAgregarPago" data-dismiss="modal">Agregar pago servicios</button></span>
  </div>

</div>

<!--=====================================
MODAL AGREGAR USUARIO
======================================-->

<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar usuario</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="Nombre" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ' ']{2,30}"  name="nuevoNombre" placeholder="Ingresar nombre" required>

              </div>

            </div>
            <script>
	
            	var nombre = document.getElementById("Nombre");

              nombre.addEventListener("keyup", function(){
              var expReg = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ' ']{2,30}$/g;
              if(!expReg.test(nombre.value) || nombre.value == ""){
              nombre.setCustomValidity("Introduzca un nombre, NO números, ni símbolos");
               }
                else{
                 nombre.setCustomValidity("");
                 }
    
              });
            </script>
            <!-- ENTRADA PARA EL USUARIO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" id="usuario" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ' ']{2,30}" name="nuevoUsuario" placeholder="Ingresar usuario" id="nuevoUsuario" required>

              </div>

            </div>

            <script>
	
  var nombre = document.getElementById("usuario");

  nombre.addEventListener("keyup", function(){
  var expReg = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ' ']{2,30}$/g;
  if(!expReg.test(nombre.value) || nombre.value == ""){
  nombre.setCustomValidity("Introduzca un usuario, NO números, ni símbolos");
   }
    else{
     nombre.setCustomValidity("");
     }

  });
</script>

             <!-- ENTRADA PARA EL TELÉFONO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>
              </div>

            </div>



             <!-- ENTRADA PARA SELECCIONAR SU CARGO -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-id-card-o"></i></span> 

                <select class="form-control input-lg"   name="nuevoCargo" required>
                  
                  <option value="">Selecionar Cargo</option>

                  <option value="Administrador">Administrador</option>

                  <option value="Empleado">Empleado</option>

                  <option value="Contador">Contador</option>

                </select>

              </div>
          
            </div>

            

            <!-- ENTRADA PARA LA CONTRASEÑA -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="password" class="form-control input-lg"  name="nuevoPassword" placeholder="Ingresar contraseña" pattern="[A-Za-z][A-Za-z0-9]{5,10}" title="La contraseña debe empezar con una letra y contener dígitos, con una longitud de 10 carácteres, no debe contener símbolos" required>
              </div>

            </div>


            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" class="nuevaFoto" name="nuevaFoto">

              <p class="help-block">Peso máximo de la foto 2MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar usuario</button>

        </div>

        <?php

          $crearUsuario = new ControladorUsuarios();
          $crearUsuario -> ctrCrearUsuario();

        ?>

      </form>

    </div>

  </div>

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
MODAL AGREGAR Empleado
======================================-->

<div id="modalAgregarEmpleado" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Empleado</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="nombre" name="nuevoEmpleado" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ' ']{2,30}"  placeholder="Ingresar nombre" required>

              </div>

            </div>

            <script>
	
  var nombre = document.getElementById("nombre");

  nombre.addEventListener("keyup", function(){
  var expReg = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ' ']{2,30}$/g;
  if(!expReg.test(nombre.value) || nombre.value == ""){
  nombre.setCustomValidity("Introduzca un nombre, NO números, ni símbolos");
   }
    else{
     nombre.setCustomValidity("");
     }

  });
</script>


            <!-- ENTRADA PARA EL EMAIL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCIÓN -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>

              </div>

            </div>

             <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                <input type="date" class="form-control input-lg" id="Fecha" name="nuevaFechaNacimiento" min="1920-01-01" max="2001-05-25"  required>
                <div class="txtError"></div>
              </div>

            </div>
   

            <!-- ENTRADA PARA SELECCIONAR SU Cargo -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" name="nuevoCargo" required>
                  
                  <option value="">Selecionar cargo</option>

                  <option value="Empleado">Empleado</option>

                  <option value="Contador">Contador</option>


                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL SUELDO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoSueldo" min="0"  placeholder="Ingresar Sueldo" required>

              </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Empleado</button>

        </div>

      </form>

      <?php

        $crearEmpleado = new ControladorEmpleado();
        $crearEmpleado -> ctrCrearEmpleado();

      ?>

    </div>

  </div>

</div>


<!--=====================================
MODAL AGREGAR CLIENTE
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

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="nombre" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ' ']{2,30}" name="nuevoCliente" placeholder="Ingresar nombre" required>

              </div>

            </div>
            <script>
	
  var nombre = document.getElementById("nombre");

  nombre.addEventListener("keyup", function(){
  var expReg = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ' ']{2,30}$/g;
  if(!expReg.test(nombre.value) || nombre.value == ""){
  nombre.setCustomValidity("Introduzca un nombre, NO números, ni símbolos");
   }
    else{
     nombre.setCustomValidity("");
     }

  });
</script>


            <!-- ENTRADA PARA EL EMAIL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCIÓN -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>

              </div>

            </div>

             <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                <input type="date" class="form-control input-lg" name="nuevaFechaNacimiento"  min="1920-01-01" max="2001-05-25" placeholder="Ingresar fecha nacimiento" required>

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

      <?php

        $crearCliente = new ControladorClientes();
        $crearCliente -> ctrCrearCliente(); 

      ?>

    </div>

  </div>

</div>


<!--=====================================
MODAL AGREGAR PAGO DE SERVICIO
======================================-->

<div id="modalAgregarPago" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar pago</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE DEL SERVICIO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-id-card-o"></i></span> 

                <input type="text" class="form-control input-lg" id="servicio" name="nuevoServicio" placeholder="Ingresar Servicio" required>

              </div>

            </div>
            <script>
	
  var nombre = document.getElementById("servicio");

  nombre.addEventListener("keyup", function(){
  var expReg = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ' ']{2,30}$/g;
  if(!expReg.test(nombre.value) || nombre.value == ""){
  nombre.setCustomValidity("Introduzca un servicio, NO números, ni símbolos");
   }
    else{
     nombre.setCustomValidity("");
     }

  });
</script>
          
            <!-- ENTRADA PARA LA DESCRIPCION-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-text-width"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar descripcion" required>

              </div>

            </div>

             <!-- ENTRADA PARA EL MONTO-->

             <div class="col-xs-6">
                
                <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 
  
                    <input type="number" class="form-control input-lg" name="nuevoMonto" min="0" placeholder="Monto" required>
  
                </div>
          
              </div>

              <br><br><br>
             <!-- ENTRADA PARA LA FECHA DE VENCIMIENTO-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                <input type="date" class="form-control input-lg" name="nuevaFechaVencimiento" placeholder="Ingresar fecha vencimiento"  min="2020-01-01" max="2022-21-12" required>

              </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar pago</button>

        </div>
       
          <?php

              $crearServicio = new ControladorServicios(); 
              $crearServicio  -> ctrRegistrarServicio();

          ?>

      </form>

    </div>

  </div>

</div>