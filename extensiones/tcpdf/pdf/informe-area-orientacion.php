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
		$valorInforme2 = $_GET["idCurso2"];
		$valorInforme3 = $_GET["idCurso3"];
		$valorInforme4 = $_GET["idCurso4"];
		$tablaInforme = $_GET["tabla"];
		$periodo = $_GET["periodo"];
		$modalidad = $_GET["modalidad"];
		$verifica = true;

		$per = explode('/', $periodo);

		$per2 = $per[1];

		if ($per[0] == '01') {
			
			$titulo = 'INFORME CUALITATIVO MARZO - MAYO ' .$per2;
		}else{

			$titulo = 'INFORME CUALITATIVO JULIO - OCTUBRE ' .$per2;
		}
		

 		$respuestaInforme = ControladorInformes::ctrMostrarInformesOrientacion($itemInforme, $valorInforme, $valorInforme2, $valorInforme3, $valorInforme4, $tablaInforme, $periodo, $modalidad, $verifica);

		
		$idCurso = $_GET["idCurso"];
		
		

		 if ($_GET["area"] == "desarrollo") {

		 	$area = "C.O. - DESARROLLO SUSTENTABLE DEL TURISMO";

		 }

		 if ($_GET["area"] == "introduccion") {

		 	$area = "C.O. - INTRODUCCION AL TURISMO";

		 }

		if ($_GET["area"] == "ambiente") {

		 	$area = "C.O. - AMBIENTE Y PATRIMONIO";

		 }

		if ($_GET["area"] == "generacion") {

		 	$area = "C.O. - GENERACION DE EMPRENDIMIENTOS";

		 }


		if ($_GET["area"] == "produccion") {

		 	$area = "C.O. - PRODUCCION DE SERVICIOS TURISTICOS";

		 }

		if ($_GET["area"] == "comunicacion") {

		 	$area = "C.O. - COMUNICACION Y TURISMO";

		 }


		if ($_GET["area"] == "proyecto") {

		 	$area = "C.O. - PROYECTO DE INTERVENCION SOCIOCOMUNITARIA";

		 }

		if ($_GET["area"] == "taller") {

		 	$area = "C.O. - TALLER DE TECNICAS INTERPRETATIVAS Y DE ANIMACION SOCIOCULTURAL";

		 }

		 if ($_GET["area"] == "apreciacion") {

		 	$area = "C.O. - APRECIACION MUSICAL";

		 }

		 if ($_GET["area"] == "lenguaje3") {

		 	$area = "C.O. - LENGUAJE MUSICAL Y PRACTICA INSTRUMENTAL";

		 }

		 if ($_GET["area"] == "lenguaje4") {

		 	$area = "C.O. - LENGUAJE MUSICAL Y PRACTICA INSTRUMENTAL";

		 }

		 if ($_GET["area"] == "conjunto4") {

		 	$area = "C.O. - PRACTICA DE CONJUNTO";

		 }

		 if ($_GET["area"] == "vocal4") {

		 	$area = "C.O. - PRACTICA VOCAL";

		 }

		if ($_GET["area"] == "lenguaje5") {

		 	$area = "C.O. - LENGUAJE MUSICAL Y PRACTICA INSTRUMENTAL";

		 }

		if ($_GET["area"] == "musica") {

		 	$area = "C.O. - MUSICA Y CONTEXTO HISTORICO SOCIAL";

		 }

		if ($_GET["area"] == "vocal5") {

		 	$area = "C.O. - PRACTICA VOCAL";

		 }

		if ($_GET["area"] == "tecnologia") {

		 	$area = "C.O. - TECNOLOGIA E INFORMATICA APLICADA A LA PRODUCCION MUSICAL";

		 }

		if ($_GET["area"] == "conjunto5") {

		 	$area = "C.O. - PRACTICA DE CONJUNTO";

		 }

	


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
					ESCUELA SECUNDARIA RIO NEGRO Nº 153					

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

				<strong>$titulo - ÁREA: $area</strong>


			</td>

			

			
			

		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque2, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------

