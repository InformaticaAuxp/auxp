<?php 
require('db/conexion.php');

if (!empty($_POST)) {/*#1*/
              
    

   /* require('/PHPMailer/src/PHPMailer.php');
    require('/PHPMailer/src/SMTP.php');
    require('/PHPMailer/src/Exception.php'); */
     
    /* $url0 = /*"http://192.168.1.39/asapespu/app/";*"https://asapespu.com/app/";
     $url1 = "192.168.1.39/asapespu/app/msj/nocuenta.php";
     $url2 = "192.168.1.39/asapespu/app/msj/novalido.php";
     $url3 = "192.168.1.39/asapespu/app/msj/cuentainactiva.php";
     $url4 = "192.168.1.39/asapespu/app/msj/cuentasuspendida.php";
     $url5 = "192.168.1.39/asapespu/app/msj/nomail.php";*/

     $us=$_POST["user"];                   
     $addsmail=$_POST["email"]; 

      
            $records = mysqli_query($connect, "select IDUSUARIO, AES_DECRYPT(CORREO, '123asd4') AS CORREO, IDESTADO from usuario where IDUSUARIO = '$us'");
            mysqli_data_seek($records,0); 
            $reg = mysqli_fetch_array($records);
            $usuario=$reg['IDUSUARIO'];
            $mailbd=$reg['CORREO'];
            
            $estadousuario=$reg['IDESTADO'];                 
            
             if($reg<>null){/*#2*/
                if ($usuario<>$us) {/*#3* AQUI VA EL CORREO*/
                    header('location: '.$url2);
         /*#3*/ }else{ /*#3*/

                    if ($estadousuario=='I') {/*#4*/
                        header('location: '.$url3);
                /*#4*/ } elseif ($estadousuario=='S') {/*#5*/
                        header('location: '.$url4);
                /*#5*/ }elseif ($estadousuario=='A') {/*#6*/ 

                        if($mailbd<>$addsmail){/*#7*/ 
                        /*header('location: '.$url5);*/echo "Correo data: ".$mailbd." Correo Formulario: ".$addsmail;
                   /*#7*/ }else{/*#7*/   
                    
echo "EN";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Solicitud enviada</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="login-page">
  <div class="form">
   <form class="login-form" action="index.php" method="POST">
      <P style="font-size:20px;">SU SOLICITUD FUE RECIBIDA Y SE LE ENVIARON LOS DATOS DE ACCESOS A SU BANDEJA DE ENTRADA</P><br>
      
      <button>Ingresar</button>
      <p class="message">¿Ya revise mi bandeja de entrada y la de no deseados, pero no veo el correo? <a href="#">reenviar</a></p>
    </form>
    <script src="/js/script.js"></script>
  </div>
</div>
</body>
</html>  
<?php 
                   /*#7*/}
                /*#6*/}
             /*#3*/ }
        /*#2*/}else {/*#2*/
                header('location: '.$url1);
        /*#2*/}


    /*#1*/}else{/*#1*/
               /*header('location: http://192.168.1.39/asapespu/app/index.php');*/
               header('location: '.$url0);
    /*#1*/}       
 ?>  
        

         
