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
           
            /*$records = mysqli_query($connect, "select U.NOMBRE, AES_DECRYPT(U.CORREO, '123asd4') AS CORREO, T.IDTIPOUSUARIO, T.NOMBRE, U.FECHAALTA, U.IDESTADO from usuario U INNER JOIN tipo_usuario T ON U.IDTIPOUSUARIO = T.IDTIPOUSUARIO where U.IDUSUARIO = '$us'");
            mysqli_data_seek($records,0); 
            $reg = mysqli_fetch_array($records);
            $tipousuario=$reg['T.IDTIPOUSUARIO'];
            $estadousuario=$reg['U.IDESTADO'];
            $nombre=$reg['NOMBRE'];*/
                           
?>
 <html>
  <head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/posiciones.css">
     <script src="js/scrip.js"></script>

    
  </head>
  <body><div class="area">
        
        <div class="padre">
            <div class="hijo">
                <div class="box">
                    <h4>USUARIO</h4>
                    <h5> <?php echo $us; ?></h5>
                </div>
                <div class="box">
                    <h4>NOMBRE</h4>
                    <h5> <?php echo $nombre; ?></h5>
                </div>
                <div class="box">
                    <h4>TIPO DE USUARIO</h4>
                    <h5> <?php echo $tipousuarioname; ?></h5>
                </div>
                <div class="box">
                    <h4>CORREO ELECTRONICO</h4>
                    <h5> <?php echo $correo; ?></h5>
                </div>
                <div class="box">
                    <h4>FECHA DE INGRESO</h4>
                    <h5> <?php echo $fechainicio; ?></h5>
                </div>
                 <br>
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
         
