

/*=============================================
EDITAR INFORME PRIMERO
=============================================*/

$(".tablas").on("click", ".btnEditarInformePrimero", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");
	var materia = $(this).attr("mat");

	console.log($(this).attr("mat"));
	

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);



	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);
	datos.append("materia", materia);

	if (materia == 'Análisis Matemático') {

		var campo1 = 'aulico_analisis'; 
		var campo2 = 'comportamiento_analisis'; 
		var campo3 = 'evaluacion_analisis'; 
		var campo4 = 'observa_analisis'; 

		var id1 = '#aulicoAnalisis';
		var id2 = '#comportamientoAnalisis';
		var id3 = '#evaluacionAnalisis';
		var id4 = '#observaAnalisis';

		
	}
	

	if (materia == 'Biología') {

		var campo1 = 'aulico_biologia'; 
		var campo2 = 'comportamiento_biologia'; 
		var campo3 = 'evaluacion_biologia'; 
		var campo4 = 'observa_biologia'; 

		var id1 = '#aulicoBiologia';
		var id2 = '#comportamientoBiologia';
		var id3 = '#evaluacionBiologia';
		var id4 = '#observaBiologia';
		
	}

	if (materia == 'Bromatología y Sistemas de Gestión de Calidad') {

		var campo1 = 'aulico_bromatologia'; 
		var campo2 = 'comportamiento_bromatologia'; 
		var campo3 = 'evaluacion_bromatologia'; 
		var campo4 = 'observa_bromatologia'; 

		var id1 = '#aulicoBromatologia';
		var id2 = '#comportamientoBromatologia';
		var id3 = '#evaluacionBromatologia';
		var id4 = '#observaBromatologia';
		
	}

	if (materia == 'Cálculos de Elementos de Máquinas') {

		var campo1 = 'aulico_calculos'; 
		var campo2 = 'comportamiento_calculos'; 
		var campo3 = 'evaluacion_calculos'; 
		var campo4 = 'observa_calculos'; 

		var id1 = '#aulicoCalculos';
		var id2 = '#comportamientoCalculos';
		var id3 = '#evaluacionCalculos';
		var id4 = '#observaCalculos';
		
	}

	if (materia == 'Comunicación Oral y Escrita') {

		var campo1 = 'aulico_comunicacion'; 
		var campo2 = 'comportamiento_comunicacion'; 
		var campo3 = 'evaluacion_comunicacion'; 
		var campo4 = 'observa_comunicacion'; 

		var id1 = '#aulicoComunicacion';
		var id2 = '#comportamientoComunicacion';
		var id3 = '#evaluacionComunicacion';
		var id4 = '#observaComunicacion';
		
	}

	if (materia == 'Dibujo Técnico') {

		var campo1 = 'aulico_dibujo'; 
		var campo2 = 'comportamiento_dibujo'; 
		var campo3 = 'evaluacion_dibujo'; 
		var campo4 = 'observa_dibujo'; 

		var id1 = '#aulicoDibujo'; 
		var id2 = '#comportamientoDibujo'; 
		var id3 = '#evaluacionDibujo'; 
		var id4 = '#observaDibujo'; 		
	}

	if (materia == 'Diseños de Envases') {

		var campo1 = 'aulico_disenio'; 
		var campo2 = 'comportamiento_disenio'; 
		var campo3 = 'evaluacion_disenio'; 
		var campo4 = 'observa_disenio'; 

		var id1 = '#aulicoDisenio';
		var id2 = '#comportamientoDisenio';
		var id3 = '#evaluacionDisenio';
		var id4 = '#observaDisenio';
		
	}

	if (materia == "Educación Artística") {

		var campo1 = 'aulico_artistica'; 
		var campo2 = 'comportamiento_artistica'; 
		var campo3 = 'evaluacion_artistica'; 
		var campo4 = 'observa_artistica'; 

		var id1 = '#aulicoArtistica'; 
		var id2 = '#comportamientoArtistica'; 
		var id3 = '#evaluacionArtistica'; 
		var id4 = '#observaArtistica'; 
		
	}
	

	if (materia == "Educación Física") {

		var campo1 = 'aulico_edfisica'; 
		var campo2 = 'comportamiento_edfisica'; 
		var campo3 = 'evaluacion_edfisica'; 
		var campo4 = 'observa_edfisica'; 

		var id1 = '#aulicoEdfisica'; 
		var id2 = '#comportamientoEdfisica'; 
		var id3 = '#evaluacionEdfisica'; 
		var id4 = '#observaEdfisica'; 
		
	}

	if (materia == "Educación para la Ciudadanía") {

		var campo1 = 'aulico_ciudadania'; 
		var campo2 = 'comportamiento_ciudadania'; 
		var campo3 = 'evaluacion_ciudadania'; 
		var campo4 = 'observa_ciudadania'; 

		var id1 = '#aulicoCiudadania'; 
		var id2 = '#comportamientoCiudadania'; 
		var id3 = '#evaluacionCiudadania'; 
		var id4 = '#observaCiudadania';  
		
	}

	if (materia == 'Electrónica General') {

		var campo1 = 'aulico_electronica'; 
		var campo2 = 'comportamiento_electronica'; 
		var campo3 = 'evaluacion_electronica'; 
		var campo4 = 'observa_electronica'; 

		var id1 = '#aulicoElectronica';
		var id2 = '#comportamientoElectronica';
		var id3 = '#evaluacionElectronica';
		var id4 = '#observaElectronica';
		
	}

	if (materia == 'Electrotecnia') {

		var campo1 = 'aulico_electrotecnia'; 
		var campo2 = 'comportamiento_electrotecnia'; 
		var campo3 = 'evaluacion_electrotecnia'; 
		var campo4 = 'observa_electrotecnia'; 

		var id1 = '#aulicoElectrotecnia';
		var id2 = '#comportamientoElectrotecnia';
		var id3 = '#evaluacionElectrotecnia';
		var id4 = '#observaElectrotecnia';
		
	}

	if (materia == 'Equipos y Aparatos') {

		var campo1 = 'aulico_equipos'; 
		var campo2 = 'comportamiento_equipos'; 
		var campo3 = 'evaluacion_equipos'; 
		var campo4 = 'observa_equipos'; 

		var id1 = '#aulicoEquipos';
		var id2 = '#comportamientoEquipos';
		var id3 = '#evaluacionEquipos';
		var id4 = '#observaEquipos';
		
	}

	if (materia == 'Estática') {

		var campo1 = 'aulico_estatica'; 
		var campo2 = 'comportamiento_estatica'; 
		var campo3 = 'evaluacion_estatica'; 
		var campo4 = 'observa_estatica'; 

		var id1 = '#aulicoEstatica';
		var id2 = '#comportamientoEstatica';
		var id3 = '#evaluacionEstatica';
		var id4 = '#observaEstatica';		
	}

	if (materia == 'Física') {

		var campo1 = 'aulico_fisica'; 
		var campo2 = 'comportamiento_fisica'; 
		var campo3 = 'evaluacion_fisica'; 
		var campo4 = 'observa_fisica'; 

		var id1 = '#aulicoFisica';
		var id2 = '#comportamientoFisica';
		var id3 = '#evaluacionFisica';
		var id4 = '#observaFisica';
		
	}

	if (materia == 'Física Aplicada') {

		var campo1 = 'aulico_faplicada'; 
		var campo2 = 'comportamiento_faplicada'; 
		var campo3 = 'evaluacion_faplicada'; 
		var campo4 = 'observa_faplicada'; 

		var id1 = '#aulicoFaplicada';
		var id2 = '#comportamientoFaplicada';
		var id3 = '#evaluacionFaplicada';
		var id4 = '#observaFaplicada';

		
	}

	if (materia == "Físico Química") {

		var campo1 = 'aulico_fisico_quimica'; 
		var campo2 = 'comportamiento_fisico_quimica'; 
		var campo3 = 'evaluacion_fisico_quimica'; 
		var campo4 = 'observa_fisico_quimica'; 

		var id1 = '#aulicoFisicoQuimica'; 
		var id2 = '#comportamientoFisicoQuimica'; 
		var id3 = '#evaluacionFisicoQuimica'; 
		var id4 = '#observaFisicoQuimica'; 		
	}

	if (materia == "Geografía") {

		var campo1 = 'aulico_geografia'; 
		var campo2 = 'comportamiento_geografia'; 
		var campo3 = 'evaluacion_geografia'; 
		var campo4 = 'observa_geografia'; 

		var id1 = '#aulicoGeografia'; 
		var id2 = '#comportamientoGeografia'; 
		var id3 = '#evaluacionGeografia'; 
		var id4 = '#observaGeografia'; 		
	}

	if (materia == "Historia") {

		var campo1 = 'aulico_historia'; 
		var campo2 = 'comportamiento_historia'; 
		var campo3 = 'evaluacion_historia'; 
		var campo4 = 'observa_historia'; 

		var id1 = '#aulicoHistoria'; 
		var id2 = '#comportamientoHistoria'; 
		var id3 = '#evaluacionHistoria'; 
		var id4 = '#observaHistoria'; 		
	}

	if (materia == "Inglés") {

		var campo1 = 'aulico_ingles'; 
		var campo2 = 'comportamiento_ingles'; 
		var campo3 = 'evaluacion_ingles'; 
		var campo4 = 'observa_ingles'; 

		var id1 = '#aulicoIngles'; 
		var id2 = '#comportamientoIngles'; 
		var id3 = '#evaluacionIngles'; 
		var id4 = '#observaIngles'; 		
	}

	if (materia == 'Inglés Técnico') {

		var campo1 = 'aulico_itecnico'; 
		var campo2 = 'comportamiento_itecnico'; 
		var campo3 = 'evaluacion_itecnico'; 
		var campo4 = 'observa_itecnico'; 

		var id1 = '#aulicoItecnico';
		var id2 = '#comportamientoItecnico';
		var id3 = '#evaluacionItecnico';
		var id4 = '#observaItecnico';
		
	}

	if (materia == 'Instalaciones Eléctricas') {

		var campo1 = 'aulico_electricas'; 
		var campo2 = 'comportamiento_electricas'; 
		var campo3 = 'evaluacion_electricas'; 
		var campo4 = 'observa_electricas'; 

		var id1 = '#aulicoElectricas';
		var id2 = '#comportamientoElectricas';
		var id3 = '#evaluacionElectricas';
		var id4 = '#observaElectricas';
		
	}

	if (materia == 'Instalaciones Industriales') {

		var campo1 = 'aulico_industriales'; 
		var campo2 = 'comportamiento_industriales'; 
		var campo3 = 'evaluacion_industriales'; 
		var campo4 = 'observa_industriales'; 

		var id1 = '#aulicoIndustriales';
		var id2 = '#comportamientoIndustriales';
		var id3 = '#evaluacionIndustriales';
		var id4 = '#observaIndustriales';
		
	}

	if (materia == 'Laboratorio de Ensayos Industriales') {

		var campo1 = 'aulico_eindustriales'; 
		var campo2 = 'comportamiento_eindustriales'; 
		var campo3 = 'evaluacion_eindustriales'; 
		var campo4 = 'observa_eindustriales'; 

		var id1 = '#aulicoEindustriales';
		var id2 = '#comportamientoEindustriales';
		var id3 = '#evaluacionEindustriales';
		var id4 = '#observaEindustriales';
		
	}

	if (materia == 'Laboratorio de Mediciones Eléctricas') {

		var campo1 = 'aulico_melectricas'; 
		var campo2 = 'comportamiento_melectricas'; 
		var campo3 = 'evaluacion_melectricas'; 
		var campo4 = 'observa_melectricas'; 

		var id1 = '#aulicoMelectricas';
		var id2 = '#comportamientoMelectricas';
		var id3 = '#evaluacionMelectricas';
		var id4 = '#observaMelectricas';
		
	}

	if (materia == 'Legislación del Trabajo') {

		var campo1 = 'aulico_legislacion'; 
		var campo2 = 'comportamiento_legislacion'; 
		var campo3 = 'evaluacion_legislacion'; 
		var campo4 = 'observa_legislacion'; 

		var id1 = '#aulicoLegislacion';
		var id2 = '#comportamientoLegislacion';
		var id3 = '#evaluacionLegislacion';
		var id4 = '#observaLegislacion';

	}

	if (materia == "Lengua y Literatura") {

		var campo1 = 'aulico_lengua'; 
		var campo2 = 'comportamiento_lengua'; 
		var campo3 = 'evaluacion_lengua'; 
		var campo4 = 'observa_lengua'; 

		var id1 = '#aulicoLengua'; 
		var id2 = '#comportamientoLengua'; 
		var id3 = '#evaluacionLengua'; 
		var id4 = '#observaLengua'; 		
	}

	if (materia == 'Mantenimiento de Equipos') {

		var campo1 = 'aulico_mequipos'; 
		var campo2 = 'comportamiento_mequipos'; 
		var campo3 = 'evaluacion_mequipos'; 
		var campo4 = 'observa_mequipos'; 

		var id1 = '#aulicoMequipos';
		var id2 = '#comportamientoMequipos';
		var id3 = '#evaluacionMequipos';
		var id4 = '#observaMequipos';
		
	}

	if (materia == 'Máquinas Eléctricas y Ensayos') {

		var campo1 = 'aulico_ensayos'; 
		var campo2 = 'comportamiento_ensayos'; 
		var campo3 = 'evaluacion_ensayos'; 
		var campo4 = 'observa_ensayos'; 

		var id1 = '#aulicoEnsayos';
		var id2 = '#comportamientoEnsayos';
		var id3 = '#evaluacionEnsayos';
		var id4 = '#observaEnsayos';
		
	}

	if (materia == 'Máquinas Térmicas') {

		var campo1 = 'aulico_termicas'; 
		var campo2 = 'comportamiento_termicas'; 
		var campo3 = 'evaluacion_termicas'; 
		var campo4 = 'observa_termicas'; 

		var id1 = '#aulicoTermicas';
		var id2 = '#comportamientoTermicas';
		var id3 = '#evaluacionTermicas';
		var id4 = '#observaTermicas';
		
	}

	if (materia == "Matemática") {

		var campo1 = 'aulico_matematica'; 
		var campo2 = 'comportamiento_matematica'; 
		var campo3 = 'evaluacion_matematica'; 
		var campo4 = 'observa_matematica'; 

		var id1 = '#aulicoMatematica'; 
		var id2 = '#comportamientoMatematica'; 
		var id3 = '#evaluacionMatematica'; 
		var id4 = '#observaMatematica'; 		
	}

	if (materia == 'Matemática Aplicada') {

		var campo1 = 'aulico_maplicada'; 
		var campo2 = 'comportamiento_maplicada'; 
		var campo3 = 'evaluacion_maplicada'; 
		var campo4 = 'observa_maplicada'; 

		var id1 = '#aulicoMaplicada';
		var id2 = '#comportamientoMaplicada';
		var id3 = '#evaluacionMaplicada';
		var id4 = '#observaMaplicada';
		
	}

	if (materia == 'Mecánica Técnica') {

		var campo1 = 'aulico_mtecnica'; 
		var campo2 = 'comportamiento_mtecnica'; 
		var campo3 = 'evaluacion_mtecnica'; 
		var campo4 = 'observa_mtecnica'; 

		var id1 = '#aulicoMtecnica';
		var id2 = '#comportamientoMtecnica';
		var id3 = '#evaluacionMtecnica';
		var id4 = '#observaMtecnica';
		
	}

	if (materia == 'Microbiología') {

		var campo1 = 'aulico_microbiologia'; 
		var campo2 = 'comportamiento_microbiologia'; 
		var campo3 = 'evaluacion_microbiologia'; 
		var campo4 = 'observa_microbiologia'; 

		var id1 = '#aulicoMicrobiologia';
		var id2 = '#comportamientoMicrobiologia';
		var id3 = '#evaluacionMicrobiologia';
		var id4 = '#observaMicrobiologia';
		
	}

	if (materia == 'Microbiología y Toxicología de los Alimentos') {

		var campo1 = 'aulico_toxicologia'; 
		var campo2 = 'comportamiento_toxicologia'; 
		var campo3 = 'evaluacion_toxicologia'; 
		var campo4 = 'observa_toxicologia'; 

		var id1 = '#aulicoToxicologia';
		var id2 = '#comportamientoToxicologia';
		var id3 = '#evaluacionToxicologia';
		var id4 = '#observaToxicologia';
		
	}

	if (materia == 'Nutrición') {

		var campo1 = 'aulico_nutricion'; 
		var campo2 = 'comportamiento_nutricion'; 
		var campo3 = 'evaluacion_nutricion'; 
		var campo4 = 'observa_nutricion'; 

		var id1 = '#aulicoNutricion';
		var id2 = '#comportamientoNutricion';
		var id3 = '#evaluacionNutricion';
		var id4 = '#observaNutricion';
		
	}

	if (materia == 'Operaciones Unitarias') {

		var campo1 = 'aulico_unitarias'; 
		var campo2 = 'comportamiento_unitarias'; 
		var campo3 = 'evaluacion_unitarias'; 
		var campo4 = 'observa_unitarias'; 

		var id1 = '#aulicoUnitarias';
		var id2 = '#comportamientoUnitarias';
		var id3 = '#evaluacionUnitarias';
		var id4 = '#observaUnitarias';
		
	}

	if (materia == 'Organización Industrial') {

		var campo1 = 'aulico_oindustrial'; 
		var campo2 = 'comportamiento_oindustrial'; 
		var campo3 = 'evaluacion_oindustrial'; 
		var campo4 = 'observa_oindustrial'; 

		var id1 = '#aulicoOindustrial';
		var id2 = '#comportamientoOindustrial';
		var id3 = '#evaluacionOindustrial';
		var id4 = '#observaOindustrial';
		
	}

	if (materia == 'Organización y Gestión de la Producción') {

		var campo1 = 'aulico_oproduccion'; 
		var campo2 = 'comportamiento_oproduccion'; 
		var campo3 = 'evaluacion_oproduccion'; 
		var campo4 = 'observa_oproduccion'; 

		var id1 = '#aulicoOproduccion';
		var id2 = '#comportamientoOproduccion';
		var id3 = '#evaluacionOproduccion';
		var id4 = '#observaOproduccion';
		
	}

	if (materia == 'Prácticas Profesionalizantes') {

		var campo1 = 'aulico_practicas'; 
		var campo2 = 'comportamiento_practicas'; 
		var campo3 = 'evaluacion_practicas'; 
		var campo4 = 'observa_practicas'; 

		var id1 = '#aulicoPracticas';
		var id2 = '#comportamientoPracticas';
		var id3 = '#evaluacionPracticas';
		var id4 = '#observaPracticas';
		
	}

	if (materia == 'Procesos Productivos') {

		var campo1 = 'aulico_pproductivos'; 
		var campo2 = 'comportamiento_pproductivos'; 
		var campo3 = 'evaluacion_pproductivos'; 
		var campo4 = 'observa_pproductivos'; 

		var id1 = '#aulicoPproductivos';
		var id2 = '#comportamientoPproductivos';
		var id3 = '#evaluacionPproductivos';
		var id4 = '#observaPproductivos';
		
	}

	if (materia == 'Procesos y Equipos Industriales') {

		var campo1 = 'aulico_pindustriales'; 
		var campo2 = 'comportamiento_pindustriales'; 
		var campo3 = 'evaluacion_pindustriales'; 
		var campo4 = 'observa_pindustriales'; 

		var id1 = '#aulicoPindustriales';
		var id2 = '#comportamientoPindustriales';
		var id3 = '#evaluacionPindustriales';
		var id4 = '#observaPindustriales';
		
	}

	if (materia == 'Química') {

		var campo1 = 'aulico_quimica'; 
		var campo2 = 'comportamiento_quimica'; 
		var campo3 = 'evaluacion_quimica'; 
		var campo4 = 'observa_quimica'; 

		var id1 = '#aulicoQuimica';
		var id2 = '#comportamientoQuimica';
		var id3 = '#evaluacionQuimica';
		var id4 = '#observaQuimica';
		
	}

	if (materia == 'Química Analítica Cualitativa') {

		var campo1 = 'aulico_cualitativa'; 
		var campo2 = 'comportamiento_cualitativa'; 
		var campo3 = 'evaluacion_cualitativa'; 
		var campo4 = 'observa_cualitativa'; 

		var id1 = '#aulicoCualitativa';
		var id2 = '#comportamientoCualitativa';
		var id3 = '#evaluacionCualitativa';
		var id4 = '#observaCualitativa';
		
	}

	if (materia == 'Química Analítica Cuantitativa') {

		var campo1 = 'aulico_cuantitativa'; 
		var campo2 = 'comportamiento_cuantitativa'; 
		var campo3 = 'evaluacion_cuantitativa'; 
		var campo4 = 'observa_cuantitativa'; 

		var id1 = '#aulicoCuantitativa';
		var id2 = '#comportamientoCuantitativa';
		var id3 = '#evaluacionCuantitativa';
		var id4 = '#observaCuantitativa';
		
	}

	if (materia == 'Química Biológica') {

		var campo1 = 'aulico_qbiologica'; 
		var campo2 = 'comportamiento_qbiologica'; 
		var campo3 = 'evaluacion_qbiologica'; 
		var campo4 = 'observa_qbiologica'; 

		var id1 = '#aulicoQbiologica';
		var id2 = '#comportamientoQbiologica';
		var id3 = '#evaluacionQbiologica';
		var id4 = '#observaQbiologica';
		
	}

	if (materia == 'Química General') {

		var campo1 = 'aulico_quimica_general'; 
		var campo2 = 'comportamiento_quimica_general'; 
		var campo3 = 'evaluacion_quimica_general'; 
		var campo4 = 'observa_quimica_general'; 

		var id1 = '#aulicoQuimicaGeneral';
		var id2 = '#comportamientoQuimicaGeneral';
		var id3 = '#evaluacionQuimicaGeneral';
		var id4 = '#observaQuimicaGeneral';
		
	}

	if (materia == 'Química Inorgánica') {

		var campo1 = 'aulico_qinorganica'; 
		var campo2 = 'comportamiento_qinorganica'; 
		var campo3 = 'evaluacion_qinorganica'; 
		var campo4 = 'observa_qinorganica'; 

		var id1 = '#aulicoQinorganica';
		var id2 = '#comportamientoQinorganica';
		var id3 = '#evaluacionQinorganica';
		var id4 = '#observaQinorganica';
		
	}

	if (materia == 'Química Orgánica') {

		var campo1 = 'aulico_qorganica'; 
		var campo2 = 'comportamiento_qorganica'; 
		var campo3 = 'evaluacion_qorganica'; 
		var campo4 = 'observa_qorganica'; 

		var id1 = '#aulicoQorganica';
		var id2 = '#comportamientoQorganica';
		var id3 = '#evaluacionQorganica';
		var id4 = '#observaQorganica';
		
	}

	if (materia == 'Resistencia de los Materiales') {

		var campo1 = 'aulico_resistencia'; 
		var campo2 = 'comportamiento_resistencia'; 
		var campo3 = 'evaluacion_resistencia'; 
		var campo4 = 'observa_resistencia'; 

		var id1 = '#aulicoResistencia';
		var id2 = '#comportamientoResistencia';
		var id3 = '#evaluacionResistencia';
		var id4 = '#observaResistencia';
		
	}

	if (materia == 'Seguridad e Higiene Industrial') {

		var campo1 = 'aulico_sindustrial'; 
		var campo2 = 'comportamiento_sindustrial'; 
		var campo3 = 'evaluacion_sindustrial'; 
		var campo4 = 'observa_sindustrial'; 

		var id1 = '#aulicoSindustrial';
		var id2 = '#comportamientoSindustrial';
		var id3 = '#evaluacionSindustrial';
		var id4 = '#observaSindustrial';
		
	}

	if (materia == 'Seguridad e Higiene Industrial y Medio Ambiente') {

		var campo1 = 'aulico_sambiente'; 
		var campo2 = 'comportamiento_sambiente'; 
		var campo3 = 'evaluacion_sambiente'; 
		var campo4 = 'observa_sambiente'; 

		var id1 = '#aulicoSambiente';
		var id2 = '#comportamientoSambiente';
		var id3 = '#evaluacionSambiente';
		var id4 = '#observaSambiente';
		
	}

	if (materia == 'T.P. de Química Inorgánica') {

		var campo1 = 'aulico_tpinorganica'; 
		var campo2 = 'comportamiento_tpinorganica'; 
		var campo3 = 'evaluacion_tpinorganica'; 
		var campo4 = 'observa_tpinorganica'; 

		var id1 = '#aulicoTpinorganica';
		var id2 = '#comportamientoTpinorganica';
		var id3 = '#evaluacionTpinorganica';
		var id4 = '#observaTpinorganica';
		
	}

	if (materia == 'T.P. de Química Orgánica') {

		var campo1 = 'aulico_tporganica'; 
		var campo2 = 'comportamiento_tporganica'; 
		var campo3 = 'evaluacion_tporganica'; 
		var campo4 = 'observa_tporganica'; 

		var id1 = '#aulicoTporganica';
		var id2 = '#comportamientoTporganica';
		var id3 = '#evaluacionTporganica';
		var id4 = '#observaTporganica';
		
	}

	if (materia == "Taller") {

		var campo1 = 'aulico_taller'; 
		var campo2 = 'comportamiento_taller'; 
		var campo3 = 'evaluacion_taller'; 
		var campo4 = 'observa_taller'; 

		var id1 = '#aulicoTaller'; 
		var id2 = '#comportamientoTaller'; 
		var id3 = '#evaluacionTaller'; 
		var id4 = '#observaTaller'; 		
	}

	if (materia == 'Tecnología de Control') {

		var campo1 = 'aulico_tcontrol'; 
		var campo2 = 'comportamiento_tcontrol'; 
		var campo3 = 'evaluacion_tcontrol'; 
		var campo4 = 'observa_tcontrol'; 

		var id1 = '#aulicoTcontrol';
		var id2 = '#comportamientoTcontrol';
		var id3 = '#evaluacionTcontrol';
		var id4 = '#observaTcontrol';
		
	}

	if (materia == 'Tecnología de Fabricación') {

		var campo1 = 'aulico_tfabricacion'; 
		var campo2 = 'comportamiento_tfabricacion'; 
		var campo3 = 'evaluacion_tfabricacion'; 
		var campo4 = 'observa_tfabricacion'; 

		var id1 = '#aulicoTfabricacion';
		var id2 = '#comportamientoTfabricacion';
		var id3 = '#evaluacionTfabricacion';
		var id4 = '#observaTfabricacion';
		
	}

	if (materia == 'Tecnología de los Alimentos') {

		var campo1 = 'aulico_talimentos'; 
		var campo2 = 'comportamiento_talimentos'; 
		var campo3 = 'evaluacion_talimentos'; 
		var campo4 = 'observa_talimentos'; 

		var id1 = '#aulicoTalimentos';
		var id2 = '#comportamientoTalimentos';
		var id3 = '#evaluacionTalimentos';
		var id4 = '#observaTalimentos';
		
	}

	if (materia == 'Tecnología de los Materiales') {

		var campo1 = 'aulico_tmateriales'; 
		var campo2 = 'comportamiento_tmateriales'; 
		var campo3 = 'evaluacion_tmateriales'; 
		var campo4 = 'observa_tmateriales'; 

		var id1 = '#aulicoTmateriales';
		var id2 = '#comportamientoTmateriales';
		var id3 = '#evaluacionTmateriales';
		var id4 = '#observaTmateriales';
		
	}

	if (materia == 'Termodinámica') {

		var campo1 = 'aulico_termodinamica'; 
		var campo2 = 'comportamiento_termodinamica'; 
		var campo3 = 'evaluacion_termodinamica'; 
		var campo4 = 'observa_termodinamica'; 

		var id1 = '#aulicoTermodinamica';
		var id2 = '#comportamientoTermodinamica';
		var id3 = '#evaluacionTermodinamica';
		var id4 = '#observaTermodinamica';
		
	}

	if (materia == 'Trabajo y Pensamiento Crítico') {

		var campo1 = 'aulico_trabajo'; 
		var campo2 = 'comportamiento_trabajo'; 
		var campo3 = 'evaluacion_trabajo'; 
		var campo4 = 'observa_trabajo'; 

		var id1 = '#aulicoTrabajo';
		var id2 = '#comportamientoTrabajo';
		var id3 = '#evaluacionTrabajo';
		var id4 = '#observaTrabajo';
		
	}


	$.ajax({
		url: "ajax/informes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){				


			$("#idAlumno").val(respuesta["id"]);
			$(id1).val(respuesta[campo1]);
			$(id2).val(respuesta[campo2]);
			$(id3).val(respuesta[campo3]);
			$(id4).val(respuesta[campo4]);


								
		}
	})

	
})





