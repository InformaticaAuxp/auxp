<?php 
set_time_limit(60*90);
$host="localhost";
$user="root";//"asapespu_coment";
$pass="";//"-b^6H1k52iRy";
$name="boleta_sugerencia";
$port=3306;
$connect = mysqli_connect($host, $user, $pass, $name, $port);

$filas=file('archivo_datos.txt');
	echo 'Cargando...';
foreach($filas as $key=>$value){
list($codigo, $expediente, $nombre1, $nombre2, $apellido1, $apellido2, $dpi, $correo, $tipoasociado, $estado) = explode("|", $value);


$query = "INSERT INTO registro_local (CODIGO, EXPEDIENTE, PRIMER_NOMBRE, SEGUNDO_NOMBRE, PRIMER_APELLIDO, SEGUNDO_APELLIDO, DPI, CORREO, IDTIPOASOCIADO, IDESTADO) VALUES('$codigo', '$expediente', '$nombre1', '$nombre2', '$apellido1','$apellido2','$dpi','$correo','$tipoasociado','$estado')";
mysqli_query($connect, $query);



/*
if ($codigo==25000){

echo 'Codigo: '.$codigo.' <br>';
echo 'Expediente: '.$expediente.' <br>';
echo 'Primer Nombre: '.$nombre1.' <br>';
echo 'Segundo Nombre: '.$nombre2.' <br>';
echo 'Primer Apellido: '.$apellido1.' <br>';
echo 'Segundo Apellido: '.$apellido2.'<br/>';

} 
*/
}

?>