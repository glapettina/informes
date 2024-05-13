<?php


class ControladorMenu{

	/*=============================================
	            REGISTRO DE MENÚ DETALLE            
	=============================================*/
	
	static public function ctrCrearMenuDetalle(){

		if (isset($_POST["nuevoPerfil"])) {
			
				
				$tabla = "menu_detalle";

				$datos = array("perfil" => $_POST["nuevoPerfil"],
								"usuario_id" => $_POST["nuevoUsuario"],
								"curso_id" => $_POST["nuevoCurso"], 
								"materia_id" => $_POST["nuevoMateria"]);

				$respuesta = ModeloMenu::mdlIngresarMenuDetalle($tabla, $datos);

				if ($respuesta == "ok") {
					
					echo '<script>

					swal({

						type: "success",
						title: "El menú detalle ha sido creado correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false							

					}).then((result)=>{

						if(result.value){

							window.location = "menu-detalle";
							
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
        MOSTRAR MENÚ            
		=============================================*/

		static public function ctrMostrarMenuDetalle($item, $valor){

			$tabla = "menu_detalle";

			$respuesta = ModeloMenu::mdlMostrarMenuDetalle($tabla, $item, $valor);

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

		/*=============================================
						BUSCAR MENU DETALLE
		=============================================*/

		static public function ctrBuscarMenuDetalle($usuario){

			$respuesta = ModeloMenu::mdlBuscarMenuDetalle($usuario);

			return $respuesta;

			//var_dump($respuesta);

		}

}