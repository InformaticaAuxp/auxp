<?php
session_start();

if (!empty($_SESSION['GUSER'])) {/*#1*/
    $nombre =  $_SESSION['GNOMBRE'];
    $tipousuario = $_SESSION['GTUSUARIO'];//VALIDAR TIPOS DE USUARIO

    require('db/conexion.php');
    ?>

    <html>
  <head>
    <title>Consulta</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/posiciones.css">
    </style>
    <script src="js/scrip.js"></script>
  </head>
  <body><div class="area">

  <div class="padre">
  <div class="hijo">
  </div>
  </div>

        <div class="padre">
            <div class="hijo">


                <?php

                if ($records = mysqli_query($connect, "select CODIGO, EXPEDIENTE, concat(PRIMER_NOMBRE,' ',SEGUNDO_NOMBRE,' ',PRIMER_APELLIDO,' ',SEGUNDO_APELLIDO) as NOMBRE, SUGERENCIA, FECHARECIBIDO from sugerencia_aceptada order by FECHARECIBIDO desc")) {

                $row_ = mysqli_num_rows($records);

                if ($row_ === 0) {

                    echo "<h3>NO EXISTEN DATOS</h3>";

                }else{
                $contador = 0;
                ?>
                <table border='1'>
                    <caption><h1>INGRESO DE RESPUESTAS - BOLETA DE SUGERENCIA</h1></caption>
                    <tr>
                        <th>#</th>
                        <th>CODIGO</th>
                        <th>EXPEDIENTE</th>
                        <th>NOMBRE COMPLETO</th>
                        <th>SUGERENCIA</th>
                        <th>FECHA DE CREACION</th>
                    </tr>

                    <?php
                    while (($reg = mysqli_fetch_array($records))){
                        $contador++;
                        echo "<tr>";
                        echo "<th>".$contador."</th>";
                        echo "<th>".$reg['CODIGO']."</th>";
                        echo "<th>".$reg['EXPEDIENTE']."</th>";
                        echo "<th>".$reg['NOMBRE']."</th>";
                        echo "<th>".$reg['SUGERENCIA']."</th>";
                        echo "<th>".date('d/m/y', strtotime($reg['FECHARECIBIDO']))."</th>";
                        echo "</tr>";
                    }
                    echo " </table>";

                    }

                    }

                    ?>


            </div>
        </div>
        <br>

        </div>
        <?php include 'inc/menu.php' ?>
  </body>
    </html>

<?php

/*#1*/}else{/*#1*/
               header('location: http://localhost/asapespu/app/index.php');
    /*#1*/}
 ?>