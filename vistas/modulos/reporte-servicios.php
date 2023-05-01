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
      
      Reporte pago a servicios
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Reporte pago de servicios</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <div class="input-group">

          <button type="button" class="btn btn-default" id="daterange-btn2">
           
            <span>
              <i class="fa fa-calendar"></i> 

              <?php

                if(isset($_GET["fechaInicial"])){

                  echo $_GET["fechaInicial"]." - ".$_GET["fechaFinal"];
                
                }else{
                 
                  echo 'Rango de fecha';

                }

              ?>
            </span>

            <i class="fa fa-caret-down"></i>

          </button>

        </div>

        <div class="box-tools pull-right">

        <?php

        if(isset($_GET["fechaInicial"])){

          echo '<a href="vistas/modulos/descargar-reporte-servicios.php?reporte_servicios=reporte_servicios&fechaInicial='.$_GET["fechaInicial"].'&fechaFinal='.$_GET["fechaFinal"].'">';

        }else{

           echo '<a href="vistas/modulos/descargar-reporte-servicios.php?reporte_servicios=reporte_servicios">';

        }         

        ?>
           
           <button class="btn btn-success" style="margin-top:10px">Descargar reporte en Excel</button>

          </a>

        </div>
         
      </div>

      <div class="box-body">
        
        <div class="row">

          <div class="col-xs-12">
            
            <?php

            

            ?>

          </div>

           <div class="col-md-6 col-xs-12">
             
            <?php

          

            ?>

           </div>

            <div class="col-md-6 col-xs-12">
             
            <?php

       

            ?>

           </div>

           <div class="col-md-6 col-xs-12">
             
            <?php


            ?>

           </div>
          
        </div>

      </div>
      
    </div>

  </section>
 
 </div>
