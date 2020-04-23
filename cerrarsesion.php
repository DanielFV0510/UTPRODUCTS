<?php 
session_start();
session_unset();
session_destroy();

echo '<script>alert("Se cerró sesión con exito")</script> ';
	header("location:index.php");
// cerramos sesion
?>