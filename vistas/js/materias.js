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

function Activar(){

	console.log("Pasó");

}

$(document).on("click", "#btnActivarMaterias", function(){

	


	// var idCiudad = $(this).attr("idCiudad");
	// var estadoCiudad = $(this).attr("estadoCiudad");

	// var datos = new FormData();
	// datos.append("activarId", idCiudad);
	// datos.append("activarCiudad", estadoCiudad);

	// $.ajax({

	// 	url: "ajax/ciudades.ajax.php",
	// 	method: "POST",
	// 	data: datos,
	// 	cache: false,
	// 	contentType: false,
	// 	processData: false,
	// 	success: function(respuesta){

	// 		if (window.matchMedia("(max-width:767px)").matches) {

	// 			swal({
	// 				title: "La ciudad ha sido actualizada",
	// 				type: "success",
	// 				confirmButtonText: "Cerrar"
	// 			}).then(function(result){

	// 				if (result.value) {

	// 					window.location = "ciudades";
	// 				}
	// 			});
	// 		}
	// 	}
	// })

	// if (estadoCiudad == 0) {

	// 	$(this).removeClass('btn-success');
	// 	$(this).addClass('btn-danger');
	// 	$(this).html('Desactivado');
	// 	$(this).attr('estadoCiudad', 1);

	// }else{

	// 	$(this).addClass('btn-success');
	// 	$(this).removeClass('btn-danger');
	// 	$(this).html('Activado');
	// 	$(this).attr('estadoCiudad', 0);
	// }
})

