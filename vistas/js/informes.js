

/*=============================================
EDITAR INFORME PRIMERO
=============================================*/

$(".tablas").on("click", ".btnEditarInformePrimero", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");
	var materia = $(this).attr("mat");

	//console.log(materia);
	

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);



	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);
	datos.append("materia", materia);
	

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

	if (materia == 'Dibujo Técnico') {

		var campo1 = 'concepto_dibujo'; 
		var campo2 = 'observa_dibujo'; 

		var id1 = '#conceptoDibujo'; 
		var id2 = '#observaDibujo'; 
		
	}

	if (materia == "Educación Artística") {

		var campo1 = 'concepto_artistica'; 
		var campo2 = 'observa_artistica'; 

		var id1 = '#conceptoArtistica'; 
		var id2 = '#observaArtistica'; 
		
	}

	if (materia == "Educación Física") {

		var campo1 = 'concepto_fisica'; 
		var campo2 = 'observa_fisica'; 

		var id1 = '#conceptoFisica'; 
		var id2 = '#observaFisica'; 
		
	}

	if (materia == "Educación para la Ciudadanía") {

		var campo1 = 'concepto_ciudadania'; 
		var campo2 = 'observa_ciudadania'; 

		var id1 = '#conceptoCiudadania'; 
		var id2 = '#observaCiudadania'; 
		
	}

	if (materia == "Físico - Química") {

		var campo1 = 'concepto_fisico_quimica'; 
		var campo2 = 'observa_fisico_quimica'; 

		var id1 = '#conceptoFisico'; 
		var id2 = '#observaFisico'; 
		
	}

	if (materia == "Geografía") {

		var campo1 = 'concepto_geografia'; 
		var campo2 = 'observa_geografia'; 

		var id1 = '#conceptoGeografia'; 
		var id2 = '#observaGeografia'; 
		
	}

	if (materia == "Historia") {

		var campo1 = 'concepto_historia'; 
		var campo2 = 'observa_historia'; 

		var id1 = '#conceptoHistoria'; 
		var id2 = '#observaHistoria'; 
		
	}

	if (materia == "Inglés") {

		var campo1 = 'concepto_ingles'; 
		var campo2 = 'observa_ingles'; 

		var id1 = '#conceptoIngles'; 
		var id2 = '#observaIngles'; 
		
	}

	if (materia == "Lengua y Literatura") {

		var campo1 = 'concepto_lengua'; 
		var campo2 = 'observa_lengua'; 

		var id1 = '#conceptoLengua'; 
		var id2 = '#observaLengua'; 
		
	}

	if (materia == "Matemática") {

		var campo1 = 'concepto_matematica'; 
		var campo2 = 'observa_matematica'; 

		var id1 = '#conceptoMatematica'; 
		var id2 = '#observaMatematica'; 
		
	}

	if (materia == "Taller") {

		var campo1 = 'concepto_taller'; 
		var campo2 = 'observa_taller'; 

		var id1 = '#conceptoTaller'; 
		var id2 = '#observaTaller'; 
		
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
		EDITAR INFORME SEGUNDO
=============================================*/

$(".tablas").on("click", ".btnEditarInformeSegundo", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");
	var materia = $(this).attr("materia");
	

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);



	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);
	datos.append("materia", materia);
	

	if (materia == 'Biología') {

		var campo1 = 'concepto_biologia'; 
		var campo2 = 'observa_biologia'; 

		var id1 = '#conceptoBiologia'; 
		var id2 = '#observaBiologia'; 
		
	}

	if (materia == 'Dibujo Técnico') {

		var campo1 = 'concepto_dibujo'; 
		var campo2 = 'observa_dibujo'; 

		var id1 = '#conceptoDibujo'; 
		var id2 = '#observaDibujo'; 
		
	}


	if (materia == "Educación Física") {

		var campo1 = 'concepto_edfisica'; 
		var campo2 = 'observa_edfisica'; 

		var id1 = '#conceptoFisica'; 
		var id2 = '#observaFisica'; 
		
	}

	if (materia == "Educación para la Ciudadanía") {

		var campo1 = 'concepto_ciudadania'; 
		var campo2 = 'observa_ciudadania'; 

		var id1 = '#conceptoCiudadania'; 
		var id2 = '#observaCiudadania'; 
		
	}

	if (materia == "Física") {

		var campo1 = 'concepto_fisica'; 
		var campo2 = 'observa_fisica'; 

		var id1 = '#conceptoFisica'; 
		var id2 = '#observaFisica'; 
		
	}

	if (materia == "Geografía") {

		var campo1 = 'concepto_geografia'; 
		var campo2 = 'observa_geografia'; 

		var id1 = '#conceptoGeografia'; 
		var id2 = '#observaGeografia'; 
		
	}

	if (materia == "Historia") {

		var campo1 = 'concepto_historia'; 
		var campo2 = 'observa_historia'; 

		var id1 = '#conceptoHistoria'; 
		var id2 = '#observaHistoria'; 
		
	}

	if (materia == "Inglés") {

		var campo1 = 'concepto_ingles'; 
		var campo2 = 'observa_ingles'; 

		var id1 = '#conceptoIngles'; 
		var id2 = '#observaIngles'; 
		
	}

	if (materia == "Lengua y Literatura") {

		var campo1 = 'concepto_lengua'; 
		var campo2 = 'observa_lengua'; 

		var id1 = '#conceptoLengua'; 
		var id2 = '#observaLengua'; 
		
	}

	if (materia == "Matemática") {

		var campo1 = 'concepto_matematica'; 
		var campo2 = 'observa_matematica'; 

		var id1 = '#conceptoMatematica'; 
		var id2 = '#observaMatematica'; 
		
	}

	if (materia == "Química") {

		var campo1 = 'concepto_quimica'; 
		var campo2 = 'observa_quimica'; 

		var id1 = '#conceptoQuimica'; 
		var id2 = '#observaQuimica'; 
		
	}

	if (materia == "Taller") {

		var campo1 = 'concepto_taller'; 
		var campo2 = 'observa_taller'; 

		var id1 = '#conceptoTaller'; 
		var id2 = '#observaTaller'; 
		
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


								
		}
	})

	
})


