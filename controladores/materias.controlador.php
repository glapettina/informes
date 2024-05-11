<?php


class ControladorMaterias{

	/*=============================================
	            REGISTRO DE MATERIA            
	=============================================*/
	
	static public function ctrCrearMateria(){

		if (isset($_POST["nuevoNombre"])) {
			
				
				$tabla = "materias";

				$datos = array("nombre" => $_POST["nuevoNombre"], 
								"ciclo" => $_POST["nuevoCiclo"]);

				$respuesta = ModeloMaterias::mdlIngresarMateria($tabla, $datos);

				if ($respuesta == "ok") {
					
					echo '<script>

					swal({

						type: "success",
						title: "La materia ha sido creada correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false							

					}).then((result)=>{

						if(result.value){

							window.location = "materias";
							
							}

						});

				</script>';

				

			}else{

				echo '<script>

					swal({

						type: "error",
						title: "La materia no puede ir vacío",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false							

					}).then((result)=>{

						if(result.value){

							window.location = "materias";
							
							}

						})

				</script>';

			}
		}

	}


		/*=============================================
        				MOSTRAR MATERIAS            
		=============================================*/

		static public function ctrMostrarMaterias($item, $valor){

			$tabla = "materias";

			$respuesta = ModeloMaterias::mdlMostrarMaterias($tabla, $item, $valor);

			return $respuesta;
		}


		/*=============================================
					EDITAR MATERIA
		=============================================*/

		static public function ctrEditarMateria(){

			if (isset($_POST["editarMateria"])) {
				
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ. ]+$/', $_POST["editarMateria"])) {
					
					$tabla = "materias";

					$datos = array("nombre" => $_POST["editarMateria"], "ciclo" => $_POST["editarCiclo"], "id_materia" => $_POST["idMateria"]);

					$respuesta = ModeloMaterias::mdlEditarMateria($tabla, $datos);

					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "La materia ha sido modificada correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "materias";										
								}
							})

					</script>';

					}

				}else{

					echo '<script>

						swal({
							type: "error",
							title: "La materia no puede ir vacío o llevar caracteres especiales",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "materias";										
								}
							})

					</script>';
				}
			}
		}


		/*=============================================
						BORRAR MATERIA
		=============================================*/

		static public function ctrBorrarMateria(){

			if (isset($_GET["idMateria"])) {
				
				$tabla = "materias";
				$datos = $_GET["idMateria"];

				$respuesta = ModeloMaterias::mdlBorrarMateria($tabla, $datos);

				if ($respuesta == "ok") {
					
					echo '<script>

						swal({
							type: "success",
							title: "La materia ha sido borrada correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result) => {

								if(result.value){

									window.location = "materias";
								}
							})

					</script>';
				}
			}
		}

		/*=============================================
						BUSCAR MATERIA
		=============================================*/

		static public function ctrBuscarMateria($docente){

			$respuesta = ModeloMaterias::mdlBuscarMateria($docente);

			return $respuesta;

			//var_dump($respuesta["materia"]);

		}

}