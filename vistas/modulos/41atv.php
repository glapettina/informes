<?php
  
  $materia = $_SESSION["materia"];

    $item = null;
    $valor = null;   

    $cursos = ControladorCursos::ctrMostrarCursos($item, $valor);


?>       


  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        4º Primera Alimentación - Turno Vespertino
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">4º Primera Alimentación TV</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <?php

          if ($_SESSION["perfil"] != "Preceptor") {
            
              echo '<div class="box-header with-border">                                      

                <button class="btn btn-primary btnInformeSexto" modalidad="superiora" materia="'.$_SESSION['materia'].'" ciclo="superiora" curso="sexto" periodo="'.$_SESSION['periodo'].'" idCurso=23 tabla="sexto" informe="informe-curso-sexto">
                  
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
                  $valor = 23;
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

                          <td>'.$curso["turno"].'</td>
                          <td>'.$value["modalidad"].'</td>';


                          echo '<td>';


                          if ($_SESSION["perfil"] != "Preceptor") {
                            
                            
                            echo'<div class="btn-group">

                              <button class="btn btn-warning btnEditarInformeSexto" materia="'.$_SESSION["materia"].'" tabla="sexto" periodo="'.$_SESSION['periodo'].'" idAlumno="'.$value["id"].'" nombreAlumno="'.$value["nombre"].'" data-toggle="modal" data-target="#modalEditarInforme"><i class="fa fa-pencil"></i></button>

  
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

                    if ($materia == 'Bromatología y Sistemas de Gestión de Calidad') {
                    
                      $concepto = 'conceptoBromatologia';
                      $observa = 'observaBromatologia';

                      $campo1 = 'concepto_bromatologia';
                      $campo2 = 'observa_bromatologia';

                    }          


                    if ($materia == 'Comunicación Oral y Escrita') {
                    
                      $concepto = 'conceptoComunicacion';
                      $observa = 'observaComunicacion';

                      $campo1 = 'concepto_comunicacion';
                      $campo2 = 'observa_comunicacion';

                    }          

                    if ($materia == 'Educación Física') {
                    
                      $concepto = 'conceptoEdFisica';
                      $observa = 'observaEdFisica';

                      $campo1 = 'concepto_edfisica';
                      $campo2 = 'observa_edfisica';

                    } 



                    if ($materia == 'Inglés Técnico') {
                    
                      $concepto = 'conceptoIngles';
                      $observa = 'observaIngles';

                      $campo1 = 'concepto_ingles';
                      $campo2 = 'observa_ingles';

                    } 

                    if ($materia == 'Matemática Aplicada') {
                    
                      $concepto = 'conceptoMatematica';
                      $observa = 'observaMatematica';

                      $campo1 = 'concepto_matematica';
                      $campo2 = 'observa_matematica';

                    } 

                    if ($materia == 'Microbiología y Toxicología de los Alimentos') {
                    
                      $concepto = 'conceptoMicrobiologia';
                      $observa = 'observaMicrobiologia';

                      $campo1 = 'concepto_microbiologia';
                      $campo2 = 'observa_microbiologia';

                    } 

                    if ($materia == 'Nutrición') {
                    
                      $concepto = 'conceptoNutricion';
                      $observa = 'observaNutricion';

                      $campo1 = 'concepto_nutricion';
                      $campo2 = 'observa_nutricion';

                    } 

                    if ($materia == 'Organización y Gestión de la Producción') {
                    
                      $concepto = 'conceptoProduccion';
                      $observa = 'observaProduccion';

                      $campo1 = 'concepto_produccion';
                      $campo2 = 'observa_produccion';

                    } 

                    if ($materia == 'Prácticas Profesionalizantes') {
                    
                      $concepto = 'conceptoPracticas';
                      $observa = 'observaPracticas';

                      $campo1 = 'concepto_practicas';
                      $campo2 = 'observa_practicas';

                    } 

                    if ($materia == 'Procesos y Equipos Industriales') {
                    
                      $concepto = 'conceptoProcesos';
                      $observa = 'observaProcesos';

                      $campo1 = 'concepto_procesos';
                      $campo2 = 'observa_procesos';

                    } 

                    if ($materia == 'Tecnología de los Alimentos') {
                    
                      $concepto = 'conceptoTecnologia';
                      $observa = 'observaTecnologia';

                      $campo1 = 'concepto_tecnologia';
                      $campo2 = 'observa_tecnologia';

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

      

              $tabla = "sexto";
              $curso = "41atv";

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



