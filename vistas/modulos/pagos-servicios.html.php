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

      <a href="reporte-servicios" class="btn btn-success">Reporte pagos de servicios </a>
      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas">
         
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
          
          <tr>

            <td>1</td>

            <td>Electicidad </td>

            <td>Pagado</td>

            <td>$ 1,000.00</td>


            <td>2017-12-11 12:05:32</td>

            <td>

              <div class="btn-group">
                  
                <button class="btn btn-info"><i class="fa fa-print"></i></button>

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

          <h4 class="modal-title">Agregar Servicio</h4>

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

                <input type="text" class="form-control input-lg" name="nuevoServicio" placeholder="Ingresar Servicio" required>

              </div>

            </div>

          
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

                <input type="text" class="form-control input-lg" name="nuevaFechaVencimiento" placeholder="Ingresar fecha vencimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

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

      </form>

    </div>

  </div>

</div>
