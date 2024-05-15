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

		if ($_GET["materia"] == "Análisis Matemático") {

			$materia = "ANÁLISIS MATEMÁTICO";
		   $campo1 = 'aulico_analisis';
		   $campo2 = 'comportamiento_analisis';
		   $campo3 = 'evaluacion_analisis';
		   $campo4 = 'observa_analisis';

	   }
		
		 if ($_GET["materia"] == "Cálculos de Elementos de Máquinas") {

		 	 $materia = "CÁLCULOS DE ELEMENTOS DE MÁQUINAS";
			 $campo1 = 'aulico_calculos';
			 $campo2 = 'comportamiento_calculos';
			 $campo3 = 'evaluacion_calculos';
			 $campo4 = 'observa_calculos';

		 }	

		 if ($_GET["materia"] == "Comunicación Oral y Escrita") {

			$materia = "COMUNICACIÓN ORAL Y ESCRITA";
			$campo1 = 'aulico_comunicacion';
			$campo2 = 'comportamiento_comunicacion';
			$campo3 = 'evaluacion_comunicacion';
			$campo4 = 'observa_comunicacion';

	   }

		

	   if ($_GET["materia"] == "Educación Física") {

			$materia = "EDUCACIÓN FÍSICA";
		   	$campo1 = 'aulico_edfisica';
			 $campo2 = 'comportamiento_edfisica';
			 $campo3 = 'evaluacion_edfisica';
			 $campo4 = 'observa_edfisica';

   		}
		


	   if ($_GET["materia"] == "Electrónica General") {

		$materia = "ELECTRÓNICA GENERAL";
		$campo1 = 'aulico_electronica';
		$campo2 = 'comportamiento_electronica';
		$campo3 = 'evaluacion_electronica';
		$campo4 = 'observa_electronica';

   		}	

		   if ($_GET["materia"] == "Electrotecnia") {

			$materia = "ELECTROTECNIA";
			$campo1 = 'aulico_electrotecnia';
			$campo2 = 'comportamiento_electrotecnia';
			$campo3 = 'evaluacion_electrotecnia';
			$campo4 = 'observa_electrotecnia';

	   }

	

   if ($_GET["materia"] == "Inglés Técnico") {

			$materia = "INGLÉS TÉCNICO";
			$campo1 = 'aulico_itecnico';
			$campo2 = 'comportamiento_itecnico';
			$campo3 = 'evaluacion_itecnico';
			$campo4 = 'observa_itecnico';

	  }	

	  if ($_GET["materia"] == "Laboratorio de Mediciones Eléctricas") {

				$materia = "LABORATORIO DE MEDICIONES ELÉCTRICAS";
				$campo1 = 'aulico_melectricas';
                      $campo2 = 'comportamiento_melectricas';
                      $campo3 = 'evaluacion_melectricas';
                      $campo4 = 'observa_melectricas';
   }	

   if ($_GET["materia"] == "Legislación del Trabajo") {

				$materia = "LEGISLACIÓN DEL TRABAJO";
				$campo1 = 'aulico_legislacion';
				$campo2 = 'comportamiento_legislacion';
				$campo3 = 'evaluacion_legislacion';
				$campo4 = 'observa_legislacion';
   }	

   if ($_GET["materia"] == "Organización Industrial") {

	$materia = "ORGANIZACIÓN INDUSTRIAL";
	$campo1 = 'aulico_oindustrial';
	$campo2 = 'comportamiento_oindustrial';
	$campo3 = 'evaluacion_oindustrial';
	$campo4 = 'observa_oindustrial';

   }

   if ($_GET["materia"] == "Prácticas Profesionalizantes") {

	$materia = "PRÁCTICAS PROFESIONALIZANTES";
	$campo1 = 'aulico_practicas';
	$campo2 = 'comportamiento_practicas';
	$campo3 = 'evaluacion_practicas';
	$campo4 = 'observa_practicas';

   }

   
   if ($_GET["materia"] == "Seguridad e Higiene Industrial") {

	$materia = "SEGURIDAD E HIGIENE INDUSTRIAL";
	$campo1 = 'aulico_sindustrial';
	$campo2 = 'comportamiento_sindustrial';
	$campo3 = 'evaluacion_sindustrial';
	$campo4 = 'observa_sindustrial';
}

if ($_GET["materia"] == "Taller") {

	$materia = "TALLER";
	$campo1 = 'aulico_taller';
	$campo2 = 'comportamiento_taller';
	$campo3 = 'evaluacion_taller';
	$campo4 = 'observa_taller';
}

if ($_GET["materia"] == "Termodinámica") {

	$materia = "TERMODINÁMICA";
	$campo1 = 'aulico_termodinamica';
	$campo2 = 'comportamiento_termodinamica';
	$campo3 = 'evaluacion_termodinamica';
	$campo4 = 'observa_termodinamica';
}

if ($_GET["materia"] == "Diseños de Envases") {

	$materia = "DISEÑOS DE ENVASES";
	$campo1 = 'aulico_disenio';
	$campo2 = 'comportamiento_disenio';
	$campo3 = 'evaluacion_disenio';
	$campo4 = 'observa_disenio';
}

