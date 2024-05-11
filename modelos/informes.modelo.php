<?php

	require_once "conexion.php";

	class ModeloInformes{


	
		/*=============================================
		MOSTRAR INFORMES CICLO BÁSICO
		=============================================*/

		static public function mdlMostrarInformes($item, $valor, $tabla, $periodo, $verifica){

			if ($item != null && $verifica == false) {
				
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE periodo = '$periodo' AND $item = :$item ORDER BY nombre");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetch();

			}else if($item != null && $verifica == true){

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE periodo = '$periodo' AND $item = :$item AND estado = 1 ORDER BY nombre");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetchAll();


			}else{

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY nombre");

				$stmt -> execute();

				return $stmt -> fetchAll();

			}

			$stmt -> close();

			$stmt = null;
		}





		/*=============================================
		MOSTRAR INFORMES ORIENTACIÓN 
		=============================================*/

		static public function mdlMostrarInformesOrientacion($item, $valor1, $valor2, $valor3, $valor4, $tabla, $periodo, $modalidad, $verifica){

			if ($item != null && $verifica == false) {
				
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE periodo = '$periodo' AND $item = :$item");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetch();

			}else if($item != null && $verifica == true && $valor4 == 0){

				//$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = $valor1 OR $item = $valor2 OR $item = $valor3 AND modalidad = $modalidad AND estado = 1");

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item IN ($valor1, $valor2, $valor3) AND estado = 1 AND modalidad = '$modalidad' AND periodo = '$periodo'");

				//select * from tercero where id_curso IN (7, 8, 13) AND modalidad = 'Turismo' AND estado = 1;


				$stmt -> bindParam(":".$item, $valor1, PDO::PARAM_STR);
				$stmt -> bindParam(":".$item, $valor2, PDO::PARAM_STR);
				$stmt -> bindParam(":".$item, $valor3, PDO::PARAM_STR);


				$stmt -> execute();

				return $stmt -> fetchAll();


			}else if($item != null && $verifica == true && $valor4 != 0){


				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item IN ($valor1, $valor2, $valor3, $valor4) AND estado = 1 AND modalidad = '$modalidad' AND periodo = '$periodo'");

				//$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_curso >= $valor1 OR id_curso <= $valor2 OR id_curso <= $valor3 OR id_curso <= $valor4 AND modalidad = $modalidad AND estado = 1");

				$stmt -> bindParam(":".$item, $valor1, PDO::PARAM_STR);
				$stmt -> bindParam(":".$item, $valor2, PDO::PARAM_STR);
				$stmt -> bindParam(":".$item, $valor3, PDO::PARAM_STR);
				$stmt -> bindParam(":".$item, $valor4, PDO::PARAM_STR);


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
		EDITAR INFORME PRIMERO            
		=============================================*/

		static public function mdlEditarInformePrimero($tabla, $datos, $aulico, $comportamiento, $evaluacion, $observa, $campo1, $campo2, $campo3, $campo4){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $campo1 = :$aulico, $campo2 = :$comportamiento, $campo3 = :$evaluacion, $campo4 = :$observa, id_usuario = :id_usuario WHERE id = :id");

			//var_dump($tres);

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":".$aulico, $datos["aulico"], PDO::PARAM_STR);
			$stmt->bindParam(":".$comportamiento, $datos["comportamiento"], PDO::PARAM_STR);
			$stmt->bindParam(":".$evaluacion, $datos["evaluacion"], PDO::PARAM_STR);
			$stmt->bindParam(":".$observa, $datos["observacion"], PDO::PARAM_STR); 
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);
			


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME SOCIALES            
		=============================================*/

		static public function mdlEditarInformeSociales($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_sociales = :saberes_sociales, aprecia_sociales = :aprecia_sociales, asistencia_sociales = :asistencia_sociales, observa_sociales = :observa_sociales, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_sociales", $datos["saberes_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_sociales", $datos["aprecia_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_sociales", $datos["asistencia_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_sociales", $datos["observa_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME LENGUA            
		=============================================*/

		static public function mdlEditarInformeLengua($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_lengua = :saberes_lengua, aprecia_lengua = :aprecia_lengua, asistencia_lengua = :asistencia_lengua, observa_lengua = :observa_lengua, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_lengua", $datos["saberes_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_lengua", $datos["aprecia_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_lengua", $datos["asistencia_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_lengua", $datos["observa_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME MATEMATICA            
		=============================================*/

		static public function mdlEditarInformeMatematica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_matematica = :saberes_matematica, aprecia_matematica = :aprecia_matematica, asistencia_matematica = :asistencia_matematica, observa_matematica = :observa_matematica, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_matematica", $datos["saberes_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_matematica", $datos["aprecia_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_matematica", $datos["asistencia_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_matematica", $datos["observa_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME INGLES            
		=============================================*/

		static public function mdlEditarInformeIngles($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_ingles = :saberes_ingles, aprecia_ingles = :aprecia_ingles, asistencia_ingles = :asistencia_ingles, observa_ingles = :observa_ingles, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_ingles", $datos["saberes_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_ingles", $datos["aprecia_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_ingles", $datos["asistencia_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_ingles", $datos["observa_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
		EDITAR INFORME EDUCACIÓN FÍSICA            
		=============================================*/

		static public function mdlEditarInformeFisica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_fisica = :saberes_fisica, aprecia_fisica = :aprecia_fisica, asistencia_fisica = :asistencia_fisica, observa_fisica = :observa_fisica, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_fisica", $datos["saberes_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_fisica", $datos["aprecia_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_fisica", $datos["asistencia_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_fisica", $datos["observa_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME EDUCACIÓN ARTÍSTICA            
		=============================================*/

		static public function mdlEditarInformeArtistica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_artistica = :saberes_artistica, aprecia_artistica = :aprecia_artistica, asistencia_artistica = :asistencia_artistica, observa_artistica = :observa_artistica, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_artistica", $datos["saberes_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_artistica", $datos["aprecia_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_artistica", $datos["asistencia_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_artistica", $datos["observa_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME DESARROLLO (TURISMO)            
		=============================================*/

		static public function mdlEditarInformeDesarrollo($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_desarrollo = :saberes_desarrollo, aprecia_desarrollo = :aprecia_desarrollo, asistencia_desarrollo = :asistencia_desarrollo, observa_desarrollo = :observa_desarrollo, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_desarrollo", $datos["saberes_desarrollo"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_desarrollo", $datos["aprecia_desarrollo"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_desarrollo", $datos["asistencia_desarrollo"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_desarrollo", $datos["observa_desarrollo"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME INTRODUCCION (TURISMO)           
		=============================================*/

		static public function mdlEditarInformeIntroduccion($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_introduccion = :saberes_introduccion, aprecia_introduccion = :aprecia_introduccion, asistencia_introduccion = :asistencia_introduccion, observa_introduccion = :observa_introduccion, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_introduccion", $datos["saberes_introduccion"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_introduccion", $datos["aprecia_introduccion"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_introduccion", $datos["asistencia_introduccion"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_introduccion", $datos["observa_introduccion"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
		EDITAR INFORME AMBIENTE (TURISMO)           
		=============================================*/

		static public function mdlEditarInformeAmbiente($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_ambiente = :saberes_ambiente, aprecia_ambiente = :aprecia_ambiente, asistencia_ambiente = :asistencia_ambiente, observa_ambiente = :observa_ambiente, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_ambiente", $datos["saberes_ambiente"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_ambiente", $datos["aprecia_ambiente"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_ambiente", $datos["asistencia_ambiente"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_ambiente", $datos["observa_ambiente"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
		EDITAR INFORME GENERACION (TURISMO)           
		=============================================*/

		static public function mdlEditarInformeGeneracion($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_generacion = :saberes_generacion, aprecia_generacion = :aprecia_generacion, asistencia_generacion = :asistencia_generacion, observa_generacion = :observa_generacion, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_generacion", $datos["saberes_generacion"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_generacion", $datos["aprecia_generacion"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_generacion", $datos["asistencia_generacion"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_generacion", $datos["observa_generacion"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME PRODUCCION (TURISMO)           
		=============================================*/

		static public function mdlEditarInformeProduccion($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_produccion = :saberes_produccion, aprecia_produccion = :aprecia_produccion, asistencia_produccion = :asistencia_produccion, observa_produccion = :observa_produccion, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_produccion", $datos["saberes_produccion"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_produccion", $datos["aprecia_produccion"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_produccion", $datos["asistencia_produccion"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_produccion", $datos["observa_produccion"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
		EDITAR INFORME COMUNICACION (TURISMO)           
		=============================================*/

		static public function mdlEditarInformeComunicacion($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_comunicacion = :saberes_comunicacion, aprecia_comunicacion = :aprecia_comunicacion, asistencia_comunicacion = :asistencia_comunicacion, observa_comunicacion = :observa_comunicacion, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_comunicacion", $datos["saberes_comunicacion"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_comunicacion", $datos["aprecia_comunicacion"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_comunicacion", $datos["asistencia_comunicacion"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_comunicacion", $datos["observa_comunicacion"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME PROYECTO (TURISMO)           
		=============================================*/

		static public function mdlEditarInformeProyecto($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_proyecto = :saberes_proyecto, aprecia_proyecto = :aprecia_proyecto, asistencia_proyecto = :asistencia_proyecto, observa_proyecto = :observa_proyecto, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_proyecto", $datos["saberes_proyecto"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_proyecto", $datos["aprecia_proyecto"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_proyecto", $datos["asistencia_proyecto"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_proyecto", $datos["observa_proyecto"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME TALLER (TURISMO)           
		=============================================*/

		static public function mdlEditarInformeTaller($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_taller = :saberes_taller, aprecia_taller = :aprecia_taller, asistencia_taller = :asistencia_taller, observa_taller = :observa_taller, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_taller", $datos["saberes_taller"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_taller", $datos["aprecia_taller"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_taller", $datos["asistencia_taller"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_taller", $datos["observa_taller"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}



		/*=============================================
		EDITAR INFORME APRECIACION (ARTE - MUSICA)            
		=============================================*/

		static public function mdlEditarInformeApreciacion($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_apreciacion = :saberes_apreciacion, aprecia_apreciacion = :aprecia_apreciacion, asistencia_apreciacion = :asistencia_apreciacion, observa_apreciacion = :observa_apreciacion, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_apreciacion", $datos["saberes_apreciacion"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_apreciacion", $datos["aprecia_apreciacion"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_apreciacion", $datos["asistencia_apreciacion"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_apreciacion", $datos["observa_apreciacion"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME LENGUAJE 3            
		=============================================*/

		static public function mdlEditarInformeLenguaje3($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_lenguaje3 = :saberes_lenguaje3, aprecia_lenguaje3 = :aprecia_lenguaje3, asistencia_lenguaje3 = :asistencia_lenguaje3, observa_lenguaje3 = :observa_lenguaje3, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_lenguaje3", $datos["saberes_lenguaje3"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_lenguaje3", $datos["aprecia_lenguaje3"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_lenguaje3", $datos["asistencia_lenguaje3"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_lenguaje3", $datos["observa_lenguaje3"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME LENGUAJE 4 (ARTE - MUSICA)           
		=============================================*/

		static public function mdlEditarInformeLenguaje4($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_lenguaje4 = :saberes_lenguaje4, aprecia_lenguaje4 = :aprecia_lenguaje4, asistencia_lenguaje4 = :asistencia_lenguaje4, observa_lenguaje4 = :observa_lenguaje4, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_lenguaje4", $datos["saberes_lenguaje4"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_lenguaje4", $datos["aprecia_lenguaje4"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_lenguaje4", $datos["asistencia_lenguaje4"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_lenguaje4", $datos["observa_lenguaje4"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME CONJUNTO 4 (ARTE - MUSICA)           
		=============================================*/

		static public function mdlEditarInformeConjunto4($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_conjunto4 = :saberes_conjunto4, aprecia_conjunto4 = :aprecia_conjunto4, asistencia_conjunto4 = :asistencia_conjunto4, observa_conjunto4 = :observa_conjunto4, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_conjunto4", $datos["saberes_conjunto4"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_conjunto4", $datos["aprecia_conjunto4"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_conjunto4", $datos["asistencia_conjunto4"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_conjunto4", $datos["observa_conjunto4"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME VOCAL 4 (ARTE - MUSICA)           
		=============================================*/

		static public function mdlEditarInformeVocal4($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_vocal4 = :saberes_vocal4, aprecia_vocal4 = :aprecia_vocal4, asistencia_vocal4 = :asistencia_vocal4, observa_vocal4 = :observa_vocal4, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_vocal4", $datos["saberes_vocal4"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_vocal4", $datos["aprecia_vocal4"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_vocal4", $datos["asistencia_vocal4"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_vocal4", $datos["observa_vocal4"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR LENGUAJE 5 (ARTE - MUSICA)           
		=============================================*/

		static public function mdlEditarInformeLenguaje5($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_lenguaje5 = :saberes_lenguaje5, aprecia_lenguaje5 = :aprecia_lenguaje5, asistencia_lenguaje5 = :asistencia_lenguaje5, observa_lenguaje5 = :observa_lenguaje5, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_lenguaje5", $datos["saberes_lenguaje5"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_lenguaje5", $datos["aprecia_lenguaje5"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_lenguaje5", $datos["asistencia_lenguaje5"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_lenguaje5", $datos["observa_lenguaje5"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR MUSICA (ARTE - MUSICA)           
		=============================================*/

		static public function mdlEditarInformeMusica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_musica = :saberes_musica, aprecia_musica = :aprecia_musica, asistencia_musica = :asistencia_musica, observa_musica = :observa_musica, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_musica", $datos["saberes_musica"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_musica", $datos["aprecia_musica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_musica", $datos["asistencia_musica"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_musica", $datos["observa_musica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR VOCAL 5 (ARTE - MUSICA)           
		=============================================*/

		static public function mdlEditarInformeVocal5($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_vocal5 = :saberes_vocal5, aprecia_vocal5 = :aprecia_vocal5, asistencia_vocal5 = :asistencia_vocal5, observa_vocal5 = :observa_vocal5, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_vocal5", $datos["saberes_vocal5"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_vocal5", $datos["aprecia_vocal5"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_vocal5", $datos["asistencia_vocal5"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_vocal5", $datos["observa_vocal5"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR TECNOLOGIA (ARTE - MUSICA)           
		=============================================*/

		static public function mdlEditarInformeTecnologia($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_tecnologia = :saberes_tecnologia, aprecia_tecnologia = :aprecia_tecnologia, asistencia_tecnologia = :asistencia_tecnologia, observa_tecnologia = :observa_tecnologia, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_tecnologia", $datos["saberes_tecnologia"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_tecnologia", $datos["aprecia_tecnologia"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_tecnologia", $datos["asistencia_tecnologia"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_tecnologia", $datos["observa_tecnologia"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}



		/*=============================================
		EDITAR CONJUNTO 5 (ARTE - MUSICA)           
		=============================================*/

		static public function mdlEditarInformeConjunto5($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_conjunto5 = :saberes_conjunto5, aprecia_conjunto5 = :aprecia_conjunto5, asistencia_conjunto5 = :asistencia_conjunto5, observa_conjunto5 = :observa_conjunto5, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_conjunto5", $datos["saberes_conjunto5"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_conjunto5", $datos["aprecia_conjunto5"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_conjunto5", $datos["asistencia_conjunto5"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_conjunto5", $datos["observa_conjunto5"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}




		/*=============================================
	    ACTUALIZAR ALUMNO            
		=============================================*/

		static public function mdlActualizarAlumno($tabla, $item1, $valor1, $item2, $valor2){

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
				
	}