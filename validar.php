
<?php

//session_start();

	require("connect_db.php");

$codigo=$_POST['codigo'];
$password=$_POST['password'];

	$sql=mysqli_query($mysqli,"SELECT * FROM lista_usuarios WHERE CodigoDoc='$codigo' and Contrasenia='$password'");
	

	if($f=mysqli_fetch_array($sql)){
			session_start();
			$_SESSION['id']=$f['id'];
			$_SESSION['nombre']=$f['NomDoc'];
			$_SESSION['Tipo_usuario']=$f['Tipo_usuario'];
			$_SESSION['nomb_proyect']=$f['nomb_proyect'];
			//echo $_SESSION['Tipo_usuario'];
			//header("Location: paginaprincipaladmin.php");
			
		if($_SESSION['Tipo_usuario']=='Administrador'){
			session_start();
			header("Location: admin.php");
		} else {
			if($_SESSION['Tipo_usuario']=='Secretario'){
				session_start();
				header("Location: secret.php");
			} else {
				if($_SESSION['Tipo_usuario']=='Cliente'){
					session_start();
					header("Location: client.php");
				} else {
					echo '<script>alert("Usuario Restringido")</script> ';
					echo "<script>location.href='acceso.php'</script>";
				}	
			}
		}
			
	} else {
		echo '<script>alert("DATOS ERRONES O ALGUN CAMPO VACIO")</script> ';
		echo "<script>location.href='acceso.php'</script>";
	}
	
	

	

?>