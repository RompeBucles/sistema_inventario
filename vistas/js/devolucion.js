


/*=============================================
EDITAR USUARIO
=============================================*/
$(".tablas").on("click", ".btnEditarDevolucion", function(){

	var idDevolucion = $(this).attr("idDevolucion");
	
	var datos = new FormData();
	datos.append("idDevolucion", idDevolucion);

	$.ajax({

		url:"ajax/devolucion.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			
			$("#idDevolucion").val(respuesta["id"]);
			$("#editarMotivos").val(respuesta["motivos"]);
			$("#editarEstado").val(respuesta["estado"]);

		

			
		}

	});

})



/*=============================================
ELIMINAR DEVOLUCION
=============================================*/
$(".tablas").on("click", ".btnEliminarDevolucion", function(){

  var idDevolucion = $(this).attr("idDevolucion");

  var cliente = $(this).attr("cliente");

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

      window.location = "index.php?ruta=devolucion&idDevolucion="+idDevolucion+"&cliente="+cliente;

    }

  })

})


/*=============================================
IMPRIMIR FACTURA
=============================================*/

$(".tablas").on("click", ".btnImprimirFactura", function(){

	var codigoVenta = $(this).attr("codigoVenta");

	window.open("extensiones/tcpdf/pdf/facturas.php?id="+codigoVenta, "_blank"); 

})



