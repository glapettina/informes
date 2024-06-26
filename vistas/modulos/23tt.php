<?php
  
  $doc = $_SESSION["id"];
  $ncurso = 26;
                    
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

                2º Tercera - Turno Tarde - Materia: '.$mate["materia"].'

                </h1>';

                }else{

                echo '<h1>
                2º Tercera - Turno Tarde

                </h1>';
                }

      ?>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">2º Tercera TT</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

              <?php

                  if ($_SESSION["perfil"] != "Preceptor") {
                                      
                    echo '<div class="box-header with-border">                                      

                      <button class="btn btn-primary btnInformeSegundo" mat="'.$ma.'" curso="'.$mate['curso_id'].'" periodo="'.$_SESSION['periodo'].'" idCurso=26 tabla="segundo" informe="informe-curso-segundo">
                        
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
                  $valor = 26;
                  $tabla = "segundo";
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

                              <button class="btn btn-warning btnEditarInformePrimero"  tabla="segundo" periodo="'.$_SESSION['periodo'].'" idAlumno="'.$value["id"].'" mat="'.$ma.'" nombreAlumno="'.$value["nombre"].'" data-toggle="modal" data-target="#modalEditarInforme"><i class="fa fa-pencil"></i></button>

  
                            </div>';
                           
                            
                             
                            }else{

                              echo'<button class="btn btn-primary btnImprimirInformeSegundoCb" periodo="'.$_SESSION['periodo'].'" informe="informe_segundocb" tabla="segundo" idAlumno="'.$value["id"].'" data-toggle="modal" data-target="#modalImprimirInformeCb"><i class="fa fa-print"></i></button>';
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

                    if ($mat == 'Dibujo Técnico') {
                    
                      $aulico = 'aulicoDibujo';
                      $comportamiento = 'comportamientoDibujo';
                      $evaluacion = 'evaluacionDibujo';
                      $observa = 'observaDibujo';

                      $campo1 = 'aulico_dibujo';
                      $campo2 = 'comportamiento_dibujo';
                      $campo3 = 'evaluacion_dibujo';
                      $campo4 = 'observa_dibujo';

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

                    if ($mat == 'Educación para la Ciudadanía') {
                    
                      $aulico = 'aulicoCiudadania';
                      $comportamiento = 'comportamientoCiudadania';
                      $evaluacion = 'evaluacionCiudadania';
                      $observa = 'observaCiudadania';

                      $campo1 = 'aulico_ciudadania';
                      $campo2 = 'comportamiento_ciudadania';
                      $campo3 = 'evaluacion_ciudadania';
                      $campo4 = 'observa_ciudadania';

                    } 
                    
                    if ($mat == 'Física') {
                    
                      $aulico = 'aulicoFisica';
                      $comportamiento = 'comportamientoFisica';
                      $evaluacion = 'evaluacionFisica';
                      $observa = 'observaFisica';

                      $campo1 = 'aulico_fisica';
                      $campo2 = 'comportamiento_fisica';
                      $campo3 = 'evaluacion_fisica';
                      $campo4 = 'observa_fisica';

                    } 
              
                    if ($mat == 'Geografía') {
                    
                      $aulico = 'aulicoGeografia';
                      $comportamiento = 'comportamientoGeografia';
                      $evaluacion = 'evaluacionGeografia';
                      $observa = 'observaGeografia';

                      $campo1 = 'aulico_geografia';
                      $campo2 = 'comportamiento_geografia';
                      $campo3 = 'evaluacion_geografia';
                      $campo4 = 'observa_geografia';

                    } 

                    if ($mat == 'Historia') {
                    
                      $aulico = 'aulicoHistoria';
                      $comportamiento = 'comportamientoHistoria';
                      $evaluacion = 'evaluacionHistoria';
                      $observa = 'observaHistoria';

                      $campo1 = 'aulico_historia';
                      $campo2 = 'comportamiento_historia';
                      $campo3 = 'evaluacion_historia';
                      $campo4 = 'observa_historia';

                    } 

                    if ($mat == 'Inglés') {
                    
                      $aulico = 'aulicoIngles';
                      $comportamiento = 'comportamientoIngles';
                      $evaluacion = 'evaluacionIngles';
                      $observa = 'observaIngles';

                      $campo1 = 'aulico_ingles';
                      $campo2 = 'comportamiento_ingles';
                      $campo3 = 'evaluacion_ingles';
                      $campo4 = 'observa_ingles';

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

                    if ($mat == 'Matemática') {
                    
                      $aulico = 'aulicoMatematica';
                      $comportamiento = 'comportamientoMatematica';
                      $evaluacion = 'evaluacionMatematica';
                      $observa = 'observaMatematica';

                      $campo1 = 'aulico_matematica';
                      $campo2 = 'comportamiento_matematica';
                      $campo3 = 'evaluacion_matematica';
                      $campo4 = 'observa_matematica';
                    } 

                    if ($mat == 'Química') {
                    
                      $aulico = 'aulicoQuimica';
                      $comportamiento = 'comportamientoQuimica';
                      $evaluacion = 'evaluacionQuimica';
                      $observa = 'observaQuimica';

                      $campo1 = 'aulico_quimica';
                      $campo2 = 'comportamiento_quimica';
                      $campo3 = 'evaluacion_quimica';
                      $campo4 = 'observa_quimica';

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

      

              $tabla = "segundo";
              $curso = "23tt";

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



