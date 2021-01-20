<!DOCTYPE html>
<html lang="Es">
	<head>
		<meta charset="utf-8"/>
		<title>Asociación de Auxilio Póstumo del Empleado de Salud Pública - ASAPESPU</title>
		<link rel="stylesheet" href="css/contquestions.css">
		<?php include 'inc/header-common.php'; ?>

</head>

<body id="preguntas">
<div class="rescontainer">
	<div class="hidcontainer">
	
			<!--	-ENCABEZADO	Y MENU	-->
				<?php include 'inc/header.php'; ?>
			<!-- 	-CONTENIDO- 	-->
			<div class="full__width_Q obj_center_Q med_width_Q"><h1>BOLETA DE SUGERENCIA</h1></div>						
				<div id="formulario" class="obj_center_Q med_width_Q">
					<hr>
				 	<h1>ENVIO</h1>
					<form action="respuesta.php" method="POST" style="width:90%;"> 
						
						<div class="espacio_campos">
							<p class="texto"><i class="asterisco">*</i>Código :</p>
							<input class="campo" id="codigo" type="text" name="codigo" placeholder="Ingrese su código"  required>
						</div>

						<div class="espacio_campos">		
							<p class="texto">Expediente:</p><br>
							<input class="campo" id="expediente" type="text" name="expediente" placeholder="Ingrese su expediente">
						</div>

						<div class="espacio_campos">
						<p><i class="asterisco">*</i>Primer Nombre: </p>
						<input class="campo" id="nombre1" type="text" name="nombre1" placeholder="Ingrese primer nombre" required>
						</div>

						<div class="espacio_campos">
						<p>Segundo Nombre:</p>
						<input class="campo" id="nombre2" type="text" name="nombre2" placeholder="Ingrese segundo nombre" >
						</div>

						<div class="espacio_campos">
						<p><i class="asterisco">*</i>Primer Apellido:</p>
						<input class="campo" id="apellido1" type="text" name="apellido1" placeholder="Ingrese primer apellido" required>
						</div>

						<div class="espacio_campos">
						<p>Segundo Apellido:</p>
						<input class="campo" id="apellido2" type="text" name="apellido2" placeholder="Ingrese segundo apellido">
						</div>

						<div class="espacio_campos">
						<p><i class="asterisco">*</i>DPI:</p>
						<input class="campo" id="dpi" type="text" name="dpi" placeholder="Ingrese su DPI" required>	
						</div>

						<div class="espacio_campos">
						<p>Correo electrónico:</p>
						<input class="campo" id="correo" type="text" name="correo" placeholder="Ingrese su correo electrónico">		
						</div>

						<div class="espacio_campos">
						<p>Sexo:</p>
								<select class="campo" name="sexo[]">
								  <option value="M">Masculino</option>
								  <option value="F">Femenino</option>
								</select>  						
						</div>

						<div class="espacio_campos">
						<p>Teléfono:</p>
						<input class="campo" id="telefono" type="text" name="telefono" placeholder="Ingrese su número de teléfono">		
						</div>

						<div class="espacio_campos">
						<p><i class="asterisco">*</i>Tipo de Asociado:</p>
								<select  class="campo" name="asociado">
								  <option value="101">Act. Laborante-Presupuestado</option>
								  <option value="102">Act. Laborante-Contrato</option>
								  <option value="103">Act. Laborante-Planilla</option>
								  <option value="201">Act. Optativo-Jubilado</option>
								  <option value="202">Act. Optativo-Exsalubrista</option>
								  <option value="203">Act. Optativo-Conyuge</option>
								  <option value="204">Act. Optativo-Hijo</option>
								  <option value="206">Act. Optativo-Otras Dependencias</option>
								  <option value="205">Act. Optativo-Planta Adtva. </option>
								</select>
  						</div> 

  						<div class="espacio_textarea">
  						<p><i class="asterisco">*</i>Prefesión ú Oficio:</p>
						<input class="campo" id="profesion" type="text" name="profesion" placeholder="Ingrese su profesión" required>	
						</div>
					
						<div class="espacio_textarea">
						<p>Dirección para Notificaiones:</p>
						<input class="campo" id="direccion" type="text" name="direccion" placeholder="Ingrese su dirección">
						</div>
		
  						<div class="espacio_textarea">
  						<p><i class="asterisco">*</i>Sugerencia y/o Comentario:</p>
						<textarea class="campotextarea" rows="6" id="sugerencia" name="sugerencia" placeholder="Ingrese su sugerencia y/o comentario" required=""></textarea>
						<p class="anotacion">Todos los campos con asterico (*) son obligatorios.</p>
						</div>
						
						<div class="espacio_textarea">
						<input style="margin-left: 5px;" id="boton" type="submit" value="Verificar"><br>
						
						
						</div>
						
					</form>
				</div>
			</div>	
				
			<!-- 	-FOOTER- 	-->	
			<?php include 'inc/footer.php'; ?>
			<?php include 'inc/footer-common.php'; ?>
	</div>
</div>
</body>
</html>