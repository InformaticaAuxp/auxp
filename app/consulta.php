<?php 
session_start();
if (!empty($_SESSION['GUSER'])) {/*#1*/
$nombre =  $_SESSION['GNOMBRE'];

$tipousuario = $_SESSION['GTUSUARIO'];//VALIDAR TIPOS DE USUARIO
require('db/conexion.php');
if (!empty($_POST["fechaini"])) {
    $fechainicio=$_POST["fechaini"];
    $fechafinal=$_POST["fechafin"];
 }else{
    $fechainicio="2019-01-01";
    $fechafinal=date("Y-m-d",time());
 }

    if (!empty($_POST["clasificacion"])) {
        if ($_POST["clasificacion"]=='T') {
            $aceptadas0='A';
            $aceptadas1='N';
            $aceptadas2='PA';
            $aceptadas3='PN';
            $selec1 = 'selected';
            $selec2 = '';
            $selec3 = '';
            $selec4 = '';
            $selec5 = '';
        }
        else
        {
            $aceptadas0=$_POST["clasificacion"];
            $aceptadas1='';
            $aceptadas2='';
            $aceptadas3='';
            if ($aceptadas0=='A') {
                $selec1 = '';
                $selec2 = 'selected';
                $selec3 = '';
                $selec4 = '';
                $selec5 = '';
            }
            if ($aceptadas0=='N') {
                $selec1 = '';
                $selec2 = '';
                $selec3 = 'selected';
                $selec4 = '';
                $selec5 = '';
            }
            if ($aceptadas0=='PA') {
                $selec1 = '';
                $selec2 = '';
                $selec3 = '';
                $selec4 = 'selected';
                $selec5 = '';
            }
            if ($aceptadas0=='PN') {
                $selec1 = '';
                $selec2 = '';
                $selec3 = '';
                $selec4 = '';
                $selec5 = 'selected';
            }
        }
    }
    else
    {
        $aceptadas0='A';
        $aceptadas1='N';
        $aceptadas2='PA';
        $aceptadas3='PN';
        $selec1 = 'selected';
        $selec2 = '';
        $selec3 = '';
        $selec4 = '';
        $selec5 = '';
    } ?>

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
                <form action="consulta.php" method="POST" style="width:90%;">
                    <div class="filt">
                        <p>Fecha Inicio</p>
                        <?php echo "<input type='date' name='fechaini' value='".$fechainicio."'>"; ?>
                    </div>

                    <div class="filt">
                        <p>Fecha Final</p>
                         <?php echo "<input type='date' name='fechafin' value='".$fechafinal."'>"; ?>
                    </div>

                    <div class="filt">
                        <p>Departamento</p>
                    <input type="text" name="depto">
                    </div>

                    <div class="filt">
                        <p>Tipo de Boleta</p>
                        <select  class="" name="clasificacion">
                         <?php echo "<option value='T'".$selec1.">Todas</option>"; ?>   
                         <?php echo "<option value='A'".$selec2.">Aceptadas</option>"; ?>   
                         <?php echo "<option value='N'".$selec3.">No Aceptadas</option>"; ?>   
                         <?php echo "<option value='PA'".$selec4.">Aceptadas Plataforma</option>"; ?>
                         <?php echo "<option value='PN'".$selec5.">No Aceptadas Plataforma</option>"; ?>        
                        </select>
                    </div>            
                    <div class="filt">
                        <input  id="boton" type="submit" value="Aplicar Filtro">
                    </div>
                </form>
            </div>
        </div>
      <div class="padre">
          <div class="hijo">
              <?php
              if ($records = mysqli_query($connect, "select CODIGO, EXPEDIENTE, concat(PRIMER_NOMBRE,' ',SEGUNDO_NOMBRE,' ',PRIMER_APELLIDO,' ',SEGUNDO_APELLIDO) as NOMBRE, SUGERENCIA, FECHARECIBIDO from sugerencia_aceptada where FECHARECIBIDO between '$fechainicio' and '$fechafinal' and IDCLASIFICACION in('$aceptadas0','$aceptadas1','$aceptadas2','$aceptadas3') order by FECHARECIBIDO desc")) {
                  $row_ = mysqli_num_rows($records);
                  if ($row_ === 0)
                  {
                      echo "<h3>NO EXISTEN DATOS</h3>";
                  }
                  else
                  {
                      $contador = 0;
                                ?>
                            <table border='1'>
                            <caption><h1>LISTADO DE BOLETAS</h1></caption>
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

                                 }  echo " </table>";
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
/*#1*/}
else{
    /*#1*/
    header('location: http://localhost/asapespu/app/index.php');
    /*#1*/}
?>