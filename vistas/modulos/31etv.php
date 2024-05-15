<?php
  
  $doc = $_SESSION["id"];
  $ncurso = 21;
                    
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

                    3º Primera Electromecánica - Turno Vespertino - Materia: '.$mate["materia"].'

                    </h1>';

                    }else{

                    echo '<h1>
                    3º Primera Electromecánica - Turno Vespertino

                    </h1>';
                    }

          ?>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">3º Primera E TV</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

              <?php

                  if ($_SESSION["perfil"] != "Preceptor") {
                                                                                          
                    echo '<div class="box-header with-border">                                      

                      <button class="btn btn-primary btnInformeQuinto" mat="'.$ma.'" curso="'.$mate['curso_id'].'" periodo="'.$_SESSION['periodo'].'" idCurso=21 tabla="quinto" informe="informe-curso-quinto">
                        
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
                  $valor = 21;
                  $tabla = "quinto";
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

                              <button class="btn btn-warning btnEditarInformePrimero"  tabla="quinto" periodo="'.$_SESSION['periodo'].'" idAlumno="'.$value["id"].'" mat="'.$ma.'" nombreAlumno="'.$value["nombre"].'" data-toggle="modal" data-target="#modalEditarInforme"><i class="fa fa-pencil"></i></button>

  
                            </div>';
                           
                            
                             
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


                    if ($mat == 'Análisis Matemático') {
                    
                      $aulico = 'aulicoAnalisis';
                      $comportamiento = 'comportamientoAnalisis';
                      $evaluacion = 'evaluacionAnalisis';
                      $observa = 'observaAnalisis';

                      $campo1 = 'aulico_analisis';
                      $campo2 = 'comportamiento_analisis';
                      $campo3 = 'evaluacion_analisis';
                      $campo4 = 'observa_analisis';

                    }          

                    if ($mat == 'Cálculos de Elementos de Máquinas') {
                    
                      $aulico = 'aulicoCalculos';
                      $comportamiento = 'comportamientoCalculos';
                      $evaluacion = 'evaluacionCalculos';
                      $observa = 'observaCalculos';

                      $campo1 = 'aulico_calculos';
                      $campo2 = 'comportamiento_calculos';
                      $campo3 = 'evaluacion_calculos';
                      $campo4 = 'observa_calculos';

                    }

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

                    if ($mat == 'Electrónica General') {
                    
                      $aulico = 'aulicoElectronica';
                      $comportamiento = 'comportamientoElectronica';
                      $evaluacion = 'evaluacionElectronica';
                      $observa = 'observaElectronica';

                      $campo1 = 'aulico_electronica';
                      $campo2 = 'comportamiento_electronica';
                      $campo3 = 'evaluacion_electronica';
                      $campo4 = 'observa_electronica';

                    } 

                    if ($mat == 'Electrotecnia') {
                    
                      $aulico = 'aulicoElectrotecnia';
                      $comportamiento = 'comportamientoElectrotecnia';
                      $evaluacion = 'evaluacionElectrotecnia';
                      $observa = 'observaElectrotecnia';

                      $campo1 = 'aulico_electrotecnia';
                      $campo2 = 'comportamiento_electrotecnia';
                      $campo3 = 'evaluacion_electrotecnia';
                      $campo4 = 'observa_electrotecnia';
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
                    

                    if ($mat == 'Laboratorio de Mediciones Eléctricas') {
                    
                      $aulico = 'aulicoMelectricas';
                      $comportamiento = 'comportamientoMelectricas';
                      $evaluacion = 'evaluacionMelectricas';
                      $observa = 'observaMelectricas';

                      $campo1 = 'aulico_melectricas';
                      $campo2 = 'comportamiento_melectricas';
                      $campo3 = 'evaluacion_melectricas';
                      $campo4 = 'observa_melectricas';

                    } 

                    if ($mat == 'Legislación del Trabajo') {
                    
                      $aulico = 'aulicoLegislacion';
                      $comportamiento = 'comportamientoLegislacion';
                      $evaluacion = 'evaluacionLegislacion';
                      $observa = 'observaLegislacion';

                      $campo1 = 'aulico_legislacion';
                      $campo2 = 'comportamiento_legislacion';
                      $campo3 = 'evaluacion_legislacion';
                      $campo4 = 'observa_legislacion';
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

                    if ($mat == 'Seguridad e Higiene Industrial') {
                    
                      $aulico = 'aulicoSindustrial';
                      $comportamiento = 'comportamientoSindustrial';
                      $evaluacion = 'evaluacionSindustrial';
                      $observa = 'observaSindustrial';

                      $campo1 = 'aulico_sindustrial';
                      $campo2 = 'comportamiento_sindustrial';
                      $campo3 = 'evaluacion_sindustrial';
                      $campo4 = 'observa_sindustrial';
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

                    if ($mat == 'Termodinámica') {
                    
                      $aulico = 'aulicoTermodinamica';
                      $comportamiento = 'comportamientoTermodinamica';
                      $evaluacion = 'evaluacionTermodinamica';
                      $observa = 'observaTermodinamica';

                      $campo1 = 'aulico_termodinamica';
                      $campo2 = 'comportamiento_termodinamica';
                      $campo3 = 'evaluacion_termodinamica';
                      $campo4 = 'observa_termodinamica';
                    } 

                    if ($mat == 'Diseños de Envases') {
                    
                      $aulico = 'aulicoDisenio';
                      $comportamiento = 'comportamientoDisenio';
                      $evaluacion = 'evaluacionDisenio';
                      $observa = 'observaDisenio';

                      $campo1 = 'aulico_disenio';
                      $campo2 = 'comportamiento_disenio';
                      $campo3 = 'evaluacion_disenio';
                      $campo4 = 'observa_disenio';
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

                    if ($mat == 'Microbiología') {
                    
                      $aulico = 'aulicoMicrobiologia';
                      $comportamiento = 'comportamientoMicrobiologia';
                      $evaluacion = 'evaluacionMicrobiologia';
                      $observa = 'observaMicrobiologia';

                      $campo1 = 'aulico_microbiologia';
                      $campo2 = 'comportamiento_microbiologia';
                      $campo3 = 'evaluacion_microbiologia';
                      $campo4 = 'observa_microbiologia';
                    } 

                    

                    if ($mat == 'Procesos Productivos') {
                    
                      $aulico = 'aulicoPproductivos';
                      $comportamiento = 'comportamientoPproductivos';
                      $evaluacion = 'evaluacionPproductivos';
                      $observa = 'observaPproductivos';

                      $campo1 = 'aulico_prpoductivos';
                      $campo2 = 'comportamiento_prpoductivos';
                      $campo3 = 'evaluacion_prpoductivos';
                      $campo4 = 'observa_prpoductivos';
                    } 

                    if ($mat == 'Química Analítica Cualitativa') {
                    
                      $aulico = 'aulicoCualitativa';
                      $comportamiento = 'comportamientoCualitativa';
                      $evaluacion = 'evaluacionCualitativa';
                      $observa = 'observaCualitativa';

                      $campo1 = 'aulico_cualitativa';
                      $campo2 = 'comportamiento_cualitativa';
                      $campo3 = 'evaluacion_cualitativa';
                      $campo4 = 'observa_cualitativa';
                    } 

                    if ($mat == 'Química Analítica Cuantitativa') {
                    
                      $aulico = 'aulicoCuantitativa';
                      $comportamiento = 'comportamientoCuantitativa';
                      $evaluacion = 'evaluacionCuantitativa';
                      $observa = 'observaCuantitativa';

                      $campo1 = 'aulico_cuantitativa';
                      $campo2 = 'comportamiento_cuantitativa';
                      $campo3 = 'evaluacion_cuantitativa';
                      $campo4 = 'observa_cuantitativa';
                    } 



                    if ($mat == 'Química Biológica') {
                    
                      $aulico = 'aulicoQbiologica';
                      $comportamiento = 'comportamientoQbiologica';
                      $evaluacion = 'evaluacionQbiologica';
                      $observa = 'observaQbiologica';

                      $campo1 = 'aulico_qbiologica';
                      $campo2 = 'comportamiento_qbiologica';
                      $campo3 = 'evaluacion_qbiologica';
                      $campo4 = 'observa_qbiologica';
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

      

              $tabla = "quinto";
              $curso = "31etv";

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



