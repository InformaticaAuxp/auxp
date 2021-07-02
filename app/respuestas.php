<?php
session_start();
if (!empty($_SESSION['GUSER'])) {/*#1*/
   $nombre =  $_SESSION['GNOMBRE'];
    $tipousuario = $_SESSION['GTUSUARIO'];//VALIDAR TIPOS DE USUARIO

require_once('db/dbcon.php');
    ?>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Ingreso de Respuesta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/dashboard.css"> <!-- MENU -->
        <link rel="stylesheet" href="css/posiciones.css"> <!-- TAMAÑO DE MENU -->
        <script src="js/scrip.js"></script> <!-- CIERRE DE SESION-->

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <body>

    <div class="container">
        <div id="tableData"></div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel"><b>Ingresar Respuesta u Observación</b></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="editarForm">
                    </div>
                </div>
            </div>
        </div>

        <!--
   <div class="padre">
            <div class="hijo">
                <?php /*
                if ($records = mysqli_query($connect, "select IDSUGERENCIA,CODIGO, EXPEDIENTE, concat(PRIMER_NOMBRE,' ',SEGUNDO_NOMBRE,' ',PRIMER_APELLIDO,' ',SEGUNDO_APELLIDO) as NOMBRE, SUGERENCIA, FECHARECIBIDO, OBSERVACION_COMISION, RESPUESTA_GERENCIA from sugerencia_aceptada order by IDSUGERENCIA desc")) {
                $row_ = mysqli_num_rows($records);
                if ($row_ === 0) {
                    echo "<h3>NO EXISTEN DATOS</h3>";
                } else {
                    $contador = 0;
                  */  ?>

                <table border='1'>
                    <caption><h1>INGRESO DE RESPUESTAS - BOLETA DE SUGERENCIA</h1></caption>
                    <tr>
                        <th>No.</th>
                        <th>ID SUGERENCIA DB*</th>
                        <th>CODIGO</th>
                        <th>EXPEDIENTE</th>
                        <th>NOMBRE COMPLETO</th>
                        <th>SUGERENCIA</th>
                        <th>FECHA DE CREACION</th>
                        <th>OBSERVACIONES COMISIÓN</th>
                        <th>RESPUESTA GERENCIA</th>
                        <th>AGREGAR RESPUESTA</th>
                    </tr> -->
                    <?php /*
                    while (($reg = mysqli_fetch_array($records))){
                        $contador++;
                        echo "<td>".$contador."</td>";
                        echo "<td>".$reg['IDSUGERENCIA']."</td>";
                        echo "<td>".$reg['CODIGO']."</td>";
                        echo "<td>".$reg['EXPEDIENTE']."</td>";
                        echo "<td>".$reg['NOMBRE']."</td>";
                        echo "<td>".$reg['SUGERENCIA']."</td>";
                        echo "<td>".date('d/m/y', strtotime($reg['FECHARECIBIDO']))."</td>";
                        if (empty($reg['OBSERVACION_COMISION'])){
                            echo "<td><textarea rows='5' id='observacion_com'></textarea></td>";
                        } else{
                            echo "<td>".$reg['OBSERVACION_COMISION']."</td>";
                        }
                        if (empty($reg['RESPUESTA_GERENCIA'])){
                            echo "<td><textarea rows='5' id='respuesta_ge'></textarea></td>";
                        }else{
                            echo "<td>".$reg['RESPUESTA_GERENCIA']."</td>";
                        }

                        if(!empty($reg['OBSERVACION_COMISION'] AND $reg['RESPUESTA_GERENCIA'])){
                            echo "<td><input type='submit' value='Guardar Respuesta - Asociado' disabled='true'></td>";
                        } else {
                            echo "<td><input type='submit' value='Guardar Respuesta - Asociado'></td></form>";
                        }
                        echo "</tr>";
                        echo "</tr>";
                    }
                    echo " </table>";
                }
                }*/ ?>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
    <!-- </div>
        <br>
    </div>
    </div> -->
    <?php include 'inc/menu.php' ?>
    </body>
    </html>

    <?php
    /*#1*/}else{/*#1*/
    header('location: http://localhost/asapespu/app/index.php');
    /*#1*/}
?>