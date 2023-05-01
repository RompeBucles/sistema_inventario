<?php

if($_SESSION["cargo"] == "contador"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>
<div class="content-wrapper">

  <section class="content-header"> 
    
    <h1>
      
    Gestión pago de servicios
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Gestión pago de servicios</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
      <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarPago">

        Reportar Pago

      </button>

      <a href="reporte-servicios" class="btn btn-success">Reporte pagos de servicios</a>

    

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre del servicio</th>
           <th>Descripción</th>
           <th>Monto</th>
           <th>Fecha de Vencimiento</th>
           <th>Fecha de pago</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <?php

          if(isset($_GET["fechaInicial"])){

            $fechaInicial = $_GET["fechaInicial"];
            $fechaFinal = $_GET["fechaFinal"];

          }else{

            $fechaInicial = null;
            $fechaFinal = null;

          }

          $item = null;
          $valor = null;

            $servicios = ControladorServicios::ctrMostrarServicios($item, $valor); 

          foreach ($servicios as $key => $value) {
           
            echo ' <tr>
                  <td>'.($key+1).'</td>
                  <td>'.$value["servicio"].'</td>
                  <td>'.$value["descripcion"].'</td>
                  <td>$ '.number_format($value["monto"],2).'</td>
                  <td>'.$value["fecha_vencimiento"].'</td>';
         

                  echo '<td>'.$value["fecha"].'</td>
            
                  <td>

                  <div class="btn-group">
                      
                    <button class="btn btn-warning btnEditarServicios" data-toggle="modal" data-target="#modalEditarServicios" idServicios="'.$value["id"].'"><i class="fa fa-pencil"></i></button>';

                  if($_SESSION["cargo"] == "Administrador"){

                      echo '<button class="btn btn-danger btnEliminarServicios" idServicios="'.$value["id"].'"><i class="fa fa-times"></i></button>';

                  }

                  echo '</div>  

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

<!--=====================================
MODAL EDITAR PAGO
======================================-->

<div id="modalEditarServicios" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar pago</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-id-card-o"></i></span> 

                <input type="text" class="form-control input-lg" name="editarServicio" id="editarServicio" readonly>
                
              </div>

            </div>

            <!-- ENTRADA PARA DESCRIPCION -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-text-width"></i></span> 

                <input type="text" class="form-control input-lg" name="editarDescripcion" id="editarDescripcion" required>

              </div>

            </div>

              <!-- ENTRADA PARA MONTO-->

              <div class="col-xs-6">
                
                <div class="input-group">
                
                  <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                  <input type="number" class="form-control input-lg" id="editarMonto" name="editarMonto" min="0" placeholder="Ingresa monto" required>

                </div>

              </div>

              <br><br><br>

             <!-- ENTRADA PARA FECHA DE VENCIMIENTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                <input type="date" class="form-control input-lg" name="editarFechaVencimiento" id="editarFechaVencimiento"  min="2020-01-01" max="2022-21-12" required>

              </div>

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

        $editarServicios = new ControladorServicios();
        $editarServicios -> ctrEditarServicios();

      ?>

    

    </div>

  </div>

</div>

<?php

  $eliminarServicios = new ControladorServicios();
  $eliminarServicios -> ctrEliminarServicios(); 

?>




