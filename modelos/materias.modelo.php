<?php


	require_once "conexion.php";

	class Modelomaterias{


		/*=============================================
	                     CREAR MATERIA           
		=============================================*/


		static public function mdlIngresarMateria($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre) VALUES (:nombre)");

			$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);

			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
	                     MOSTRAR MATERIAS            
		=============================================*/

		static public function mdlMostrarMaterias($tabla, $item, $valor){

			if ($item != null) {
				
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY nombre ASC");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetch();

			}else{

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY nombre ASC");

				$stmt -> execute();

				return $stmt -> fetchAll();
			}

			$stmt -> close();
			$stmt = null;

		}


		/*=============================================
	    				ACTUALIZAR MATERIA            
		=============================================*/

		static public function mdlActualizarMateria($tabla, $item1, $valor1, $item2, $valor2){

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
						EDITAR MATERIA            
		=============================================*/

		static public function mdlEditarMateria($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre WHERE id_materia = :id_materia");

			$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":id_materia", $datos["id_materia"], PDO::PARAM_STR);

			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
						BORRAR MATERIA            
		=============================================*/

		static public function mdlBorrarMateria($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_materia = :id_materia");

			$stmt -> bindParam(":id_materia", $datos, PDO::PARAM_INT);

			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
						BUSCAR MATERIA
		=============================================*/

		static public function mdlBuscarMateria($docente, $ncurso){

			$stmt = Conexion::conectar()->prepare("SELECT 
            usuarios.id,
            usuarios.nombre,
			materias.id_materia,
            materias.nombre AS materia,
            menu_detalle.mend_id,
            menu_detalle.usuario_id,
            menu_detalle.curso_id,
            menu_detalle.materia_id,
			cursos.id,
			cursos.nombre,
			cursos.turno
            FROM usuarios
            INNER JOIN menu_detalle ON usuarios.id = menu_detalle.usuario_id
            INNER JOIN materias ON menu_detalle.materia_id = materias.id_materia
			INNER JOIN cursos ON menu_detalle.curso_id = cursos.id
            WHERE usuarios.id = :docente AND cursos.id = :ncurso ");

				$stmt -> bindParam(":docente", $docente, PDO::PARAM_INT);
				$stmt -> bindParam(":ncurso", $ncurso, PDO::PARAM_INT);

				$stmt -> execute();

				return $stmt -> fetch();

		}

	}