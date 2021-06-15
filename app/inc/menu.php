<nav class="main-menu">
            <ul>
                <li>
                    <a href="http://localhost/asapespu/app/dashboard.php">
                    <!--    <a href="https://asapespu.com/app/dashboard.php">-->
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Dashboard
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                        <a href="http://localhost/asapespu/app/consulta.php">
                    <!--<a href="https://asapespu.com/app/consulta.php">-->
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Consultas
                        </span>
                    </a>
                    
                </li>
                <?php  if ($tipousuario=='A' or $tipousuario=='B') {  ?>
                <li class="has-subnav">
                    <a href="http://localhost/asapespu/app/reportes.php">
                    <!--<a href="https://asapespu.com/app/reportes.php">-->
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Reportes
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="http://localhost/asapespu/app/boletas.php">
                    <!--<a href="https://asapespu.com/app/boletas.php">-->
                       <i class="fa fa-table fa-2x"></i>
                        <span class="nav-text">
                            Ingreso de Boletas
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="http://localhost/asapespu/app/respuestas.php">
                        <!--<a href="https://asapespu.com/app/boletas.php">-->
                        <i class="fa fa-table fa-2x"></i>
                        <span class="nav-text">
                            Respuesta Al Asociado
                        </span>
                    </a>
                </li>

                <?php } ?>
                <?php  if ($tipousuario=='A') {  ?>
                <li>
                       <a href="http://localhost/asapespu/app/estadistica.php">
                        <!--<a href="https://asapespu.com/app/estadistica.php">-->
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Estadisticas
                        </span>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/asapespu/app/bitacora.php">
                        <!--<a href="https://asapespu.com/app/bitacora.php">-->
                        <i class="fa fa-font fa-2x"></i>
                        <span class="nav-text">
                           Bitacoras
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Carga de Archivo
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                       <i class="fa fa-book fa-2x"></i>
                        <span class="nav-text">
                           Usuarios
                        </span>
                    </a>
                </li>
                <?php } ?>

                <li>
                    <a href="#">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Documentación
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="exit.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Cerrar Sesión
                        </span>
                    </a>
                </li>  
            </ul>

        </nav>