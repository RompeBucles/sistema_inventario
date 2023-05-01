<?php

if($_SESSION["cargo"] == "Empleado" || $_SESSION["cargo"] == "Contador"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
    Reporte productos eliminados
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active"> Reporte productos eliminados</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
    

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
         <th style="width:10px">#</th>
         <th>Producto</th>
           <th>Caraterísticas</th>
       
           <th>Tipo de producto</th>
           <th>Marca</th>
           <th>Proveedor</th>
          
           <th>Precio de Venta</th>
           <th>Fecha ingreso</th>
           <th>Fecha eliminación</th>
           <th>Información</th>
           <th>Motivos</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
         
        <?php

        $item = null;
        $valor = null;

        $eliminados = ControladorProductosEliminados::ctrMostrarProductosEliminados($item, $valor); 

      

       foreach ($eliminados as $key => $value){
         
          echo ' <tr>
                  <td>'.($key+1).'</td>
                  <td>'.$value["descripcion"].'</td>
                  <td>'.$value["caracteristicas"].'</td>
               
                  <td>'.$value["tipo_producto"].'</td>
                  <td>'.$value["marca"].'</td>
                  <td>'.$value["proveedor"].'</td>

                  <td>'.$value["precio_venta"].'</td>
                  <td>'.$value["fecha"].'</td>
                  <td>'.$value["fecha_eliminacion"].'</td>
                  <td>'.$value["informacion"].'</td>
                 <td>'.$value["motivo"].'</td>
                  

                  <td>

                    <div class="btn-group">
                        
                      <button class="btn btn-success btnEditarProductosE" idProductosE="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarProductosE"><i class="fa fa-commenting"></i></button>

                      <button class="btn btn-danger btnEliminarProductosE" idProductosE="'.$value["id"].'"><i class="fa fa-times"></i></button>
                      

                    </div>  

                  </td>

                </tr>';
        }

        ?> 

        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>


<!--=====================================
MODAL EDITAR ELIMINACION USUARIO
======================================-->

<div id="modalEditarProductosE" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Motivos de la eliminación</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL PRODUCTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-info-circle"></i></span> 

                <input type="text" class="form-control input-lg" id="motivo" placeholder="Ingresar información" name="editarInformacion" required>
                <input type="hidden" id="idProductosE" name="idProductosE">
              </div>

            </div>

            <script>
	
  var nombre = document.getElementById("motivo");

  nombre.addEventListener("keyup", function(){
  var expReg = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ' ']{2,60}$/g;
  if(!expReg.test(nombre.value) || nombre.value == ""){
  nombre.setCustomValidity("Introduzca un motivo, NO números, ni símbolos");
   }
    else{
     nombre.setCustomValidity("");
     }

  });
</script>
          

            <!-- ENTRADA PARA SELECCIONAR EL MOTIVO -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-list"></i></span> 

                <select class="form-control input-lg" name="editarMotivo" required>

                <option value="">Selecionar Motivo</option>
                 
                  <option value="Piezas descontinuadas">Piezas descontinuadas</option>

                  <option value="problemas con los proveedores">problemas con los proveedores</option>

                  <option value="Precio del producto">Precio del producto</option>

                  <option value="Calidad">Calidad</option>

                  <option value="Mantenimiento">Mantenimiento</option>

                  <option value="Correcciones">Correcciones</option>

                  <option value="otro">otro</option>
                  

                </select>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar</button>

        </div>

     <?php

          $editarProductosEliminados = new ControladorProductosEliminados();
          $editarProductosEliminados -> ctrEditarProductosEliminados();

        ?> 

      </form>

    </div>

  </div>

</div>

<?php

  $borrarProductosEliminados = new ControladorProductosEliminados();
  $borrarProductosEliminados -> ctrBorrarProductosEliminados();

?> 

