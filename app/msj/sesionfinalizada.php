<?php 
  session_start();
  session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sesión Finalizada</title>
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body>
	<div class="login-page">
  <div class="form">
    <form class="login-form" action="../index.php" method="POST">
      <P style="font-size:20px;">POR SEGURIDAD LA SESIÓN A SIDO FINALIZADA, VUELVA A ACCEDER PARA CONTINUAR.</P><br>
      
      <button>Acceder de Nuevo</button>
      <p class="message">Todos los cambios que se hayan realizado sin guardar, no estaran disponibles al ingresar de nuevo.</p>
    </form>
    <script src="/js/script.js"></script>
  </div>
</div>
</body>
</html>