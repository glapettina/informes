/*=============================================
EDITAR MATERIA            
=============================================*/

$(".btnEditarMateria").click(function(){


	var idMateria = $(this).attr("idMateria");

	var datos = new FormData();
	datos.append("idMateria", idMateria);

	$.ajax({

		url: "ajax/materias.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){


			$("#editarMateria").val(respuesta["nombre"]);
			$("#editarCiclo").val(respuesta["ciclo"]);
			$("#idMateria").val(respuesta["id_materia"]);

		}
	})
})


/*=============================================
				ELIMINAR MATERIA            
=============================================*/

$(document).on("click", ".btnEliminarMateria", function(){


	var idMateria = $(this).attr("idMateria");

	swal({
		title: 'Está seguro de borrar la materia?',
		text: "Si no lo está puede cancelar la acción",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar sección'
		}).then((result)=>{

			if (result.value) {

				window.location = "index.php?ruta=materias&idMateria="+idMateria;
			}
		})
})


/*=============================================
            ACTIVAR MATERIA            
=============================================*/


$(document).on("click", ".btnActivarMateria", function(){


	var idMateria = $(this).attr("idMateria");
	var estadoMateria = $(this).attr("estadoMateria");

	var datos = new FormData();
	datos.append("activarId", idMateria);
	datos.append("activarMateria", estadoMateria);

	$.ajax({

		url: "ajax/materias.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){

			if (window.matchMedia("(max-width:767px)").matches) {

				swal({
					title: "La materia ha sido actualizada",
					type: "success",
					confirmButtonText: "Cerrar"
				}).then(function(result){

					if (result.value) {

						window.location = "materias";
					}
				});
			}
		}
	})

	if (estadoMateria ==0) {

		$(this).removeClass('btn-success');
		$(this).addClass('btn-danger');
		$(this).html('Desactivado');
		$(this).attr('estadoMateria', 1);

	}else{

		$(this).addClass('btn-success');
		$(this).removeClass('btn-danger');
		$(this).html('Activado');
		$(this).attr('estadoMateria', 0);
	}
})

