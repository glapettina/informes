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
		
		 if ($_GET["materia"] == "Biología") {

		 	 $materia = "BIOLOGÍA";
			 $campo1 = 'aulico_biologia';
			 $campo2 = 'comportamiento_biologia';
			 $campo3 = 'evaluacion_biologia';
			 $campo4 = 'observa_biologia';

		 }	

		 if ($_GET["materia"] == "Dibujo Técnico") {

		   $materia = "DIBUJO TÉCNICO";
		   	 $campo1 = 'aulico_dibujo';
			 $campo2 = 'comportamiento_dibujo';
			 $campo3 = 'evaluacion_dibujo';
			 $campo4 = 'observa_dibujo';

	   	}
		

	   if ($_GET["materia"] == "Educación Física") {

			$materia = "EDUCACIÓN FÍSICA";
		   	$campo1 = 'aulico_edfisica';
			 $campo2 = 'comportamiento_edfisica';
			 $campo3 = 'evaluacion_edfisica';
			 $campo4 = 'observa_edfisica';

   		}
		
		if ($_GET["materia"] == "Educación para la Ciudadanía") {

		   $materia = "EDUCACIÓN PARA LA CIUDADANÍA";
		   $campo1 = 'aulico_ciudadania';
			 $campo2 = 'comportamiento_ciudadania';
			 $campo3 = 'evaluacion_ciudadania';
			 $campo4 = 'observa_ciudadania';

	   }	

	   if ($_GET["materia"] == "Física") {

		$materia = "FÍSICA";
		$campo1 = 'aulico_fisica';
		$campo2 = 'comportamiento_fisica';
		$campo3 = 'evaluacion_fisica';
		$campo4 = 'observa_fisica';

   		}	

		   if ($_GET["materia"] == "Geografía") {

			$materia = "GEOGRAFÍA";
			$campo1 = 'aulico_geografia';
			$campo2 = 'comportamiento_geografia';
			$campo3 = 'evaluacion_geografia';
			$campo4 = 'observa_geografia';

	   }	

	   

   if ($_GET["materia"] == "Historia") {

			$materia = "HISTORIA";
			$campo1 = 'aulico_historia';
			 $campo2 = 'comportamiento_historia';
			 $campo3 = 'evaluacion_historia';
			 $campo4 = 'observa_historia';

   }	

   if ($_GET["materia"] == "Inglés") {

			$materia = "INGLÉS";
			$campo1 = 'aulico_ingles';
			 $campo2 = 'comportamiento_ingles';
			 $campo3 = 'evaluacion_ingles';
			 $campo4 = 'observa_ingles';

	  }	

	  if ($_GET["materia"] == "Lengua y Literatura") {

				$materia = "LENGUA Y LITERATURA";
				$campo1 = 'aulico_lengua';
				 $campo2 = 'comportamiento_lengua';
				 $campo3 = 'evaluacion_lengua';
				 $campo4 = 'observa_lengua';
   }	

   if ($_GET["materia"] == "Matemática") {

	$materia = "MATEMÁTICA";
	$campo1 = 'aulico_matematica';
	$campo2 = 'comportamiento_matematica';
	$campo3 = 'evaluacion_matematica';
	$campo4 = 'observa_matematica';
   }	

   if ($_GET["materia"] == "Química") {

	$materia = "QUÍMICA";
	$campo1 = 'aulico_quimica';
	$campo2 = 'comportamiento_quimica';
	$campo3 = 'evaluacion_quimica';
	$campo4 = 'observa_quimica';

   }

   
   if ($_GET["materia"] == "Taller") {

	$materia = "TALLER";
	$campo1 = 'aulico_taller';
	$campo2 = 'comportamiento_taller';
	$campo3 = 'evaluacion_taller';
	$campo4 = 'observa_taller';
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


	if ($_GET["materia"] == "Biología") {

			$materia = "BIOLOGÍA";

			$aulico = $value["aulico_biologia"];
			$comportamiento = $value["comportamiento_biologia"];
			$evaluacion = $value["evaluacion_biologia"];
			$observa = $value["observa_biologia"];

		}

		if ($_GET["materia"] == "Dibujo Técnico") {

			$materia = "DIBUJO TÉCNICO";

			$$aulico = $value["aulico_dibujo"];
			$comportamiento = $value["comportamiento_dibujo"];
			$evaluacion = $value["evaluacion_dibujo"];
			$observa = $value["observa_dibujo"];

		}
		


		if ($_GET["materia"] == "Educación Física") {

			$materia = "EDUCACIÓN FÍSICA";

			$aulico = $value["aulico_edfisica"];
			$comportamiento = $value["comportamiento_edfisica"];
			$evaluacion = $value["evaluacion_edfisica"];
			$observa = $value["observa_edfisica"];

		}

		if ($_GET["materia"] == "Educación para la Ciudadanía") {

			$materia = "EDUCACIÓN PARA LA CIUDADANÍA";

			$aulico = $value["aulico_ciudadania"];
			$comportamiento = $value["comportamiento_ciudadania"];
			$evaluacion = $value["evaluacion_ciudadania"];
			$observa = $value["observa_ciudadania"];

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