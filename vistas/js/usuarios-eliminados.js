

/*=============================================
EDITAR USUARIO
=============================================*/
$(".tablas").on("click", ".btnEditarUsuariosE", function(){

	var idUsuariosE = $(this).attr("idUsuariosE");
	
	var datos = new FormData();
	datos.append("idUsuariosE", idUsuariosE);

	$.ajax({

		url:"ajax/usuarios-eliminados.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			
			$("#idUsuariosE").val(respuesta["id"]);
			$("#editarDescripcion").val(respuesta["descripcion"]);
			$("#editarMotivo").val(respuesta["motivo"]);


		}

	});

})



/*=============================================
ELIMINAR DEVOLUCION
=============================================*/
$(".tablas").on("click", ".btnEliminarUsuariosE", function(){

  var idUsuariosE = $(this).attr("idUsuariosE");
  var nombre = $(this).attr("nombre");

  swal({
    title: '¿Está seguro de borrar el registro?',
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar registro!'
  }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=usuarios-eliminados&idUsuariosE="+idUsuariosE+"&nombre="+nombre;

    }

  })

})




