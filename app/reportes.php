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

 if (!empty($_POST["tamano"])) {
    if ($_POST["tamano"]=='C') {
        $hoja1='Selected';
        $hoja2='';                  # code...
    }
    if ($_POST["tamano"]=='L') {
        $hoja1='';
        $hoja2='Selected';                    # code...
    }                   
 }else{
    $hoja1='';
    $hoja2='Selected';
 }

 if (!empty($_POST["clasificacion"])) {
    
    if ($_POST["clasificacion"]=='T') {
        $selec1 = 'selected';
        $selec2 = '';
        $selec3 = '';
        $selec4 = '';
        $selec5 = '';
    }else {
        $aceptadas0=$_POST["clasificacion"];
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
    }else{
        $selec1 = 'selected';
        $selec2 = '';
        $selec3 = '';
        $selec4 = '';
        $selec5 = '';
        } 
$archivo1 = 'selected';
$archivo2 = ''



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
                <form action="reporte.php" method="POST" style="width:90%;" target="_Blank">
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
                        <p>Tipo de Boletas</p>
                        <select  class="" name="clasificacion">
                         <?php echo "<option value='T'".$selec1.">Todas</option>"; ?>   
                         <?php echo "<option value='A'".$selec2.">Aceptadas</option>"; ?>   
                         <?php echo "<option value='N'".$selec3.">No Aceptadas</option>"; ?>   
                         <?php echo "<option value='PA'".$selec4.">Aceptadas Plataforma</option>"; ?>
                         <?php echo "<option value='PN'".$selec5.">No Aceptadas Plataforma</option>"; ?>     
                        </select>
                    </div>    
                    <div class="filt">
                        <p>Tamaño Reporte</p>
                        <select  class="" name="tamano">
                         <?php echo "<option value='C'".$hoja1." >Carta</option>"; ?>   
                         <?php echo "<option value='O' ".$hoja2.">Oficio</option>"; ?>   
                        </select>
                    </div> 
                    <div class="filt">
                        <p>Tipo de Archivo</p>
                        <select  class="" name="archivo">
                         <?php echo "<option value='PDF'".$archivo1." >Pdf</option>"; ?>   
                         <?php echo "<option value='EXCEL' ".$archivo2.">Excel</option>"; ?>   
                        </select>
                    </div>   
                    <div class="filt">
                        <input  id="boton" type="submit" value="Generar Reporte">
                    </div>
                </form>
            </div>
            
        </div>
        
        <div class="padre">
            
            
            
        </div>
        <br>

        </div>
        <?php include 'inc/menu.php' ?>
  </body>
    </html>            

<?php          

/*#1*/}else{/*#1*/
               header('location: http://192.168.1.39/asapespu/app/index.php');
    /*#1*/}       
 ?>