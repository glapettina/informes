<?php

require_once "../../../controladores/informes.controlador.php";
require_once "../../../modelos/informes.modelo.php";

require_once "../../../controladores/cursos.controlador.php";
require_once "../../../modelos/cursos.modelo.php";


class imprimirReporte{


	public $id;

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

		$itemInforme = "id";
		$valorInforme = $this->id;
		//$tablaInforme = "primero";
		$periodo = $_GET["periodo"];
		$verifica = false;

		$per = explode('/', $periodo);

		$per2 = $per[1];

		if ($per[0] == '01') {
			
			$titulo = 'INFORME CUALITATIVO MARZO - MAYO ' .$per2;
		}else{

			$titulo = 'INFORME CUALITATIVO JULIO - OCTUBRE ' .$per2;
		}
		

		$respuestaInforme = ControladorInformes::ctrMostrarInformes($itemInforme, $valorInforme, $tablaInforme, $periodo, $verifica);

		$nombre = $respuestaInforme["nombre"];
		$idCurso = $respuestaInforme["id_curso"];
		
		if ($_GET["area"] == "cientifica") {

			$area = "CIENTÍFICA Y TECNOLÓGICA";

			$saberes = $respuestaInforme["saberes_cientifica"];
			$aprecia = $respuestaInforme["aprecia_cientifica"];
			$asistencia = $respuestaInforme["asistencia_cientifica"];
			$observa = $respuestaInforme["observa_cientifica"];

		}

		if ($_GET["area"] == "sociales") {

			$area = "SOCIALES Y HUMANIDADES";

			$saberes = $respuestaInforme["saberes_sociales"];
			$aprecia = $respuestaInforme["aprecia_sociales"];
			$asistencia = $respuestaInforme["asistencia_sociales"];
			$observa = $respuestaInforme["observa_sociales"];

		}

		if ($_GET["area"] == "literatura") {

			$area = "LENGUA Y LITERATURA";

			$saberes = $respuestaInforme["saberes_lengua"];
			$aprecia = $respuestaInforme["aprecia_lengua"];
			$asistencia = $respuestaInforme["asistencia_lengua"];
			$observa = $respuestaInforme["observa_lengua"];

		}

		if ($_GET["area"] == "matematica") {

			$area = "MATEMÁTICA";

			$saberes = $respuestaInforme["saberes_matematica"];
			$aprecia = $respuestaInforme["aprecia_matematica"];
			$asistencia = $respuestaInforme["asistencia_matematica"];
			$observa = $respuestaInforme["observa_matematica"];

		}

		if ($_GET["area"] == "ingles") {

			$area = "SEGUNDAS LENGUAS";

			$saberes = $respuestaInforme["saberes_ingles"];
			$aprecia = $respuestaInforme["aprecia_ingles"];
			$asistencia = $respuestaInforme["asistencia_ingles"];
			$observa = $respuestaInforme["observa_ingles"];

		}

		if ($_GET["area"] == "edfisica") {

			$area = "EDUCACIÓN FÍSICA";

			$saberes = $respuestaInforme["saberes_fisica"];
			$aprecia = $respuestaInforme["aprecia_fisica"];
			$asistencia = $respuestaInforme["asistencia_fisica"];
			$observa = $respuestaInforme["observa_fisica"];

		}

		if ($_GET["area"] == "artistica") {

			$area = "LENGUAJES ARTÍSTICOS";

			$saberes = $respuestaInforme["saberes_artistica"];
			$aprecia = $respuestaInforme["aprecia_artistica"];
			$asistencia = $respuestaInforme["asistencia_artistica"];
			$observa = $respuestaInforme["observa_artistica"];

		}

		if ($_GET["area"] == "desarrollo") {

			$area = "C.O. - DESARROLLO SUSTENTABLE DEL TURISMO";

			$saberes = $respuestaInforme["saberes_desarrollo"];
			$aprecia = $respuestaInforme["aprecia_desarrollo"];
			$asistencia = $respuestaInforme["asistencia_desarrollo"];
			$observa = $respuestaInforme["observa_desarrollo"];

		}