/*=============================================
IMPRIMIR INFORME INDIVIDUAL
=============================================*/

$(".tablas").on("click", ".btnImprimirInformeIndividual", function(){



	var idAlumno = $(this).attr("idAlumno");
	var informe = $(this).attr("informe");
	var area = $(this).attr("area");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");

	window.open("extensiones/tcpdf/pdf/"+informe+".php?id="+idAlumno+"&informe="+informe+"&area="+area+"&tabla="+tabla+"&periodo="+periodo, "_blank");

})


/*=============================================
IMPRIMIR INFORME X CURSO PRIMERO
=============================================*/

$(".btnInformePrimero").click(function(){

//$(".tablas").on("click", ".btnInformeArea", function(){


	var idCurso = $(this).attr("idCurso");
	var informe = $(this).attr("informe");
	var materia = $(this).attr("mat");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");


	window.open("extensiones/tcpdf/pdf/"+informe+".php?informe="+informe+"&tabla="+tabla+"&idCurso="+idCurso+"&periodo="+periodo+"&materia="+materia, "_blank");

})

/*=============================================
IMPRIMIR INFORME X CURSO SEGUNDO
=============================================*/

$(".btnInformeSegundo").click(function(){

	//$(".tablas").on("click", ".btnInformeArea", function(){
	
	
		var idCurso = $(this).attr("idCurso");
		var informe = $(this).attr("informe");
		var materia = $(this).attr("mat");
		var tabla = $(this).attr("tabla");
		var periodo = $(this).attr("periodo");

			
	
		window.open("extensiones/tcpdf/pdf/"+informe+".php?informe="+informe+"&tabla="+tabla+"&idCurso="+idCurso+"&periodo="+periodo+"&materia="+materia, "_blank");
	
	})

