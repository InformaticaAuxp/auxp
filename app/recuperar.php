<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Recuperar Contraseña</title>
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
    <form class="login-form" action="solicitudrecuperar.php" method="POST">
      <P style="font-size:20px;">Recuperar Contraseña</P><br>
      <input type="text" placeholder="Usuario" name="user" required  />
      <input type="text" placeholder="Correo Electrónico" name="email" required />
      <button>Solicitar</button>
      <p class="message">Al presionar "Solicitar" Se enviara de forma automática un correo electrónico, conteniendo las credenciales registradas. <br> <a href="index.php">Ingresar</a></p>
    </form>
    <script src="js/script.js"></script>
  </div>
</div>
</body>
</html>