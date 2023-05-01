<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Tablero
      
      <small>Panel de Control</small>
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Tablero</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="row">
      
    <?php

    if($_SESSION["cargo"] =="Administrador"){

      include "inicio/cajas-superiores.php";

    }

    ?>

    </div> 

     <div class="row">
       
        <div class="col-lg-12">

          <?php

          if($_SESSION["cargo"] =="Empleado"){ /*crear un archivo igual cajas-superiores, pero solo con los procesos que pueda entrar el empleado, lo mismo pero con el contador*/
            include "inicio/cajas-superiores.php";

          }
          ?>

        </div>

        <div class="col-lg-6">

          <?php
/*
          if($_SESSION["cargo"] =="Administrador"){
          
           include "reportes/productos-mas-vendidos.php";

         }
*/
          ?>

        </div>

         <div class="col-lg-6">

          <?php
/*
          if($_SESSION["cargo"] =="Administrador"){
          
           include "inicio/productos-recientes.php";

         }
*/
          ?>

        </div>

         <div class="col-lg-12">
           
          <?php

          if($_SESSION["cargo"] =="Empleado" || $_SESSION["cargo"] =="Contador"){

             echo '<div class="box box-success">

             <div class="box-header">

             <h1>Bienvenid@ ' .$_SESSION["nombre"].'</h1>

             </div>

             </div>';

          }

          ?>

         </div>

     </div>

  </section>
 
</div>
