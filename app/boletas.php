<?php 
session_start();

if (!empty($_SESSION['GUSER'])) {/*#1*/
$nombre =  $_SESSION['GNOMBRE'];
$tipousuario = $_SESSION['GTUSUARIO'];//VALIDAR TIPOS DE USUARIO


?>

<html>
  <head>
    <title>Consulta</title>
    <link rel="stylesheet" href="css/dashboard.css">
     <link rel="stylesheet" href="css/posiciones.css">
    <script src="js/scrip.js"></script>
  </head>
  <body><div class="area">

        <div class="padre">
            <div class="hijo">
                
                <form action="db/insert.php" method="POST"> 
                 <p class="anotacion">Todos los campos con asterico (*) son obligatorios.</p>
                 <div class="filt">
                        <input style="margin-left: 5px;" id="boton" type="submit" value="Guardar"><br>
                 </div>
                 <div class="filt">       
                        <div class="filt">
                            <p class="texto"><i class="asterisco">*</i>Código :</p>
                            <input class="campo" id="codigo" type="text" name="codigo" placeholder="Ingrese su código"  required>
                        </div>

                        <div class="filt">        
                            <p class="texto">Expediente:</p>
                            <input class="campo" id="expediente" type="text" name="expediente" placeholder="Ingrese su expediente">
                        </div>

                        <div class="filt">
                        <p><i class="asterisco">*</i>Primer Nombre: </p>
                        <input class="campo" id="nombre1" type="text" name="nombre1" placeholder="Ingrese primer nombre" required>
                        </div>

                        <div class="filt">
                        <p>Segundo Nombre:</p>
                        <input class="campo" id="nombre2" type="text" name="nombre2" placeholder="Ingrese segundo nombre" >
                        </div>

                        <div class="filt">
                        <p><i class="asterisco">*</i>Primer Apellido:</p>
                        <input class="campo" id="apellido1" type="text" name="apellido1" placeholder="Ingrese primer apellido" required>
                        </div>

                        <div class="filt">
                        <p>Segundo Apellido:</p>
                        <input class="campo" id="apellido2" type="text" name="apellido2" placeholder="Ingrese segundo apellido">
                        </div>

                        <div class="filt">
                        <p><i class="asterisco">*</i>DPI:</p>
                        <input class="campo" id="dpi" type="text" name="dpi" placeholder="Ingrese su DPI" required> 
                        </div>
                </div>
                <div class="filt">
                        <div class="filt">
                        <p>Correo electrónico:</p>
                        <input class="campo" id="correo" type="text" name="correo" placeholder="Ingrese su correo electrónico">     
                        </div>

                        <div class="filt">
                        <p>Sexo:</p>
                                <select class="campo" name="sexo[]">
                                  <option value="M">Masculino</option>
                                  <option value="F">Femenino</option>
                                </select>                       
                        </div>

                        <div class="filt">
                        <p>Teléfono:</p>
                        <input class="campo" id="telefono" type="text" name="telefono" placeholder="Ingrese su número de teléfono">     
                        </div>

                        <div class="filt">
                        <p><i class="asterisco">*</i>Tipo de Asociado:</p>
                                <select  class="campo" name="asociado">
                                  <option value="101">Presupuestado</option>
                                  <option value="102">Contrato</option>
                                  <option value="103">Planilla</option>
                                  <option value="201">Jubilado</option>
                                  <option value="202">Exsalubrista</option>
                                  <option value="203">Optativo-Conyuge</option>
                                  <option value="204">Optativo-Hijo</option>
                                  <option value="206">Optativo-Otras Dependencias</option>
                                  <option value="205">Optativo-Planta Adtva. </option>
                                </select>
                        </div> 

                        <div class="filt">
                        <p><i class="asterisco">*</i>Prefesión ú Oficio:</p>
                        <input class="campo" id="profesion" type="text" name="profesion" placeholder="Ingrese su profesión" required>   
                        </div>
                    
                        <div class="filt">
                        <p>Dirección para Notificaiones:</p>
                        <input class="campo" id="direccion" type="text" name="direccion" placeholder="Ingrese su dirección">
                        </div>
        
                        <div class="filt">
                        <p><i class="asterisco">*</i>Sugerencia y/o Comentario:</p>
                        <textarea class="campotextarea" rows="6" id="sugerencia" name="sugerencia" placeholder="Ingrese su sugerencia y/o comentario" required=""></textarea>
                        
                        </div>
                </div>
                    </form>
            </div>
            
        </div>


        </div>
        <?php include 'inc/menu.php' ?>
  </body>
    </html>            

<?php          

/*#1*/}else{/*#1*/
               header('location: http://localhost/asapespu/app/index.php');
    /*#1*/}       
 ?>

