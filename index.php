<?php

include("./bd.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema LAZO - CCCT 911</title>

    <!-- Fuentes personalizadas para esta plantilla-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Estilos personalizados para esta plantilla-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Envoltorio de página -->
    <div id="wrapper">

        <!-- Barra lateral -->
        <?php

        include("./navbar.php");

        ?>
        <!-- Fin de la barra lateral -->

        <!-- Envoltorio de contenido -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Contenido principal -->
            <div id="content">

                <!-- Barra superior -->
                <?php

                include("./supbar.php");

                ?>
                <!-- Fin de la barra superior -->

                <!-- Contenido de la página de inicio -->
                <div class="container-fluid">

                    <?php if ($_SESSION['valor'] == '4') { ?>

                        <code>

                            <br>
                            -_-_-_-_-_-_-_-_-_-_-_-
                            <br>
                            Esquema de desarrollo:
                            <br>
                            -_-_-_-_-_-_-_-_-_-_-_-
                            <br><br>
                            -Sistema de asistencias para visualización del supervisor.
                            <br>
                            -Reloj en la barra superior para cada usuario al iniciar sesión.
                            <br>
                            -Sección de perfil con datos completos y foto para cada personal.
                            <br>
                            -Mapa situacional de emergencias (interactivo de ser posible).
                            <br>
                            -----------------------------------------
                            <br>
                            -(Terminado)-Botón para generar reportes.
                            <br>
                            -----------------------------------------
                            <br>
                            ---------------------------------
                            <br>
                            -(Terminado)-Terminar plantillas.
                            <br>
                            ---------------------------------
                            <br>
                            -Los despachadores solo deben tener acceso a las planillas que les fueron asignados por el supervisor.
                            <br>
                            --------------------------------------------------------------------
                            <br>
                            -(Terminado)-Cambiar el tamaño del campo "detalles de la solicitud".
                            <br>
                            --------------------------------------------------------------------
                            <br>
                            --------
                            <br>
                            -(Info)-Versionamiento Semántico: versión_de_lanzamiento.desarrollo_de_funciones.correciones_y_parches
                            <br>
                            --------

                        </code>

                    <?php } else {
                        //Oculta la sección
                    } ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- Fin del contenido principal -->

            <!-- Pie de página -->
            <?php

            include("./footer.php");

            ?>
            <!-- Fin del pie de página -->

        </div>
        <!-- Fin del contenedor de contenido -->

    </div>
    <!-- Envoltorio de fin de página -->

    <!-- Desplazarse hasta el botón superior-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- JavaScript básico de arranque-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Complemento principal JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Scripts personalizados para todas las páginas.-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Complementos a nivel de página -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Scripts personalizados a nivel de página -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>