<?php
  
  $materia = $_SESSION["materia"];

    $item = null;
    $valor = null;   

    $cursos = ControladorCursos::ctrMostrarCursos($item, $valor);


?>       


  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        1º Primera - Turno Mañana
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">1º Primera TM</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <?php

          if ($_SESSION["perfil"] != "Preceptor") {
            
              echo '<div class="box-header with-border">                                      

                <button class="btn btn-primary btnInformePrimero" materia="'.$_SESSION['materia'].'" ciclo="basico" curso="primero" periodo="'.$_SESSION['periodo'].'" idCurso=1 tabla="primero" informe="informe-curso-primero">
                  
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
                  $valor = 1;
                  $tabla = "primero";
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

                              <button class="btn btn-warning btnEditarInformePrimero" materia="'.$_SESSION["materia"].'" tabla="primero" periodo="'.$_SESSION['periodo'].'" idAlumno="'.$value["id"].'" nombreAlumno="'.$value["nombre"].'" data-toggle="modal" data-target="#modalEditarInforme"><i class="fa fa-pencil"></i></button>

  
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
                    
                    $materia = $_SESSION["materia"];

                    if ($materia == 'Biología') {
                    
                      $concepto = 'conceptoBiologia';
                      $observa = 'observaBiologia';

                      $campo1 = 'concepto_biologia';
                      $campo2 = 'observa_biologia';

                    }          

                    if ($materia == 'Dibujo Técnico') {
                    
                      $concepto = 'conceptoDibujo';
                      $observa = 'observaDibujo';

                      $campo1 = 'concepto_dibujo';
                      $campo2 = 'observa_dibujo';

                    }      

                    if ($materia == 'Educación Artística') {
                    
                      $concepto = 'conceptoArtistica';
                      $observa = 'observaArtistica';

                      $campo1 = 'concepto_artistica';
                      $campo2 = 'observa_artistica';

                    } 

                    if ($materia == 'Educación Física') {
                    
                      $concepto = 'conceptoFisica';
                      $observa = 'observaFisica';

                      $campo1 = 'concepto_fisica';
                      $campo2 = 'observa_fisica';

                    } 

                    if ($materia == 'Educación para la Ciudadanía') {
                    
                      $concepto = 'conceptoCiudadania';
                      $observa = 'observaCiudadania';

                      $campo1 = 'concepto_ciudadania';
                      $campo2 = 'observa_ciudadania';

                    } 
                    
                    if ($materia == 'Físico - Química') {
                    
                      $concepto = 'conceptoFisico';
                      $observa = 'observaFisico';

                      $campo1 = 'concepto_fisico_quimica';
                      $campo2 = 'observa_fisico_quimica';

                    } 
              
                    if ($materia == 'Geografía') {
                    
                      $concepto = 'conceptoGeografia';
                      $observa = 'observaGeografia';

                      $campo1 = 'concepto_geografia';
                      $campo2 = 'observa_geografia';

                    } 

                    if ($materia == 'Historia') {
                    
                      $concepto = 'conceptoHistoria';
                      $observa = 'observaHistoria';

                      $campo1 = 'concepto_historia';
                      $campo2 = 'observa_historia';

                    } 

                    if ($materia == 'Inglés') {
                    
                      $concepto = 'conceptoIngles';
                      $observa = 'observaIngles';

                      $campo1 = 'concepto_ingles';
                      $campo2 = 'observa_ingles';

                    } 

                    if ($materia == 'Lengua y Literatura') {
                    
                      $concepto = 'conceptoLengua';
                      $observa = 'observaLengua';

                      $campo1 = 'concepto_lengua';
                      $campo2 = 'observa_lengua';

                    } 

                    if ($materia == 'Matemática') {
                    
                      $concepto = 'conceptoMatematica';
                      $observa = 'observaMatematica';

                      $campo1 = 'concepto_matematica';
                      $campo2 = 'observa_matematica';

                    } 

                    if ($materia == 'Taller') {
                    
                      $concepto = 'conceptoTaller';
                      $observa = 'observaTaller';

                      $campo1 = 'concepto_taller';
                      $campo2 = 'observa_taller';

                    } 

              
             echo' <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-check-square-o"></i></span>                  
                  
                  <select class="form-control input-lg" id='.$concepto.' name='.$concepto.' required>

                  <option value="">--- Ingrese Concepto ---</option>
                  <option value="Aprobado">Aprobado</option>
                  <option value="En Curso">En Curso</option>
                                        

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

      

              $tabla = "primero";
              $curso = "11tm";

              $editarInforme = new ControladorInformes();
              $editarInforme -> ctrEditarInformePrimero($tabla, $curso, $concepto, $observa, $campo1, $campo2);

         

    echo '</form>

          
    </div>

  </div>
</div>


    </form>

          
    </div>

  </div>
</div>';



