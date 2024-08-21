<?php

// Inicia la sesión

session_start();

if ($_POST) {

    include("./bd.php");

    $usuario = (isset($_POST["usuario"])) ? $_POST["usuario"] : "";
    $passwordIngresado = (isset($_POST["password"])) ? $_POST["password"] : "";

    // Seleccionar Registros
    $sentencia = $conexion->prepare("SELECT *, count(*) as n_usuario 
    FROM `tbl_personal`
    WHERE usuario=:usuario");

    $sentencia->bindParam(":usuario", $usuario);

    $sentencia->execute();

    $lista_usuarios = $sentencia->fetch(PDO::FETCH_LAZY);

    if ($lista_usuarios["n_usuario"] > 0) {

        // Obtener el hash almacenado para el usuario
        $hashAlmacenado = $lista_usuarios["password"];

        // Verificar la contraseña ingresada con el hash almacenado
        if (password_verify($passwordIngresado, $hashAlmacenado)) {

            // Asigna valores a la sesión
            $_SESSION["id"] = $lista_usuarios["id"];
            $_SESSION["usuario"] = $lista_usuarios["usuario"];
            $_SESSION["logueado"] = true;

            // Almacena información relevante en la sesión
            $_SESSION['valor'] = $lista_usuarios["valor"]; // Asigna el valor desde la base de datos

            // Actualiza valores en la base de datos
            $usuarioId = $lista_usuarios["id"];

            // Actualiza ultima_actividad con la marca de tiempo actual
            $actualizarActividad = $conexion->prepare("UPDATE tbl_personal SET ultima_actividad = NOW() WHERE id = :id");

            // Actualiza la sesión actual a activa
            $actualizarActividad = $conexion->prepare("UPDATE tbl_personal SET sesion_activa = 1 WHERE id = :id");

            $actualizarActividad->bindParam(":id", $usuarioId);
            $actualizarActividad->execute();

            header("location:index.php");
        } else {
            $mensaje = "Usuario o contraseña incorrectos.";
        }
    } else {
        $mensaje = "Usuario no encontrado.";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema LAZO - Login</title>

    <!-- Fuentes personalizadas para esta plantilla-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Estilos personalizados para esta plantilla-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-image: url('img/gui/fondo_login.jpg');" class="bg-gradient-primary">

    <!-- Espaciado (br) -->

    <br><br><br>

    <div class="container">

        <!-- Fila exterior -->

        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <!-- Fila anidada dentro del cuerpo de la tarjeta -->

                        <div class="row">

                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Ingreso al Sistema</h1>
                                    </div>

                                    <form class="user" action="" method="post">

                                        <div class="mb-3">
                                            <label for="usuario" class="form-label"></label>
                                            <input type="text" class="form-control form-control-user" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Ingresar Usuario" oninput="this.value = this.value.toUpperCase();" />
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label"></label>
                                            <input type="password" class="form-control form-control-user" name="password" id="password" aria-describedby="helpId" placeholder="Ingresar Contraseña" />
                                        </div>

                                        <?php if (isset($mensaje)) { ?>

                                            <div class="col-xl-0 col-md-0 mb-0 animated--grow-in">
                                                <div class="card border-bottom-danger shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                                    Error:</div>
                                                                <div class="h6 mb-0 font-weight-bold text-gray-800"><?php echo $mensaje; ?></div>
                                                            </div>
                                                            <div class="col-auto">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php } ?>

                                        <script>
                                            var alertList = document.querySelectorAll(".alert");
                                            alertList.forEach(function(alert) {
                                                new bootstrap.Alert(alert);
                                            });
                                        </script>

                                        <br>

                                        <input name="" id="" class="btn btn-primary btn-user btn-block" type="submit" value="Ingresar" />

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- JavaScript del núcleo de Bootstrap-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin principal JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Scripts personalizados para todas las páginas-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>