/*=============================================
IMPRIMIR INFORME X CURSO TERCERO
=============================================*/

$(".btnInformeTercero").click(function(){

	//$(".tablas").on("click", ".btnInformeArea", function(){
	
	
	var idCurso = $(this).attr("idCurso");
	var informe = $(this).attr("informe");
	var materia = $(this).attr("mat");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");
	var modalidad = $(this).attr("modalidad");
	
	
	window.open("extensiones/tcpdf/pdf/"+informe+".php?informe="+informe+"&tabla="+tabla+"&idCurso="+idCurso+"&periodo="+periodo+"&materia="+materia+"&modalidad="+modalidad, "_blank");
	
	})	

/*=============================================
IMPRIMIR INFORME X CURSO CUARTO
=============================================*/

$(".btnInformeCuarto").click(function(){

	//$(".tablas").on("click", ".btnInformeArea", function(){
	
	
	var idCurso = $(this).attr("idCurso");
	var informe = $(this).attr("informe");
	var materia = $(this).attr("mat");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");
	
	
	window.open("extensiones/tcpdf/pdf/"+informe+".php?informe="+informe+"&tabla="+tabla+"&idCurso="+idCurso+"&periodo="+periodo+"&materia="+materia, "_blank");
	
	})	

/*=============================================
IMPRIMIR INFORME X CURSO QUINTO
=============================================*/

