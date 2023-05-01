<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">

		<?php

		if($_SESSION["cargo"] == "Administrador" || $_SESSION["cargo"] == "Empleado" ){

			echo '<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>

			<li>

				<a href="usuarios">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>

				</a>

			</li>';

		}

		if($_SESSION["cargo"] == "Administrador" || $_SESSION["cargo"] == "Empleado"){

			echo '<li>


				<a href="productos">

					<i class="fa fa-product-hunt"></i>
					<span>Gestión de productos</span>

				</a>

			</li>

			
		<li>
		<a href="empleado">

			<i class="fa fa-th"></i>
			<span>Registro empleados</span>

		</a>

	    </li>



		<li>

		<a href="clientes">

				<i class="fa fa-users"></i>
				<span>Clientes</span>

	       		 </a>

	    </li>








		</li>';

		}
/*
		if($_SESSION["cargo"] == "Administrador" || $_SESSION["cargo"] == "Empleado"){

			echo '<li>

				<a href="clientes">

					<i class="fa fa-users"></i>
					<span>Clientes</span>

				</a>

			</li>';

		}
*/
		if($_SESSION["cargo"] == "Administrador" || $_SESSION["cargo"] == "Empleado"){

			echo '<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Ventas</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>
				

				<ul class="treeview-menu">
					
					<li>

						<a href="crear-venta">
					
						<i class="fa fa-circle-o"></i>
						<span>Ventas</span>

						</a>

					</li>
					<li>

						<a href="ventas">
							
							<i class="fa fa-circle-o"></i>
							<span>Historial de ventas</span>

						</a>

					</li>';

					if($_SESSION["cargo"] == "Administrador"){
/*
					echo '<li>

						<a href="reportes">
							
							<i class="fa fa-circle-o"></i>
							<span>Reporte de ventas</span>

						</a>

					</li>';
*/
					}

				

				echo '</ul>

				

			</li>
			<li>

			<a href="devolucion">

				<i class="fa fa-refresh"></i>
				<span>Proceso devolución </span>

			</a>

		</li>';


			echo '<li class="treeview">

				<a href="#">

					<i class="fa fa-list-alt"></i>
					
					<span>Pagos</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>
				

				<ul class="treeview-menu">
			
					<li>

				

					</li>';

					if($_SESSION["cargo"] == "Administrador"){

					echo '<li>

						<a href="pagos-servicios">

							<i class="fa fa-check-square-o"></i>
							<span>Pagos de servicios</span>
	
						</a>

					

						<a href="pagos-empleados">
			
							<i class="fa fa-male"></i>
							<span>Pago a empleados </span>
			
						</a>


						<a href="pagos-proveedores">
			
							<i class="fa fa-handshake-o"></i>
							<span>Pago a proveedores</span>
			
						</a>
	
					</li>';

					}

				

				echo '</ul>

				

			</li>';
			/*
			echo '<li class="treeview">

				<a href="#">

					<i class="fa fa-list-alt"></i>
					
					<span>Generar Reportes</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>
				

				<ul class="treeview-menu">
			
					<li>

				

					</li>';

					if($_SESSION["cargo"] == "Administrador"){

					echo '<li>

						<a href="reporte-servicios">
							
							<i class="fa fa-circle-o"></i>
							<span>Reporte servicios</span>

						</a>


					   <a href="reporte-empleados">
							
							<i class="fa fa-circle-o"></i>
							<span>Reporte empleados</span>

					   </a>


					   <a href="reporte-proveedores">
							
					   		<i class="fa fa-circle-o"></i>
					   		<span>Reporte proveedores</span>

				  		 </a>

					</li>';

					}

				

				echo '</ul>

				

			</li>';
*/

			echo '<li class="treeview">

				<a href="#">

					<i class="fa fa-list-alt"></i>
					
					<span>Reportes bajas</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>
				

				<ul class="treeview-menu">
			
					<li>

				

					</li>';

					if($_SESSION["cargo"] == "Administrador"){

					echo '<li>

						<a href="usuarios-eliminados">
							
							<i class="fa fa-circle-o"></i>
							<span>Usuarios eliminados</span>

						</a>


					   <a href="productos-eliminados">
							
							<i class="fa fa-circle-o"></i>
							<span>productos eliminados</span>

					   </a>


					

					</li>';

					}

				

				echo '</ul>

				

			</li>';
			

			

		}

		?>

		</ul>

	 </section>

</aside>