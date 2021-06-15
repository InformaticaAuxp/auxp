<?php 
require ('app/db/conexion.php');


 ?>
<!DOCTYPE html>
<html lang="Es">
  <head>
    <meta charset="utf-8"/>
    <title>Asociación de Auxilio Póstumo del Empleado de Salud Pública - ASAPESPU</title>
    <link rel="stylesheet" href="css/contquestions.css">
    <?php include 'inc/header-common.php'; ?>

</head>
<body id="preguntas">
<div class="rescontainer">
  <div class="hidcontainer">
  
      <!--  -ENCABEZADO Y MENU  -->
        <?php include 'inc/header.php'; ?>
      <!--  -CONTENIDO-   -->
      <div class="full__width_Q obj_center_Q med_width_Q"><h1>BOLETA DE SUGERENCIA</h1></div>           
        <div id="formulario" class="obj_center_Q med_width_Q">
          
          <h1>ESTADO</h1>

          <?php 
            $host="localhost";
            $user="root";//"asapespu_coment";
            $pass="";//"-b^6H1k52iRy";
            $name="boleta_sugerencia";
            $port=3306;
            

            $codigo=$_POST["codigo"];                   
            $expediente=$_POST["expediente"];                   
            $nombre1=$_POST["nombre1"];
            $nombre2=$_POST["nombre2"];
            $apellido1=$_POST["apellido1"]; 
            $apellido2=$_POST["apellido2"];
            $dpi=$_POST["dpi"];
            $correo=$_POST["correo"];
            $telefono=$_POST["telefono"];
            $sex=$_POST["sexo"];
            $sexo=$sex[0];
            $profesion=$_POST["profesion"];
            $direccion=$_POST["direccion"];
            $sugerencia=$_POST["sugerencia"];
            $fecharecibido = date("Y/m/d",time());
            $idtipaso=$_POST["asociado"];
            $idtipoasociado=$idtipaso[0].$idtipaso[1].$idtipaso[2];
            $idsolicitudenvio = 'N'; /*N,Y*/
            $idclasificacion = 'N'; /*A,N*/
            $contador = 0;
            $date = "";
            $connect = mysqli_connect($host, $user, $pass, $name, $port);
            mysqli_select_db($connect, $name);
            $records = mysqli_query($connect, "select * from registro_local where CODIGO = '$codigo'");
            mysqli_data_seek($records,0); 
            $reg = mysqli_fetch_array($records);  
            
            if($reg<>null){
              echo "<h1>CODIGO ENCONTRADO</h1>";

              echo 'Codigo: '.$reg['CODIGO'].' <br>';
              echo 'Expediente: '.$reg['EXPEDIENTE'].' <br>';
              echo 'Primer Nombre: '.$reg['PRIMER_NOMBRE'].' <br>';
              echo 'Segundo Nombre: '.$reg['SEGUNDO_NOMBRE'].' <br>';
              echo 'Primer Apellido: '.$reg['PRIMER_APELLIDO'].' <br>';
              echo 'Segundo Apellido: '.$reg['SEGUNDO_APELLIDO'].'<br/>';
              echo 'DPI: '.$reg['DPI'].'<br/>';
              echo 'Tipo de Asociado: '.$reg['IDTIPOASOCIADO'].'<br/>';
              echo 'Estado: '.$reg['IDESTADO'].'<br/>';


              /*$date = date_create($reg['FECHARECIBIDO']);
              echo 'Fecha de recibido: '.date_format($date, 'd-m-y').'<br/>';
              echo '  Día: '.date("d","$reg['FECHARECIBIDO']").'<br/>';
              echo '  Mes: '.date("m","$reg['FECHARECIBIDO']").'<br/>';
              echo '  Año: '.date("y","$reg['FECHARECIBIDO']").'<br/>';*/  

              echo '<h1>DATOS RECIBIDOS DEL FORMULARIO</h1>';

              echo "<strong> Codigo: </strong>" . $codigo;    
              echo "<br><strong> Expedinete: </strong>" . $expediente; 
              echo "<br><strong> Nombre: </strong>" . $nombre1." ".$nombre2." ".$apellido1." ".$apellido2;
              echo "<br><strong> DPI: </strong>" . $dpi;  
              echo "<br><strong> Sexo: </strong>" . $sexo; 
              echo "<br><strong> Profesion: </strong>" . $profesion; 
              echo "<br><strong> Correo: </strong>" . $correo;
              echo "<br><strong> Direccion: </strong>" . $direccion;  
              echo "<br><strong> Tipo de Asociado: </strong>" . $idtipoasociado; 
              echo "<br><strong> Sugerencia y/o Comentario: </strong>" . $sugerencia; 
              echo "<br><br><strong> Fecha: </strong>".$fecharecibido;  
              $idclasificacion = 'A';
            }else{
                echo "<h1>ESTE CODIGO NO EXISTE</h1>";
               
            }
             
            $query = "INSERT INTO sugerencia_aceptada (CODIGO,EXPEDIENTE,PRIMER_NOMBRE,SEGUNDO_NOMBRE,PRIMER_APELLIDO, SEGUNDO_APELLIDO,DPI,CORREO,TELEFONO,SEXO,PROFESION,DIRECCION,SUGERENCIA,FECHARECIBIDO,IDTIPOASOCIADO, IDSOLICITUDENVIO,IDCLASIFICACION) VALUES('$codigo','$expediente','$nombre1','$nombre2','$apellido1','$apellido2','$dpi','$correo','$telefono','$sexo','$profesion','$direccion','$sugerencia','$fecharecibido','$idtipoasociado','$idsolicitudenvio','$idclasificacion')";
              
              mysqli_query($connect, $query);
              mysqli_free_result($records);
              mysqli_close($connect); 
             ?>
          
        </div>
      </div>  


        
      
      <?php include 'inc/footer.php'; ?>
      <?php include 'inc/footer-common.php'; ?>
  </div>
</div>
</body>
</html>

<!--

