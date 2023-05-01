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
      
    Reporte usuarios eliminados
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active"> Reporte usuarios eliminados</li>
    
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
           <th>Nombre</th>
           <th>Usuario</th>
           <th>Telefono</th>
           <th>Cargo</th>
           <th>Fecha de ingreso</th>
           <th>Fecha de eliminación</th>
           <th>información de eliminación</th>
           <th>Motivo de eliminación</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
         
        <?php

        $item = null;
        $valor = null;

        $eliminados = ControladorUsuariosEliminados::ctrMostrarUsuariosEliminados($item, $valor); 

      

       foreach ($eliminados as $key => $value){
         
          echo ' <tr>
                  <td>'.($key+1).'</td>
                  <td>'.$value["nombre"].'</td>
                  <td>'.$value["usuario"].'</td>
                  <td>'.$value["telefono"].'</td>
                  <td>'.$value["cargo"].'</td>
            

                  <td>'.$value["fecha"].'</td>
                  <td>'.$value["fecha_eliminacion"].'</td>
                  <td>'.$value["descripcion"].'</td>
                 <td>'.$value["motivo"].'</td>
                  

                  <td>

                    <div class="btn-group">
                        
                      <button class="btn btn-success btnEditarUsuariosE" idUsuariosE="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuariosE"><i class="fa fa-commenting"></i></button>

                      <button class="btn btn-danger btnEliminarUsuariosE" idUsuariosE="'.$value["id"].'"><i class="fa fa-times"></i></button>
                      

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

<div id="modalEditarUsuariosE" class="modal fade" role="dialog">
  
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

                <input type="text" class="form-control input-lg" id="motivo" placeholder="Ingresar información" name="editarDescripcion" required>
                <input type="hidden" id="idUsuariosE" name="idUsuariosE">
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

                <select class="form-control input-lg" name="editarMotivo" required >

                <option value="">Selecionar Motivo</option>
                 
                  <option value="faltas acumuladas">Faltas laborales</option>

                  <option value="Robo">Robo</option>

                  <option value="Daño a los productos">Daño a los productos</option>

                  <option value="no cumplió con el horario">no cumplió con el horario</option>

                  <option value="No cumplió con el contrato">No cumplió con el contrato</option>

                  <option value="Ineficiencia laboral">Ineficiencia laboral</option>

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

          $editarUsuariosEliminados = new ControladorUsuariosEliminados();
          $editarUsuariosEliminados -> ctrEditarUsuariosEliminados();

        ?> 

      </form>

    </div>

  </div>

</div>

<?php

  $borrarUsuariosEliminados = new ControladorUsuariosEliminados();
  $borrarUsuariosEliminados -> ctrBorrarUsuariosEliminados();

?> 

