<?php

require_once "../../../controladores/informes.controlador.php";
require_once "../../../modelos/informes.modelo.php";

require_once "../../../controladores/cursos.controlador.php";
require_once "../../../modelos/cursos.modelo.php";


class imprimirReporte{


	public $id;

	public function traerImpresionReporte(){


		

		// TRAEMOS LA INFORMACION DE LOS INFORMES

		if ($_GET["tabla"] == "sexto") {
			
			$tablaInforme = "sexto";
		}


		$itemInforme = "id";
		$valorInforme = $this->id;
		$periodo = $_GET["periodo"];
		$modal = $_GET["modalidad"];

		//$tablaInforme = "primero";
		$verifica = false;

		$per = explode('/', $periodo);

		$per2 = $per[1];

		if ($per[0] == '01') {
			
			$titulo = 'CENTRO DE EDUCACIÓN TÉCNICA Nº 13 - INFORME DE AVANCE - MAYO ' .$per2;
		}else{

			$titulo = 'CENTRO DE EDUCACIÓN TÉCNICA Nº 13 - INFORME DE AVANCE - MAYO ' .$per2;
		}
		

		$respuestaInforme = ControladorInformes::ctrMostrarInformes($itemInforme, $valorInforme, $tablaInforme, $periodo, $verifica);

		$nombre = $respuestaInforme["nombre"];
		$idCurso = $respuestaInforme["id_curso"];
		$modalidad = $respuestaInforme["modalidad"];
		

		// TRAEMOS LA INFORMACION DE LOS CURSOS

		$itemCurso = "id";
		$valorCurso = $respuestaInforme["id_curso"];
		$tablaCurso = "sexto";

		$respuestaCurso = ControladorCursos::ctrMostrarCursos($itemCurso, $valorCurso, $tablaCurso);

		$curso = $respuestaCurso["nombre"];
		$turno = $respuestaCurso["turno"];
	


require_once('tcpdf_include.php');


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

// set auto page breaks
//$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->startPageGroup();

$pdf->AddPage();


//--------------------------------------------------------------------------------

$bloque1 = <<<EOF

	<table>

		<tr>

			<td style="width: 760px"><img src="images/header2.png"></td>

			
			
			
		</tr>
		

	</table>

EOF;


$pdf->writeHTML($bloque1, false, false, false, false, '');

//----------------------------------------------------------------------------------

$bloque2 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		<tr>

			<td style="width:530px"><img src="images/backFact2.jpg"></td>

		</tr>

		<tr>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:760px">

				<br>

				<strong>$titulo</strong>


			</td>


		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque2, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------

//----------------------------------------------------------------------------------

$bloque3 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		

		<tr>

			<td style="text-align: center; border: 1px solid #666; background-color:#C2BDBC;; width:330px">

				<br>

				Estudiante


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:#C2BDBC;; width:143px">

				<br>

				Agrupamiento


			</td>		

			<td style="text-align: center; border: 1px solid #666; background-color:#C2BDBC;; width:143px">

				<br>

				Turno


			</td>			

			<td style="text-align: center; border: 1px solid #666; background-color:#C2BDBC;; width:144px">

			<br>

			Orientación


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

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:330px">

				<br>

				$nombre


			</td>



			<td style="text-align: center; border: 1px solid #666; background-color:white; width:143px">

				<br>

				$curso


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:143px">

				<br>

				$turno


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:144px">

			<br>

				$modalidad


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

			<td style="width:780px"><img src="images/backFact2.jpg"></td>

		</tr>

		

		<tr>

			<td style="font-size: 7px; text-align: center; border: 1px solid #666; background-color:#C2BDBC; width:180px">

				<br>

				ÁREA CURRICULAR


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

			<td style="font-size: 7px; text-align: center; border: 1px solid #666; background-color:#C2BDBC; width:280px">

				<br>

				OBSERVACIONES

			</td>	



		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque5, false, false, false, false, '');

//--------------------------------------------------------

if ($modalidad == "Alimentación"){

//----------------------------------------------------------------------------------


$bloque6 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

	

		

		<tr>

			<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

				<br>

				BROMATOLOGÍA Y SISTEMAS DE GESTIÓN DE CALIDAD


			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_bromatologia]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_bromatologia]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_bromatologia]

			</td>

			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_bromatologia]

			</td>	



		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque6, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque7 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

	

		

		<tr>

			<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

				<br>

				COMUNICACIÓN ORAL Y ESCRITA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_comunicacion]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_comunicacion]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_comunicacion]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_comunicacion]

			</td>	



		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque7, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque8 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

	

		

		<tr>

			<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

				<br>

				EDUCACIÓN FÍSICA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_edfisica]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_edfisica]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_edfisica]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_edfisica]

			</td>	



		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque8, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque9 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

	

		

		<tr>

			<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

				<br>

				INGLÉS TÉCNICO


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_itecnico]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_itecnico]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_itecnico]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_itecnico]

			</td>	



		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque9, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque10 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		<tr>

			<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

				<br>

				MATEMÁTICA APLICADA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_maplicada]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_maplicada]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_maplicada]

			</td>

			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_maplicada]

			</td>	



		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque10, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque11 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		<tr>

			<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

				<br>

				MICROBIOLOGÍA Y TOXICOLOGÍA DE LOS ALIMENTOS


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_toxicologia]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_toxicologia]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_toxicologia]

			</td>

			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_toxicologia]

			</td>	



		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque11, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque12 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		<tr>

			<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

				<br>

				NUTRICIÓN


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_nutricion]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_nutricion]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_nutricion]

			</td>

			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_nutricion]

			</td>	



		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque12, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque13 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		<tr>

			<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

				<br>

				ORGANIZACIÓN Y GESTIÓN DE LA PRODUCCIÓN


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_oproduccion]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_oproduccion]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_oproduccion]

			</td>

			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_oproduccion]

			</td>	



		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque13, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque14 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		<tr>

			<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

				<br>

				PRÁCTICAS PROFESIONALIZANTES


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_practicas]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_practicas]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_practicas]

			</td>

			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_practicas]

			</td>	



		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque14, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque15 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		<tr>

			<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

				<br>

				PROCESOS Y EQUIPOS INDUSTRIALES


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_pindustriales]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_pindustriales]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_pindustriales]

			</td>

			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_pindustriales]

			</td>	



		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque15, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque16 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		<tr>

			<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

				<br>

				TECNOLOGÍA DE LOS ALIMENTOS


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_talimentos]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_talimentos]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_talimentos]

			</td>

			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_talimentos]

			</td>	



		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque16, false, false, false, false, '');

