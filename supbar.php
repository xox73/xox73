<nav class="navbar navbar-expand navbar-light bg-white topbar mb-2 static-top shadow">

    <!-- Alternar barra lateral (barra superior) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Búsqueda en la barra superior -->

    <!-- Barra de navegación de la barra superior -->
    <ul class="navbar-nav ml-auto">

        <!-- Divisor -->
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Elemento de navegación: información del usuario -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["usuario"] ?></span>
                <img class="img-profile rounded-circle" src="/LAZO/img/undraw_profile.svg">
            </a>
            <!-- Menú desplegable - Información del usuario -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Cerrar sesión
                </a>

            </div>

            <!-- Cerrar sesión-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">¿Listo para cerrar sesión?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo/a para finalizar su sesión actual.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                            <a class="btn btn-primary" href="/LAZO/cerrar.php">Cerrar Sesión</a>
                        </div>
                    </div>
                </div>
            </div>

        </li>

        <!-- Divisor -->
        <div class="topbar-divider d-none d-sm-block"></div>

        <div class="d-flex justify-content-center align-items-center">
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bloqueoModal">
                    Bloquear
                </button>
            </div>
        </div>

    </ul>

</nav>