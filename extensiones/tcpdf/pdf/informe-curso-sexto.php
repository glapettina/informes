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

		if ($_GET["materia"] == "Bromatología y Sistemas de Gestión de Calidad") {

			$materia = "BROMATOLOGÍA Y SISTEMAS DE GESTIÓN DE CALIDAD";
			$campo1 = 'concepto_bromatologia';
			$campo2 = 'observa_bromatologia';
 
		}

		if ($_GET["materia"] == "Comunicación Oral y Escrita") {

		   $materia = "COMUNICACIÓN ORAL Y ESCRITA";
		   $campo1 = 'concepto_comunicacion';
		   $campo2 = 'observa_comunicacion';

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

		if ($_GET["materia"] == "Microbiología y Toxicología de los Alimentos") {

		   $materia = "MICROBIOLOGÍA Y TOXICOLOGÍA DE LOS ALIMENTOS";
		   $campo1 = 'concepto_microbiologia';
		   $campo2 = 'observa_microbiologia';

	   }	

	   if ($_GET["materia"] == "Nutrición") {

		$materia = "NUTRICIÓN";
	    $campo1 = 'concepto_nutricion';
	    $campo2 = 'observa_nutricion';

       }	

	   if ($_GET["materia"] == "Organización y Gestión de la Producción") {

		$materia = "ORGANIZACIÓN Y GESTIÓN DE LA PRODUCCIÓN";
	    $campo1 = 'concepto_produccion';
	    $campo2 = 'observa_produccion';

   	   }	

		  if ($_GET["materia"] == "Prácticas Profesionalizantes") {

			$materia = "PRÁCTICAS PROFESIONALIZANTES";
		    $campo1 = 'concepto_practicas';
		    $campo2 = 'observa_practicas';

	   }	

	   if ($_GET["materia"] == "Procesos y Equipos Industriales") {

		$materia = "PROCESOS Y EQUIPOS INDUSTRIALES";
	    $campo1 = 'concepto_procesos';
	    $campo2 = 'observa_procesos';

       }	

	   if ($_GET["materia"] == "Tecnología de los Alimentos") {

		$materia = "TECNOLOGÍA DE LOS ALIMENTOS";
	   $campo1 = 'concepto_tecnologia';
	   $campo2 = 'observa_tecnologia';

       }
	   
	   if ($_GET["materia"] == "Equipos y Aparatos") {

		$materia = "EQUIPOS Y APARATOS";
	    $campo1 = 'concepto_equipos';
	    $campo2 = 'observa_equipos';

  		}	

		  if ($_GET["materia"] == "Instalaciones Eléctricas") {

			$materia = "INSTALACIONES ELÉCTRICAS";
			$campo1 = 'concepto_electricas';
			$campo2 = 'observa_electricas';
	
		}	

		if ($_GET["materia"] == "Instalaciones Industriales") {

			$materia = "INSTALACIONES INDUSTRIALES";
			$campo1 = 'concepto_industriales';
			$campo2 = 'observa_industriales';
	
		}	

		if ($_GET["materia"] == "Laboratorio de Ensayos Industriales") {

			$materia = "LABORATORIO DE ENSAYOS INDUSTRIALES";
			$campo1 = 'concepto_laboratorio';
			$campo2 = 'observa_laboratorio';
	
		}	

		if ($_GET["materia"] == "Mantenimiento de Equipos") {

			$materia = "MANTENIMIENTO DE EQUIPOS";
			$campo1 = 'concepto_mantenimiento';
			$campo2 = 'observa_mantenimiento';
	
		}	

		if ($_GET["materia"] == "Máquinas Eléctricas y Ensayos") {

			$materia = "MÁQUINAS ELÉCTRICAS Y ENSAYOS";
			$campo1 = 'concepto_ensayos';
			$campo2 = 'observa_ensayos';
	
		}	

		if ($_GET["materia"] == "Máquinas Térmicas") {

			$materia = "MÁQUINAS TÉRMICAS";
			$campo1 = 'concepto_termicas';
			$campo2 = 'observa_termicas';
	
		}	

		if ($_GET["materia"] == "Organización Industrial") {

			$materia = "ORGANIZACIÓN INDUSTRIAL";
			$campo1 = 'concepto_industrial';
			$campo2 = 'observa_industrial';
	
		}

		if ($_GET["materia"] == "Prácticas Profesionalizantes") {

			$materia = "PRÁCTICAS PROFESIONALIZANTES";
			$campo1 = 'concepto_practicas';
			$campo2 = 'observa_practicas';
	
		}	

		if ($_GET["materia"] == "Taller") {

			$materia = "TALLER";
			$campo1 = 'concepto_taller';
			$campo2 = 'observa_taller';
	
		}	

		if ($_GET["materia"] == "Tecnología de Fabricación") {

			$materia = "TECNOLOGÍA DE FABRICACIÓN";
			$campo1 = 'concepto_fabricacion';
			$campo2 = 'observa_fabricacion';
	
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

			$concepto = $value["concepto_bromatologia"];
			$observa = $value["observa_bromatologia"];

		}

		if ($_GET["materia"] == "Comunicación Oral y Escrita") {

			$materia = "COMUNICACIÓN ORAL Y ESCRITA";

			$concepto = $value["concepto_comunicacion"];
			$observa = $value["observa_comunicacion"];

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

		if ($_GET["materia"] == "Microbiología y Toxicología de los Alimentos") {

			$materia = "MICROBIOLOGÍA Y TOXICOLOGÍA DE LOS ALIMENTOS";

			$concepto = $value["concepto_microbiologia"];
			$observa = $value["observa_microbiologia"];

		}

		if ($_GET["materia"] == "Nutrición") {

			$materia = "NUTRICIÓN";

			$concepto = $value["concepto_nutricion"];
			$observa = $value["observa_nutricion"];

		}

		if ($_GET["materia"] == "Organización y Gestión de la Producción") {

			$materia = "ORGANIZACIÓN Y GESTIÓN DE LA PRODUCCIÓN";

			$concepto = $value["concepto_produccion"];
			$observa = $value["observa_produccion"];

		}

		if ($_GET["materia"] == "Prácticas Profesionalizantes") {

			$materia = "PRÁCTICAS PROFESIONALIZANTES";

			$concepto = $value["concepto_practicas"];
			$observa = $value["observa_practicas"];

		}


		if ($_GET["materia"] == "Procesos y Equipos Industriales") {

			$materia = "PROCESOS Y EQUIPOS INDUSTRIALES";

			$concepto = $value["concepto_procesos"];
			$observa = $value["observa_procesos"];

		}

		if ($_GET["materia"] == "Tecnología de los Alimentos") {

			$materia = "TECNOLOGÍA DE LOS ALIMENTOS";

			$concepto = $value["concepto_tecnologia"];
			$observa = $value["observa_tecnologia"];

		}

		if ($_GET["materia"] == "Equipos y Aparatos") {

			$materia = "EQUIPOS Y APARATOS";

			$concepto = $value["concepto_equipos"];
			$observa = $value["observa_equipos"];

		}

		if ($_GET["materia"] == "Instalaciones Eléctricas") {

			$materia = "INSTALACIONES ELÉCTRICAS";

			$concepto = $value["concepto_electricas"];
			$observa = $value["observa_electricas"];

		}

		if ($_GET["materia"] == "Instalaciones Industriales") {

			$materia = "INSTALACIONES INDUSTRIALES";

			$concepto = $value["concepto_industriales"];
			$observa = $value["observa_industriales"];

		}

		if ($_GET["materia"] == "Laboratorio de Ensayos Industriales") {

			$materia = "LABORATORIO DE ENSAYOS INDUSTRIALES";

			$concepto = $value["concepto_laboratorio"];
			$observa = $value["observa_laboratorio"];

		}

		if ($_GET["materia"] == "Mantenimiento de Equipos") {

			$materia = "MANTENIMIENTO DE EQUIPOS";

			$concepto = $value["concepto_mantenimiento"];
			$observa = $value["observa_mantenimiento"];

		}

		if ($_GET["materia"] == "Máquinas Eléctricas y Ensayos") {

			$materia = "MÁQUINAS ELÉCTRICAS Y ENSAYOS";

			$concepto = $value["concepto_ensayos"];
			$observa = $value["observa_ensayos"];

		}

		if ($_GET["materia"] == "Máquinas Térmicas") {

			$materia = "MÁQUINAS TÉRMICAS";

			$concepto = $value["concepto_termicas"];
			$observa = $value["observa_termicas"];

		}

		if ($_GET["materia"] == "Organización Industrial") {

			$materia = "ORGANIZACIÓN INDUSTRIAL";

			$concepto = $value["concepto_industrial"];
			$observa = $value["observa_industrial"];

		}

		if ($_GET["materia"] == "Prácticas Profesionalizantes") {

			$materia = "PRÁCTICAS PROFESIONALIZANTES";

			$concepto = $value["concepto_practicas"];
			$observa = $value["observa_practicas"];

		}


		if ($_GET["materia"] == "Taller") {

			$materia = "TALLER";

			$concepto = $value["concepto_taller"];
			$observa = $value["observa_taller"];

		}

		if ($_GET["materia"] == "Tecnología de Fabricación") {

			$materia = "TECNOLOGÍA DE FABRICACIÓN";

			$concepto = $value["concepto_fabricacion"];
			$observa = $value["observa_fabricacion"];

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