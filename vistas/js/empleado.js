/*=============================================
EDITAR Empleado
=============================================*/
$(".tablas").on("click", ".btnEditarEmpleado", function(){

	var idEmpleado = $(this).attr("idEmpleado");

	var datos = new FormData();
    datos.append("idEmpleado", idEmpleado);

    $.ajax({

      url:"ajax/empleado.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
        $("#idEmpleado").val(respuesta["id"]);
	       $("#editarEmpleado").val(respuesta["nombre"]);
	       
	       $("#editarEmail").val(respuesta["email"]);
	       $("#editarTelefono").val(respuesta["telefono"]);
	       $("#editarDireccion").val(respuesta["direccion"]);
           $("#editarFechaNacimiento").val(respuesta["fecha_nacimiento"]);
           $("#editarCargo").val(respuesta["cargo"]);
           $("#editarSueldo").val(respuesta["sueldo"]);
	  }

  	})

})

/*=============================================
ELIMINAR Empleado
=============================================*/
$(".tablas").on("click", ".btnEliminarEmpleado", function(){

	var idEmpleado = $(this).attr("idEmpleado");
	swal({
        title: '¿Está seguro de borrar el Empleado?',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar empleado!'
      }).then(function(result){
        if (result.value) {
          
            window.location = "index.php?ruta=empleado&idEmpleado="+idEmpleado;
            
        }

  })

})