if ($_GET["materia"] == "Matemática Aplicada") {

	$materia = "MATEMÁTICA APLICADA";
	$campo1 = 'aulico_maplicada';
	$campo2 = 'comportamiento_maplicada';
	$campo3 = 'evaluacion_maplicada';
	$campo4 = 'observa_maplicada';
}

if ($_GET["materia"] == "Microbiología") {

	$materia = "MICROBIOLOGÍA";
	$campo1 = 'aulico_microbiologia';
	$campo2 = 'comportamiento_microbiologia';
	$campo3 = 'evaluacion_microbiologia';
	$campo4 = 'observa_microbiologia';
}

if ($_GET["materia"] == "Procesos Productivos") {

	$materia = "PROCESOS PRODUCTIVOS";
	$campo1 = 'aulico_prpoductivos';
	$campo2 = 'comportamiento_prpoductivos';
	$campo3 = 'evaluacion_prpoductivos';
	$campo4 = 'observa_prpoductivos';
}

if ($_GET["materia"] == "Química Analítica Cualitativa") {

	$materia = "QUÍMICA ANALÍTICA CUALITATIVA";
	$campo1 = 'aulico_cualitativa';
	$campo2 = 'comportamiento_cualitativa';
	$campo3 = 'evaluacion_cualitativa';
	$campo4 = 'observa_cualitativa';
}

if ($_GET["materia"] == "Química Analítica Cuantitativa") {

	$materia = "QUÍMICA ANALÍTICA CUANTITATIVA";
	$campo1 = 'aulico_cuantitativa';
	$campo2 = 'comportamiento_cuantitativa';
	$campo3 = 'evaluacion_cuantitativa';
	$campo4 = 'observa_cuantitativa';
}

if ($_GET["materia"] == "Química Biológica") {

	$materia = "QUÍMICA BIOLÓGICA";
	$campo1 = 'aulico_qbiologica';
	$campo2 = 'comportamiento_qbiologica';
	$campo3 = 'evaluacion_qbiologica';
	$campo4 = 'observa_qbiologica';
}



