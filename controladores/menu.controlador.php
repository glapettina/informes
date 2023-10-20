<?php


class ControladorMenu{

	/*=============================================
	            REGISTRO DE MENÚ            
	=============================================*/
	
	static public function ctrCrearMenu(){

		if (isset($_POST["nuevoCiclo"])) {
			
				
				$tabla = "menu";

				$datos = array("ciclo" => $_POST["nuevoCiclo"],
								"perfil" => $_POST["nuevoPerfil"],
								"nombre" => $_POST["nuevoNombre"], 
								"link" => $_POST["nuevoLink"]);

				$respuesta = ModeloMenu::mdlIngresarMenu($tabla, $datos);

				if ($respuesta == "ok") {
					
					echo '<script>

					swal({

						type: "success",
						title: "El menú ha sido creado correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false							

					}).then((result)=>{

						if(result.value){

							window.location = "menu";
							
							}

						});

				</script>';

				

			}else{

				echo '<script>

					swal({

						type: "error",
						title: "El menú no puede ir vacío",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false							

					}).then((result)=>{

						if(result.value){

							window.location = "menu";
							
							}

						})

				</script>';

			}
		}

	}


		/*=============================================
        MOSTRAR MENÚ            
		=============================================*/

		static public function ctrMostrarMenu($item, $valor){

			$tabla = "menu";

			$respuesta = ModeloMenu::mdlMostrarMenu($tabla, $item, $valor);

			return $respuesta;

			//var_dump($respuesta);			

		}


		/*=============================================
		EDITAR MENÚ
		=============================================*/

		static public function ctrEditarMenu(){

			if (isset($_POST["editarNombre"])) {
				
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ. ]+$/', $_POST["editarNombre"])) {
					
					$tabla = "menu";

					$datos = array("ciclo" => $_POST["editarCiclo"], 
									"perfil" => $_POST["editarPerfil"], 
									"nombre" => $_POST["editarCiudad"], 
									"link" => $_POST["editarLink"], 
									"id_menu" => $_POST["idMenu"]);

					$respuesta = ModeloMenu::mdlEditarMenu($tabla, $datos);

					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El mnú ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "menu";										
								}
							})

					</script>';

					}

				}else{

					echo '<script>

						swal({
							type: "error",
							title: "El menú no puede ir vacío o llevar caracteres especiales",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "menu";										
								}
							})

					</script>';
				}
			}
		}


		/*=============================================
		BORRAR MENÚ
		=============================================*/

		static public function ctrBorrarMenu(){

			if (isset($_GET["idMenu"])) {
				
				$tabla = "menu";
				$datos = $_GET["idMenu"];

				$respuesta = ModeloMenu::mdlBorrarMenu($tabla, $datos);

				if ($respuesta == "ok") {
					
					echo '<script>

						swal({
							type: "success",
							title: "El menú ha sido borrado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result) => {

								if(result.value){

									window.location = "menu";
								}
							})

					</script>';
				}
			}
		}

}