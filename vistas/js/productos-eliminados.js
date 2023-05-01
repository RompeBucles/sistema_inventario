

/*=============================================
EDITAR USUARIO
=============================================*/
$(".tablas").on("click", ".btnEditarProductosE", function(){

	var idProductosE = $(this).attr("idProductosE");
	
	var datos = new FormData();
	datos.append("idProductosE", idProductosE);

	$.ajax({

		url:"ajax/productos-eliminados.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			
			$("#idProductosE").val(respuesta["id"]);
			$("#editarInformacion").val(respuesta["informacion"]);
			$("#editarMotivo").val(respuesta["motivo"]);


		}

	});

})



/*=============================================
ELIMINAR DEVOLUCION
=============================================*/
$(".tablas").on("click", ".btnEliminarProductosE", function(){

  var idProductosE = $(this).attr("idProductosE");
  var id_cliente = $(this).attr("id_cliente");

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

      window.location = "index.php?ruta=productos-eliminados&idProductosE="+idProductosE+"&id_cliente="+id_cliente;

    }

  })

})




