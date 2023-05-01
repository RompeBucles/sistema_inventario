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
      
      Proceso devolución
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Proceso devolución</li>
    
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
           <th>Cliente</th>
           <th>Vendedor</th>
           <th>Reembolso total:</th>
           <th>Motivos</th>
           <th>Estado</th>
           <th>Fecha devolución</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
         
        <?php

        $item = null;
        $valor = null;

        $devolucion = ControladorDevolucion::ctrMostrarDevolucion($item, $valor); 

        foreach ($devolucion as $key => $value) {
           
           echo '<tr>

                  <td>'.($key+1).'</td>';

                  $itemCliente = "id";
                  $valorCliente = $value["id_cliente"];

                  $respuestaCliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);

                  echo '<td>'.$respuestaCliente["nombre"].'</td>';

                  $itemUsuario = "id";
                  $valorUsuario = $value["id_vendedor"];

                  $respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                  echo '<td>'.$respuestaUsuario["nombre"].'</td>

                  <td>$ '.number_format($value["total"],2).'</td>
                  
                  <td>'.$value["motivos"].'</td>
                  <td>'.$value["estado"].'</td>
                  <td>'.$value["fecha"].'</td>

                  <td>

                    <div class="btn-group">




                   <button class="btn btn-info btnImprimirFactura" codigoVenta="'.$value["id"].'"> 

                        <i class="fa fa-print"></i>PDF

                      </button>'; 

                      if($_SESSION["cargo"] == "Administrador"){

                      echo ' <button class="btn btn-success btnEditarDevolucion" idDevolucion="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarDevolucion"><i class="fa fa-commenting"></i></button>

                      <button class="btn btn-danger btnEliminarDevolucion" idDevolucion="'.$value["id"].'"  cliente="'.$value["cliente"].'"><i class="fa fa-times"></i></button>';

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
MODAL EDITAR ELIMINACION USUARIO
======================================-->

<div id="modalEditarDevolucion" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Motivos de la devolución</h4>

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

                <input type="text" class="form-control input-lg"  placeholder="Ingresar motivos" id="motivo" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ' ']{2,60}" name="editarMotivos" required>
                <input type="hidden" id="idDevolucion" name="idDevolucion">
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

                <select class="form-control input-lg" name="editarEstado" required>

                <option value="">Selecionar Estado del producto</option>
                 
                  <option value="No sirve">No sirve</option>

                  <option value="Defectuoso">Defectuoso</option>

                  <option value="Dañado">Dañado</option>

                  <option value="No enciende">No enciende</option>

                  <option value="Faltan piezas">Faltan piezas</option>

                  <option value="Partes dañadas">Partes dañadas</option>

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

$editarDevolucion = new ControladorDevolucion();
$editarDevolucion -> ctrEditarDevolucion();

        ?> 

      </form>

    </div>

  </div>

</div>

<?php

$borrarDevolucion = new ControladorDevolucion();
$borrarDevolucion -> ctrBorrarDevolucion();

?> 

