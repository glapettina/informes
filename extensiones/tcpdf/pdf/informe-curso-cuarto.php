<?php

require_once "../../../controladores/informes.controlador.php";
require_once "../../../modelos/informes.modelo.php";

require_once "../../../controladores/cursos.controlador.php";
require_once "../../../modelos/cursos.modelo.php";


class imprimirReporte{


	public $idCurso;

	public function traerImpresionReporte(){

		// TRAEMOS LA INFORMACION DE LOS INFORMES

		if ($_GET["tabla"] == "primero") {
			
			$tablaInforme = "primero";
		}

		if ($_GET["tabla"] == "segundo") {
			
			$tablaInforme = "segundo";
		}

		if ($_GET["tabla"] == "tercero") {
			
			$tablaInforme = "tercero";
		}

		if ($_GET["tabla"] == "cuarto") {
			
			$tablaInforme = "cuarto";
		}

		if ($_GET["tabla"] == "quinto") {
			
			$tablaInforme = "quinto";
		}

		if ($_GET["tabla"] == "sexto") {
			
			$tablaInforme = "sexto";
		}



		
		$itemInforme = "id_curso";
		//$valorInforme = $this->idCurso;
		$valorInforme = $_GET["idCurso"];
		//$tablaInforme = "primero";
		$periodo = $_GET["periodo"];
		$verifica = true;

		$per = explode('/', $periodo);

		$per2 = $per[1];

		if ($per[0] == '01') {
			
			$titulo = 'MES: MAYO ' .$per2;
		}else{

			$titulo = 'MES: MAYO ' .$per2;
		}
		

		$respuestaInforme = ControladorInformes::ctrMostrarInformes($itemInforme, $valorInforme, $tablaInforme, $periodo, $verifica);

		$idCurso = $_GET["idCurso"];

		if ($_GET["materia"] == "Análisis Matemático") {

			$materia = "ANÁLISIS MATEMÁTICO";
		   $campo1 = 'aulico_analisis';
		   $campo2 = 'comportamiento_analisis';
		   $campo3 = 'evaluacion_analisis';
		   $campo4 = 'observa_analisis';

	   }
		
		 if ($_GET["materia"] == "Biología") {

		 	 $materia = "BIOLOGÍA";
			 $campo1 = 'aulico_biologia';
			 $campo2 = 'comportamiento_biologia';
			 $campo3 = 'evaluacion_biologia';
			 $campo4 = 'observa_biologia';

		 }	

		

	   if ($_GET["materia"] == "Educación Física") {

			$materia = "EDUCACIÓN FÍSICA";
		   	$campo1 = 'aulico_edfisica';
			 $campo2 = 'comportamiento_edfisica';
			 $campo3 = 'evaluacion_edfisica';
			 $campo4 = 'observa_edfisica';

   		}
		


	   if ($_GET["materia"] == "Física Aplicada") {

		$materia = "FÍSICA APLICADA";
		$campo1 = 'aulico_faplicada';
		$campo2 = 'comportamiento_faplicada';
		$campo3 = 'evaluacion_faplicada';
		$campo4 = 'observa_faplicada';

   		}	

	

   if ($_GET["materia"] == "Inglés Técnico") {

			$materia = "INGLÉS TÉCNICO";
			$campo1 = 'aulico_itecnico';
			$campo2 = 'comportamiento_itecnico';
			$campo3 = 'evaluacion_itecnico';
			$campo4 = 'observa_itecnico';

	  }	

	  if ($_GET["materia"] == "Lengua y Literatura") {

				$materia = "LENGUA Y LITERATURA";
				$campo1 = 'aulico_lengua';
				 $campo2 = 'comportamiento_lengua';
				 $campo3 = 'evaluacion_lengua';
				 $campo4 = 'observa_lengua';
   }	

   if ($_GET["materia"] == "Operaciones Unitarias") {

				$materia = "OPERACIONES UNITARIAS";
				$campo1 = 'aulico_unitarias';
				$campo2 = 'comportamiento_unitarias';
				$campo3 = 'evaluacion_unitarias';
				$campo4 = 'observa_unitarias';
   }	

   if ($_GET["materia"] == "Química Inorgánica") {

	$materia = "QUÍMICA INORGÁNICA";
	$campo1 = 'aulico_qinorganica';
	$campo2 = 'comportamiento_qinorganica';
	$campo3 = 'evaluacion_qinorganica';
	$campo4 = 'observa_qinorganica';

   }

   if ($_GET["materia"] == "Química Orgánica") {

	$materia = "QUÍMICA ORGÁNICA";
	$campo1 = 'aulico_qorganica';
	$campo2 = 'comportamiento_qorganica';
	$campo3 = 'evaluacion_qorganica';
	$campo4 = 'observa_qorganica';

   }

   
   if ($_GET["materia"] == "Seguridad e Higiene Industrial y Medio Ambiente") {

	$materia = "QUÍMICA GENERAL";
	$campo1 = 'aulico_sambiente';
	$campo2 = 'comportamiento_sambiente';
	$campo3 = 'evaluacion_sambiente';
	$campo4 = 'observa_sambiente';
}

if ($_GET["materia"] == "Tecnología de Control") {

	$materia = "ESTÁTICA";
	$campo1 = 'aulico_tcontrol';
	$campo2 = 'comportamiento_tcontrol';
	$campo3 = 'evaluacion_tcontrol';
	$campo4 = 'observa_tcontrol';
}

if ($_GET["materia"] == "T.P. de Química Inorgánica") {

	$materia = "T.P. DE QUÍMICA INORGÁNICA";
	$campo1 = 'aulico_tpinorganica';
	$campo2 = 'comportamiento_tpinorganica';
	$campo3 = 'evaluacion_tpinorganica';
	$campo4 = 'observa_tpinorganica';
}

if ($_GET["materia"] == "T.P. de Química Orgánica") {

	$materia = "T.P. DE QUÍMICA ORGÁNICA";
	$campo1 = 'aulico_tporganica';
	$campo2 = 'comportamiento_tporganica';
	$campo3 = 'evaluacion_tporganica';
	$campo4 = 'observa_tporganica';
}

if ($_GET["materia"] == "Trabajo y Pensamiento Crítico") {

	$materia = "TRABAJO Y PENSAMIENTO CRÍTICO";
	$campo1 = 'aulico_trabajo';
	$campo2 = 'comportamiento_trabajo';
	$campo3 = 'evaluacion_trabajo';
	$campo4 = 'observa_trabajo';
}

if ($_GET["materia"] == "Electrotecnia") {

	$materia = "ELECTROTECNIA";
	$campo1 = 'aulico_electrotecnia';
	$campo2 = 'comportamiento_electrotecnia';
	$campo3 = 'evaluacion_electrotecnia';
	$campo4 = 'observa_electrotecnia';
}

if ($_GET["materia"] == "Laboratorio de Mediciones Eléctricas") {

	$materia = "LABORATORIO DE MEDICIONES ELÉCTRICAS";
	$campo1 = 'aulico_melectricas';
	$campo2 = 'comportamiento_melectricas';
	$campo3 = 'evaluacion_melectricas';
	$campo4 = 'observa_melectricas';
}

if ($_GET["materia"] == "Mecánica Técnica") {

	$materia = "MECÁNICA TÉCNICA";
	$campo1 = 'aulico_mtecnica';
	$campo2 = 'comportamiento_mtecnica';
	$campo3 = 'evaluacion_mtecnica';
	$campo4 = 'observa_mtecnica';
}

if ($_GET["materia"] == "Resistencia de los Materiales") {

	$materia = "RESISTENCIA DE LOS MATERIALES";
	$campo1 = 'aulico_resistencia';
	$campo2 = 'comportamiento_resistencia';
	$campo3 = 'evaluacion_resistencia';
	$campo4 = 'observa_resistencia';
}

if ($_GET["materia"] == "Taller") {

	$materia = "TALLER";
	$campo1 = 'aulico_taller';
	$campo2 = 'comportamiento_taller';
	$campo3 = 'evaluacion_taller';
	$campo4 = 'observa_taller';
}

if ($_GET["materia"] == "Tecnología de los Materiales") {

	$materia = "TECNOLOGÍA DE LOS MATERIALES";
	$campo1 = 'aulico_tmateriales';
	$campo2 = 'comportamiento_tmateriales';
	$campo3 = 'evaluacion_tmateriales';
	$campo4 = 'observa_tmateriales';

   }
   
   

		


		// TRAEMOS LA INFORMACION DE LOS CURSOS

		$itemCurso = "id";
		$valorCurso = $_GET["idCurso"];
		$tablaCurso = "primero";

		$respuestaCurso = ControladorCursos::ctrMostrarCursos($itemCurso, $valorCurso, $tablaCurso);

		$curso = $respuestaCurso["nombre"];
		$turno = $respuestaCurso["turno"];
	


require_once('tcpdf_include.php');

//$pdf=new FPDF(‘L’,’cm’,’A4’);

$pdf = new TCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);

$pdf->setPrintHeader(false); //Ahora si imprimirá cabecera
$pdf->setPrintFooter(true); //Ahora si imprimirá pie de página


// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, 10, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

$pdf->startPageGroup();

$pdf->AddPage();


//--------------------------------------------------------------------------------

$bloque1 = <<<EOF