/*=============================================
			EDITAR INFORME TERCERO
=============================================*/

$(".tablas").on("click", ".btnEditarInformeTercero", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");
	var materia = $(this).attr("materia");
	

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);



	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);
	datos.append("materia", materia);
	

	if (materia == 'Biología') {

		var campo1 = 'concepto_biologia'; 
		var campo2 = 'observa_biologia'; 

		var id1 = '#conceptoBiologia'; 
		var id2 = '#observaBiologia'; 
		
	}

	if (materia == 'Dibujo Técnico') {

		var campo1 = 'concepto_dibujo'; 
		var campo2 = 'observa_dibujo'; 

		var id1 = '#conceptoDibujo'; 
		var id2 = '#observaDibujo'; 
		
	}


	if (materia == "Educación Física") {

		var campo1 = 'concepto_edfisica'; 
		var campo2 = 'observa_edfisica'; 

		var id1 = '#conceptoFisica'; 
		var id2 = '#observaFisica'; 
		
	}

	if (materia == "Educación para la Ciudadanía") {

		var campo1 = 'concepto_ciudadania'; 
		var campo2 = 'observa_ciudadania'; 

		var id1 = '#conceptoCiudadania'; 
		var id2 = '#observaCiudadania'; 
		
	}

	if (materia == "Física") {

		var campo1 = 'concepto_fisica'; 
		var campo2 = 'observa_fisica'; 

		var id1 = '#conceptoFisica'; 
		var id2 = '#observaFisica'; 
		
	}

	if (materia == "Geografía") {

		var campo1 = 'concepto_geografia'; 
		var campo2 = 'observa_geografia'; 

		var id1 = '#conceptoGeografia'; 
		var id2 = '#observaGeografia'; 
		
	}

	if (materia == "Historia") {

		var campo1 = 'concepto_historia'; 
		var campo2 = 'observa_historia'; 

		var id1 = '#conceptoHistoria'; 
		var id2 = '#observaHistoria'; 
		
	}

	if (materia == "Inglés") {

		var campo1 = 'concepto_ingles'; 
		var campo2 = 'observa_ingles'; 

		var id1 = '#conceptoIngles'; 
		var id2 = '#observaIngles'; 
		
	}

	if (materia == "Lengua y Literatura") {

		var campo1 = 'concepto_lengua'; 
		var campo2 = 'observa_lengua'; 

		var id1 = '#conceptoLengua'; 
		var id2 = '#observaLengua'; 
		
	}

	if (materia == "Matemática") {

		var campo1 = 'concepto_matematica'; 
		var campo2 = 'observa_matematica'; 

		var id1 = '#conceptoMatematica'; 
		var id2 = '#observaMatematica'; 
		
	}

	if (materia == "Química General") {

		var campo1 = 'concepto_quimica'; 
		var campo2 = 'observa_quimica'; 

		var id1 = '#conceptoQuimica'; 
		var id2 = '#observaQuimica'; 
		
	}

	if (materia == "Taller") {

		var campo1 = 'concepto_taller'; 
		var campo2 = 'observa_taller'; 

		var id1 = '#conceptoTaller'; 
		var id2 = '#observaTaller'; 
		
	}

	if (materia == "Estática") {

		var campo1 = 'concepto_estatica'; 
		var campo2 = 'observa_estatica'; 

		var id1 = '#conceptoEstatica'; 
		var id2 = '#observaEstatica'; 
		
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


								
		}
	})

	
})