$(".btnInformeQuinto").click(function(){

	//$(".tablas").on("click", ".btnInformeArea", function(){
	
	
	var idCurso = $(this).attr("idCurso");
	var informe = $(this).attr("informe");
	var materia = $(this).attr("mat");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");
	
	
	window.open("extensiones/tcpdf/pdf/"+informe+".php?informe="+informe+"&tabla="+tabla+"&idCurso="+idCurso+"&periodo="+periodo+"&materia="+materia, "_blank");
	
	})		

/*=============================================
IMPRIMIR INFORME X CURSO SEXTO
=============================================*/

$(".btnInformeSexto").click(function(){

	//$(".tablas").on("click", ".btnInformeArea", function(){
	
	
		var idCurso = $(this).attr("idCurso");
		var idCurso2 = $(this).attr("idCurso2");
		var idCurso3 = $(this).attr("idCurso3");
		var idCurso4 = $(this).attr("idCurso4");
		var informe = $(this).attr("informe");
		var ciclo = $(this).attr("ciclo");
		var curso = $(this).attr("curso");
		var materia = $(this).attr("materia");
		var tabla = $(this).attr("tabla");
		var periodo = $(this).attr("periodo");
		var modalidad = $(this).attr("modalidad");
	
	
		window.open("extensiones/tcpdf/pdf/"+informe+".php?informe="+informe+"&tabla="+tabla+"&idCurso="+idCurso+"&idCurso2="+idCurso2+"&idCurso3="+idCurso3+"&idCurso4="+idCurso4+"&periodo="+periodo+"&materia="+materia+"&modalidad="+modalidad, "_blank");
	
	})		

