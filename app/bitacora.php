<?php 
session_start();

if (!empty($_SESSION['GUSER'])) {/*#1*/
              
    require('db/conexion.php');
  
    $nombre =  $_SESSION['GNOMBRE'];
    $tipousuario = $_SESSION['GTUSUARIO'];
    $tipousuarioname = $_SESSION['GTUSUARIONAME'];
    $us = $_SESSION['GUSER'];
    $fechainicio = $_SESSION['GFECHA'];
    $correo = $_SESSION['GMAIL'];
           
                           
?>
 <html>
  <head>
    <title>Bitacora</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/posiciones.css">
     <script src="js/scrip.js"></script>
     
    
  </head>
  <body><div class="area">
        
        <div class="padre">
            <div class="hijo">
                <div class="box">
                    <p style="text-align: center;">BITACORA</p>
                </div>
            </div>
        </div>

        </div>
        <?php include 'inc/menu.php' ?>
  </body>
    </html>                   
<?php          

/*#1*/}else{/*#1*/
               header('location: http://192.168.1.39/asapespu/app/index.php');
    /*#1*/}       
 ?>