	<table>

		<tr>

			<td style="width: 780px"><img src="images/header2.png"></td>

			<td style="background-color:white; width:606px">

				<div style="font-size:14px; text-align: right; line-height:10px;">

					<br>	
					CENTRO DE EDUCACIÓN TÉCNICA Nº 13					

				</div>

			</td>

			
			
		</tr>
		

	</table>

EOF;


$pdf->writeHTML($bloque1, false, false, false, false, '');

//----------------------------------------------------------------------------------

$bloque2 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		<tr>

			<td style="width:540px"><img src="images/backFact2.jpg"></td>

		</tr>

		<tr>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:780px">

				<br>

				<strong>$titulo - ESPACIO CURRICULAR: $materia</strong>


			</td>

			

			
			

		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque2, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------

foreach ($respuestaInforme as $key => $value) {


	if ($_GET["materia"] == "Análisis Matemático") {

		$materia = "ANÁLISIS MATEMÁTICO";

		$aulico = $value["aulico_analisis"];
		$comportamiento = $value["comportamiento_analisis"];
		$evaluacion = $value["evaluacion_analisis"];
		$observa = $value["observa_analisis"];

	}

	if ($_GET["materia"] == "Biología") {

			$materia = "BIOLOGÍA";

			$aulico = $value["aulico_biologia"];
			$comportamiento = $value["comportamiento_biologia"];
			$evaluacion = $value["evaluacion_biologia"];
			$observa = $value["observa_biologia"];

		}


		


		if ($_GET["materia"] == "Educación Física") {

			$materia = "EDUCACIÓN FÍSICA";

			$aulico = $value["aulico_edfisica"];
			$comportamiento = $value["comportamiento_edfisica"];
			$evaluacion = $value["evaluacion_edfisica"];
			$observa = $value["observa_edfisica"];

		}

		if ($_GET["materia"] == "Física Aplicada") {

			$materia = "FÍSICA APLICADA";

			$aulico = $value["aulico_faplicada"];
			$comportamiento = $value["comportamiento_faplicada"];
			$evaluacion = $value["evaluacion_faplicada"];
			$observa = $value["observa_faplicada"];

		}

		if ($_GET["materia"] == "Física") {

			$materia = "FÍSICA";

			$aulico = $value["aulico_fisica"];
			$comportamiento = $value["comportamiento_fisica"];
			$evaluacion = $value["evaluacion_fisica"];
			$observa = $value["observa_fisica"];

		}

		if ($_GET["materia"] == "Geografía") {

			$materia = "GEOGRAFÍA";

			$aulico = $value["aulico_geografia"];
			$comportamiento = $value["comportamiento_geografia"];
			$evaluacion = $value["evaluacion_geografia"];
			$observa = $value["observa_geografia"];

		}

		if ($_GET["materia"] == "Historia") {

			$materia = "HISTORIA";

			$aulico = $value["aulico_historia"];
			$comportamiento = $value["comportamiento_historia"];
			$evaluacion = $value["evaluacion_historia"];
			$observa = $value["observa_historia"];

		}

		if ($_GET["materia"] == "Inglés") {

			$materia = "INGLÉS";

			$aulico = $value["aulico_ingles"];
			$comportamiento = $value["comportamiento_ingles"];
			$evaluacion = $value["evaluacion_ingles"];
			$observa = $value["observa_ingles"];

		}

		if ($_GET["materia"] == "Lengua y Literatura") {

			$materia = "LENGUA Y LITERATURA";

			$aulico = $value["aulico_lengua"];
			$comportamiento = $value["comportamiento_lengua"];
			$evaluacion = $value["evaluacion_lengua"];
			$observa = $value["observa_lengua"];

		}

		if ($_GET["materia"] == "Matemática") {

			$materia = "MATEMÁTICA";

			$aulico = $value["aulico_matematica"];
			$comportamiento = $value["comportamiento_matematica"];
			$evaluacion = $value["evaluacion_matematica"];
			$observa = $value["observa_matematica"];

		}

		if ($_GET["materia"] == "Química") {

			$materia = "QUÍMICA";

			$aulico = $value["aulico_quimica"];
			$comportamiento = $value["comportamiento_quimica"];
			$evaluacion = $value["evaluacion_quimica"];
			$observa = $value["observa_quimica"];

		}

		if ($_GET["materia"] == "Taller") {

			$materia = "TALLER";

			$aulico = $value["aulico_taller"];
			$comportamiento = $value["comportamiento_taller"];
			$evaluacion = $value["evaluacion_taller"];
			$observa = $value["observa_taller"];

		}

		if ($_GET["materia"] == "Química General") {

			$materia = "QUÍMICA GENERAL";

			$aulico = $value["aulico_quimica_general"];
			$comportamiento = $value["comportamiento_quimica_general"];
			$evaluacion = $value["evaluacion_quimica_general"];
			$observa = $value["observa_quimica_general"];

		}

		if ($_GET["materia"] == "Estática") {

			$materia = "ESTÁTICA";

			$aulico = $value["aulico_estatica"];
			$comportamiento = $value["comportamiento_estatica"];
			$evaluacion = $value["evaluacion_estatica"];
			$observa = $value["observa_estatica"];

		}

//----------------------------------------------------------------------------------

$bloque3 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		

		<tr>

			<td style="text-align: center; border: 1px solid #666; background-color:#C2BDBC;; width:260px">

				<br>

				Estudiante


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:#C2BDBC;; width:260px">

				<br>

				Agrupamiento


			</td>		

			<td style="text-align: center; border: 1px solid #666; background-color:#C2BDBC;; width:260px">

				<br>

				Turno


			</td>			

		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque3, false, false, false, false, '');

//--------------------------------------------------------





//----------------------------------------------------------------------------------


$bloque4 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		

