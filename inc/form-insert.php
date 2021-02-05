<?php 
/*
$host="localhost";
$user="root";
$pass="";
$name="asapespu_preguntas";
*/

$host="localhost";
$user="root";//"asapespu_coment";
$pass="";//"-b^6H1k52iRy";
$name="asapespu_web";
$port=3306;
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
$tiempo = time();

//MAIL
$para = 'webmaster@asapespu.com';
$titulo = 'Mensaje Enviado Desde Pagina Web';
$contenido = 'Nombre: '.$nombre."\r\n".'Asunto: '.$asunto."\r\n".'Correo: '.$correo."\r\n".'Mensaje: '.$mensaje;
$cabecera = 'Para: webmaster@asapespu.com'."\r\n".'X-Mailer: PHP'.phpversion();

mail($para, $titulo, $contenido, $cabecera);


$connect = mysqli_connect($host, $user, $pass, $name, $port);
$query = "INSERT INTO consultas (nombre,asunto,correo,mensaje,fecha_h) values('$nombre', '$asunto', '$correo', '$mensaje', '$tiempo')";
mysqli_query($connect, $query);

header('Location: http://www.asapespu.com/preguntas.php');

?>