/*=============================================
IMPRIMIR INFORME PRIMERO CICLO BASICO
=============================================*/

$(".tablas").on("click", ".btnImprimirInformePrimeroCb", function(){



	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var informe = $(this).attr("informe");
	var periodo = $(this).attr("periodo");



	window.open("extensiones/tcpdf/pdf/"+informe+".php?id="+idAlumno+"&tabla="+tabla+"&informe="+informe+"&periodo="+periodo, "_blank");

})


/*=============================================
IMPRIMIR INFORME SEGUNDO CICLO BASICO
=============================================*/

$(".tablas").on("click", ".btnImprimirInformeSegundoCb", function(){



	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var informe = $(this).attr("informe");
	var periodo = $(this).attr("periodo");



	window.open("extensiones/tcpdf/pdf/"+informe+".php?id="+idAlumno+"&tabla="+tabla+"&informe="+informe+"&periodo="+periodo, "_blank");

})

/*=============================================
IMPRIMIR INFORME TERCERO
=============================================*/

$(".tablas").on("click", ".btnImprimirInformeTercero", function(){



	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var informe = $(this).attr("informe");
	var periodo = $(this).attr("periodo");
	var modalidad = $(this).attr("modalidad");



	window.open("extensiones/tcpdf/pdf/"+informe+".php?id="+idAlumno+"&tabla="+tabla+"&informe="+informe+"&modalidad="+modalidad+"&periodo="+periodo, "_blank");

})