/*=============================================
			EDITAR INFORME CUARTO
=============================================*/

$(".tablas").on("click", ".btnEditarInformeCuarto", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");
	var materia = $(this).attr("materia");
	

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);



	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);
	datos.append("materia", materia);
	
	if (materia == 'Análisis Matemático') {

		var campo1 = 'concepto_analisis'; 
		var campo2 = 'observa_analisis'; 

		var id1 = '#conceptoAnalisis'; 
		var id2 = '#observaAnalisis'; 
		
	}

	if (materia == 'Biología') {

		var campo1 = 'concepto_biologia'; 
		var campo2 = 'observa_biologia'; 

		var id1 = '#conceptoBiologia'; 
		var id2 = '#observaBiologia'; 
		
	}


	if (materia == "Educación Física") {

		var campo1 = 'concepto_edfisica'; 
		var campo2 = 'observa_edfisica'; 

		var id1 = '#conceptoFisica'; 
		var id2 = '#observaFisica'; 
		
	}

	if (materia == "Física Aplicada") {

		var campo1 = 'concepto_fisica'; 
		var campo2 = 'observa_fisica'; 

		var id1 = '#conceptoFisica'; 
		var id2 = '#observaFisica'; 
		
	}

	if (materia == "Inglés Técnico") {

		var campo1 = 'concepto_ingles'; 
		var campo2 = 'observa_ingles'; 

		var id1 = '#conceptoIngles'; 
		var id2 = '#observaIngles'; 
		
	}



	if (materia == "Lengua y Litaratura") {

		var campo1 = 'concepto_lengua'; 
		var campo2 = 'observa_lengua'; 

		var id1 = '#conceptoLengua'; 
		var id2 = '#observaLengua'; 
		
	}

	if (materia == "Operaciones Unitarias") {

		var campo1 = 'concepto_operaciones'; 
		var campo2 = 'observa_operaciones'; 

		var id1 = '#conceptoOperaciones'; 
		var id2 = '#observaOperaciones'; 
		
	}

	if (materia == "Química Inorgánica") {

		var campo1 = 'concepto_inorganica'; 
		var campo2 = 'observa_inorganica'; 

		var id1 = '#conceptoInorganica'; 
		var id2 = '#observaInorganica'; 
		
	}

	if (materia == "Química Orgánica") {

		var campo1 = 'concepto_organica'; 
		var campo2 = 'observa_organica'; 

		var id1 = '#conceptoOrganica'; 
		var id2 = '#observaOrganica'; 
		
	}

	if (materia == "Seguridad e Higiene Industrial y Medio Ambiente") {

		var campo1 = 'concepto_seguridad'; 
		var campo2 = 'observa_seguridad'; 

		var id1 = '#conceptoSeguridad'; 
		var id2 = '#observaSeguridad'; 
		
	}

	if (materia == "Tecnología de Control") {

		var campo1 = 'concepto_tecnologia'; 
		var campo2 = 'observa_tecnologia'; 

		var id1 = '#conceptoTecnologia'; 
		var id2 = '#observaTecnologia'; 
		
	}

	if (materia == "T.P. de Química Inorgánica") {

		var campo1 = 'concepto_tpinorganica'; 
		var campo2 = 'observa_tpinorganica'; 

		var id1 = '#conceptoTpinorganica'; 
		var id2 = '#observaTpinorganica'; 
		
	}

	if (materia == "T.P. de Química Orgánica") {

		var campo1 = 'concepto_tporganica'; 
		var campo2 = 'observa_tporganica'; 

		var id1 = '#conceptoTporganica'; 
		var id2 = '#observaTporganica'; 
		
	}

	if (materia == "Trabajo y Pensamiento Crítico") {

		var campo1 = 'concepto_trabajo'; 
		var campo2 = 'observa_trabajo'; 

		var id1 = '#conceptoTrabajo'; 
		var id2 = '#observaTrabajo'; 
		
	}

	if (materia == "Electrotecnia") {

		var campo1 = 'concepto_electrotecnia'; 
		var campo2 = 'observa_electrotecnia'; 

		var id1 = '#conceptoElectrotecnia'; 
		var id2 = '#observaElectrotecnia'; 
		
	}

	if (materia == "Laboratorio de Mediciones Eléctricas") {

		var campo1 = 'concepto_laboratorio'; 
		var campo2 = 'observa_laboratorio'; 

		var id1 = '#conceptoLaboratorio'; 
		var id2 = '#observaLaboratorio'; 
		
	}

	if (materia == "Mecánica Técnica") {

		var campo1 = 'concepto_mecanica'; 
		var campo2 = 'observa_mecanica'; 

		var id1 = '#conceptoMecanica'; 
		var id2 = '#observaMecanica'; 
		
	}

	if (materia == "Resistencia de los Materiales") {

		var campo1 = 'concepto_resistencia'; 
		var campo2 = 'observa_resistencia'; 

		var id1 = '#conceptoResistencia'; 
		var id2 = '#observaResistencia'; 
		
	}

	if (materia == "Taller") {

		var campo1 = 'concepto_taller'; 
		var campo2 = 'observa_taller'; 

		var id1 = '#conceptoTaller'; 
		var id2 = '#observaTaller'; 
		
	}

	if (materia == "Tecnología de los Materiales") {

		var campo1 = 'concepto_materiales'; 
		var campo2 = 'observa_materiales'; 

		var id1 = '#conceptoMateriales'; 
		var id2 = '#observaMateriales'; 
		
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


								
		}
	})

	
})

