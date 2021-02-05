<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio de Sesión</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<div class="login-page">
  <div class="form">
    <!--<form class="register-form">
      <input type="text" placeholder="nombre"/>
       <input type="password" placeholder="password"/> 
      <input type="text" placeholder="Correo Electrónico"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>-->
    <form class="login-form" action="validacion.php" method="POST">
      <P style="font-size:20px;">Sistema de Administración para Boletas de Sugerencias</P><br>
      <input type="text" placeholder="Usuario" name="user" required  />
      <input type="password" placeholder="Contraseña" name="pass" required />
      <button>Ingresar</button>
      <p class="message">¿olvide mi contraseña? <a href="https://asapespu.com/app/recuperar.php">recuperar contraseña</a></p>
    </form>
    <script src="js/script.js"></script>
  </div>
</div>
</body>
</html>