foreach ($respuestaInforme as $key => $value) {


	// TRAEMOS LA INFORMACION DE LOS CURSOS

		$itemCurso = "id";
		$valorCurso = $value["id_curso"];
		

		$respuestaCurso = ControladorCursos::ctrMostrarCursos($itemCurso, $valorCurso);

		$curso = $respuestaCurso["nombre"];
		$turno = $respuestaCurso["turno"];


	if ($_GET["area"] == "cientifica") {

			$area = "CIENTÍFICA Y TECNOLÓGICA";

			$saberes = $value["saberes_cientifica"];
			$aprecia = $value["aprecia_cientifica"];
			$asistencia = $value["asistencia_cientifica"];
			$observa = $value["observa_cientifica"];

		}

		if ($_GET["area"] == "sociales") {

			$area = "SOCIALES Y HUMANIDADES";

			$saberes = $value["saberes_sociales"];
			$aprecia = $value["aprecia_sociales"];
			$asistencia = $value["asistencia_sociales"];
			$observa = $value["observa_sociales"];

		}

		if ($_GET["area"] == "literatura") {

			$area = "LENGUA Y LITERATURA";

			$saberes = $value["saberes_lengua"];
			$aprecia = $value["aprecia_lengua"];
			$asistencia = $value["asistencia_lengua"];
			$observa = $value["observa_lengua"];

		}

		if ($_GET["area"] == "matematica") {

			$area = "MATEMÁTICA";

			$saberes = $value["saberes_matematica"];
			$aprecia = $value["aprecia_matematica"];
			$asistencia = $value["asistencia_matematica"];
			$observa = $value["observa_matematica"];

		}

		if ($_GET["area"] == "ingles") {

			$area = "SEGUNDAS LENGUAS";

			$saberes = $value["saberes_ingles"];
			$aprecia = $value["aprecia_ingles"];
			$asistencia = $value["asistencia_ingles"];
			$observa = $value["observa_ingles"];

		}

		if ($_GET["area"] == "edfisica") {

			$area = "EDUCACIÓN FÍSICA";

			$saberes = $value["saberes_fisica"];
			$aprecia = $value["aprecia_fisica"];
			$asistencia = $value["asistencia_fisica"];
			$observa = $value["observa_fisica"];

		}

		if ($_GET["area"] == "artistica") {

			$area = "LENGUAJES ARTÍSTICOS";

			$saberes = $value["saberes_artistica"];
			$aprecia = $value["aprecia_artistica"];
			$asistencia = $value["asistencia_artistica"];
			$observa = $value["observa_artistica"];

		}

		if ($_GET["area"] == "desarrollo") {

			$area = "C.O. - DESARROLLO SUSTENTABLE DEL TURISMO";

			$saberes = $value["saberes_desarrollo"];
			$aprecia = $value["aprecia_desarrollo"];
			$asistencia = $value["asistencia_desarrollo"];
			$observa = $value["observa_desarrollo"];

		}

		if ($_GET["area"] == "introduccion") {

			$area = "C.O. - INTRODUCCION AL TURISMO";

			$saberes = $value["saberes_introduccion"];
			$aprecia = $value["aprecia_introduccion"];
			$asistencia = $value["asistencia_introduccion"];
			$observa = $value["observa_introduccion"];

		}

		if ($_GET["area"] == "ambiente") {

			$area = "C.O. - AMBIENTE Y PATRIMONIO";

			$saberes = $value["saberes_ambiente"];
			$aprecia = $value["aprecia_ambiente"];
			$asistencia = $value["asistencia_ambiente"];
			$observa = $value["observa_ambiente"];

		}

		if ($_GET["area"] == "generacion") {

			$area = "C.O. - GENERACION DE EMPRENDIMIENTOS";

			$saberes = $value["saberes_generacion"];
			$aprecia = $value["aprecia_generacion"];
			$asistencia = $value["asistencia_generacion"];
			$observa = $value["observa_generacion"];

		}


		if ($_GET["area"] == "produccion") {

			$area = "C.O. - PRODUCCION DE SERVICIOS TURISTICOS";

			$saberes = $value["saberes_produccion"];
			$aprecia = $value["aprecia_produccion"];
			$asistencia = $value["asistencia_produccion"];
			$observa = $value["observa_produccion"];

		}

		if ($_GET["area"] == "comunicacion") {

			$area = "C.O. - COMUNICACION Y TURISMO";

			$saberes = $value["saberes_comunicacion"];
			$aprecia = $value["aprecia_comunicacion"];
			$asistencia = $value["asistencia_comunicacion"];
			$observa = $value["observa_comunicacion"];

		}


		if ($_GET["area"] == "proyecto") {

			$area = "C.O. - PROYECTO DE INTERVENCION SOCIOCOMUNITARIA";

			$saberes = $value["saberes_proyecto"];
			$aprecia = $value["aprecia_proyecto"];
			$asistencia = $value["asistencia_proyecto"];
			$observa = $value["observa_proyecto"];

		}

		if ($_GET["area"] == "taller") {

			$area = "C.O. - TALLER DE TECNICAS INTERPRETATIVAS Y DE ANIMACION SOCIOCULTURAL";

			$saberes = $value["saberes_taller"];
			$aprecia = $value["aprecia_taller"];
			$asistencia = $value["asistencia_taller"];
			$observa = $value["observa_taller"];

		}

		if ($_GET["area"] == "apreciacion") {

			$area = "C.O. - APRECIACION MUSICAL";

			$saberes = $value["saberes_apreciacion"];
			$aprecia = $value["aprecia_apreciacion"];
			$asistencia = $value["asistencia_apreciacion"];
			$observa = $value["observa_apreciacion"];

		}

		if ($_GET["area"] == "lenguaje3") {

			$area = "C.O. - LENGUAJE MUSICAL Y PRACTICA INSTRUMENTAL";

			$saberes = $value["saberes_lenguaje3"];
			$aprecia = $value["aprecia_lenguaje3"];
			$asistencia = $value["asistencia_lenguaje3"];
			$observa = $value["observa_lenguaje3"];

		}

		if ($_GET["area"] == "lenguaje4") {

			$area = "C.O. - LENGUAJE MUSICAL Y PRACTICA INSTRUMENTAL";

			$saberes = $value["saberes_lenguaje4"];
			$aprecia = $value["aprecia_lenguaje4"];
			$asistencia = $value["asistencia_lenguaje4"];
			$observa = $value["observa_lenguaje4"];

		}

		if ($_GET["area"] == "conjunto4") {

			$area = "C.O. - PRACTICA DE CONJUNTO";

			$saberes = $value["saberes_conjunto4"];
			$aprecia = $value["aprecia_conjunto4"];
			$asistencia = $value["asistencia_conjunto4"];
			$observa = $value["observa_conjunto4"];

		}


		if ($_GET["area"] == "vocal4") {

			$area = "C.O. - PRACTICA VOCAL";

			$saberes = $value["saberes_vocal4"];
			$aprecia = $value["aprecia_vocal4"];
			$asistencia = $value["asistencia_vocal4"];
			$observa = $value["observa_vocal4"];

		}


		if ($_GET["area"] == "lenguaje5") {

			$area = "C.O. - LENGUAJE MUSICAL Y PRACTICA INSTRUMENTAL";

			$saberes = $value["saberes_lenguaje5"];
			$aprecia = $value["aprecia_lenguaje5"];
			$asistencia = $value["asistencia_lenguaje5"];
			$observa = $value["observa_lenguaje5"];

		}

		if ($_GET["area"] == "musica") {

			$area = "C.O. - MUSICA Y CONTEXTO HISTORICO SOCIAL";

			$saberes = $value["saberes_musica"];
			$aprecia = $value["aprecia_musica"];
			$asistencia = $value["asistencia_musica"];
			$observa = $value["observa_musica"];

		}

		if ($_GET["area"] == "vocal5") {

			$area = "C.O. - PRACTICA VOCAL";

			$saberes = $value["saberes_vocal5"];
			$aprecia = $value["aprecia_vocal5"];
			$asistencia = $value["asistencia_vocal5"];
			$observa = $value["observa_vocal5"];

		}

		if ($_GET["area"] == "tecnologia") {

			$area = "C.O. - TECNOLOGIA E INFORMATICA APLICADA A LA PRODUCCION MUSICAL";

			$saberes = $value["saberes_tecnologia"];
			$aprecia = $value["aprecia_tecnologia"];
			$asistencia = $value["asistencia_tecnologia"];
			$observa = $value["observa_tecnologia"];

		}

		if ($_GET["area"] == "conjunto5") {

			$area = "C.O. - PRACTICA DE CONJUNTO";

			$saberes = $value["saberes_conjunto5"];
			$aprecia = $value["aprecia_conjunto5"];
			$asistencia = $value["asistencia_conjunto5"];
			$observa = $value["observa_conjunto5"];

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

				AREAS DEL CONOCIMIENTO


			</td>



			<td style="font-size: 7px; text-align: center; border: 1px solid #666; background-color:#C2BDBC; width:200px">

				<br>

				SABERES

			</td>

			<td style="font-size: 7px; text-align: center; border: 1px solid #666; background-color:#C2BDBC; width:165px">

				<br>

				APRECIACION CUALITATIVA


			</td>

			<td style="font-size: 7px; text-align: center; border: 1px solid #666; background-color:#C2BDBC; width:80px">

				<br>

				ASISTENCIA

			</td>	

			<td style="font-size: 7px; text-align: center; border: 1px solid #666; background-color:#C2BDBC; width:156px">

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

				$area


			</td>



			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:200px">

				<br>

				$saberes

			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:165px">

				<br>

				$aprecia


			</td>

			<td style="font-size: 8px; text-align: center; border: 1px solid #666; background-color:white; width:80px">

				<br>

				$asistencia

			</td>	

			<td style="font-size: 8px; text-align: justify; border: 1px solid #666; background-color:white; width:156px">

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

$pdf->Output('informe_'.$area.'.pdf');


}
}

$reporte = new imprimirReporte();
$reporte -> id = $_GET["idCurso"];
$reporte -> informe = $_GET["informe"];
$reporte -> area = $_GET["area"];
$reporte -> traerImpresionReporte();


?>	