/*=============================================
			EDITAR INFORME QUINTO
=============================================*/

$(".tablas").on("click", ".btnEditarInformeQuinto", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");
	var materia = $(this).attr("materia");
	

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);



	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);
	datos.append("materia", materia);
	

	if (materia == 'Comunicación Oral y Escrita') {

		var campo1 = 'concepto_comunicacion'; 
		var campo2 = 'observa_comunicacion'; 

		var id1 = '#conceptoComunicacion'; 
		var id2 = '#observaComunicacion'; 
		
	}

	if (materia == 'Diseños de Envases') {

		var campo1 = 'concepto_envases'; 
		var campo2 = 'observa_envases'; 

		var id1 = '#conceptoEnvases'; 
		var id2 = '#observaEnvases'; 
		
	}


	if (materia == "Educación Física") {

		var campo1 = 'concepto_edfisica'; 
		var campo2 = 'observa_edfisica'; 

		var id1 = '#conceptoFisica'; 
		var id2 = '#observaFisica'; 
		
	}

	if (materia == "Inglés Técnico") {

		var campo1 = 'concepto_ingles'; 
		var campo2 = 'observa_ingles'; 

		var id1 = '#conceptoIngles'; 
		var id2 = '#observaIngles'; 
		
	}

	if (materia == "Matemática Aplicada") {

		var campo1 = 'concepto_matematica'; 
		var campo2 = 'observa_matematica'; 

		var id1 = '#conceptoMatematica'; 
		var id2 = '#observaMatematica'; 
		
	}

	if (materia == "Microbiología") {

		var campo1 = 'concepto_microbiologia'; 
		var campo2 = 'observa_microbiologia'; 

		var id1 = '#conceptoMicrobiologia'; 
		var id2 = '#observaMicrobiologia'; 
		
	}

	if (materia == "Procesos Productivos") {

		var campo1 = 'concepto_procesos'; 
		var campo2 = 'observa_procesos'; 

		var id1 = '#conceptoProcesos'; 
		var id2 = '#observaProcesos'; 
		
	}

	if (materia == "Química Analítica Cualitativa") {

		var campo1 = 'concepto_cualitativa'; 
		var campo2 = 'observa_cualitativa'; 

		var id1 = '#conceptoCualitativa'; 
		var id2 = '#observaCualitativa'; 
		
	}

	if (materia == "Química Analítica Cuantitativa") {

		var campo1 = 'concepto_cuantitativa'; 
		var campo2 = 'observa_cuantitativa'; 

		var id1 = '#conceptoCuantitativa'; 
		var id2 = '#observaCuantitativa'; 
		
	}

	if (materia == "Química Biológica") {

		var campo1 = 'concepto_biologica'; 
		var campo2 = 'observa_biologica'; 

		var id1 = '#conceptoBiologica'; 
		var id2 = '#observaBiologica'; 
		
	}

	if (materia == "Tecnología de los Alimentos") {

		var campo1 = 'concepto_tecnologia'; 
		var campo2 = 'observa_tecnologia'; 

		var id1 = '#conceptoTecnologia'; 
		var id2 = '#observaTecnologia'; 
		
	}

	if (materia == "Termodinámica") {

		var campo1 = 'concepto_termodinamica'; 
		var campo2 = 'observa_termodinamica'; 

		var id1 = '#conceptoTermodinamica'; 
		var id2 = '#observaTermodinamica'; 
		
	}

	if (materia == "Análisis Matemático") {

		var campo1 = 'concepto_analisis'; 
		var campo2 = 'observa_analisis'; 

		var id1 = '#conceptoAnalisis'; 
		var id2 = '#observaAnalisis'; 
		
	}

	if (materia == "Cálculos de Elementos de Máquinas") {

		var campo1 = 'concepto_calculos'; 
		var campo2 = 'observa_calculos'; 

		var id1 = '#conceptoCalculos'; 
		var id2 = '#observaCalculos'; 
		
	}

	if (materia == "Electrónica General") {

		var campo1 = 'concepto_electronica'; 
		var campo2 = 'observa_electronica'; 

		var id1 = '#conceptoElectronica'; 
		var id2 = '#observaElectronica'; 
		
	}

	if (materia == "Electrotecnia") {

		var campo1 = 'concepto_electrotecnia'; 
		var campo2 = 'observa_electrotecnia'; 

		var id1 = '#conceptoElectrotecnia'; 
		var id2 = '#observaElectrotecnia'; 
		
	}

	if (materia == "Laboratorio de Mediciones Eléctricas") {

		var campo1 = 'concepto_laboratorio'; 
		var campo2 = 'observa_laboratorio'; 

		var id1 = '#conceptoLaboratorio'; 
		var id2 = '#observaLaboratorio'; 
		
	}

	if (materia == "Legislación del Trabajo") {

		var campo1 = 'concepto_legislacion'; 
		var campo2 = 'observa_legislacion'; 

		var id1 = '#conceptoLegislacion'; 
		var id2 = '#observaLegislacion'; 
		
	}

	if (materia == "Organización Industrial") {

		var campo1 = 'concepto_organizacion'; 
		var campo2 = 'observa_organizacion'; 

		var id1 = '#conceptoOrganizacion'; 
		var id2 = '#observaOrganizacion'; 
		
	}

	if (materia == "Prácticas Profesionalizantes") {

		var campo1 = 'concepto_practicas'; 
		var campo2 = 'observa_practicas'; 

		var id1 = '#conceptoPracticas'; 
		var id2 = '#observaPracticas'; 
		
	}

	if (materia == "Seguridad e Higiene Industrial") {

		var campo1 = 'concepto_analisis'; 
		var campo2 = 'observa_analisis'; 

		var id1 = '#conceptoAnalisis'; 
		var id2 = '#observaAnalisis'; 
		
	}

	if (materia == "Taller") {

		var campo1 = 'concepto_taller'; 
		var campo2 = 'observa_taller'; 

		var id1 = '#conceptoTaller'; 
		var id2 = '#observaTaller'; 
		
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


								
		}
	})

	
})


