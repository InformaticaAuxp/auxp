<?php 
	session_start();
	session_destroy();
	header('location: http://localhost/asapespu/app/');
	/*header('location: https://asapespu.com/app/');*/
 ?>