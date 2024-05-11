<?php
  
  $materia = $_SESSION["materia"];

    $item = null;
    $valor = null;   

    $cursos = ControladorCursos::ctrMostrarCursos($item, $valor);


?>       


  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        2º Primera Electromecánica - Turno Vespertino
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">2º Primera Electromecánica TV</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <?php

          if ($_SESSION["perfil"] != "Preceptor") {
            
              echo '<div class="box-header with-border">                                      

                <button class="btn btn-primary btnInformeCuarto" modalidad="superiore" materia="'.$_SESSION['materia'].'" ciclo="superiore" curso="cuarto" periodo="'.$_SESSION['periodo'].'" idCurso=17 tabla="cuarto" informe="informe-curso-cuarto">
                  
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
                <th>Orientación</th>
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

                          <td>'.$curso["turno"].'</td>
                          <td>'.$value["modalidad"].'</td>';


                          echo '<td>';


                          if ($_SESSION["perfil"] != "Preceptor") {
                            
                            
                            echo'<div class="btn-group">

                              <button class="btn btn-warning btnEditarInformeCuarto" materia="'.$_SESSION["materia"].'" tabla="cuarto" periodo="'.$_SESSION['periodo'].'" idAlumno="'.$value["id"].'" nombreAlumno="'.$value["nombre"].'" data-toggle="modal" data-target="#modalEditarInforme"><i class="fa fa-pencil"></i></button>

  
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

                    if ($materia == 'Análisis Matemático') {
                    
                      $concepto = 'conceptoAnalisis';
                      $observa = 'observaAnalisis';

                      $campo1 = 'concepto_analisis';
                      $campo2 = 'observa_analisis';

                    }          

                    if ($materia == 'Educación Física') {
                    
                      $concepto = 'conceptoEdFisica';
                      $observa = 'observaEdFisica';

                      $campo1 = 'concepto_edfisica';
                      $campo2 = 'observa_edfisica';

                    } 

                    if ($materia == 'Electrotecnia') {
                    
                      $concepto = 'conceptoElectrotecnia';
                      $observa = 'observaElectrotecnia';

                      $campo1 = 'concepto_electrotecnia';
                      $campo2 = 'observa_electrotecnia';

                    } 
                    
                    if ($materia == 'Inglés Técnico') {
                    
                      $concepto = 'conceptoIngles';
                      $observa = 'observaIngles';

                      $campo1 = 'concepto_ingles';
                      $campo2 = 'observa_ingles';

                    } 
              
                    if ($materia == 'Laboratorio de Mediciones Eléctricas') {
                    
                      $concepto = 'conceptoLaboratorio';
                      $observa = 'observaLaboratorio';

                      $campo1 = 'concepto_laboratorio';
                      $campo2 = 'observa_laboratorio';

                    } 

                    if ($materia == 'Lengua y Literatura') {
                    
                      $concepto = 'conceptoLengua';
                      $observa = 'observaLengua';

                      $campo1 = 'concepto_lengua';
                      $campo2 = 'observa_lengua';

                    } 

                    if ($materia == 'Mecánica Técnica') {
                    
                      $concepto = 'conceptoMecanica';
                      $observa = 'observaMecanica';

                      $campo1 = 'concepto_mecanica';
                      $campo2 = 'observa_mecanica';

                    } 

                    if ($materia == 'Resistencia de los Materiales') {
                    
                      $concepto = 'conceptoResistencia';
                      $observa = 'observaResistencia';

                      $campo1 = 'concepto_resistencia';
                      $campo2 = 'observa_resistencia';

                    } 

                    if ($materia == 'Taller') {
                    
                      $concepto = 'conceptoTaller';
                      $observa = 'observaTaller';

                      $campo1 = 'concepto_taller';
                      $campo2 = 'observa_taller';

                    } 

                    if ($materia == 'Tecnología de los Materiales') {
                    
                      $concepto = 'conceptoMateriales';
                      $observa = 'observaMateriales';

                      $campo1 = 'concepto_materiales';
                      $campo2 = 'observa_materiales';

                    } 

                    if ($materia == 'Trabajo y Pensamiento Crítico') {
                    
                      $concepto = 'conceptoTrabajo';
                      $observa = 'observaTrabajo';

                      $campo1 = 'concepto_trabajo';
                      $campo2 = 'observa_trabajo';

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

      

              $tabla = "cuarto";
              $curso = "21etv";

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



