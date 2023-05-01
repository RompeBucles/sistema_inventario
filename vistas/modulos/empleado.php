<?php

if($_SESSION["cargo"] == "Empleado"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Registro Empleados
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Registro Empleados</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
      <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarEmpleado">
          
          Agregar Empleado

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>Email</th>
           <th>Teléfono</th>
           <th>Dirección</th>
           <th>Fecha nacimiento</th> 
           <th>Cargo</th>
           <th>Sueldo</th>
           <th>Fecha</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $empleado = ControladorEmpleado::ctrMostrarEmpleado($item, $valor);

          foreach ($empleado as $key => $value) {
            

            echo '<tr>

                    <td>'.($key+1).'</td>

                    <td>'.$value["nombre"].'</td>

                    <td>'.$value["email"].'</td>

                    <td>'.$value["telefono"].'</td>

                    <td>'.$value["direccion"].'</td>

                    <td>'.$value["fecha_nacimiento"].'</td>             

                    

                    <td>'.$value["cargo"].'</td>
                    <td>$ '.number_format($value["sueldo"],2).'</td>
                 
                    <td>'.$value["fecha"].'</td>
                    <td>

                      <div class="btn-group">
                          
                        <button class="btn btn-warning btnEditarEmpleado" data-toggle="modal" data-target="#modalEditarEmpleado" idEmpleado="'.$value["id"].'"><i class="fa fa-pencil"></i></button>';

                      if($_SESSION["cargo"] == "Administrador"){

                          echo '<button class="btn btn-danger btnEliminarEmpleado" idEmpleado="'.$value["id"].'"><i class="fa fa-times"></i></button>';

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
MODAL EDITAR CLIENTE
======================================-->

<div id="modalEditarEmpleado" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Empleado</h4>

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

                <input type="text" class="form-control input-lg" name="editarEmpleado" id="editarEmpleado"  pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ' ']{2,30}" readonly>
                <input type="hidden" id="idEmpleado" name="idEmpleado">
              </div>

            </div>

            <script>
	
  var nombre = document.getElementById("editarEmpleado");

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

                <input type="email" class="form-control input-lg" name="editarEmail" id="editarEmail" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="editarTelefono" id="editarTelefono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCIÓN -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="editarDireccion" id="editarDireccion"  required>

              </div>

            </div>

             <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                <input type="date" class="form-control input-lg" name="editarFechaNacimiento" id="editarFechaNacimiento"  min="1920-01-01" max="2001-05-25" required>
                <div class="txtError"></div>
              </div>

            </div>

            

            <!-- ENTRADA PARA SELECCIONAR SU Cargo -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" name="editarCargo">
                  
                  <option id="editarCargo" value="">Selecionar cargo</option>

                  <option value="Empleado">Empleado</option>

                  <option value="Contador">Contador</option>


                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL SUELDO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="number" class="form-control input-lg" id="editarSueldo" name="editarSueldo"  min="0"  placeholder="Ingresar Sueldo" required>

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

        $editarEmpleado = new ControladorEmpleado();
        $editarEmpleado -> ctrEditarEmpleado();

      ?>

    

    </div>

  </div>

</div>

<?php

  $eliminarEmpleado = new ControladorEmpleado();
  $eliminarEmpleado -> ctrEliminarEmpleado();

?>