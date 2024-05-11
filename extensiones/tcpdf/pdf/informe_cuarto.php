<?php

require_once "../../../controladores/informes.controlador.php";
require_once "../../../modelos/informes.modelo.php";

require_once "../../../controladores/cursos.controlador.php";
require_once "../../../modelos/cursos.modelo.php";


class imprimirReporte{


	public $id;

	public function traerImpresionReporte(){


		

		// TRAEMOS LA INFORMACION DE LOS INFORMES

		if ($_GET["tabla"] == "cuarto") {
			
			$tablaInforme = "cuarto";
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
			
			$titulo = 'CENTRO DE EDUCACIÓN TÉCNICA Nº 13 - INFORME DE AVANCE - OCTUBRE ' .$per2;
		}else{

			$titulo = 'CENTRO DE EDUCACIÓN TÉCNICA Nº 13 - INFORME DE AVANCE - OCTUBRE ' .$per2;
		}
		

		$respuestaInforme = ControladorInformes::ctrMostrarInformes($itemInforme, $valorInforme, $tablaInforme, $periodo, $verifica);

		$nombre = $respuestaInforme["nombre"];
		$idCurso = $respuestaInforme["id_curso"];
		$modalidad = $respuestaInforme["modalidad"];
		

		// TRAEMOS LA INFORMACION DE LOS CURSOS

		$itemCurso = "id";
		$valorCurso = $respuestaInforme["id_curso"];
		$tablaCurso = "cuarto";

		$respuestaCurso = ControladorCursos::ctrMostrarCursos($itemCurso, $valorCurso, $tablaCurso);

		$curso = $respuestaCurso["nombre"];
		$turno = $respuestaCurso["turno"];
	


require_once('tcpdf_include.php');


$pdf = new TCPDF('V', PDF_UNIT, 'A4', true, 'UTF-8', false);
 


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

			<td style="width: 530px"><img src="images/header2.png"></td>

			
			
			
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

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:530px">

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

			<td style="text-align: center; border: 1px solid #666; background-color:#C2BDBC;; width:230px">

				<br>

				Estudiante


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:#C2BDBC;; width:100px">

				<br>

				Agrupamiento


			</td>		

			<td style="text-align: center; border: 1px solid #666; background-color:#C2BDBC;; width:100px">

				<br>

				Turno


			</td>			

			<td style="text-align: center; border: 1px solid #666; background-color:#C2BDBC;; width:100px">

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

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:230px">

				<br>

				$nombre


			</td>



			<td style="text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$curso


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$turno


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:100px">

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

				CONCEPTO

			</td>

			<td style="font-size: 7px; text-align: center; border: 1px solid #666; background-color:#C2BDBC; width:250px">

				<br>

				OBSERVACIONES

			</td>	



		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque5, false, false, false, false, '');

//--------------------------------------------------------

if ($modal == "alimentacion"){

//----------------------------------------------------------------------------------


$bloque6 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

	

		

		<tr>

			<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

				<br>

				ANÁLISIS MATEMÁTICO


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[concepto_analisis]

			</td>

			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

				<br>

				$respuestaInforme[observa_analisis]

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

				BIOLOGÍA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[concepto_biologia]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

				<br>

				$respuestaInforme[observa_biologia]

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

				$respuestaInforme[concepto_edfisica]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

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

				FÍSICA APLICADA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[concepto_fisica]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

				<br>

				$respuestaInforme[observa_fisica]

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

				INGLÉS TÉCNICO


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[concepto_ingles]

			</td>

			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

				<br>

				$respuestaInforme[observa_ingles]

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

				LENGUA Y LITERATURA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[concepto_lengua]

			</td>

			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

				<br>

				$respuestaInforme[observa_lengua]

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

				OPERACIONES UNITARIAS


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[concepto_operaciones]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

				<br>

				$respuestaInforme[observa_operaciones]

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

				QUÍMICA INORGÁNICA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[concepto_inorganica]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

				<br>

				$respuestaInforme[observa_inorganica]

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

				QUÍMICA ORGÁNICA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[concepto_organica]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

				<br>

				$respuestaInforme[observa_organica]

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

					SEGURIDAD E HIGIENE INDUSTRIAL Y MEDIO AMBIENTE


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[concepto_seguridad]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

				<br>

				$respuestaInforme[observa_seguridad]

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

				TECNOLOGÍA DE CONTROL


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[concepto_tecnologia]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

				<br>

				$respuestaInforme[observa_tecnologia]

			</td>	



		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque16, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque17 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

	

		

		<tr>

			<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

				<br>

				T.P. DE QUÍMICA INORGÁNICA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[concepto_tpinorganica]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

				<br>

				$respuestaInforme[observa_tpinorganica]

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

				T.P. DE QUÍMICA ORGÁNICA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[concepto_tporganica]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

				<br>

				$respuestaInforme[observa_tporganica]

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

				TRABAJO Y PENSAMIENTO CRÍTICO


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[concepto_trabajo]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

				<br>

				$respuestaInforme[observa_trabajo]

			</td>	



		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque19, false, false, false, false, '');

//--------------------------------------------------------



}else{

//----------------------------------------------------------------------------------


$bloque6 = <<<EOF

<table style="font-size:10px; padding:5px 10px;">
	

	<tr>

		<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

			<br>

			ANÁLISIS MATEMÁTICO


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[concepto_analisis]

		</td>

		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

			<br>

			$respuestaInforme[observa_analisis]

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

			$respuestaInforme[concepto_edfisica]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

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

			ELECTROTECNIA


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[concepto_electrotecnia]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

			<br>

			$respuestaInforme[observa_electrotecnia]

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

			$respuestaInforme[concepto_ingles]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

			<br>

			$respuestaInforme[observa_ingles]

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

			LABORATORIO DE MEDICIONES ELÉCTRICAS


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[concepto_laboratorio]

		</td>

		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

			<br>

			$respuestaInforme[observa_laboratorio]

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

			LENGUA Y LITERATURA


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[concepto_lengua]

		</td>

		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

			<br>

			$respuestaInforme[observa_lengua]

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

			MECÁNICA TÉCNICA


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[concepto_mecanica]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

			<br>

			$respuestaInforme[observa_mecanica]

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

			RESISTENCIA DE LOS MATERIALES


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[concepto_resistencia]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

			<br>

			$respuestaInforme[observa_resistencia]

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

			TALLER


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[concepto_taller]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

			<br>

			$respuestaInforme[observa_taller]

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

				TECNOLOGÍA DE LOS MATERIALES


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[concepto_materiales]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

			<br>

			$respuestaInforme[observa_materiales]

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

			TRABAJO Y PENSAMIENTO CRÍTICO


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[concepto_trabajo]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

			<br>

			$respuestaInforme[observa_trabajo]

		</td>	



	</tr>

</table>

EOF;


$pdf->writeHTML($bloque17, false, false, false, false, '');

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