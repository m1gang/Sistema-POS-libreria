<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>POS - Condisa Romero</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="icon" href="vistas/img/plantilla/logo-claro1.ico">

    <!--======================================================================
    // Plugins de css
    //======================================================================-->

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">

    <!-- AdminLTE Skins-->
    <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.css">

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


    <!--======================================================================
    // Plugins de js
    //======================================================================-->

    <!-- jQuery 3 -->
    <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap 3.3.7 -->
    <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- FastClick -->
    <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>

    <!-- AdminLTE App -->
    <script src="vistas/dist/js/adminlte.min.js"></script>

</head>

<!--======================================================================
// Cuerpo del documento
//======================================================================-->

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">

    <?php

    if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {

        echo '<div class="wrapper">';

        /*======================================================================
        // Cabezote
        //======================================================================*/

        include "modulos/cabezote.php";

        /*======================================================================
        // Menu lateral
        //======================================================================*/

        include "modulos/menu.php";

        /*======================================================================
        // Contenido
        //======================================================================*/


        if (isset($_GET["ruta"])) {
            if (
                $_GET["ruta"] == "inicio" ||
                $_GET["ruta"] == "usuarios" ||
                $_GET["ruta"] == "categorias" ||
                $_GET["ruta"] == "productos" ||
                $_GET["ruta"] == "clientes" ||
                $_GET["ruta"] == "ventas" ||
                $_GET["ruta"] == "crear-venta" ||
                $_GET["ruta"] == "reportes"||
                $_GET["ruta"] == "salir"
            ) {
                include "modulos/" . $_GET["ruta"] . ".php";
            } else {
                include "modulos/404.php";
            }
        } else {
            include "modulos/inicio.php";
        }

        /*======================================================================
        // Footer
        //======================================================================*/

        include "modulos/footer.php";

        echo '</div>';
    }else{
        include "modulos/login.php";
    }
    ?>




    </div>
    <!-- ./wrapper -->

    <script src="vistas/js/plantilla.js"></script>

</body>

</html>