		if ($_GET["area"] == "introduccion") {

			$area = "C.O. - INTRODUCCION AL TURISMO";

			$saberes = $respuestaInforme["saberes_introduccion"];
			$aprecia = $respuestaInforme["aprecia_introduccion"];
			$asistencia = $respuestaInforme["asistencia_introduccion"];
			$observa = $respuestaInforme["observa_introduccion"];

		}

		if ($_GET["area"] == "ambiente") {

			$area = "C.O. - AMBIENTE Y PATRIMONIO";

			$saberes = $respuestaInforme["saberes_ambiente"];
			$aprecia = $respuestaInforme["aprecia_ambiente"];
			$asistencia = $respuestaInforme["asistencia_ambiente"];
			$observa = $respuestaInforme["observa_ambiente"];

		}

		if ($_GET["area"] == "generacion") {

			$area = "C.O. - GENERACION DE EMPRENDIMIENTOS";

			$saberes = $respuestaInforme["saberes_generacion"];
			$aprecia = $respuestaInforme["aprecia_generacion"];
			$asistencia = $respuestaInforme["asistencia_generacion"];
			$observa = $respuestaInforme["observa_generacion"];

		}

		if ($_GET["area"] == "produccion") {

			$area = "C.O. - PRODUCCION DE SERVICIOS TURISTICOS";

			$saberes = $respuestaInforme["saberes_produccion"];
			$aprecia = $respuestaInforme["aprecia_produccion"];
			$asistencia = $respuestaInforme["asistencia_produccion"];
			$observa = $respuestaInforme["observa_produccion"];

		}


		if ($_GET["area"] == "comunicacion") {

			$area = "C.O. - COMUNICACION Y TURISMO";

			$saberes = $respuestaInforme["saberes_comunicacion"];
			$aprecia = $respuestaInforme["aprecia_comunicacion"];
			$asistencia = $respuestaInforme["asistencia_comunicacion"];
			$observa = $respuestaInforme["observa_comunicacion"];

		}


		if ($_GET["area"] == "proyecto") {

			$area = "C.O. - PROYECTO DE INTERVENCION SOCIOCOMUNITARIA";

			$saberes = $respuestaInforme["saberes_proyecto"];
			$aprecia = $respuestaInforme["aprecia_proyecto"];
			$asistencia = $respuestaInforme["asistencia_proyecto"];
			$observa = $respuestaInforme["observa_proyecto"];

		}



		if ($_GET["area"] == "taller") {

			$area = "C.O. - TALLER DE TECNICAS INTERPRETATIVAS Y DE ANIMACION SOCIOCULTURAL";

			$saberes = $respuestaInforme["saberes_taller"];
			$aprecia = $respuestaInforme["aprecia_taller"];
			$asistencia = $respuestaInforme["asistencia_taller"];
			$observa = $respuestaInforme["observa_taller"];

		}

		if ($_GET["area"] == "apreciacion") {

			$area = "C.O. - APRECIACION MUSICAL";

			$saberes = $respuestaInforme["saberes_apreciacion"];
			$aprecia = $respuestaInforme["aprecia_apreciacion"];
			$asistencia = $respuestaInforme["asistencia_apreciacion"];
			$observa = $respuestaInforme["observa_apreciacion"];

		}

		if ($_GET["area"] == "lenguaje3") {

			$area = "C.O. - LENGUAJE MUSICAL Y PRACTICA INSTRUMENTAL";

			$saberes = $respuestaInforme["saberes_lenguaje3"];
			$aprecia = $respuestaInforme["aprecia_lenguaje3"];
			$asistencia = $respuestaInforme["asistencia_lenguaje3"];
			$observa = $respuestaInforme["observa_lenguaje3"];

		}


		if ($_GET["area"] == "lenguaje4") {

			$area = "C.O. - LENGUAJE MUSICAL Y PRACTICA INSTRUMENTAL";

			$saberes = $respuestaInforme["saberes_lenguaje4"];
			$aprecia = $respuestaInforme["aprecia_lenguaje4"];
			$asistencia = $respuestaInforme["asistencia_lenguaje4"];
			$observa = $respuestaInforme["observa_lenguaje4"];

		}

