<?php
  
  $doc = $_SESSION["id"];
  $ncurso = 24;
                    
  $mate = ControladorMaterias::ctrBuscarMateria($doc, $ncurso);

  $ma = $mate["materia"];

  //var_dump($doc);

    $item = null;
    $valor = null;   

    $cursos = ControladorCursos::ctrMostrarCursos($item, $valor);


?>       


  <div class="content-wrapper">
    
    <section class="content-header">
            <?php

                  if ($_SESSION['perfil'] == 'Docente'){

                  echo '<h1>

                  4º Primera Electromecánica - Turno Vespertino - Materia: '.$mate["materia"].'

                  </h1>';

                  }else{

                  echo '<h1>
                  4º Primera Electromecánica - Turno Vespertino

                  </h1>';
                  }

        ?>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">4º Primera E TV</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

              <?php

                  if ($_SESSION["perfil"] != "Preceptor") {
                    
                      echo '<div class="box-header with-border">                                      

                      <button class="btn btn-primary btnInformeSexto" materia="'.$ma.'" curso="'.$mate['curso_id'].'" periodo="'.$_SESSION['periodo'].'" idCurso=24 modalidad="electromecanica" tabla="sexto" informe="informe-curso-sexto">
                          
                      Informes Curso
                    </button>
                        
                      </div>';

                  }

              ?> 



        <div class="box-body">
          
          <table class="table table-bordered table-striped dt-responsive tablas">
            
            <thead>
              
              <tr>
                
                <th style="width: 10px">#</th>
                <th>DNI</th>
                <th>Apellidos y Nombres</th>
                <th>Curso</th>
                <th>Turno</th>
                <th>Acciones</th>

              </tr> 

            </thead>
            <tbody>

              <?php

                  $item = "id_curso";
                  $valor = 24;
                  $tabla = "sexto";
                  $periodo = $_SESSION["periodo"];
                  $verifica = true;


                  $informes = ControladorInformes::ctrMostrarInformes($item, $valor, $tabla, $periodo, $verifica);


                  foreach ($informes as $key => $value) {
                    
                    echo '<tr>
                
                          <td>'.($key+1).'</td>
                          <td>'.$value["documento"].'</td>
                          <td>'.$value["nombre"].'</td>';

                          $item = "id";
                          $valor = $value["id_curso"];

                          $curso = ControladorCursos::ctrMostrarCursos($item, $valor);

                          echo '<td>'.$curso["nombre"].'</td>  

                          <td>'.$curso["turno"].'</td>';


                          echo '<td>';


                          if ($_SESSION["perfil"] != "Preceptor") {
                            
                            
                            echo'<div class="btn-group">

                              <button class="btn btn-warning btnEditarInformePrimero"  tabla="sexto" periodo="'.$_SESSION['periodo'].'" idAlumno="'.$value["id"].'" mat="'.$ma.'" nombreAlumno="'.$value["nombre"].'" data-toggle="modal" data-target="#modalEditarInforme"><i class="fa fa-pencil"></i></button>

  
                            </div>';
                           
                            
                             
                            }else{

                              echo'<button class="btn btn-primary btnImprimirInformeSexto" periodo="'.$_SESSION['periodo'].'" informe="informe_sexto" modalidad="electromecanica" tabla="sexto" idAlumno="'.$value["id"].'" data-toggle="modal" data-target="#modalImprimirInformeCb"><i class="fa fa-print"></i></button>';
                            }

                           
                  }


              ?>

                           

            </tbody>

          </table>

        </div>
        
        
      </div>

    </section>
  </div>


  


<!--=====================================
  MODAL EDITAR INFORME
  ======================================-->