if ($_GET["materia"] == "Tecnología de los Alimentos") {

	$materia = "TECNOLOGÍA DE LOS ALIMENTOS";
	$campo1 = 'aulico_talimentos';
	$campo2 = 'comportamiento_talimentos';
	$campo3 = 'evaluacion_talimentos';
	$campo4 = 'observa_talimentos';

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

		$aulico = $value["aulico_analisis"];
		$comportamiento = $value["comportamiento_analisis"];
		$evaluacion = $value["evaluacion_analisis"];
		$observa = $value["observa_analisis"];

	}

	if ($_GET["materia"] == "Cálculos de Elementos de Máquinas") {

			$materia = "CÁLCULOS DE ELEMENTOS DE MÁQUINAS";

			$aulico = $value["aulico_calculos"];
			$comportamiento = $value["comportamiento_calculos"];
			$evaluacion = $value["evaluacion_calculos"];
			$observa = $value["observa_calculos"];

		}

		if ($_GET["materia"] == "Comunicación Oral y Escrita") {

			$materia = "COMUNICACIÓN ORAL Y ESCRITA";

			$aulico = $value["aulico_comunicacion"];
			$comportamiento = $value["comportamiento_comunicacion"];
			$evaluacion = $value["evaluacion_comunicacion"];
			$observa = $value["observa_comunicacion"];

		}


		if ($_GET["materia"] == "Educación Física") {

			$materia = "EDUCACIÓN FÍSICA";

			$aulico = $value["aulico_edfisica"];
			$comportamiento = $value["comportamiento_edfisica"];
			$evaluacion = $value["evaluacion_edfisica"];
			$observa = $value["observa_edfisica"];

		}

		if ($_GET["materia"] == "Electrónica General") {

			$materia = "ELECTRÓNICA GENERAL";

			$aulico = $value["aulico_electronica"];
			$comportamiento = $value["comportamiento_electronica"];
			$evaluacion = $value["evaluacion_electronica"];
			$observa = $value["observa_electronica"];

		}

		if ($_GET["materia"] == "Electrotecnia") {

			$materia = "ELECTROTECNIA";

			$aulico = $value["aulico_electrotecnia"];
			$comportamiento = $value["comportamiento_electrotecnia"];
			$evaluacion = $value["evaluacion_electrotecnia"];
			$observa = $value["observa_electrotecnia"];

		}


		if ($_GET["materia"] == "Inglés Técnico") {

			$materia = "INGLÉS TÉCNICO";

			$aulico = $value["aulico_itecnico"];
			$comportamiento = $value["comportamiento_itecnico"];
			$evaluacion = $value["evaluacion_itecnico"];
			$observa = $value["observa_itecnico"];

		}

		if ($_GET["materia"] == "Laboratorio de Mediciones Eléctricas") {

			$materia = "LABORATORIO DE MEDICIONES ELÉCTRICAS";

			$aulico = $value["aulico_melectricas"];
			$comportamiento = $value["comportamiento_melectricas"];
			$evaluacion = $value["evaluacion_melectricas"];
			$observa = $value["observa_melectricas"];

		}

		if ($_GET["materia"] == "Legislación del Trabajo") {

			$materia = "LEGISLACIÓN DEL TRABAJO";

			$aulico = $value["aulico_legislacion"];
			$comportamiento = $value["comportamiento_legislacion"];
			$evaluacion = $value["evaluacion_legislacion"];
			$observa = $value["observa_legislacion"];

		}

		if ($_GET["materia"] == "Organización Industrial") {

			$materia = "ORGANIZACIÓN INDUSTRIAL";

			$aulico = $value["aulico_oindustrial"];
			$comportamiento = $value["comportamiento_oindustrial"];
			$evaluacion = $value["evaluacion_oindustrial"];
			$observa = $value["observa_oindustrial"];

		}

		if ($_GET["materia"] == "Prácticas Profesionalizantes") {

			$materia = "PRÁCTICAS PROFESIONALIZANTES";

			$aulico = $value["aulico_practicas"];
			$comportamiento = $value["comportamiento_practicas"];
			$evaluacion = $value["evaluacion_practicas"];
			$observa = $value["observa_practicas"];

		}

		if ($_GET["materia"] == "Seguridad e Higiene Industrial") {

			$materia = "SEGURIDAD E HIGIENE INDUSTRIAL";

			$aulico = $value["aulico_sindustrial"];
			$comportamiento = $value["comportamiento_sindustrial"];
			$evaluacion = $value["evaluacion_sindustrial"];
			$observa = $value["observa_sindustrial"];

		}

		if ($_GET["materia"] == "Taller") {

			$materia = "TALLER";

			$aulico = $value["aulico_taller"];
			$comportamiento = $value["comportamiento_taller"];
			$evaluacion = $value["evaluacion_taller"];
			$observa = $value["observa_taller"];

		}

		if ($_GET["materia"] == "Termodinámica") {

			$materia = "TERMODINÁMICA";

			$aulico = $value["aulico_termodinamica"];
			$comportamiento = $value["comportamiento_termodinamica"];
			$evaluacion = $value["evaluacion_termodinamica"];
			$observa = $value["observa_termodinamica"];

		}

		if ($_GET["materia"] == "Diseños de Envases") {

			$materia = "DISEÑOS DE ENVASES";

			$aulico = $value["aulico_disenio"];
			$comportamiento = $value["comportamiento_disenio"];
			$evaluacion = $value["evaluacion_disenio"];
			$observa = $value["observa_disenio"];

		}

		if ($_GET["materia"] == "Matemática Aplicada") {

			$materia = "MATEMÁTICA APLICADA";

			$aulico = $value["aulico_maplicada"];
			$comportamiento = $value["comportamiento_maplicada"];
			$evaluacion = $value["evaluacion_maplicada"];
			$observa = $value["observa_maplicada"];

		}

		if ($_GET["materia"] == "Microbiología") {

			$materia = "MICROBIOLOGÍA";

			$aulico = $value["aulico_microbiologia"];
			$comportamiento = $value["comportamiento_microbiologia"];
			$evaluacion = $value["evaluacion_microbiologia"];
			$observa = $value["observa_microbiologia"];

		}

		if ($_GET["materia"] == "Procesos Productivos") {

			$materia = "PROCESOS PRODUCTIVOS";

			$aulico = $value["aulico_pproductivos"];
			$comportamiento = $value["comportamiento_pproductivos"];
			$evaluacion = $value["evaluacion_pproductivos"];
			$observa = $value["observa_pproductivos"];

		}

		if ($_GET["materia"] == "Química Analítica Cualitativa") {

			$materia = "QUÍMICA ANALÍTICA CUALITATIVA";

			$aulico = $value["aulico_cualitativa"];
			$comportamiento = $value["comportamiento_cualitativa"];
			$evaluacion = $value["evaluacion_cualitativa"];
			$observa = $value["observa_cualitativa"];

		}

		if ($_GET["materia"] == "Química Analítica Cuantitativa") {

			$materia = "QUÍMICA ANALÍTICA CUANTITATIVA";

			$aulico = $value["aulico_cuantitativa"];
			$comportamiento = $value["comportamiento_cuantitativa"];
			$evaluacion = $value["evaluacion_cuantitativa"];
			$observa = $value["observa_cuantitativa"];

		}

		if ($_GET["materia"] == "Química Biológica") {

			$materia = "QUÍMICA BIOLÓGICA";

			$aulico = $value["aulico_qbiologica"];
			$comportamiento = $value["comportamiento_qbiologica"];
			$evaluacion = $value["evaluacion_qbiologica"];
			$observa = $value["observa_qbiologica"];

		}

		

		if ($_GET["materia"] == "Tecnología de los Alimentos") {

			$materia = "TECNOLOGÍA DE LOS ALIMENTOS";

			$aulico = $value["aulico_talimentos"];
			$comportamiento = $value["comportamiento_talimentos"];
			$evaluacion = $value["evaluacion_talimentos"];
			$observa = $value["observa_talimentos"];

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