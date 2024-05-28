<?php

	require_once "../controladores/menu.controlador.php";
	require_once "../modelos/menu.modelo.php";

	class AjaxMenu{

		/*=============================================
		EDITAR MENÚ DETALLE           
		=============================================*/

		public $idMenuDetalle;

		public function ajaxEditarMenuDetalle(){

			$item = "id_mend";
			$valor = $this->idMenuDetalle;

			$respuesta = ControladorMenu::ctrMostrarMenuDetalle($item, $valor);

			echo json_encode($respuesta);

		}		

		/*=============================================
		ACTIVAR MENÚ
		=============================================*/

		public $activarMenu;
		public $activarId;

		public function ajaxActivarMenu(){

			$tabla = "menu";

			$item1 = "estado";
			$valor1 = $this->activarMenu;

			$item2 = "id_menu";
			$valor2 = $this->activarId;

			$respuesta = Modelomenu::mdlActualizarMenu($tabla, $item1, $valor1, $item2, $valor2);

		}

	}

		/*=============================================
		ACTIVAR MENÚ
		=============================================*/

		if (isset($_POST["activarMenu"])) {
			
			$activarMenu = new AjaxMenu();
			$activarMenu -> activarMenu = $_POST["activarMenu"];
			$activarMenu -> activarId = $_POST["activarId"];
			$activarMenu -> ajaxActivarMenu();

		}


		/*=============================================
		EDITAR MENÚ          
		=============================================*/

		if (isset($_POST["mend_id"])) {
			
			$menu = new AjaxMenu();
			$menu -> idMenuDetalle = $_POST["mend_id"];
			$menu -> ajaxEditarMenuDetalle();
		}