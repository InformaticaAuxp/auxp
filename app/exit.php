<?php 
	session_start();
	session_destroy();
	header('location: http://192.168.1.85/asapespu/app/');
	/*header('location: https://asapespu.com/app/');*/
 ?>