		if ($_GET["area"] == "conjunto4") {

			$area = "C.O. - PRACTICA DE CONJUNTO";

			$saberes = $respuestaInforme["saberes_conjunto4"];
			$aprecia = $respuestaInforme["aprecia_conjunto4"];
			$asistencia = $respuestaInforme["asistencia_conjunto4"];
			$observa = $respuestaInforme["observa_conjunto4"];

		}


		if ($_GET["area"] == "vocal4") {

			$area = "C.O. - PRACTICA VOCAL";

			$saberes = $respuestaInforme["saberes_vocal4"];
			$aprecia = $respuestaInforme["aprecia_vocal4"];
			$asistencia = $respuestaInforme["asistencia_vocal4"];
			$observa = $respuestaInforme["observa_vocal4"];

		}

		if ($_GET["area"] == "lenguaje5") {

			$area = "C.O. - LENGUAJE MUSICAL Y PRACTICA INSTRUMENTAL";

			$saberes = $respuestaInforme["saberes_lenguaje5"];
			$aprecia = $respuestaInforme["aprecia_lenguaje5"];
			$asistencia = $respuestaInforme["asistencia_lenguaje5"];
			$observa = $respuestaInforme["observa_lenguaje5"];

		}


		if ($_GET["area"] == "musica") {

			$area = "C.O. - MUSICA Y CONTEXTO HISTORICO SOCIAL";

			$saberes = $respuestaInforme["saberes_musica"];
			$aprecia = $respuestaInforme["aprecia_musica"];
			$asistencia = $respuestaInforme["asistencia_musica"];
			$observa = $respuestaInforme["observa_musica"];

		}

		if ($_GET["area"] == "vocal5") {

			$area = "C.O. - PRACTICA VOCAL";

			$saberes = $respuestaInforme["saberes_vocal5"];
			$aprecia = $respuestaInforme["aprecia_vocal5"];
			$asistencia = $respuestaInforme["asistencia_vocal5"];
			$observa = $respuestaInforme["observa_vocal5"];

		}

		if ($_GET["area"] == "tecnologia") {

			$area = "C.O. - TECNOLOGIA E INFORMATICA APLICADA A LA PRODUCCION MUSICAL";

			$saberes = $respuestaInforme["saberes_tecnologia"];
			$aprecia = $respuestaInforme["aprecia_tecnologia"];
			$asistencia = $respuestaInforme["asistencia_tecnologia"];
			$observa = $respuestaInforme["observa_tecnologia"];

		}

		if ($_GET["area"] == "conjunto5") {

			$area = "C.O. - PRACTICA DE CONJUNTO";

			$saberes = $respuestaInforme["saberes_conjunto5"];
			$aprecia = $respuestaInforme["aprecia_conjunto5"];
			$asistencia = $respuestaInforme["asistencia_conjunto5"];
			$observa = $respuestaInforme["observa_conjunto5"];

		}
					


		// TRAEMOS LA INFORMACION DE LOS CURSOS

		$itemCurso = "id";
		$valorCurso = $respuestaInforme["id_curso"];
		$tablaCurso = "primero";

		$respuestaCurso = ControladorCursos::ctrMostrarCursos($itemCurso, $valorCurso, $tablaCurso);

		$curso = $respuestaCurso["nombre"];
		$turno = $respuestaCurso["turno"];
	


require_once('tcpdf_include.php');

//$pdf=new FPDF(‘L’,’cm’,’A4’);

$pdf = new TCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);

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

				<strong>$titulo</strong>


			</td>


		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque2, false, false, false, false, '');

//----------------------------------------------------------------------------------

//----------------------------------------------------------------------------------

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

				$nombre


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

			<td style="width:780px"><img src="images/backFact2.jpg"></td>

		</tr>

		

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

	</table>

EOF;


$pdf->writeHTML($bloque6, false, false, false, false, '');

//--------------------------------------------------------

//SALIDA DEL ARCHIVO

$pdf->Output('informe_'.$nombre.'.pdf');


}
}

$reporte = new imprimirReporte();
$reporte -> id = $_GET["id"];
$reporte -> informe = $_GET["informe"];
$reporte -> area = $_GET["area"];
$reporte -> traerImpresionReporte();


?>	