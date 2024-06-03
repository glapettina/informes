<?php

    $item = null;
    $valor = null;  
    $ingreso = 1; 

    $periodos = ControladorPeriodos::ctrMostrarPeriodos($item, $valor, $ingreso);


?>  

<div id="back"></div>

<div class="login-box">

  <div class="login-logo">
   


   <img src="vistas/img/plantilla/escudo.png" class="img-responsive" style="padding:10px 100px 0px 100px">
 
  </div>

  
  <div class="login-box-body">
    <p class="login-box-msg">Ingresar al sistema</p>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>

        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <!-- <div class="form-group">
           <label>Período</label>
           <select class="form-control" id="periodo" name="periodo" required>
              <option value="">-- Seleccione --</option>              
              <option value="01/2024">01/2024</option>
           </select>
      </div>     --> 

             <div class="form-group has-feedback">
                  
                <select class="form-control" name="periodo" required>

                  <option value="">Seleccionar Período</option>

                  <?php

                    foreach ($periodos as $key => $value) {

                      echo '<option value="'.$value["nombre"].'">'.$value["nombre"].'</option>';
                      
                    }

                  ?>
                </select>

            </div>

      <div class="row">
        
        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>

        </div>
        
      </div>

      <?php

          $login = new ControladorUsuarios();
          $login -> ctrIngresoUsuario();

      ?>

    </form>

 
  </div>
  
</div>
