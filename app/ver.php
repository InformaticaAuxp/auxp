<?php
require_once ('db/dbcon.php');

$sql = "select IDSUGERENCIA,CODIGO, EXPEDIENTE, concat(PRIMER_NOMBRE,' ',SEGUNDO_NOMBRE,' ',PRIMER_APELLIDO,' ',SEGUNDO_APELLIDO) as NOMBRE, SUGERENCIA, FECHARECIBIDO, OBSERVACION_COMISION, RESPUESTA_GERENCIA from sugerencia_aceptada order by IDSUGERENCIA desc";
$query = $con->query($sql);
if ($query->num_rows >0){
    $output="";
    $output .="
    <table class='table table-hover table-striped'>
    <thead>
    <tr>
    <th>ID Sugerencia</th>
    <th>CODIGO</th>
    <th>EXPEDIENTE</th>
    <th>NOMBRE</th>
    <th>SUGERENCIA</th>
    <th>FECHARECIBIDO</th>
    <th>OBSERVACION COMISION</th>
    <th>RESPUESTA GERENCIA</th>
    <th>EDITAR</th>
    </tr>
    </thead>";
while ($reg=$query->fetch_array()){
    $output.="<tbody>
    <tr>
    <td>{$reg['IDSUGERENCIA']}</td>
    <td>{$reg['CODIGO']}</td>
    <td>{$reg['EXPEDIENTE']}</td>
    <td>{$reg['NOMBRE']}</td>
    <td>{$reg['SUGERENCIA']}</td>
    <td>{$reg['FECHARECIBIDO']}</td>
    <td>{$reg['OBSERVACION_COMISION']}</td>
    <td>{$reg['RESPUESTA_GERENCIA']}</td>
	<td><button class='btn btn-success btn-sm editar-btn' data-id='{$reg['IDSUGERENCIA']}' data-toggle='modal' data-target='#exampleModal'>Editar</button></td>   
</tr>
</tbody>";
}
$output .="</table>";
echo $output;
} else{
    echo"<h5>NINGÚN REGISTRO FUE ENCONTRADO</h5>";
}

?>