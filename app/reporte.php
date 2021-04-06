<?php
session_start();

if (!empty($_SESSION['GUSER'])) {/*#1*/
  if (!empty($_POST)) {
require('fpdf/fpdf.php');
require('db/conexion.php');

$fechainicio=$_POST["fechaini"];                   
$fechafinal=$_POST["fechafin"];
$tamhoja=$_POST["tamano"];
$tipoboleta='';
$tipoarchivo = $_POST["archivo"];

if (!empty($_POST["clasificacion"])) {
    
    if ($_POST["clasificacion"]=='T') {
          $aceptadas0='A';
          $aceptadas1='N';
          $aceptadas2='PA';
          $aceptadas3='PN';
    }else {
        $aceptadas0=$_POST["clasificacion"];
        $aceptadas1='';
        $aceptadas2='';
        $aceptadas3='';
    }
    }else{
        $aceptadas0='A';
        $aceptadas1='N';
        } 
$contador = 0;
 /* L:Horizontal y P:Vertical*/ /*pt:*/ /*letter y legal*/
$records = mysqli_query($connect, "select CODIGO, EXPEDIENTE, concat(PRIMER_NOMBRE,' ',SEGUNDO_NOMBRE,' ',PRIMER_APELLIDO,' ',SEGUNDO_APELLIDO) as NOMBRE, SUGERENCIA, FECHARECIBIDO from sugerencia_aceptada where FECHARECIBIDO between '$fechainicio' and '$fechafinal' and IDCLASIFICACION in('$aceptadas0','$aceptadas1','$aceptadas2','$aceptadas3') order by FECHARECIBIDO desc");

if ($tipoarchivo=='PDF') {

class PDF extends FPDF
{
   //Cabecera de página
   function Header()
  	{
   	$borde =0;
   	$interlineado=6;
    $tiempo = time();
    $fecha = date("d/m/y", $tiempo);
       $this->Image('logotipo.png',10,8,29);

      $this->SetFont('Arial','B',14);
      
      $this->Cell(0,$interlineado,utf8_decode('Asociación de Auxilio Póstumo del Empleado de Salud Pública'),$borde,1,'C');
      $this->Cell(0,$interlineado,'5ta. Calle 5-23 Zona 1, Guatemala - PBX. 2200-1515',$borde,1,'C');
      $this->SetFont('Arial','',12);
      $this->Cell(0,$interlineado,'www.asapespu.com',$borde,1,'C');
      $this->SetFont('Arial','',10);
      $this->Cell(0,$interlineado,' ',$borde,1,'C');
      $this->Cell(20,$interlineado,'Fecha: ',$borde,0,'C');
      $this->Cell(20,$interlineado,$fecha,$borde,1,'C');
      $this->SetFont('Arial','B',13);
      $this->Cell(0,$interlineado,'LISTADO DE BOLETAS DE SUGERENCIAS RECIBIDAS',$borde,1,'C');
      $this->Cell(0,$interlineado,' ',$borde,1,'C');
      $this->SetFont('Arial','B',14);
      $this->SetFillColor(232,232,232);
      $this->SetFont('Arial','B',10);
      $this->Cell(15,$interlineado,'#',1,0,'C',1);
      $this->Cell(20,$interlineado,'Fecha',1,0,'C',1);
      $this->Cell(20,$interlineado,'Codigo',1,0,'C',1);
      $this->Cell(20,$interlineado,'Expediente',1,0,'C',1);
      $this->Cell(70,$interlineado,'Nombre Completo',1,0,'C',1);
      $this->Cell(0,$interlineado,'Sugerencia',1,1,'C',1);
   }

   //pie de pagina
   function Footer()
	{

	$tiempo = time();

	$this->SetY(-15);
	$this->SetFont('Arial','',8);
	$this->Cell(0,5,'___________________________________________________________________________________________________',0,1,'C');
	$this->Cell(25,10,'Fecha: '.date("d/m/y", $tiempo),0,0,'L');
	$this->SetFont('Arial','I',10);
	$this->Cell(0,10,'comision.disciplina@asapespu.com '/*.$this->PageNo().'/{nb}'*/,0,0,'C');
	$this->SetFont('Arial','',8);
	$this->Cell(0,10,utf8_decode('Página ').$this->PageNo(),0,0,'R');
	   }
	} 

//Creación del objeto de la clase heredada
if ($tamhoja=='C') {
  $pdf=new PDF('L','mm','Letter');
}elseif ($tamhoja=='O') {
  $pdf=new PDF('L','mm','Legal');
}else{
   header('location: http://192.168.1.85/asapespu/app/reportes.php');
}


$pdf->AddPage();
$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Arial','',9);

while ($reg = mysqli_fetch_array($records)) {
  $contador++;
  $pdf->Cell(15,6,$contador,1,0,'C',1);
  $pdf->Cell(20,6,date('d/m/y', strtotime($reg['FECHARECIBIDO'])),1,0,'C',1);
  $pdf->Cell(20,6,$reg['CODIGO'],1,0,'C',1);
  $pdf->Cell(20,6,$reg['EXPEDIENTE'],1,0,'C',1);
  $pdf->Cell(70,6,utf8_decode($reg['NOMBRE']),1,0,'C',1);
  $pdf->MultiCell(0,6,utf8_decode($reg['SUGERENCIA']),1,1,'J',1);
}




mysqli_close($connect);
$pdf->Output();

}elseif ($tipoarchivo=='EXCEL') {
  
    header('Content-type: application/vnd.ms-excel; charset=utf-8');
    header('Content-Disposition: attachment; filename=reporte.xls');

    $row_ = mysqli_num_rows($records);

                         if ($row_ === 0) {

                            header('location: http://192.168.1.85/asapespu/app/reportes.php');

                            }else{
                                $contador = 0;
                            echo "<meta charset='UTF-8'>";
                             echo "<table border='1'>";
                             echo "<caption><h1>LISTADO DE BOLETAS DE SUGERENCIAS</h1></caption>";
                             echo "<tr>";
                                  echo "<th>#</th>";
                                     echo "<th>CODIGO</th>";
                                     echo "<th>EXPEDIENTE</th>";
                                     echo "<th>NOMBRE COMPLETO</th>";
                                     echo "<th>SUGERENCIA</th>";
                                     echo "<th>FECHA DE CREACION</th>";
                                 echo "</tr>";
                                
                           
                                 while (($reg = mysqli_fetch_array($records))){
                                    $contador++;
                                    echo "<tr>";
                                    echo "<th>".$contador."</th>";
                                    echo "<th>".$reg['CODIGO']."</th>";
                                    echo "<th>".$reg['EXPEDIENTE']."</th>";                                                    
                                    echo "<th>".$reg['NOMBRE']."</th>";
                                    echo "<th>".$reg['SUGERENCIA']."</th>";
                                    echo "<th>".date('d/m/y', strtotime($reg['FECHARECIBIDO']))."</th>";
                                    echo "</tr>";
                                    }
                                echo " </table>"; 

                            }

                          


}

}else{/*#1*/
               header('location: http://192.168.1.85/asapespu/app/reportes.php');
    /*#1*/}

}else{/*#1*/
               header('location: http://192.168.1.85/asapespu/app/index.php');
    /*#1*/}
?>