		<tr>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:260px">

				<br>

				$value[nombre]


			</td>



			<td style="text-align: center; border: 1px solid #666; background-color:white; width:260px">

				<br>

				$curso


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:260px">

				<br>

				$turno


			</td>


		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque4, false, false, false, false, '');

//--------------------------------------------------------


//----------------------------------------------------------------------------------


$bloque5 = <<<EOF

	<table style="font-size:8px; padding:5px 10px;">

	

		

		<tr>

			<td style="font-size: 7px; text-align: center; border: 1px solid #666; background-color:#C2BDBC; width:180px">

				<br>

				ESPACIO CURRICULAR


			</td>




			<td style="font-size: 7px; text-align: center; border: 1px solid #666; background-color:#C2BDBC; width:100px">

				<br>

				TRABAJO AÚLICO


			</td>
			<td style="font-size: 7px; text-align: center; border: 1px solid #666; background-color:#C2BDBC; width:100px">

				<br>

				COMPORTAMIENTO


			</td>

			<td style="font-size: 7px; text-align: center; border: 1px solid #666; background-color:#C2BDBC; width:100px">

				<br>

				EVALUACIÓN


			</td>

			<td style="font-size: 7px; text-align: center; border: 1px solid #666; background-color:#C2BDBC; width:300px">

				<br>

				OBSERVACIONES

			</td>	


		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque5, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque6 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

	

		

		<tr>

			<td style="font-size: 7px; text-align: center; border: 1px solid #666; background-color:white; width:180px">

				<br>

				$materia


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$aulico

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$comportamiento

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$evaluacion

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:300px">

				<br>

				$observa


			</td>

		</tr>

		<tr>

			<td style="width:780px"><img src="images/backFact2.jpg"></td>

		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque6, false, false, false, false, '');

}

//--------------------------------------------------------

//SALIDA DEL ARCHIVO

$pdf->Output('informe_materia_'.$materia.'.pdf');


}
}

$reporte = new imprimirReporte();
$reporte -> id = $_GET["idCurso"];
$reporte -> informe = $_GET["informe"];
$reporte -> materia = $_GET["materia"];
$reporte -> traerImpresionReporte();


?>	