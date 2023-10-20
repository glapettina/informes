<?php

require_once "../../../controladores/informes.controlador.php";
require_once "../../../modelos/informes.modelo.php";

require_once "../../../controladores/cursos.controlador.php";
require_once "../../../modelos/cursos.modelo.php";


class imprimirReporte{


	public $id;

	public function traerImpresionReporte(){


		

		// TRAEMOS LA INFORMACION DE LOS INFORMES

		if ($_GET["tabla"] == "tercero") {
			
			$tablaInforme = "tercero";
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
		$tablaCurso = "tercero";

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

				EDUCACIÓN PARA LA CIUDADANÍA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[concepto_ciudadania]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

				<br>

				$respuestaInforme[observa_ciudadania]

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

				FÍSICA


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

				GEOGRAFÍA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[concepto_geografia]

			</td>

			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

				<br>

				$respuestaInforme[observa_geografia]

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

				HISTORIA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[concepto_historia]

			</td>

			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

				<br>

				$respuestaInforme[observa_historia]

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

				INGLÉS


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


$pdf->writeHTML($bloque12, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque13 = <<<EOF

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


$pdf->writeHTML($bloque13, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------


$bloque14 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

	

		

		<tr>

			<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

				<br>

				MATEMÁTICA


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[concepto_matematica]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

				<br>

				$respuestaInforme[observa_matematica]

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

					QUÍMICA GENERAL


			</td>



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaInforme[concepto_quimica_general]

			</td>


			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

				<br>

				$respuestaInforme[observa_quimica_general]

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


$pdf->writeHTML($bloque16, false, false, false, false, '');

//--------------------------------------------------------
}else{

//----------------------------------------------------------------------------------


$bloque6 = <<<EOF

<table style="font-size:10px; padding:5px 10px;">
	

	<tr>

		<td style="font-size: 7px; text-align: left; border: 1px solid #666; background-color:white; width:180px">

			<br>

			DIBUJO TÉCNICO


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[concepto_dibujo]

		</td>

		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

			<br>

			$respuestaInforme[observa_dibujo]

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

			EDUCACIÓN PARA LA CIUDADANÍA


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[concepto_ciudadania]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

			<br>

			$respuestaInforme[observa_ciudadania]

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

			ESTÁTICA


		</td>



		<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:100px">

			<br>

			$respuestaInforme[concepto_estatica]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

			<br>

			$respuestaInforme[observa_estatica]

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

			$respuestaInforme[concepto_fisica]

		</td>

		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

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

			$respuestaInforme[concepto_geografia]

		</td>

		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

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

			$respuestaInforme[concepto_historia]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

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

			$respuestaInforme[concepto_ingles]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

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

			$respuestaInforme[concepto_lengua]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

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

			$respuestaInforme[concepto_matematica]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

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

			$respuestaInforme[concepto_quimica]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

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

			$respuestaInforme[concepto_taller]

		</td>


		<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:250px">

			<br>

			$respuestaInforme[observa_taller]

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