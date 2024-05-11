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

		if ($_GET["materia"] == "Comunicación Oral y Escrita") {

		   $materia = "COMUNICACIÓN ORAL Y ESCRITA";
		   $campo1 = 'concepto_comunicacion';
		   $campo2 = 'observa_comunicacion';

	   }
		
		 if ($_GET["materia"] == "Diseños de Envases") {

		 	 $materia = "DISEÑOS DE ENVASES";
			 $campo1 = 'concepto_envases';
			 $campo2 = 'observa_envases';

		 }	
			

	   if ($_GET["materia"] == "Educación Física") {

			$materia = "EDUCACIÓN FÍSICA";
			$campo1 = 'concepto_edfisica';
			$campo2 = 'observa_edfisica';

   		}
		
		if ($_GET["materia"] == "Inglés Técnico") {

		   $materia = "INGLÉS TÉCNICO";
		   $campo1 = 'concepto_ingles';
		   $campo2 = 'observa_ingles';

	   }	

	   if ($_GET["materia"] == "Matemática Aplicada") {

		$materia = "MATEMÁTICA APLICADA";
	    $campo1 = 'concepto_matematica';
	    $campo2 = 'observa_matematica';

   		}	

		   if ($_GET["materia"] == "Microbiología") {

			$materia = "MICROBIOLOGIA";
		   $campo1 = 'concepto_microbiologia';
		   $campo2 = 'observa_microbiologia';

	   }	

	   if ($_GET["materia"] == "Procesos Productivos") {

		$materia = "PROCESOS PRODUCTIVOS";
	    $campo1 = 'concepto_procesos';
	    $campo2 = 'observa_procesos';

       }	

	   if ($_GET["materia"] == "Química Analítica Cualitativa") {

		$materia = "QUÍMICA ANALÍTICA CUALITATIVA";
	    $campo1 = 'concepto_cualitativa';
	    $campo2 = 'observa_cualitativa';

   	   }	

		  if ($_GET["materia"] == "Química Analítica Cuantitativa") {

			$materia = "QUÍMICA ANALÍTICA CUANTITATIVA";
		    $campo1 = 'concepto_cuantitativa';
		    $campo2 = 'observa_cuantitativa';

	   }	

	   if ($_GET["materia"] == "Tecnología de los Alimentos") {

		$materia = "TECNOLOGÍA DE LOS ALIMENTOS";
	    $campo1 = 'concepto_tecnologia';
	    $campo2 = 'observa_tecnologia';

       }	

	   if ($_GET["materia"] == "Termodinámica") {

		$materia = "TERMODINÁMICA";
	   $campo1 = 'concepto_termodinamica';
	   $campo2 = 'observa_termodinamica';

       }
	   
	   if ($_GET["materia"] == "Análisis Matemático") {

		$materia = "ANÁLISIS MATEMÁTICO";
	    $campo1 = 'concepto_analisis';
	    $campo2 = 'observa_analisis';

  		}	

		  if ($_GET["materia"] == "Cálculos de Elementos de Máquinas") {

			$materia = "CÁLCULOS DE ELEMENTOS DE MÁQUINAS";
			$campo1 = 'concepto_calculos';
			$campo2 = 'observa_calculos';
	
		}	

		if ($_GET["materia"] == "Electrónica General") {

			$materia = "ELECTRÓNICA GENERAL";
			$campo1 = 'concepto_electronica';
			$campo2 = 'observa_electronica';
	
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

		if ($_GET["materia"] == "Legislación del Trabajo") {

			$materia = "LEGISLACIÓN DEL TRABAJO";
			$campo1 = 'concepto_legislacion';
			$campo2 = 'observa_legislacion';
	
		}	

		if ($_GET["materia"] == "Organización Industrial") {

			$materia = "ORGANIZACIÓN INDUSTRIAL";
			$campo1 = 'concepto_organizacion';
			$campo2 = 'observa_organizacion';
	
		}	

		if ($_GET["materia"] == "Prácticas Profesionalizantes") {

			$materia = "PRÁCTICAS PROFESIONALIZANTES";
			$campo1 = 'concepto_practicas';
			$campo2 = 'observa_practicas';
	
		}	

		if ($_GET["materia"] == "Seguridad e Higiene Industrial") {

			$materia = "SEGURIDAD E HIGIENE INDUSTRIAL";
			$campo1 = 'concepto_seguridad';
			$campo2 = 'observa_seguridad';
	
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


	if ($_GET["materia"] == "Comunicación Oral y Escrita") {

			$materia = "COMUNICACIÓN ORAL Y ESCRITA";

			$concepto = $value["concepto_comunicacion"];
			$observa = $value["observa_comunicacion"];

		}

		if ($_GET["materia"] == "Diseñoas de Envases") {

			$materia = "DISEÑOS DE ENVASES";

			$concepto = $value["concepto_envases"];
			$observa = $value["observa_envases"];

		}
		

		if ($_GET["materia"] == "Educación Física") {

			$materia = "EDUCACIÓN FÍSICA";

			$concepto = $value["concepto_edfisica"];
			$observa = $value["observa_edfisica"];

		}

		if ($_GET["materia"] == "Inglés Técnico") {

			$materia = "INGLÉS TÉCNICO";

			$concepto = $value["concepto_ingles"];
			$observa = $value["observa_ingles"];

		}

		if ($_GET["materia"] == "Matemática Aplicada") {

			$materia = "MATEMÁTICA APLICADA";

			$concepto = $value["concepto_matematica"];
			$observa = $value["observa_matematica"];

		}

		if ($_GET["materia"] == "Microbiología") {

			$materia = "MICROBIOLOGÍA";

			$concepto = $value["concepto_microbiologia"];
			$observa = $value["observa_microbiologia"];

		}

		if ($_GET["materia"] == "Procesos Productivos") {

			$materia = "PROCESOS PRODUCTIVOS";

			$concepto = $value["concepto_procesos"];
			$observa = $value["observa_procesos"];

		}

		if ($_GET["materia"] == "Química Analítica Cualitativa") {

			$materia = "QUÍMICA ANALÍTICA CUALITATIVA";

			$concepto = $value["concepto_cualitativa"];
			$observa = $value["observa_cualitativa"];

		}

		if ($_GET["materia"] == "Química Analítica Cuantitativa") {

			$materia = "QUÍMICA ANALÍTICA CUANTITATIVA";

			$concepto = $value["concepto_cuantitativa"];
			$observa = $value["observa_cuantitativa"];

		}


		if ($_GET["materia"] == "Química Biológica") {

			$materia = "QUÍMICA BIOLÓGICA";

			$concepto = $value["concepto_biologica"];
			$observa = $value["observa_biologica"];

		}

		if ($_GET["materia"] == "Tecnología de los Alimentos") {

			$materia = "TECNOLOGÍA DE LOS ALIMENTOS";

			$concepto = $value["concepto_tecnologia"];
			$observa = $value["observa_tecnologia"];

		}

		if ($_GET["materia"] == "Termodinámica") {

			$materia = "TERMODINÁMICA";

			$concepto = $value["concepto_termodinamica"];
			$observa = $value["observa_termodinamica"];

		}

		if ($_GET["materia"] == "Análisis Matemático") {

			$materia = "ANÁLISIS MATEMÁTICO";

			$concepto = $value["concepto_analisis"];
			$observa = $value["observa_analisis"];

		}

		if ($_GET["materia"] == "Cálculos de Elementos de Máquinas") {

			$materia = "CÁLCULOS DE ELEMENTOS DE MÁQUINAS";

			$concepto = $value["concepto_calculos"];
			$observa = $value["observa_calculos"];

		}

		if ($_GET["materia"] == "Electrónica General") {

			$materia = "ELECTRÓNICA GENERAL";

			$concepto = $value["concepto_electronica"];
			$observa = $value["observa_electronica"];

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

		if ($_GET["materia"] == "Legislación del Trabajo") {

			$materia = "LEGISLACIÓN DEL TRABAJO";

			$concepto = $value["concepto_legislacion"];
			$observa = $value["observa_legislacion"];

		}

		if ($_GET["materia"] == "Organización Industrial") {

			$materia = "ORGANIZACIÓN INDUSTRIAL";

			$concepto = $value["concepto_organizacion"];
			$observa = $value["observa_organizacion"];

		}

		if ($_GET["materia"] == "Prácticas Profesionalizantes") {

			$materia = "PRÁCTICAS PROFESIONALIZANTES";

			$concepto = $value["concepto_practicas"];
			$observa = $value["observa_practicas"];

		}

		if ($_GET["materia"] == "Seguridad e Higiene Industrial") {

			$materia = "SEGURIDAD E HIGIENE INDUSTRIAL";

			$concepto = $value["concepto_seguridad"];
			$observa = $value["observa_seguridad"];

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