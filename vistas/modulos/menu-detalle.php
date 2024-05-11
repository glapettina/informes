<?php

$item = null;
$valor = null;

$usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor); 


$item = null;
$valor = null;

$cursos = ControladorCursos::ctrMostrarCursos($item, $valor); 

$item = null;
$valor = null;

$materias = ControladorMaterias::ctrMostrarMaterias($item, $valor); 


?>


<div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Menú Detalle
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Menú Detalle</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-header with-border">
          
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarMenuDetalle">
            
            Agregar Menú Detalle
          </button>
          
        </div>
        <div class="box-body">
          
          <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
            
            <thead>
              
              <tr>
                
                <th style="width: 10px">#</th>
                <th>Perfil</th>
                <th>Usuario</th>
                <th>Curso</th>
                <th>Turno</th>
                <th>Espacio Curricular</th>
                <th>Estado</th>
                <th>Acciones</th>

              </tr> 

            </thead>
            <tbody>
              
              <?php

                  $item = null;
                  $valor = null;

                  $docentes = ControladorMenu::ctrMostrarMenuDetalle($item, $valor);

                  foreach ($docentes as $key => $value) {
                    
                    echo '<tr>
                
                          <td>'.($key+1).'</td>
                          <td>'.$value["perfil"].'</td>';

                          $item = "id";
                          $valor = $value["usuario_id"];

                          $usu = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

                          echo '<td>'.$usu["nombre"].'</td>';

                          $item = "id";
                          $valor = $value["curso_id"];

                          $cur = ControladorCursos::ctrMostrarCursos($item, $valor); 

                          echo '<td>'.$cur["nombre"].'</td>
                                <td>'.$cur["turno"].'</td>';

                          $item = "id_materia";
                          $valor = $value["materia_id"];

                          $mat = ControladorMaterias::ctrMostrarMaterias($item, $valor);

                          echo '<td>'.$mat["nombre"].'</td>';

                          $usu = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);      

                          if ($value["estado"] != 0) {
                          
                          echo '<td><button class="btn btn-success btn-xs btnActivar" idCurso="'.$value["mend_id"].'" estadoCurso="0">Activado</button></td>';

                        }else{

                          echo '<td><button class="btn btn-danger btn-xs btnActivar" idCurso="'.$value["mend_id"].'" estadoCurso="1">Desactivado</button></td>';
                        }

                          echo '<td>
                            
                            <div class="btn-group">
                                
                              <button class="btn btn-warning btnEditarCurso" idCurso="'.$value["mend_id"].'" data-toggle="modal" data-target="#modalEditarCurso"><i class="fa fa-pencil"></i></button>
                              <button class="btn btn-danger btnEliminarCurso" idCurso="'.$value["mend_id"].'"><i class="fa fa-times"></i></button>

                            </div>

                          </td>

                        </tr> ';
                  }


              ?>

            </tbody>

          </table>

        </div>
        
        
      </div>

    </section>
  </div>


  <!--=====================================
  MODAL AGREGAR MENU DETALLE
  ======================================-->


<div id="modalAgregarMenuDetalle" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Agregar Menú Detalle</h4>

          </div>

          <!--=====================================
          CUERPO DEL MODAL
          ======================================-->


          <div class="modal-body">

            <div class="box-body">

              <!-- ENTRADA PARA EL PERFIL -->          
              
              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                  
                  <select class="form-control input-lg" name="nuevoPerfil">
                    
                    <option value="">Seleccionar Perfil</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Directivo">Directivo</option>
                    <option value="Docente">Docente</option>
                    <option value="Preceptor">Preceptor</option>


                  </select>

                </div>

              </div>


              <!-- ENTRADA PARA SELECCIONAR USUARIO -->

              <div class="form-group">
                
                <div class="input-group col-lg-12">
                  
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  
                  <select class="form-control input-lg" id="nuevoUsuario" name="nuevoUsuario">
                    
                    <option value="0">Usuario</option>

                    <?php


                      foreach ($usuarios as $key => $value) {

                        echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
                        
                      }

                    ?>

                  </select>

                </div>

              </div>

              <!-- ENTRADA PARA SELECCIONAR EL CURSO -->

              <div class="form-group">
                
                <div class="input-group col-lg-12">
                  
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  
                  <select class="form-control input-lg" id="nuevoCurso" name="nuevoCurso">
                    
                    <option value="0">Curso</option>

                    <?php


                      foreach ($cursos as $key => $value) {

                        echo '<option value="'.$value["id"].'">'.$value["nombre"].' - '.$value["turno"].' - '.$value["ciclo"].'</option>';
                        
                      }

                    ?>

                  </select>

                </div>

              </div>

              <!-- ENTRADA PARA SELECCIONAR LA MATERIA -->

              <div class="form-group">
                
                <div class="input-group col-lg-12">
                  
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  
                  <select class="form-control input-lg" id="nuevoMateria" name="nuevoMateria">
                    
                    <option value="0">Materia</option>

                    <?php


                      foreach ($materias as $key => $value) {

                        echo '<option value="'.$value["id_materia"].'">'.$value["nombre"].' - '.$value["ciclo"].'</option>';
                        
                      }

                    ?>

                  </select>

                </div>

              </div>

            </div>
            
          </div>

          <!--=====================================
          PIE DEL MODAL
          ======================================-->



          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar Curso</button>

          </div>

          <?php

              $crearmenudetalle = new ControladorMenu();
              $crearmenudetalle -> ctrCrearMenuDetalle();

          ?>

    </form>
    </div>

  </div>
</div>

  
  <!--=====================================
  MODAL EDITAR CURSO
  ======================================-->


<div id="modalEditarCurso" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Editar Curso</h4>

          </div>

          <!--=====================================
          CUERPO DEL MODAL
          ======================================-->


          <div class="modal-body">

            <div class="box-body">

              <!-- ENTRADA PARA EL NOMBRE -->          
              
              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <input class="form-control input-lg" type="text" name="editarCurso" id="editarCurso" required>
                  <input type="hidden" name="idCurso" id="idCurso">

                </div>

              </div>  

                <!-- ENTRADA PARA EL TURNO -->

                 <div class="form-group">
                
                    <div class="input-group">
                  
                       <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  
                       <select class="form-control input-lg" name="editarTurno" readonly required>
                    
                           <option id="editarTurno"></option>                    
                    
                       </select>

                </div>

              </div>

              <!-- ENTRADA PARA EL CICLO -->

              <div class="form-group">
                
                <div class="input-group">
              
                   <span class="input-group-addon"><i class="fa fa-th"></i></span>
              
                   <select class="form-control input-lg" name="editarCiclo" readonly required>
                
                       <option id="editarCiclo"></option>                    
                
                   </select>

            </div>

          </div>
              
            </div>
            
          </div>

          <!--=====================================
          PIE DEL MODAL
          ======================================-->



          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>

          </div>

          <?php

              $editarcurso = new ControladorCursos();
              $editarcurso -> ctrEditarCurso();

          ?>

    </form>
    </div>

  </div>
</div>

  <?php

              $borrarcurso = new ControladorCursos();
              $borrarcurso -> ctrBorrarCurso();

  ?>
  

  