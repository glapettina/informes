<?php

  session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CET Nº 13 | Choele Choel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="vistas/img/plantilla/escudo.png">

  <!--======================================
  PLUGINS DE CSS
  =======================================--> 

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <!-- Date Picker -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.css">


  <!--======================================
  PLUGINS DE JAVASCRIPT
  =======================================-->    

  <!-- jQuery 3 -->
  <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>
  <!-- SweetAlert 2 -->
  <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
  <!-- DataTables -->
  <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
  <!-- daterangepicker -->
  <script src="vistas/bower_components/moment/min/moment.min.js"></script>
  <script src="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="vistas/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="vistas/bower_components/bootstrap-datepicker/js/locales/bootstrap-datepicker.es.js"></script>


</head>

<!--======================================
  CUERPO DOCUMENTO
=======================================--> 

<body class="hold-transition skin-blue sidebar-mini login-page">


<?php

  if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {
    
    
    echo '<div class="wrapper">';

    /*======================================
    HEADER
    =======================================*/

    include "modulos/header.php";

    /*======================================
    MENU
    =======================================*/

    include "modulos/menu.php";

    /*======================================
    CONTENIDO
    =======================================*/

    if(isset($_GET["ruta"])){

      if ($_GET["ruta"] == "inicio" ||
          $_GET["ruta"] == "usuarios" ||
          $_GET["ruta"] == "cursos" ||
          $_GET["ruta"] == "materias" ||
          $_GET["ruta"] == "ciudades" ||
          $_GET["ruta"] == "primero" ||
          $_GET["ruta"] == "segundo" ||
          $_GET["ruta"] == "tercero" ||
          $_GET["ruta"] == "cuarto" ||
          $_GET["ruta"] == "quinto" ||     
          $_GET["ruta"] == "sexto" ||     
          $_GET["ruta"] == "11tm" ||     
          $_GET["ruta"] == "12tm" ||     
          $_GET["ruta"] == "13tm" ||     
          $_GET["ruta"] == "11tt" ||     
          $_GET["ruta"] == "12tt" ||     
          $_GET["ruta"] == "13tt" ||     
          $_GET["ruta"] == "21tm" ||     
          $_GET["ruta"] == "22tm" ||     
          $_GET["ruta"] == "23tm" ||     
          $_GET["ruta"] == "21tt" ||     
          $_GET["ruta"] == "22tt" ||     
          $_GET["ruta"] == "23tt" ||     
          $_GET["ruta"] == "11atm" ||     
          $_GET["ruta"] == "12att" ||     
          $_GET["ruta"] == "11etm" ||     
          $_GET["ruta"] == "12etm" ||     
          $_GET["ruta"] == "11ett" ||     
          $_GET["ruta"] == "21atv" ||     
          $_GET["ruta"] == "21etv" ||     
          $_GET["ruta"] == "22etv" ||     
          $_GET["ruta"] == "23etv" ||     
          $_GET["ruta"] == "31atv" ||     
          $_GET["ruta"] == "31etv" ||     
          $_GET["ruta"] == "32etv" ||     
          $_GET["ruta"] == "41atv" ||     
          $_GET["ruta"] == "41etv" ||     
          $_GET["ruta"] == "42etv" ||     
          $_GET["ruta"] == "menu-detalle" ||     
          $_GET["ruta"] == "informe-area" ||
          $_GET["ruta"] == "informe-area-orientacion" ||
          $_GET["ruta"] == "salir") {
        
          include "modulos/".$_GET["ruta"].".php";

      }else{

        include "modulos/404.php";

      }

    }else{

      include "modulos/inicio.php";

    }

    /*======================================
    FOOTER
    =======================================*/

    include "modulos/footer.php";

    echo '</div>';

  }else{

    include "modulos/login.php";

  }  

?>



<script src="vistas/js/plantilla.js"></script>
<script src="vistas/js/usuarios.js"></script>
<script src="vistas/js/cursos.js"></script>
<script src="vistas/js/ciudades.js"></script>
<script src="vistas/js/alumnos.js"></script>
<script src="vistas/js/movilidades.js"></script>
<script src="vistas/js/netbooks.js"></script>
<script src="vistas/js/servicios.js"></script>
<script src="vistas/js/informes.js"></script>
<script src="vistas/js/materias.js"></script>


<!--CAMPO FECHA - DATEPICKER-->

<script>
      
      $('#datepicker').datepicker({
      /*dateFormat: 'dd-mm-yy',
      autoclose: true*/
       format: "dd/mm/yyyy",
        /*clearBtn: true,*/
        language: "es",
        autoclose: true,
        /*keyboardNavigation: false,
        todayHighlight: true*/
    })

      $('#datepicker2').datepicker({
          /*dateFormat: 'dd-mm-yy',
          autoclose: true*/
           format: "dd/mm/yyyy",
            /*clearBtn: true,*/
            language: "es",
            autoclose: true,
            /*keyboardNavigation: false,
            todayHighlight: true*/
    })

        $('#datepicker3').datepicker({
      /*dateFormat: 'dd-mm-yy',
      autoclose: true*/
       format: "dd/mm/yyyy",
        /*clearBtn: true,*/
        language: "es",
        autoclose: true,
        /*keyboardNavigation: false,
        todayHighlight: true*/
    })


</script>    

</body>
</html>