/*=============================================
			EDITAR INFORME SEXTO
=============================================*/

$(".tablas").on("click", ".btnEditarInformeSexto", function(){


	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");
	var materia = $(this).attr("materia");
	

	var nombre = $(this).attr("nombreAlumno");
	$('#alumnoEdicion').html('Editar Informe: ' + nombre);



	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	
	datos.append("periodo", periodo);
	datos.append("materia", materia);

	
	if (materia == 'Bromatología y Sistemas de Gestión de Calidad') {

		var campo1 = 'concepto_bromatologia'; 
		var campo2 = 'observa_bromatologia'; 

		var id1 = '#conceptoBromatologia'; 
		var id2 = '#observaBromatologia'; 
		
	}

	if (materia == 'Comunicación Oral y Escrita') {

		var campo1 = 'concepto_comunicacion'; 
		var campo2 = 'observa_comunicacion'; 

		var id1 = '#conceptoComunicacion'; 
		var id2 = '#observaComunicacion'; 
		
	}


	if (materia == "Educación Física") {

		var campo1 = 'concepto_edfisica'; 
		var campo2 = 'observa_edfisica'; 

		var id1 = '#conceptoFisica'; 
		var id2 = '#observaFisica'; 
		
	}

	if (materia == "Inglés Técnico") {

		var campo1 = 'concepto_ingles'; 
		var campo2 = 'observa_ingles'; 

		var id1 = '#conceptoIngles'; 
		var id2 = '#observaIngles'; 
		
	}

	if (materia == "Matemática Aplicada") {

		var campo1 = 'concepto_matematica'; 
		var campo2 = 'observa_matematica'; 

		var id1 = '#conceptoMatematica'; 
		var id2 = '#observaMatematica'; 
		
	}

	if (materia == "Microbiología y Toxicología de los Alimentos") {

		var campo1 = 'concepto_microbiologia'; 
		var campo2 = 'observa_microbiologia'; 

		var id1 = '#conceptoMicrobiologia'; 
		var id2 = '#observaMicrobiologia'; 
		
	}

	if (materia == "Nutrición") {

		var campo1 = 'concepto_nutricion'; 
		var campo2 = 'observa_nutricion'; 

		var id1 = '#conceptoNutricion'; 
		var id2 = '#observaNutricion'; 
		
	}

	if (materia == "Organización y Gestión de la Producción") {

		var campo1 = 'concepto_produccion'; 
		var campo2 = 'observa_produccion'; 

		var id1 = '#conceptoProduccion'; 
		var id2 = '#observaProduccion'; 
		
	}

	if (materia == "Prácticas Profesionalizantes") {

		var campo1 = 'concepto_practicas'; 
		var campo2 = 'observa_practicas'; 

		var id1 = '#conceptoPracticas'; 
		var id2 = '#observaPracticas'; 
		
	}

	if (materia == "Procesos y Equipos Industriales") {

		var campo1 = 'concepto_procesos'; 
		var campo2 = 'observa_procesos'; 

		var id1 = '#conceptoProcesos'; 
		var id2 = '#observaProcesos'; 
		
	}

	if (materia == "Tecnología de los Alimentos") {

		var campo1 = 'concepto_tecnologia'; 
		var campo2 = 'observa_tecnologia'; 

		var id1 = '#conceptoTecnologia'; 
		var id2 = '#observaTecnologia'; 
		
	}

	if (materia == "Equipos y Aparatos") {

		var campo1 = 'concepto_equipos'; 
		var campo2 = 'observa_equipos'; 

		var id1 = '#conceptoEquipos'; 
		var id2 = '#observaEquipos'; 
		
	}

	if (materia == "Instalaciones Eléctricas") {

		var campo1 = 'concepto_electricas'; 
		var campo2 = 'observa_electricas'; 

		var id1 = '#conceptoElectricas'; 
		var id2 = '#observaElectricas'; 
		
	}

	if (materia == "Instalaciones Industriales") {

		var campo1 = 'concepto_industriales'; 
		var campo2 = 'observa_industriales'; 

		var id1 = '#conceptoIndustriales'; 
		var id2 = '#observaIndustriales'; 
		
	}

	if (materia == "Laboratorio de Ensayos Industriales") {

		var campo1 = 'concepto_laboratorio'; 
		var campo2 = 'observa_laboratorio'; 

		var id1 = '#conceptoLaboratorio'; 
		var id2 = '#observaLaboratorio'; 
		
	}

	if (materia == "Mantenimiento de Equipos") {

		var campo1 = 'concepto_mantenimiento'; 
		var campo2 = 'observa_mantenimiento'; 

		var id1 = '#conceptoMantenimiento'; 
		var id2 = '#observaMantenimiento'; 
		
	}

	if (materia == "Máquinas Eléctricas y Ensayos") {

		var campo1 = 'concepto_ensayos'; 
		var campo2 = 'observa_ensayos'; 

		var id1 = '#conceptoEnsayos'; 
		var id2 = '#observaEnsayos'; 
		
	}

	if (materia == "Máquinas Térmicas") {

		var campo1 = 'concepto_termicas'; 
		var campo2 = 'observa_termicas'; 

		var id1 = '#conceptoTermicas'; 
		var id2 = '#observaTermicas'; 
		
	}

	if (materia == "Organización Industrial") {

		var campo1 = 'concepto_industrial'; 
		var campo2 = 'observa_industrial'; 

		var id1 = '#conceptoIndustrial'; 
		var id2 = '#observaIndustrial'; 
		
	}

	if (materia == "Prácticas Profesionalizantes") {

		var campo1 = 'concepto_practicas'; 
		var campo2 = 'observa_practicas'; 

		var id1 = '#conceptoPracticas'; 
		var id2 = '#observaPracticas'; 
		
	}


	if (materia == "Taller") {

		var campo1 = 'concepto_taller'; 
		var campo2 = 'observa_taller'; 

		var id1 = '#conceptoTaller'; 
		var id2 = '#observaTaller'; 
		
	}

	if (materia == "Tecnología de Fabricación") {

		var campo1 = 'concepto_fabricacion'; 
		var campo2 = 'observa_fabricacion'; 

		var id1 = '#conceptoFabricacion'; 
		var id2 = '#observaFabricacion'; 
		
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
	var idCurso2 = $(this).attr("idCurso2");
	var idCurso3 = $(this).attr("idCurso3");
	var idCurso4 = $(this).attr("idCurso4");
	var informe = $(this).attr("informe");
	var ciclo = $(this).attr("ciclo");
	var curso = $(this).attr("curso");
	var materia = $(this).attr("materia");
	var tabla = $(this).attr("tabla");
	var periodo = $(this).attr("periodo");


	window.open("extensiones/tcpdf/pdf/"+informe+".php?informe="+informe+"&tabla="+tabla+"&idCurso="+idCurso+"&idCurso2="+idCurso2+"&idCurso3="+idCurso3+"&idCurso4="+idCurso4+"&periodo="+periodo+"&materia="+materia, "_blank");

})

/*=============================================
IMPRIMIR INFORME X CURSO SEGUNDO
=============================================*/

$(".btnInformeSegundo").click(function(){

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
	
	
		window.open("extensiones/tcpdf/pdf/"+informe+".php?informe="+informe+"&tabla="+tabla+"&idCurso="+idCurso+"&idCurso2="+idCurso2+"&idCurso3="+idCurso3+"&idCurso4="+idCurso4+"&periodo="+periodo+"&materia="+materia, "_blank");
	
	})

/*=============================================
IMPRIMIR INFORME X CURSO TERCERO
=============================================*/

$(".btnInformeTercero").click(function(){

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
IMPRIMIR INFORME X CURSO CUARTO
=============================================*/

$(".btnInformeCuarto").click(function(){

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
IMPRIMIR INFORME X CURSO QUINTO
=============================================*/

$(".btnInformeQuinto").click(function(){

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



	window.open("extensiones/tcpdf/pdf/"+informe+".php?id="+idAlumno+"&tabla="+tabla+"&informe="+informe+"&periodo="+periodo+"&modalidad="+modalidad, "_blank");

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

	console.log(modalidad);

	window.open("extensiones/tcpdf/pdf/"+informe+".php?id="+idAlumno+"&tabla="+tabla+"&informe="+informe+"&periodo="+periodo+"&modalidad="+modalidad, "_blank");

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