<div id="modalEditarInforme" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" id="modalInforme">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

           
              <h4 class="modal-title" id="alumnoEdicion"></h4>

          </div>

          <!--=====================================
          CUERPO DEL MODAL
          ======================================-->

          <div class="modal-body">

            <div class="box-body">   
              
 

        <!-- ENTRADA PARA EL CONCEPTO --> 

              <?php

                    $docente = $_SESSION["id"];
                    
                    $materia = ControladorMaterias::ctrBuscarMateria($docente, $ncurso);

                    $mat = $materia["materia"];


                    if ($mat == 'Comunicación Oral y Escrita') {
                    
                      $aulico = 'aulicoComunicacion';
                      $comportamiento = 'comportamientoComunicacion';
                      $evaluacion = 'evaluacionComunicacion';
                      $observa = 'observaComunicacion';

                      $campo1 = 'aulico_comunicacion';
                      $campo2 = 'comportamiento_comunicacion';
                      $campo3 = 'evaluacion_comunicacion';
                      $campo4 = 'observa_comunicacion';

                    }

                    if ($mat == 'Educación Física') {
                    
                      $aulico = 'aulicoEdFisica';
                      $comportamiento = 'comportamientoEdFisica';
                      $evaluacion = 'evaluacionEdFisica';
                      $observa = 'observaEdFisica';

                      $campo1 = 'aulico_edfisica';
                      $campo2 = 'comportamiento_edfisica';
                      $campo3 = 'evaluacion_edfisica';
                      $campo4 = 'observa_edfisica';

                    }


                    if ($mat == 'Equipos y Aparatos') {
                    
                      $aulico = 'aulicoEquipos';
                      $comportamiento = 'comportamientoEquipos';
                      $evaluacion = 'evaluacionEquipos';
                      $observa = 'observaEquipos';

                      $campo1 = 'aulico_equipos';
                      $campo2 = 'comportamiento_equipos';
                      $campo3 = 'evaluacion_equipos';
                      $campo4 = 'observa_equipos';

                    }      
                    
                    if ($mat == 'Inglés Técnico') {
                    
                      $aulico = 'aulicoItecnico';
                      $comportamiento = 'comportamientoItecnico';
                      $evaluacion = 'evaluacionItecnico';
                      $observa = 'observaItecnico';

                      $campo1 = 'aulico_itecnico';
                      $campo2 = 'comportamiento_itecnico';
                      $campo3 = 'evaluacion_itecnico';
                      $campo4 = 'observa_itecnico';

                    } 

                    if ($mat == 'Instalaciones Eléctricas') {
                    
                      $aulico = 'aulicoElectricas';
                      $comportamiento = 'comportamientoElectricas';
                      $evaluacion = 'evaluacionElectricas';
                      $observa = 'observaElectricas';

                      $campo1 = 'aulico_electricas';
                      $campo2 = 'comportamiento_electricas';
                      $campo3 = 'evaluacion_electricas';
                      $campo4 = 'observa_electricas';

                    }
 

                    if ($mat == 'Instalaciones Industriales') {
                    
                      $aulico = 'aulicoIndustriales';
                      $comportamiento = 'comportamientoIndustriales';
                      $evaluacion = 'evaluacionIndustriales';
                      $observa = 'observaIndustriales';

                      $campo1 = 'aulico_industriales';
                      $campo2 = 'comportamiento_industriales';
                      $campo3 = 'evaluacion_industriales';
                      $campo4 = 'observa_industriales';

                    } 

                    if ($mat == 'Laboratorio de Ensayo Industriales') {
                    
                      $aulico = 'aulicoEindustriales';
                      $comportamiento = 'comportamientoEindustriales';
                      $evaluacion = 'evaluacionEindustriales';
                      $observa = 'observaEindustriales';

                      $campo1 = 'aulico_eindustriales';
                      $campo2 = 'comportamiento_eindustriales';
                      $campo3 = 'evaluacion_eindustriales';
                      $campo4 = 'observa_eindustriales';
                    } 

                    
                    

                    if ($mat == 'Mantenimiento de Equipos') {
                    
                      $aulico = 'aulicoMequipos';
                      $comportamiento = 'comportamientoMequipos';
                      $evaluacion = 'evaluacionMequipos';
                      $observa = 'observaMequipos';

                      $campo1 = 'aulico_mequipos';
                      $campo2 = 'comportamiento_mequipos';
                      $campo3 = 'evaluacion_mequipos';
                      $campo4 = 'observa_mequipos';

                    } 

                    if ($mat == 'Máquinas Eléctricas y Ensayos') {
                    
                      $aulico = 'aulicoEnsayos';
                      $comportamiento = 'comportamientoEnsayos';
                      $evaluacion = 'evaluacionEnsayos';
                      $observa = 'observaEnsayos';

                      $campo1 = 'aulico_ensayos';
                      $campo2 = 'comportamiento_ensayos';
                      $campo3 = 'evaluacion_ensayos';
                      $campo4 = 'observa_ensayos';
                    } 

                    if ($mat == 'Máquinas Térmicas') {
                    
                      $aulico = 'aulicoTermicas';
                      $comportamiento = 'comportamientoTermicas';
                      $evaluacion = 'evaluacionTermicas';
                      $observa = 'observaTermicas';

                      $campo1 = 'aulico_termicas';
                      $campo2 = 'comportamiento_termicas';
                      $campo3 = 'evaluacion_termicas';
                      $campo4 = 'observa_termicas';
                    } 

                    if ($mat == 'Organización Industrial') {
                    
                      $aulico = 'aulicoOindustrial';
                      $comportamiento = 'comportamientoOindustrial';
                      $evaluacion = 'evaluacionOindustrial';
                      $observa = 'observaOindustrial';

                      $campo1 = 'aulico_oindustrial';
                      $campo2 = 'comportamiento_oindustrial';
                      $campo3 = 'evaluacion_oindustrial';
                      $campo4 = 'observa_oindustrial';

                    } 

                    if ($mat == 'Prácticas Profesionalizantes') {
                    
                      $aulico = 'aulicoPracticas';
                      $comportamiento = 'comportamientoPracticas';
                      $evaluacion = 'evaluacionPracticas';
                      $observa = 'observaPracticas';

                      $campo1 = 'aulico_practicas';
                      $campo2 = 'comportamiento_practicas';
                      $campo3 = 'evaluacion_practicas';
                      $campo4 = 'observa_practicas';

                    } 

                    

                    if ($mat == 'Taller') {
                    
                      $aulico = 'aulicoTaller';
                      $comportamiento = 'comportamientoTaller';
                      $evaluacion = 'evaluacionTaller';
                      $observa = 'observaTaller';

                      $campo1 = 'aulico_taller';
                      $campo2 = 'comportamiento_taller';
                      $campo3 = 'evaluacion_taller';
                      $campo4 = 'observa_taller';
                    } 


                    if ($mat == 'Tecnología de Fabricación') {
                    
                      $aulico = 'aulicoTfabricacion';
                      $comportamiento = 'comportamientoTfabricacion';
                      $evaluacion = 'evaluacionTfabricacion';
                      $observa = 'observaTfabricacion';

                      $campo1 = 'aulico_tfabricacion';
                      $campo2 = 'comportamiento_tfabricacion';
                      $campo3 = 'evaluacion_tfabricacion';
                      $campo4 = 'observa_tfabricacion';
                    } 

                    if ($mat == 'Bromatología y Sistemas de Gestión Calidad') {
                    
                      $aulico = 'aulicoBromatologia';
                      $comportamiento = 'comportamientoBromatologia';
                      $evaluacion = 'evaluacionBromatologia';
                      $observa = 'observaBromatologia';

                      $campo1 = 'aulico_bromatologia';
                      $campo2 = 'comportamiento_bromatologia';
                      $campo3 = 'evaluacion_bromatologia';
                      $campo4 = 'observa_bromatologia';
                    } 

                    if ($mat == 'Matemática Aplicada') {
                    
                      $aulico = 'aulicoMaplicada';
                      $comportamiento = 'comportamientoMaplicada';
                      $evaluacion = 'evaluacionMaplicada';
                      $observa = 'observaMaplicada';

                      $campo1 = 'aulico_maplicada';
                      $campo2 = 'comportamiento_maplicada';
                      $campo3 = 'evaluacion_maplicada';
                      $campo4 = 'observa_maplicada';
                    } 

                    if ($mat == 'Microbiología y Toxicología de los Alimentos') {
                    
                      $aulico = 'aulicoToxicologia';
                      $comportamiento = 'comportamientoToxicologia';
                      $evaluacion = 'evaluacionToxicologia';
                      $observa = 'observaToxicologia';

                      $campo1 = 'aulico_toxicologia';
                      $campo2 = 'comportamiento_toxicologia';
                      $campo3 = 'evaluacion_toxicologia';
                      $campo4 = 'observa_toxicologia';
                    } 

                    

                    if ($mat == 'Nutrición') {
                    
                      $aulico = 'aulicoNutricion';
                      $comportamiento = 'comportamientoNutricion';
                      $evaluacion = 'evaluacionNutricion';
                      $observa = 'observaNutricion';

                      $campo1 = 'aulico_nutricion';
                      $campo2 = 'comportamiento_nutricion';
                      $campo3 = 'evaluacion_nutricion';
                      $campo4 = 'observa_nutricion';
                    } 

                    if ($mat == 'Organización y Gestión de la Producción') {
                    
                      $aulico = 'aulicoOproduccion';
                      $comportamiento = 'comportamientoOproduccion';
                      $evaluacion = 'evaluacionOproduccion';
                      $observa = 'observaOproduccion';

                      $campo1 = 'aulico_oproduccion';
                      $campo2 = 'comportamiento_oproduccion';
                      $campo3 = 'evaluacion_oproduccion';
                      $campo4 = 'observa_oproduccion';
                    } 

                    if ($mat == 'Procesos y Equipos Industriales') {
                    
                      $aulico = 'aulicoPindustriales';
                      $comportamiento = 'comportamientoPindustriales';
                      $evaluacion = 'evaluacionPindustriales';
                      $observa = 'observaPindustriales';

                      $campo1 = 'aulico_pindustriales';
                      $campo2 = 'comportamiento_pindustriales';
                      $campo3 = 'evaluacion_pindustriales';
                      $campo4 = 'observa_pindustriales';
                    } 



                    if ($mat == 'Tecnología de los Alimentos') {
                    
                      $aulico = 'aulicoTalimentos';
                      $comportamiento = 'comportamientoTalimentos';
                      $evaluacion = 'evaluacionTalimentos';
                      $observa = 'observaTalimentos';

                      $campo1 = 'aulico_talimentos';
                      $campo2 = 'comportamiento_talimentos';
                      $campo3 = 'evaluacion_talimentos';
                      $campo4 = 'observa_talimentos';
                    }  

                    

              
             echo' <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-check-square-o"></i></span>                  
                  
                  <select class="form-control input-lg" id='.$aulico.' name='.$aulico.' required>

                  <option value="">--- Ingrese Trabajo Aúlico ---</option>
                  <option value="Regular">Regular</option>
                  <option value="Bueno">Bueno</option>
                  <option value="Muy Bueno">Muy Bueno</option>
                                        

                  </select>

                </div>

              </div>



              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-check-square-o"></i></span>                  
                  
                  <select class="form-control input-lg" id='.$comportamiento.' name='.$comportamiento.' required>

                  <option value="">--- Ingrese Comportamiento ---</option>
                  <option value="Regular">Regular</option>
                  <option value="Bueno">Bueno</option>
                  <option value="Muy Bueno">Muy Bueno</option>
                                        

                  </select>

                </div>

              </div>

              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-check-square-o"></i></span>                  
                  
                  <select class="form-control input-lg" id='.$evaluacion.' name='.$evaluacion.' required>

                  <option value="">--- Ingrese Evaluación ---</option>
                  <option value="Regular">Regular</option>
                  <option value="Bueno">Bueno</option>
                  <option value="Muy Bueno">Muy Bueno</option>
                                        

                  </select>

                </div>

              </div>   


              <div class="form-group">          
                  <label for='.$observa.'>Observaciones</label>
                      <textarea class="form-control" cols="80" rows="3" id='.$observa.' name='.$observa.'>
                  </textarea>
              </div>


            </div>
            
          </div>

          




          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>


            <button type="submit" class="btn btn-primary">Guardar Cambios</button>

              <input type="hidden" name="idAlumno" id="idAlumno"> 

          </div>';       

      

              $tabla = "sexto";
              $curso = "41etv";

              $editarInforme = new ControladorInformes();
              $editarInforme -> ctrEditarInformePrimero($tabla, $curso, $aulico, $comportamiento, $evaluacion, $observa, $campo1, $campo2, $campo3, $campo4);

         

    echo '</form>

          
    </div>

  </div>
</div>


    </form>

          
    </div>

  </div>
</div>';



