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



		
		$itemInforme = "id_curso";
		//$valorInforme = $this->idCurso;
		$valorInforme = $_GET["idCurso"];
		//$tablaInforme = "primero";
		$periodo = $_GET["periodo"];
		$verifica = true;

		$per = explode('/', $periodo);

		$per2 = $per[1];

		if ($per[0] == '01') {
			
			$titulo = 'MES: OCTUBRE ' .$per2;
		}else{

			$titulo = 'MES: OCTUBRE ' .$per2;
		}
		

		$respuestaInforme = ControladorInformes::ctrMostrarInformes($itemInforme, $valorInforme, $tablaInforme, $periodo, $verifica);

		$idCurso = $_GET["idCurso"];
		
		 if ($_GET["materia"] == "Biología") {

		 	 $materia = "BIOLOGÍA";
			 $campo1 = 'concepto_biologia';
			 $campo2 = 'observa_biologia';

		 }	

		 if ($_GET["materia"] == "Dibujo Técnico") {

		   $materia = "DIBUJO TÉCNICO";
		   $campo1 = 'concepto_dibujo';
		   $campo2 = 'observa_dibujo';

	   	}
		
		if ($_GET["materia"] == "Educación Artística") {

			$materia = "EDUCACIÓN ARTÍSTICA";
		    $campo1 = 'concepto_artistica';
		    $campo2 = 'observa_artistica';

	   }	

	   if ($_GET["materia"] == "Educación Física") {

			$materia = "EDUCACIÓN FÍSICA";
			$campo1 = 'concepto_fisica';
			$campo2 = 'observa_fisica';

   		}
		
		if ($_GET["materia"] == "Educación para la Ciudadanía") {

		   $materia = "EDUCACIÓN PARA LA CIUDADANÍA";
		   $campo1 = 'concepto_ciudadania';
		   $campo2 = 'observa_ciudadania';

	   }	

	   if ($_GET["materia"] == "Físico - Química") {

		$materia = "FÍSICO - QUÍMICA";
	   $campo1 = 'concepto_fisico_quimica';
	   $campo2 = 'observa_fisico_quimica';

   		}	

		   if ($_GET["materia"] == "Geografía") {

			$materia = "GEOGRAFÍA";
		   $campo1 = 'concepto_geografia';
		   $campo2 = 'observa_geografia';

	   }	

	   if ($_GET["materia"] == "Geografía") {

		$materia = "GEOGRAFÍA";
	   $campo1 = 'concepto_geografia';
	   $campo2 = 'observa_geografia';

   }	

   if ($_GET["materia"] == "Historia") {

	$materia = "HISTORIA";
	$campo1 = 'concepto_historia';
	$campo2 = 'observa_historia';

   }	

   if ($_GET["materia"] == "Inglés") {

	$materia = "INGLÉS";
	$campo1 = 'concepto_ingles';
	$campo2 = 'observa_ingles';

	  }	

	  if ($_GET["materia"] == "Lengua y Literatura") {

		$materia = "LENGUA Y LITERATURA";
		$campo1 = 'concepto_lengua';
		$campo2 = 'observa_lengua';

   }	

   if ($_GET["materia"] == "Matemática") {

	$materia = "MATEMÁTICA";
	$campo1 = 'concepto_matematica';
	$campo2 = 'observa_matematica';

   }	

   
   if ($_GET["materia"] == "Taller") {

	$materia = "TALLER";
	$campo1 = 'concepto_taller';
	$campo2 = 'observa_taller';

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

			$concepto = $value["concepto_biologia"];
			$observa = $value["observa_biologia"];

		}

		if ($_GET["materia"] == "Dibujo Técnico") {

			$materia = "DIBUJO TÉCNICO";

			$concepto = $value["concepto_dibujo"];
			$observa = $value["observa_dibujo"];

		}
		
		if ($_GET["materia"] == "Educación Artística") {

			$materia = "EDUCACIÓN ARTÍSTICA";

			$concepto = $value["concepto_artistica"];
			$observa = $value["observa_artistica"];

		}

		if ($_GET["materia"] == "Educación Física") {

			$materia = "EDUCACIÓN FÍSICA";

			$concepto = $value["concepto_fisica"];
			$observa = $value["observa_fisica"];

		}

		if ($_GET["materia"] == "Educación para la Ciudadanía") {

			$materia = "EDUCACIÓN PARA LA CIUDADANÍA";

			$concepto = $value["concepto_ciudadania"];
			$observa = $value["observa_ciudadania"];

		}

		if ($_GET["materia"] == "Físico - Química") {

			$materia = "FÍSICO - QUÍMICA";

			$concepto = $value["concepto_fisico_quimica"];
			$observa = $value["observa_fisico_quimica"];

		}

		if ($_GET["materia"] == "Geografía") {

			$materia = "GEOGRAFÍA";

			$concepto = $value["concepto_geografia"];
			$observa = $value["observa_geografia"];

		}

		if ($_GET["materia"] == "Historia") {

			$materia = "HISTORIA";

			$concepto = $value["concepto_historia"];
			$observa = $value["observa_historia"];

		}

		if ($_GET["materia"] == "Inglés") {

			$materia = "INGLÉS";

			$concepto = $value["concepto_ingles"];
			$observa = $value["observa_ingles"];

		}

		if ($_GET["materia"] == "Lengua y Literatura") {

			$materia = "LENGUA Y LITERATURA";

			$concepto = $value["concepto_lengua"];
			$observa = $value["observa_lengua"];

		}

		if ($_GET["materia"] == "Matemática") {

			$materia = "MATEMÁTICA";

			$concepto = $value["concepto_matematica"];
			$observa = $value["observa_matematica"];

		}

		if ($_GET["materia"] == "Taller") {

			$materia = "TALLER";

			$concepto = $value["concepto_taller"];
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




			<td style="font-size: 7px; text-align: center; border: 1px solid #666; background-color:#C2BDBC; width:165px">

				<br>

				CONCEPTO


			</td>

			<td style="font-size: 7px; text-align: center; border: 1px solid #666; background-color:#C2BDBC; width:435px">

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



			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:165px">

				<br>

				$concepto

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:435px">

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