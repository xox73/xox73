<?php

session_start();

$url_base = "http://localhost/LAZO/";

//Si el usuario no existe (no está validado por el inicio de sesión) lo devuelve al login.

if (!isset($_SESSION["usuario"]) || empty($_SESSION["usuario"])) {
    header("location:" . $url_base . "login.php");
}

?>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Barra lateral - Marca -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-0">
            <i class="fas fa-sitemap"></i>
        </div>
        <div class="sidebar-brand-text mx-3">LAZO<sup>911</sup></div>
    </a>

    <!-- Divisor -->
    <hr class="sidebar-divider my-0">

    <!-- Elemento de navegación: Panel de control -->
    <li class="nav-item active">
        <a class="nav-link" href="/LAZO/index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Inicio</span></a>
    </li>




    <?php if ($_SESSION['valor'] == '4') { ?>



        <!-- Divisor -->
        <hr class="sidebar-divider">

        <!-- Título -->
        <div class="fas fa-terminal sidebar-heading">
            Administración
        </div>

        <!-- Elemento de navegación: Personal -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#usuarios" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-user"></i>
                <span>Personal</span>
            </a>
            <div id="usuarios" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="fas fa-terminal collapse-header">Seleccione:</h6>
                    <a class="collapse-item" href="/LAZO/gui/administrador/usuarios/operadores/index.php">Operadores</a>
                    <a class="collapse-item" href="/LAZO/gui/administrador/usuarios/despachadores/index.php">Despachadores</a>
                    <a class="collapse-item" href="/LAZO/gui/administrador/usuarios/supervisores/index.php">Supervisores</a>
                    <a class="collapse-item" href="/LAZO/gui/administrador/usuarios/administrador/index.php">Administrador</a>
                    <a class="collapse-item" href="/LAZO/gui/administrador/usuarios/grupos/index.php">Grupos</a>
                </div>
            </div>
        </li>

        <!-- Elemento de navegación: Cuadrantes de paz -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#cuadrantes_de_paz" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-dove"></i>
                <span>En desarrollo</span>
            </a>
            <div id="cuadrantes_de_paz" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="fas fa-terminal collapse-header">Seleccione:</h6>
                    <a class="collapse-item" href="/LAZO/gui/administrador/talonario/index.php">Talonario</a>
                    <a class="collapse-item" href="">Funcionarios</a>
                    <a class="collapse-item" href="">Vehículos</a>
                    <a class="collapse-item" href="">Armamento</a>
                </div>
            </div>
        </li>

        <!-- Elemento de navegación: Insertar datos -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#insertar_datos" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-wave-square"></i>
                <span>Insertar datos</span>
            </a>
            <div id="insertar_datos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="fas fa-terminal collapse-header">Seleccione:</h6>
                    <a class="collapse-item" href="/LAZO/gui/administrador/municipios/index.php">Municipios</a>
                    <a class="collapse-item" href="/LAZO/gui/administrador/parroquias/index.php">Parroquias</a>
                    <a class="collapse-item" href="/LAZO/gui/administrador/clasificacion_general/index.php">Clasificación General</a>
                    <a class="collapse-item" href="/LAZO/gui/administrador/clasificacion_especifica/index.php">Clasificación Específica</a>
                    <a class="collapse-item" href="/LAZO/gui/administrador/motivo_general/index.php">Motivos Generales</a>
                    <a class="collapse-item" href="/LAZO/gui/administrador/motivo_especifico/index.php">Motivos Específicos</a>
                    <a class="collapse-item" href="/LAZO/gui/administrador/organismos/index.php">Organismos</a>
                    <a class="collapse-item" href="/LAZO/gui/administrador/unidades/index.php">Unidades</a>
                    <a class="collapse-item" href="/LAZO/gui/administrador/estado_llamada/index.php">Estados de las Llamadas</a>
                    <a class="collapse-item" href="/LAZO/gui/administrador/cuadrantes_de_paz/index.php">Cuadrantes</a>
                </div>
            </div>
        </li>



    <?php } else {
        //Oculta la sección
    } ?>



    <!-- Divisor -->
    <hr class="sidebar-divider">

    <!-- Título -->
    <div class="fas fa-terminal sidebar-heading">
        Operador
    </div>

    <!-- Elemento de navegación: Plantilla operador -->
    <li class="nav-item">
        <a class="nav-link" href="/LAZO/gui/plantillas/operador/crear.php">
            <i class="fas fa-newspaper"></i>
            <span>Plantilla operador</span></a>
    </li>

    <br>

    <!-- Divisor -->
    <hr class="sidebar-divider">

    <!-- Título -->
    <div class="fas fa-terminal sidebar-heading">
        Despachador
    </div>

    <!-- Elemento de navegación: Plantilla despachador -->
    <li class="nav-item">
        <a class="nav-link" href="/LAZO/gui/plantillas/despachador/index.php">
            <i class="fas fa-newspaper"></i>
            <span>Plantilla despachador</span></a>
    </li>

    <br>

    <!-- Divisor -->
    <hr class="sidebar-divider">

    <!-- Título -->
    <div class="fas fa-terminal sidebar-heading">
        Supervisor
    </div>

    <!-- Elemento de navegación: Plantilla despachador -->
    <li class="nav-item">
        <a class="nav-link" href="/LAZO/gui/plantillas/supervisor/p_no_supervisadas/index.php">
            <i class="fas fa-newspaper"></i>
            <span>Planillas no supervisadas</span></a>
    </li>

    <!-- Elemento de navegación: Plantilla despachador -->
    <li class="nav-item">
        <a class="nav-link" href="/LAZO/gui/plantillas/supervisor/p_supervisadas/index.php">
            <i class="fas fa-newspaper"></i>
            <span>Planillas supervisadas</span></a>
    </li>

    <!-- Elemento de navegación: Plantilla despachador -->
    <li class="nav-item">
        <a class="nav-link" href="/LAZO/gui/plantillas/supervisor/estadisticas/index.php">
            <i class="fas fa-newspaper"></i>
            <span>Estadísticas</span></a>
    </li>



    <br>



    <!-- Divisor -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Alternador de barra lateral (barra lateral) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Mensaje de la barra lateral -->
    <div class="sidebar-card d-none d-lg-flex">
        <p class="text-center mb-2"><strong>LAZO</strong><br>Sistema en Desarrollo<br>v0.7.5</p>
    </div>

</ul>