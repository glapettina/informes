<?php
  
  $doc = $_SESSION["id"];
  $ncurso = 17;
                    
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

                  2º Primera Electromecánica - Turno Vespertino - Materia: '.$mate["materia"].'

                  </h1>';

                  }else{

                  echo '<h1>
                  2º Primera Electromecánica - Turno Vespertino

                  </h1>';
                  }

        ?>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">2º Primera E TV</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

              <?php

                  if ($_SESSION["perfil"] != "Preceptor") {
                                                      
                    echo '<div class="box-header with-border">                                      

                      <button class="btn btn-primary btnInformeCuarto" mat="'.$ma.'" curso="'.$mate['curso_id'].'" periodo="'.$_SESSION['periodo'].'" idCurso=17 tabla="cuarto" informe="informe-curso-cuarto">
                        
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
                  $valor = 17;
                  $tabla = "cuarto";
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

                              <button class="btn btn-warning btnEditarInformePrimero"  tabla="cuarto" periodo="'.$_SESSION['periodo'].'" idAlumno="'.$value["id"].'" mat="'.$ma.'" nombreAlumno="'.$value["nombre"].'" data-toggle="modal" data-target="#modalEditarInforme"><i class="fa fa-pencil"></i></button>

  
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

                    if ($mat == 'Biología') {
                    
                      $aulico = 'aulicoBiologia';
                      $comportamiento = 'comportamientoBiologia';
                      $evaluacion = 'evaluacionBiologia';
                      $observa = 'observaBiologia';

                      $campo1 = 'aulico_biologia';
                      $campo2 = 'comportamiento_biologia';
                      $campo3 = 'evaluacion_biologia';
                      $campo4 = 'observa_biologia';

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

                    if ($mat == 'Física Aplicada') {
                    
                      $aulico = 'aulicoFaplicada';
                      $comportamiento = 'comportamientoFaplicada';
                      $evaluacion = 'evaluacionFaplicada';
                      $observa = 'observaFaplicada';

                      $campo1 = 'aulico_faplicada';
                      $campo2 = 'comportamiento_faplicada';
                      $campo3 = 'evaluacion_faplicada';
                      $campo4 = 'observa_faplicada';

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
                    

                    if ($mat == 'Lengua y Literatura') {
                    
                      $aulico = 'aulicoLengua';
                      $comportamiento = 'comportamientoLengua';
                      $evaluacion = 'evaluacionLengua';
                      $observa = 'observaLengua';

                      $campo1 = 'aulico_lengua';
                      $campo2 = 'comportamiento_lengua';
                      $campo3 = 'evaluacion_lengua';
                      $campo4 = 'observa_lengua';

                    } 

                    if ($mat == 'Operaciones Unitarias') {
                    
                      $aulico = 'aulicoUnitarias';
                      $comportamiento = 'comportamientoUnitarias';
                      $evaluacion = 'evaluacionUnitarias';
                      $observa = 'observaUnitarias';

                      $campo1 = 'aulico_unitarias';
                      $campo2 = 'comportamiento_unitarias';
                      $campo3 = 'evaluacion_unitarias';
                      $campo4 = 'observa_unitarias';
                    } 

                    if ($mat == 'Química Inorgánica') {
                    
                      $aulico = 'aulicoQinorganica';
                      $comportamiento = 'comportamientoQinorganica';
                      $evaluacion = 'evaluacionQinorganica';
                      $observa = 'observaQinorganica';

                      $campo1 = 'aulico_qinorganica';
                      $campo2 = 'comportamiento_qinorganica';
                      $campo3 = 'evaluacion_qinorganica';
                      $campo4 = 'observa_qinorganica';

                    } 

                    if ($mat == 'Química Orgánica') {
                    
                      $aulico = 'aulicoQorganica';
                      $comportamiento = 'comportamientoQorganica';
                      $evaluacion = 'evaluacionQorganica';
                      $observa = 'observaQorganica';

                      $campo1 = 'aulico_qorganica';
                      $campo2 = 'comportamiento_qorganica';
                      $campo3 = 'evaluacion_qorganica';
                      $campo4 = 'observa_qorganica';

                    } 

                    if ($mat == 'Seguridad e Higiene Industrial y Medio Ambiente') {
                    
                      $aulico = 'aulicoSambiente';
                      $comportamiento = 'comportamientoSambiente';
                      $evaluacion = 'evaluacionSambiente';
                      $observa = 'observaSambiente';

                      $campo1 = 'aulico_sambiente';
                      $campo2 = 'comportamiento_sambiente';
                      $campo3 = 'evaluacion_sambiente';
                      $campo4 = 'observa_sambiente';
                    } 

                    if ($mat == 'Tecnología de Control') {
                    
                      $aulico = 'aulicoTcontrol';
                      $comportamiento = 'comportamientoTcontrol';
                      $evaluacion = 'evaluacionTcontrol';
                      $observa = 'observaTcontrol';

                      $campo1 = 'aulico_tcontrol';
                      $campo2 = 'comportamiento_tcontrol';
                      $campo3 = 'evaluacion_tcontrol';
                      $campo4 = 'observa_tcontrol';
                    } 

                    if ($mat == 'T.P. de Química Inorgánica') {
                    
                      $aulico = 'aulicoTpinorganica';
                      $comportamiento = 'comportamientoTpinorganica';
                      $evaluacion = 'evaluacionTpinorganica';
                      $observa = 'observaTpinorganica';

                      $campo1 = 'aulico_tpinorganica';
                      $campo2 = 'comportamiento_tpinorganica';
                      $campo3 = 'evaluacion_tpinorganica';
                      $campo4 = 'observa_tpinorganica';
                    } 

                    if ($mat == 'T.P. de Química Orgánica') {
                    
                      $aulico = 'aulicoTporganica';
                      $comportamiento = 'comportamientoTporganica';
                      $evaluacion = 'evaluacionTporganica';
                      $observa = 'observaTporganica';

                      $campo1 = 'aulico_tporganica';
                      $campo2 = 'comportamiento_tporganica';
                      $campo3 = 'evaluacion_tporganica';
                      $campo4 = 'observa_tporganica';
                    } 

                    if ($mat == 'Trabajo y Pensamiento Crítico') {
                    
                      $aulico = 'aulicoTrabajo';
                      $comportamiento = 'comportamientoTrabajo';
                      $evaluacion = 'evaluacionTrabajo';
                      $observa = 'observaTrabajo';

                      $campo1 = 'aulico_trabajo';
                      $campo2 = 'comportamiento_trabajo';
                      $campo3 = 'evaluacion_trabajo';
                      $campo4 = 'observa_trabajo';
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

                    if ($mat == 'Mecánica Técnica') {
                    
                      $aulico = 'aulicoMtecnica';
                      $comportamiento = 'comportamientoMtecnica';
                      $evaluacion = 'evaluacionMtecnica';
                      $observa = 'observaMtecnica';

                      $campo1 = 'aulico_mtecnica';
                      $campo2 = 'comportamiento_mtecnica';
                      $campo3 = 'evaluacion_mtecnica';
                      $campo4 = 'observa_mtecnica';
                    } 

                    if ($mat == 'Resistencia de los Materiales') {
                    
                      $aulico = 'aulicoResistencia';
                      $comportamiento = 'comportamientoResistencia';
                      $evaluacion = 'evaluacionResistencia';
                      $observa = 'observaResistencia';

                      $campo1 = 'aulico_resistencia';
                      $campo2 = 'comportamiento_resistencia';
                      $campo3 = 'evaluacion_resistencia';
                      $campo4 = 'observa_resistencia';
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

                    if ($mat == 'Tecnología de los Materiales') {
                    
                      $aulico = 'aulicoTmateriales';
                      $comportamiento = 'comportamientoTmateriales';
                      $evaluacion = 'evaluacionTmateriales';
                      $observa = 'observaTmateriales';

                      $campo1 = 'aulico_tmateriales';
                      $campo2 = 'comportamiento_tmateriales';
                      $campo3 = 'evaluacion_tmateriales';
                      $campo4 = 'observa_tmateriales';
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

      

              $tabla = "cuarto";
              $curso = "21etv";

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