/*=============================================
IMPRIMIR INFORME CUARTO
=============================================*/

$(".tablas").on("click", ".btnImprimirInformeCuarto", function(){



	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var informe = $(this).attr("informe");
	var periodo = $(this).attr("periodo");
	var modalidad = $(this).attr("modalidad");



	window.open("extensiones/tcpdf/pdf/"+informe+".php?id="+idAlumno+"&tabla="+tabla+"&informe="+informe+"&modalidad="+modalidad+"&periodo="+periodo, "_blank");

})

/*=============================================
IMPRIMIR INFORME QUINTO
=============================================*/

$(".tablas").on("click", ".btnImprimirInformeQuinto", function(){



	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var informe = $(this).attr("informe");
	var periodo = $(this).attr("periodo");
	var modalidad = $(this).attr("modalidad");

	console.log(modalidad);

	window.open("extensiones/tcpdf/pdf/"+informe+".php?id="+idAlumno+"&tabla="+tabla+"&informe="+informe+"&periodo="+periodo+"&modalidad="+modalidad, "_blank");

})

/*=============================================
IMPRIMIR INFORME SEXTO
=============================================*/

$(".tablas").on("click", ".btnImprimirInformeSexto", function(){



	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var informe = $(this).attr("informe");
	var periodo = $(this).attr("periodo");
	var modalidad = $(this).attr("modalidad");

	console.log(modalidad);

	window.open("extensiones/tcpdf/pdf/"+informe+".php?id="+idAlumno+"&tabla="+tabla+"&informe="+informe+"&periodo="+periodo+"&modalidad="+modalidad, "_blank");

})


