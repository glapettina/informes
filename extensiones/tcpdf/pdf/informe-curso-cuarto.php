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

		
		if ($_GET["modalidad"] == "superiora") {

			$modalidad = "Alimentación";
		}else {
			$modalidad = "Electromecánica";
		}

		$per = explode('/', $periodo);

		$per2 = $per[1];

		if ($per[0] == '01') {
			
			$titulo = 'PRIMER CUATRIMESTRE ' .$per2;
		}else{

			$titulo = 'SEGUNDO CUATRIMESTRE ' .$per2;
		}
		

		$respuestaInforme = ControladorInformes::ctrMostrarInformes($itemInforme, $valorInforme, $tablaInforme, $periodo, $verifica);

		$idCurso = $_GET["idCurso"];

		if ($_GET["materia"] == "Análisis Matemático") {

		   $materia = "ANÁLISIS MATEMÁTICO";
		   $campo1 = 'concepto_analisis';
		   $campo2 = 'observa_analisis';

	   }
		
		 if ($_GET["materia"] == "Biología") {

		 	 $materia = "BIOLOGÍA";
			 $campo1 = 'concepto_biologia';
			 $campo2 = 'observa_biologia';

		 }	
			

	   if ($_GET["materia"] == "Educación Física") {

			$materia = "EDUCACIÓN FÍSICA";
			$campo1 = 'concepto_edfisica';
			$campo2 = 'observa_edfisica';

   		}
		
		if ($_GET["materia"] == "Física Aplicada") {

		   $materia = "FÍSICA APLICADA";
		   $campo1 = 'concepto_fisica';
		   $campo2 = 'observa_fisica';

	   }	

	   if ($_GET["materia"] == "Inglés Técnico") {

		$materia = "INGLÉS TÉCNICO";
	    $campo1 = 'concepto_ingles';
	    $campo2 = 'observa_ingles';

   		}	

		   if ($_GET["materia"] == "Lengua y Literatura") {

			$materia = "LENGUA Y LITERATURA";
		   $campo1 = 'concepto_lengua';
		   $campo2 = 'observa_lengua';

	   }	

	   if ($_GET["materia"] == "Operaciones Unitarias") {

		$materia = "OPERACIONES UNITARIAS";
	    $campo1 = 'concepto_operaciones';
	    $campo2 = 'observa_operaciones';

       }	

	   if ($_GET["materia"] == "Química Inorgánica") {

		$materia = "QUÍMICA INORGÁNICA";
	    $campo1 = 'concepto_inorganica';
	    $campo2 = 'observa_inorganica';

   	   }	

		  if ($_GET["materia"] == "Química Orgánica") {

			$materia = "QUÍMICA ORGÁNICA";
		    $campo1 = 'concepto_organica';
		    $campo2 = 'observa_organica';

	   }	

	   if ($_GET["materia"] == "Seguridad e Higiene Industrial y Medio Ambiente") {

		$materia = "SEGURIDAD E HIGIENE INDUSTRIAL Y MEDIO AMBIENTE";
	    $campo1 = 'concepto_seguridad';
	    $campo2 = 'observa_seguridad';

       }	

	   if ($_GET["materia"] == "Tecnología de Control") {

		$materia = "TECNOLOGÍA DE CONTROL";
	   $campo1 = 'concepto_tecnologia';
	   $campo2 = 'observa_tecnologia';

       }
	   
	   if ($_GET["materia"] == "T.P. de Química Inorgánica") {

		$materia = "T.P. DE QUÍMICA INORGÁNICA";
	    $campo1 = 'concepto_tpinorganica';
	    $campo2 = 'observa_tpinorganica';

  		}	

		  if ($_GET["materia"] == "T.P. de Química Orgánica") {

			$materia = "T.P. DE QUÍMICA ORGÁNICA";
			$campo1 = 'concepto_tporganica';
			$campo2 = 'observa_tporganica';
	
		}	

		if ($_GET["materia"] == "Trabajo y Pensamiento Crítico") {

			$materia = "TRABAJO Y PENSAMIENTO CRÍTICO";
			$campo1 = 'concepto_trabajo';
			$campo2 = 'observa_trabajo';
	
		}	

		if ($_GET["materia"] == "Electrotecnia") {

			$materia = "ELECTROTECNIA";
			$campo1 = 'concepto_electrotecnia';
			$campo2 = 'observa_electrotecnia';
	
		}	

		if ($_GET["materia"] == "Laboratorio de Mediciones Eléctricas") {

			$materia = "LABORATORIO DE MEDICIONES ELÉCTRICAS";
			$campo1 = 'concepto_laboratorio';
			$campo2 = 'observa_laboratorio';
	
		}	

		if ($_GET["materia"] == "Mecánica Técnica") {

			$materia = "MECÁNICA TÉCNICA";
			$campo1 = 'concepto_mecanica';
			$campo2 = 'observa_mecanica';
	
		}	

		if ($_GET["materia"] == "Resistencia de los Materiales") {

			$materia = "RESISTENCIA DE LOS MATERIALES";
			$campo1 = 'concepto_resistencia';
			$campo2 = 'observa_resistencia';
	
		}	

		if ($_GET["materia"] == "Taller") {

			$materia = "TALLER";
			$campo1 = 'concepto_taller';
			$campo2 = 'observa_taller';
	
		}	

		if ($_GET["materia"] == "Tecnología de los Materiales") {

			$materia = "TECNOLOGÍA DE LOS MATERIALES";
			$campo1 = 'concepto_materiales';
			$campo2 = 'observa_materiales';
	
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

			$concepto = $value["concepto_analisis"];
			$observa = $value["observa_analisis"];

		}

		if ($_GET["materia"] == "Biología") {

			$materia = "BIOLOGÍA";

			$concepto = $value["concepto_biologia"];
			$observa = $value["observa_biologia"];

		}
		

		if ($_GET["materia"] == "Educación Física") {

			$materia = "EDUCACIÓN FÍSICA";

			$concepto = $value["concepto_edfisica"];
			$observa = $value["observa_edfisica"];

		}

		if ($_GET["materia"] == "Física Aplicada") {

			$materia = "FÍSICA APLICADA";

			$concepto = $value["concepto_fisica"];
			$observa = $value["observa_fisica"];

		}

		if ($_GET["materia"] == "Inglés Técnico") {

			$materia = "INGLÉS TÉCNICO";

			$concepto = $value["concepto_ingles"];
			$observa = $value["observa_ingles"];

		}

		if ($_GET["materia"] == "Lengua y Literatura") {

			$materia = "LENGUA Y LITERATURA";

			$concepto = $value["concepto_lengua"];
			$observa = $value["observa_lengua"];

		}

		if ($_GET["materia"] == "Operaciones Unitarias") {

			$materia = "OPERACIONES UNITARIAS";

			$concepto = $value["concepto_operaciones"];
			$observa = $value["observa_operaciones"];

		}

		if ($_GET["materia"] == "Química Inorgánica") {

			$materia = "QUÍMICA INORGÁNICA";

			$concepto = $value["concepto_inorganica"];
			$observa = $value["observa_inorganica"];

		}

		if ($_GET["materia"] == "Química Orgánica") {

			$materia = "QUÍMICA ORGÁNICA";

			$concepto = $value["concepto_organica"];
			$observa = $value["observa_organica"];

		}


		if ($_GET["materia"] == "Seguridad e Higiene Industrial y Medio Ambiente") {

			$materia = "SEGURIDAD E HIGIENE INDUSTRIAL Y MEDIO AMBIENTE";

			$concepto = $value["concepto_seguridad"];
			$observa = $value["observa_seguridad"];

		}

		if ($_GET["materia"] == "Tecnología de Control") {

			$materia = "TECNOLOGÍA DE CONTROL";

			$concepto = $value["concepto_tecnologia"];
			$observa = $value["observa_tecnologia"];

		}

		if ($_GET["materia"] == "T.P. de Química Inorgánica") {

			$materia = "T.P. DE QUÍMICA INORGÁNICA";

			$concepto = $value["concepto_tpinorganica"];
			$observa = $value["observa_tpinorganica"];

		}

		if ($_GET["materia"] == "T.P. de Química Orgánica") {

			$materia = "T.P. DE QUÍMICA ORGÁNICA";

			$concepto = $value["concepto_tporganica"];
			$observa = $value["observa_tporganica"];

		}

		if ($_GET["materia"] == "Trabajo y Pensamiento Crítico") {

			$materia = "TRABAJO Y PENSAMIENTO CRÍTICO";

			$concepto = $value["concepto_trabajo"];
			$observa = $value["observa_trabajo"];

		}

		if ($_GET["materia"] == "Electrotecnia") {

			$materia = "ELECTROTECNIA";

			$concepto = $value["concepto_electrotecnia"];
			$observa = $value["observa_electrotecnia"];

		}

		if ($_GET["materia"] == "Laboratorio de Mediciones Eléctricas") {

			$materia = "LABORATORIO DE MEDICIONES ELÉCTRICAS";

			$concepto = $value["concepto_laboratorio"];
			$observa = $value["observa_laboratorio"];

		}

		if ($_GET["materia"] == "Mecánica Técnica") {

			$materia = "MECÁNICA TÉCNICA";

			$concepto = $value["concepto_mecanica"];
			$observa = $value["observa_mecanica"];

		}

		if ($_GET["materia"] == "Resistencia de los Materiales") {

			$materia = "RESISTENCIA DE LOS MATERIALES";

			$concepto = $value["concepto_resistencia"];
			$observa = $value["observa_resistencia"];

		}

		if ($_GET["materia"] == "Taller") {

			$materia = "TALLER";

			$concepto = $value["concepto_taller"];
			$observa = $value["observa_taller"];

		}

		if ($_GET["materia"] == "Tecnología de los Materiales") {

			$materia = "TECNOLOGÍA DE LOS MATERIALES";

			$concepto = $value["concepto_materiales"];
			$observa = $value["observa_materiales"];

		}

//----------------------------------------------------------------------------------

$bloque3 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		

		<tr>

			<td style="text-align: center; border: 1px solid #666; background-color:#C2BDBC;; width:280px">

				<br>

				Estudiante


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:#C2BDBC;; width:150px">

				<br>

				Agrupamiento


			</td>		

			<td style="text-align: center; border: 1px solid #666; background-color:#C2BDBC;; width:150px">

				<br>

				Turno


			</td>			

			<td style="text-align: center; border: 1px solid #666; background-color:#C2BDBC;; width:200px">

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

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:280px">

				<br>

				$value[nombre]


			</td>



			<td style="text-align: center; border: 1px solid #666; background-color:white; width:150px">

				<br>

				$curso


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:150px">

				<br>

				$turno


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:200px">

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