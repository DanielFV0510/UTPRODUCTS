<?php

       session_start();
       if(!isset($_SESSION["nombre"])){
            header ("location:acceso.php");
           }





	$foto1=addslashes(file_get_contents($_FILES['foto1']['tmp_name']));
	$foto2=addslashes(file_get_contents($_FILES['foto2']['tmp_name']));
	$foto3=addslashes(file_get_contents($_FILES['foto3']['tmp_name']));
 	$nombprod=$_POST['nombprod'];
 	$Precio=$_POST['Precio'];
 	$descripcion=$_POST['descripcion'];
 	$f360=$_POST['f360'];


 include 'connect_db.php';
	 $sentencia= 
	 "INSERT INTO lista_productos(
			 foto1,
 			 foto2,
 			 foto3,
			 nombprod,
			 Precio,
			 descripcion,
			 nomproy,
			 LINK
		) VALUES (

			'$foto1',
			'$foto2',
			'$foto3',
			'".$nombprod."',
			'".$Precio."',
			'".$descripcion."',
			'".$_SESSION['id']."',
			'".$f360."'
	)"
	;
	 $mysqli->query($sentencia)or die("Error Inesperado ".mysqli_error($mysqli));


?>
<script>
alert("Guardado con Exito");
window.location.href='client.php';
</script>