//--------------------------------------------------------




}else{

//----------------------------------------------------------------------------------


$bloque6 = <<<EOF

<table style="font-size:10px; padding:5px 10px;">
	

	<tr>

		<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

			<br>

			COMUNICACIÓN ORAL Y ESCRITA


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[aulico_comunicacion]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[comportamiento_comunicacion]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[evaluacion_comunicacion]

		</td>

		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

			<br>

			$respuestaInforme[observa_comunicacion]

		</td>	



	</tr>

</table>

EOF;


$pdf->writeHTML($bloque6, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque7 = <<<EOF

<table style="font-size:10px; padding:5px 10px;">



	

	<tr>

		<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

			<br>

			EDUCACIÓN FÍSICA


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[aulico_edfisica]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[comportamiento_edfisica]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[evaluacion_edfisica]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

			<br>

			$respuestaInforme[observa_edfisica]

		</td>	



	</tr>

</table>

EOF;


$pdf->writeHTML($bloque7, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque8 = <<<EOF

<table style="font-size:10px; padding:5px 10px;">



	

	<tr>

		<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

			<br>

			EQUIPOS Y APARATOS


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[aulico_equipos]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[comportamiento_equipos]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[evaluacion_equipos]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

			<br>

			$respuestaInforme[observa_equipos]

		</td>	



	</tr>

</table>

EOF;


$pdf->writeHTML($bloque8, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque9 = <<<EOF

<table style="font-size:10px; padding:5px 10px;">



	

	<tr>

		<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

			<br>

			INGLÉS TÉCNICO


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[aulico_itecnico]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[comportamiento_itecnico]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[evaluacion_itecnico]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

			<br>

			$respuestaInforme[observa_itecnico]

		</td>	



	</tr>

</table>

EOF;


$pdf->writeHTML($bloque9, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque10 = <<<EOF

<table style="font-size:10px; padding:5px 10px;">



	

	<tr>

		<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

			<br>

			INSTALACIONES ELÉCTRICAS


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[aulico_electricas]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[comportamiento_electricas]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[evaluacion_electricas]

		</td>

		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

			<br>

			$respuestaInforme[observa_electricas]

		</td>	



	</tr>

</table>

EOF;


$pdf->writeHTML($bloque10, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque11 = <<<EOF

<table style="font-size:10px; padding:5px 10px;">



	

	<tr>

		<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

			<br>

			INSTALACIONES INDUSTRIALES


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[aulico_industriales]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[comportamiento_industriales]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[evaluacion_industriales]

		</td>

		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

			<br>

			$respuestaInforme[observa_industriales]

		</td>	



	</tr>

</table>

EOF;


$pdf->writeHTML($bloque11, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque12 = <<<EOF

<table style="font-size:10px; padding:5px 10px;">



	

	<tr>

		<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

			<br>

			LABORATORIO DE ENSAYOS INDUSTRIALES


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[aulico_eindustriales]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[comportamiento_eindustriales]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[evaluacion_eindustriales]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

			<br>

			$respuestaInforme[observa_eindustriales]

		</td>	



	</tr>

</table>

EOF;


$pdf->writeHTML($bloque12, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque13 = <<<EOF

<table style="font-size:10px; padding:5px 10px;">



	

	<tr>

		<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

			<br>

			MANTENIMIENTO DE EQUIPOS


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[aulico_mequipos]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[comportamiento_mequipos]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[evaluacion_mequipos]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

			<br>

			$respuestaInforme[observa_mequipos]

		</td>	



	</tr>

</table>

EOF;


$pdf->writeHTML($bloque13, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque14 = <<<EOF

<table style="font-size:10px; padding:5px 10px;">



	

	<tr>

		<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

			<br>

			MÁQUINAS ELÉTRICAS Y ENSAYOS


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[aulico_ensayos]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[comportamiento_ensayos]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[evaluacion_ensayos]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

			<br>

			$respuestaInforme[observa_ensayos]

		</td>	



	</tr>

</table>

EOF;


$pdf->writeHTML($bloque14, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque15 = <<<EOF

<table style="font-size:10px; padding:5px 10px;">



	

	<tr>

		<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

			<br>

				MÁQUINAS TÉRMICAS


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[aulico_termicas]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[comportamiento_termicas]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[evaluacion_termicas]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

			<br>

			$respuestaInforme[observa_termicas]

		</td>	



	</tr>

</table>

EOF;


$pdf->writeHTML($bloque15, false, false, false, false, '');

//--------------------------------------------------------



//----------------------------------------------------------------------------------


$bloque17 = <<<EOF

<table style="font-size:10px; padding:5px 10px;">



	

	<tr>

		<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

			<br>

			ORGANIZACIÓN INDUSTRIAL


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[aulico_oindustrial]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[comportamiento_oindustrial]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[evaluacion_oindustrial]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

			<br>

			$respuestaInforme[observa_oindustrial]

		</td>	



	</tr>

</table>

EOF;


$pdf->writeHTML($bloque17, false, false, false, false, '');

//--------------------------------------------------------


//----------------------------------------------------------------------------------


$bloque18 = <<<EOF

<table style="font-size:10px; padding:5px 10px;">



	

	<tr>

		<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

			<br>

			PRÁCTICAS PROFESIONALIZANTES


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[aulico_practicas]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[comportamiento_practicas]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[evaluacion_practicas]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

			<br>

			$respuestaInforme[observa_practicas]

		</td>	



	</tr>

</table>

EOF;


$pdf->writeHTML($bloque18, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque19 = <<<EOF

<table style="font-size:10px; padding:5px 10px;">



	

	<tr>

		<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

			<br>

			TALLER


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[aulico_taller]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[comportamiento_taller]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[evaluacion_taller]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

			<br>

			$respuestaInforme[observa_taller]

		</td>	



	</tr>

</table>

EOF;


$pdf->writeHTML($bloque19, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque20 = <<<EOF

<table style="font-size:10px; padding:5px 10px;">



	

	<tr>

		<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

			<br>

			TECNOLOGÍA DE FABRICACIÓN


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[aulico_tfabricacion]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[comportamiento_tfabricacion]

		</td>

		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[evaluacion_tfabricacion]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

			<br>

			$respuestaInforme[observa_tfabricacion]

		</td>	



	</tr>

</table>

EOF;


$pdf->writeHTML($bloque20, false, false, false, false, '');

//--------------------------------------------------------



}



//SALIDA DEL ARCHIVO

$pdf->Output('informe_'.$nombre.'.pdf');


}
}

$reporte = new imprimirReporte();
$reporte -> id = $_GET["id"];
$reporte -> informe = $_GET["informe"];
//$reporte -> area = $_GET["area"];
$reporte -> traerImpresionReporte();


?>	