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
			$campo1 = 'aulico_comunicacion';
			$campo2 = 'comportamiento_comunicacion';
			$campo3 = 'evaluacion_comunicacion';
			$campo4 = 'observa_comunicacion';
 
		}		

		if ($_GET["materia"] == "Bromatología y Sistemas de Gestión de Calidad") {

			$materia = "BROMATOLOGÍA Y SISTEMAS DE GESTIÓN DE CALIDAD";
			$campo1 = 'aulico_bromatologia';
			$campo2 = 'comportamiento_bromatologia';
			$campo3 = 'evaluacion_bromatologia';
			$campo4 = 'observa_bromatologia';
 
 
		}

					

	   if ($_GET["materia"] == "Educación Física") {

			$materia = "EDUCACIÓN FÍSICA";
			$campo1 = 'aulico_edfisica';
			$campo2 = 'comportamiento_edfisica';
			$campo3 = 'evaluacion_edfisica';
			$campo4 = 'observa_edfisica';
 
   		}
		
		if ($_GET["materia"] == "Inglés Técnico") {

		    $materia = "INGLÉS TÉCNICO";
		    $campo1 = 'aulico_itecnico';
			$campo2 = 'comportamiento_itecnico';
			$campo3 = 'evaluacion_itecnico';
			$campo4 = 'observa_itecnico';

	   }	

	   if ($_GET["materia"] == "Matemática Aplicada") {

			$materia = "MATEMÁTICA APLICADA";
			$campo1 = 'aulico_maplicada';
			$campo2 = 'comportamiento_maplicada';
			$campo3 = 'evaluacion_maplicada';
			$campo4 = 'observa_maplicada';
   		}	

		if ($_GET["materia"] == "Microbiología y Toxicología de los Alimentos") {

			$materia = "MICROBIOLOGÍA Y TOXICOLOGÍA DE LOS ALIMENTOS";
			$campo1 = 'aulico_toxicologia';
			$campo2 = 'comportamiento_toxicologia';
			$campo3 = 'evaluacion_toxicologia';
			$campo4 = 'observa_toxicologia';

	   }	

	   if ($_GET["materia"] == "Nutrición") {

			$materia = "NUTRICIÓN";
			$campo1 = 'aulico_nutricion';
			$campo2 = 'comportamiento_nutricion';
			$campo3 = 'evaluacion_nutricion';
			$campo4 = 'observa_nutricion';

       }	

	   if ($_GET["materia"] == "Organización y Gestión de la Producción") {

			$materia = "ORGANIZACIÓN Y GESTIÓN DE LA PRODUCCIÓN";
			$campo1 = 'aulico_oproduccion';
			$campo2 = 'comportamiento_oproduccion';
			$campo3 = 'evaluacion_oproduccion';
			$campo4 = 'observa_oproduccion';

   	   }	

		  if ($_GET["materia"] == "Prácticas Profesionalizantes") {

			$materia = "PRÁCTICAS PROFESIONALIZANTES";
		    $campo1 = 'aulico_practicas';
			$campo2 = 'comportamiento_practicas';
			$campo3 = 'evaluacion_practicas';
			$campo4 = 'observa_practicas';

	   }	

	   if ($_GET["materia"] == "Procesos y Equipos Industriales") {

			$materia = "PROCESOS Y EQUIPOS INDUSTRIALES";
			$campo1 = 'aulico_pindustriales';
			$campo2 = 'comportamiento_pindustriales';
			$campo3 = 'evaluacion_pindustriales';
			$campo4 = 'observa_pindustriales';

       }	

	   if ($_GET["materia"] == "Tecnología de los Alimentos") {

			$materia = "TECNOLOGÍA DE LOS ALIMENTOS";
			$campo1 = 'aulico_talimentos';
			$campo2 = 'comportamiento_talimentos';
			$campo3 = 'evaluacion_talimentos';
			$campo4 = 'observa_talimentos';

       }
	   
	   if ($_GET["materia"] == "Equipos y Aparatos") {

			$materia = "EQUIPOS Y APARATOS";
			$campo1 = 'aulico_equipos';
			$campo2 = 'comportamiento_equipos';
			$campo3 = 'evaluacion_equipos';
			$campo4 = 'observa_equipos';

  		}	

		  if ($_GET["materia"] == "Instalaciones Eléctricas") {

			$materia = "INSTALACIONES ELÉCTRICAS";
			$campo1 = 'aulico_electricas';
			$campo2 = 'comportamiento_electricas';
			$campo3 = 'evaluacion_electricas';
			$campo4 = 'observa_electricas';
	
		}	

		if ($_GET["materia"] == "Instalaciones Industriales") {

			$materia = "INSTALACIONES INDUSTRIALES";
			$campo1 = 'aulico_industriales';
			$campo2 = 'comportamiento_industriales';
			$campo3 = 'evaluacion_industriales';
			$campo4 = 'observa_industriales';
	
		}	

		if ($_GET["materia"] == "Laboratorio de Ensayos Industriales") {

			$materia = "LABORATORIO DE ENSAYOS INDUSTRIALES";
			$campo1 = 'aulico_eindustriales';
			$campo2 = 'comportamiento_eindustriales';
			$campo3 = 'evaluacion_eindustriales';
			$campo4 = 'observa_eindustriales';
		}	

		if ($_GET["materia"] == "Mantenimiento de Equipos") {

			$materia = "MANTENIMIENTO DE EQUIPOS";
			$campo1 = 'aulico_mequipos';
			$campo2 = 'comportamiento_mequipos';
			$campo3 = 'evaluacion_mequipos';
			$campo4 = 'observa_mequipos';
	
		}	

		if ($_GET["materia"] == "Máquinas Eléctricas y Ensayos") {

			$materia = "MÁQUINAS ELÉCTRICAS Y ENSAYOS";
			$campo1 = 'aulico_ensayos';
			$campo2 = 'comportamiento_ensayos';
			$campo3 = 'evaluacion_ensayos';
			$campo4 = 'observa_ensayos';
		}	

		if ($_GET["materia"] == "Máquinas Térmicas") {

			$materia = "MÁQUINAS TÉRMICAS";
			$campo1 = 'aulico_termicas';
			$campo2 = 'comportamiento_termicas';
			$campo3 = 'evaluacion_termicas';
			$campo4 = 'observa_termicas';
	
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

		if ($_GET["materia"] == "Taller") {

			$materia = "TALLER";
			$campo1 = 'aulico_taller';
			$campo2 = 'comportamiento_taller';
			$campo3 = 'evaluacion_taller';
			$campo4 = 'observa_taller';
	
		}	

		if ($_GET["materia"] == "Tecnología de Fabricación") {

			$materia = "TECNOLOGÍA DE FABRICACIÓN";
			$campo1 = 'aulico_tfabricacion';
			$campo2 = 'comportamiento_tfabricacion';
			$campo3 = 'evaluacion_tfabricacion';
			$campo4 = 'observa_tfabricacion';
	
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

		if ($_GET["materia"] == "Bromatología y Sistemas de Gestión de Calidad") {

			$materia = "BROMATOLOGÍA Y SISTEMAS DE GESTIÓN DE CALIDAD";

			$aulico = $value["aulico_bromatologia"];
			$comportamiento = $value["comportamiento_bromatologia"];
			$evaluacion = $value["evaluacion_bromatologia"];
			$observa = $value["observa_bromatologia"];

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

		if ($_GET["materia"] == "Inglés Técnico") {

			$materia = "INGLÉS TÉCNICO";

			$$aulico = $value["aulico_itecnico"];
			$comportamiento = $value["comportamiento_itecnico"];
			$evaluacion = $value["evaluacion_itecnico"];
			$observa = $value["observa_itecnico"];

		}

		if ($_GET["materia"] == "Matemática Aplicada") {

			$materia = "MATEMÁTICA APLICADA";

			$aulico = $value["aulico_maplicada"];
			$comportamiento = $value["comportamiento_maplicada"];
			$evaluacion = $value["evaluacion_maplicada"];
			$observa = $value["observa_maplicada"];

		}

		if ($_GET["materia"] == "Microbiología y Toxicología de los Alimentos") {

			$materia = "MICROBIOLOGÍA Y TOXICOLOGÍA DE LOS ALIMENTOS";

			$aulico = $value["aulico_toxicologia"];
			$comportamiento = $value["comportamiento_toxicologia"];
			$evaluacion = $value["evaluacion_toxicologia"];
			$observa = $value["observa_toxicologia"];

		}

		if ($_GET["materia"] == "Nutrición") {

			$materia = "NUTRICIÓN";

			$aulico = $value["aulico_nutricion"];
			$comportamiento = $value["comportamiento_nutricion"];
			$evaluacion = $value["evaluacion_nutricion"];
			$observa = $value["observa_nutricion"];

		}

		if ($_GET["materia"] == "Organización y Gestión de la Producción") {

			$materia = "ORGANIZACIÓN Y GESTIÓN DE LA PRODUCCIÓN";

			$aulico = $value["aulico_oproduccion"];
			$comportamiento = $value["comportamiento_oproduccion"];
			$evaluacion = $value["evaluacion_oproduccion"];
			$observa = $value["observa_oproduccion"];

		}

		if ($_GET["materia"] == "Prácticas Profesionalizantes") {

			$materia = "PRÁCTICAS PROFESIONALIZANTES";

			$aulico = $value["aulico_practicas"];
			$comportamiento = $value["comportamiento_practicas"];
			$evaluacion = $value["evaluacion_practicas"];
			$observa = $value["observa_practicas"];

		}


		if ($_GET["materia"] == "Procesos y Equipos Industriales") {

			$materia = "PROCESOS Y EQUIPOS INDUSTRIALES";

			$aulico = $value["aulico_pindustriales"];
			$comportamiento = $value["comportamiento_pindustriales"];
			$evaluacion = $value["evaluacion_pindustriales"];
			$observa = $value["observa_pindustriales"];

		}

		if ($_GET["materia"] == "Tecnología de los Alimentos") {

			$materia = "TECNOLOGÍA DE LOS ALIMENTOS";

			$aulico = $value["aulico_talimentos"];
			$comportamiento = $value["comportamiento_talimentos"];
			$evaluacion = $value["evaluacion_talimentos"];
			$observa = $value["observa_talimentos"];
		}

		if ($_GET["materia"] == "Equipos y Aparatos") {

			$materia = "EQUIPOS Y APARATOS";

			$aulico = $value["aulico_equipos"];
			$comportamiento = $value["comportamiento_equipos"];
			$evaluacion = $value["evaluacion_equipos"];
			$observa = $value["observa_equipos"];

		}

		if ($_GET["materia"] == "Instalaciones Eléctricas") {

			$materia = "INSTALACIONES ELÉCTRICAS";

			$aulico = $value["aulico_electricas"];
			$comportamiento = $value["comportamiento_electricas"];
			$evaluacion = $value["evaluacion_electricas"];
			$observa = $value["observa_electricas"];

		}

		if ($_GET["materia"] == "Instalaciones Industriales") {

			$materia = "INSTALACIONES INDUSTRIALES";

			$aulico = $value["aulico_industriales"];
			$comportamiento = $value["comportamiento_industriales"];
			$evaluacion = $value["evaluacion_industriales"];
			$observa = $value["observa_industriales"];

		}

		if ($_GET["materia"] == "Laboratorio de Ensayos Industriales") {

			$materia = "LABORATORIO DE ENSAYOS INDUSTRIALES";

			$aulico = $value["aulico_eindustriales"];
			$comportamiento = $value["comportamiento_eindustriales"];
			$evaluacion = $value["evaluacion_eindustriales"];
			$observa = $value["observa_eindustriales"];

		}

		if ($_GET["materia"] == "Mantenimiento de Equipos") {

			$materia = "MANTENIMIENTO DE EQUIPOS";

			$aulico = $value["aulico_mequipos"];
			$comportamiento = $value["comportamiento_mequipos"];
			$evaluacion = $value["evaluacion_mequipos"];
			$observa = $value["observa_mequipos"];

		}

		if ($_GET["materia"] == "Máquinas Eléctricas y Ensayos") {

			$materia = "MÁQUINAS ELÉCTRICAS Y ENSAYOS";

			$aulico = $value["aulico_ensayos"];
			$comportamiento = $value["comportamiento_ensayos"];
			$evaluacion = $value["evaluacion_ensayos"];
			$observa = $value["observa_ensayos"];

		}

		if ($_GET["materia"] == "Máquinas Térmicas") {

			$materia = "MÁQUINAS TÉRMICAS";

			$aulico = $value["aulico_termicas"];
			$comportamiento = $value["comportamiento_termicas"];
			$evaluacion = $value["evaluacion_termicas"];
			$observa = $value["observa_termicas"];

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


		if ($_GET["materia"] == "Taller") {

			$materia = "TALLER";

			$aulico = $value["aulico_taller"];
			$comportamiento = $value["comportamiento_taller"];
			$evaluacion = $value["evaluacion_taller"];
			$observa = $value["observa_taller"];

		}

		if ($_GET["materia"] == "Tecnología de Fabricación") {

			$materia = "TECNOLOGÍA DE FABRICACIÓN";

			$aulico = $value["aulico_tfabricacion"];
			$comportamiento = $value["comportamiento_tfabricacion"];
			$evaluacion = $value["evaluacion_tfabricacion"];
			$observa = $value["observa_tfabricacion"];

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