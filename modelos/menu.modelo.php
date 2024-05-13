<?php


	require_once "conexion.php";

	class ModeloMenu{


		/*=============================================
	                     CREAR MENÚ           
		=============================================*/


		static public function mdlIngresarMenuDetalle($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(perfil, usuario_id, curso_id, materia_id) VALUES (:perfil, :usuario_id, :curso_id, :materia_id)");

			$stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
			$stmt->bindParam(":usuario_id", $datos["usuario_id"], PDO::PARAM_INT);
			$stmt->bindParam(":curso_id", $datos["curso_id"], PDO::PARAM_INT);
			$stmt->bindParam(":materia_id", $datos["materia_id"], PDO::PARAM_INT);

			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
	                     MOSTRAR MENÚ            
		=============================================*/

		static public function mdlMostrarMenu($tabla, $item, $valor){

			if ($item != null) {
				
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY nombre");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetchAll();

			}else{

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

				$stmt -> execute();

				return $stmt -> fetchAll();
			}

			$stmt -> close();
			$stmt = null;

		}

		/*=============================================
	                     MOSTRAR MENÚ DETALLE            
		=============================================*/

		static public function mdlMostrarMenuDetalle($tabla, $item, $valor){

			if ($item != null) {
				
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY nombre");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetchAll();

			}else{

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

				$stmt -> execute();

				return $stmt -> fetchAll();
			}

			$stmt -> close();
			$stmt = null;

		}


		/*=============================================
	    ACTUALIZAR MENÚ            
		=============================================*/

		static public function mdlActualizarMenu($tabla, $item1, $valor1, $item2, $valor2){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

			$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
			$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

			if ($stmt -> execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR MENÚ            
		=============================================*/

		static public function mdlEditarMenu($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET ciclo = :ciclo, 
												perfil = :perfil,  
												nombre = :nombre, 
												link = :link WHERE id_menu = :id_menu");

			$stmt->bindParam(":ciclo", $datos["ciclo"], PDO::PARAM_STR);
			$stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
			$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":link", $datos["link"], PDO::PARAM_STR);
			$stmt->bindParam(":id_menu", $datos["id_menu"], PDO::PARAM_STR);

			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
		BORRAR MENÚ            
		=============================================*/

		static public function mdlBorrarMenu($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_menu = :id_menu");

			$stmt -> bindParam(":id_menu", $datos, PDO::PARAM_INT);

			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
						BUSCAR MENU DETALLE
		=============================================*/

		static public function mdlBuscarMenuDetalle($usuario){

			$stmt = Conexion::conectar()->prepare("SELECT 
            menu_detalle.mend_id,
            menu_detalle.perfil,
			menu_detalle.usuario_id,
			menu_detalle.curso_id,
			menu_detalle.materia_id,
			menu_detalle.mend_permiso,
			menu_detalle.estado,
			cursos.id,
			cursos.menu,
			cursos.link
            FROM menu_detalle
            INNER JOIN cursos ON cursos.id = menu_detalle.curso_id
            WHERE menu_detalle.usuario_id = :usuario");

			$stmt -> bindParam(":usuario", $usuario, PDO::PARAM_INT);

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

	}