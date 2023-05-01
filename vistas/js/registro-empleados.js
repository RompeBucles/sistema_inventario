/*=============================================
EDITAR Empleados
=============================================*/
$(".tablas").on("click", ".btnEditarEmpleado", function(){

	var idEmpleado = $(this).attr("idEmpleado");

	var datos = new FormData();
	datos.append("idEmpleado", idEmpleado);

	$.ajax({
		url: "ajax/registro-empleados.ajax.php",
		method: "POST",
      	data: datos,
      	cache: false,
     	contentType: false,
     	processData: false,
     	dataType:"json",
     	success: function(respuesta){

     		$("#editarEmpleado").val(respuesta["empleado"]);
     		$("#idEmpleado").val(respuesta["id"]);

     	}

	})


})

/*=============================================
ELIMINAR CATEGORIA
=============================================*/
$(".tablas").on("click", ".btnEliminarEmpleado", function(){

	 var idEmpleado = $(this).attr("idEmpleado");

	 swal({
	 	title: '¿Está seguro de borrar el empleado?',
	 	text: "¡Si no lo está puede cancelar la acción!",
	 	type: 'warning',
	 	showCancelButton: true,
	 	confirmButtonColor: '#3085d6',
	 	cancelButtonColor: '#d33',
	 	cancelButtonText: 'Cancelar',
	 	confirmButtonText: 'Si, borrar empleado!'
	 }).then(function(result){

	 	if(result.value){

	 		window.location = "index.php?ruta=registro-empleados&idEmpleado="+idEmpleado;

	 	}

	 })

})