<?php

require_once "../../../controladores/informes.controlador.php";
require_once "../../../modelos/informes.modelo.php";

require_once "../../../controladores/cursos.controlador.php";
require_once "../../../modelos/cursos.modelo.php";


class imprimirReporte{


	public $id;

	public function traerImpresionReporte(){


		

		// TRAEMOS LA INFORMACION DE LOS INFORMES

		if ($_GET["tabla"] == "segundo") {
			
			$tablaInforme = "segundo";
		}


		$itemInforme = "id";
		$valorInforme = $this->id;
		$periodo = $_GET["periodo"];
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
		

		// TRAEMOS LA INFORMACION DE LOS CURSOS

		$itemCurso = "id";
		$valorCurso = $respuestaInforme["id_curso"];
		$tablaCurso = "primero";

		$respuestaCurso = ControladorCursos::ctrMostrarCursos($itemCurso, $valorCurso, $tablaCurso);

		$curso = $respuestaCurso["nombre"];
		$turno = $respuestaCurso["turno"];
	


require_once('tcpdf_include.php');


$pdf = new TCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);
 


$pdf->setPrintHeader(false); //Ahora si imprimirá cabecera
$pdf->setPrintFooter(false); //Ahora si imprimirá pie de página


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

			<td style="text-align: center; border: 1px solid #666; background-color:#C2BDBC;; width:215px">

				<br>

				Agrupamiento


			</td>		

			<td style="text-align: center; border: 1px solid #666; background-color:#C2BDBC;; width:215px">

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

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:330px">

				<br>

				$nombre


			</td>



			<td style="text-align: center; border: 1px solid #666; background-color:white; width:215px">

				<br>

				$curso


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:215px">

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

//----------------------------------------------------------------------------------


$bloque6 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

	

		

		<tr>

			<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

				<br>

				BIOLOGÍA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_biologia]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_biologia]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_biologia]

			</td>

			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_biologia]

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

				DIBUJO TÉCNICO


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_dibujo]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_dibujo]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_dibujo]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_dibujo]

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

				EDUCACIÓN PARA LA CIUDADANÍA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_ciudadania]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_ciudadania]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_ciudadania]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_ciudadania]

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

				FÍSICA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_fisica]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_fisica]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_fisica]

			</td>

			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_fisica]

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

				GEOGRAFÍA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_geografia]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_geografia]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_geografia]

			</td>

			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_geografia]

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

				HISTORIA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_historia]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_historia]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_historia]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_historia]

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

				INGLÉS


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_ingles]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_ingles]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_ingles]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_ingles]

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

				LENGUA Y LITERATURA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_lengua]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_lengua]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_lengua]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_lengua]

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

				MATEMÁTICA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_matematica]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_matematica]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_matematica]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_matematica]

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

				QUÍMICA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[aulico_quimica]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[comportamiento_quimica]

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[evaluacion_quimica]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$respuestaInforme[observa_quimica]

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


$pdf->writeHTML($bloque17, false, false, false, false, '');

//--------------------------------------------------------




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