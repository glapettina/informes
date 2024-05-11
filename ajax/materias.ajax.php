<?php

	require_once "../controladores/materias.controlador.php";
	require_once "../modelos/materias.modelo.php";

	class AjaxMaterias{

		/*=============================================
						EDITAR MATERIA           
		=============================================*/

		public $idMateria;

		public function ajaxEditarMateria(){

			$item = "id_materia";
			$valor = $this->idMateria;

			$respuesta = ControladorMaterias::ctrMostrarMaterias($item, $valor);

			echo json_encode($respuesta);

		}		

		/*=============================================
						ACTIVAR MATERIA
		=============================================*/

		public $activarMateria;
		public $activarId;

		public function ajaxActivarMateria(){

			$tabla = "materias";

			$item1 = "estado";
			$valor1 = $this->activarMateria;

			$item2 = "id_materia";
			$valor2 = $this->activarId;

			$respuesta = ModeloMaterias::mdlActualizarMateria($tabla, $item1, $valor1, $item2, $valor2);

		}

	}

		/*=============================================
						ACTIVAR MATERIA
		=============================================*/

		if (isset($_POST["activarMateria"])) {
			
			$activarMateria = new AjaxMaterias();
			$activarMateria -> activarMateria = $_POST["activarMateria"];
			$activarMateria -> activarId = $_POST["activarId"];
			$activarMateria -> ajaxActivarMateria();

		}


		/*=============================================
					EDITAR MATERIA          
		=============================================*/

		if (isset($_POST["idMateria"])) {
			
			$materia = new AjaxMaterias();
			$materia -> idMateria = $_POST["idMateria"];
			$materia -> ajaxEditarMateria();
		}