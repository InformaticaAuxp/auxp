<?php 
     $host="localhost";
     $user="root";/*"asapespu_boleta";*/
     $pass="";/*"9Ku#{KywWC58";*/
     $name="boleta_sugerencia";/*"asapespu_boleta_sugerencia";*/
     $port=3306;

     $connect = mysqli_connect($host, $user, $pass, $name, $port);
     mysqli_select_db($connect, $name);


    $conn = new mysqli('localhost', 'root', '', 'boleta_sugerencia') or die(mysqli_error());
        $url0 = "http://localhost/asapespu/app/";/*"https://asapespu.com/app/";*/
        $url1 = $url0."msj/nocuenta.php";
        $url2 = $url0."msj/novalido.php";
        $url3 = $url0."msj/cuentainactiva.php";
        $url4 = $url0."msj/cuentasuspendida.php";
        $url5 = $url0."msj/nomail.php";
 ?>