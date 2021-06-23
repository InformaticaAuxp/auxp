<?php
    include("../db/conexion.php");
    $id_departamento=intval($_REQUEST['id_departamento']);
    $municipios = $conn->prepare("SELECT * FROM municipio WHERE IDDEPARTAMENTO = '$id_departamento'") or die(mysqli_error());
    echo '<option value = "">Selecciona un municipio  </option>';
    if($municipios->execute())
    {
        $a_result = $municipios->get_result();
    }
    while($row = $a_result->fetch_array())
    {
        echo "";
        echo '<option value = "'.$row['IDMUNICIPIO'].'">'.utf8_encode( $row['NOMBRE']).'</option>';
    }
    ?>