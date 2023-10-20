<?php


	require_once "conexion.php";

	class ModeloMenu{


		/*=============================================
	                     CREAR MENÚ           
		=============================================*/


		static public function mdlIngresarMenu($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(ciclo, perfil, nombre, link) VALUES (:ciclo, :perfil, :nombre, :link)");

			$stmt->bindParam(":ciclo", $datos["ciclo"], PDO::PARAM_STR);
			$stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
			$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":link", $datos["link"], PDO::PARAM_STR);

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

	}