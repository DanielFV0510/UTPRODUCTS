

<?php

 nuevousuario(
	addslashes(file_get_contents($_FILES['logo']['tmp_name'])),
	 	$_POST['nomb_proyect'],
		$_POST['descripcion'],
		$_POST['direccion'],
		$_POST['ruc'],
		$_POST['whatsapp'],
		$_POST['nomapecomp'],
		$_POST['dni'],
		$_POST['telfcont'],
		$_POST['codigo'],
		$_POST['contrasenia'],
		$_POST['paquete'],
		$_POST['condicion']
	 
 	
 );
 

 function nuevousuario($logo,$nomb_proyect,$descripcion,$direccion,$ruc,$whatsapp,$nomapecomp,$dni,$telfcont,$codigo,$contrasenia,$paquete,$condicion)

 //function nuevousuario($codigo,$nomapecomp,$contrasenia,$nomb_proyect,$whatsapp,$logo,$descripcion)
 {

	include 'connect_db.php';
	$connect=mysqli_connect("localhost", "root","", "acceso");
	$conrep="SELECT * FROM lista_usuarios WHERE CodigoDoc='$codigo'";
	$result=mysqli_query($connect,$conrep);

	$fil=mysqli_num_rows($result);

	if($fil>0){
		?>
		<script>
alert("El codigo del usuario ya existe, por favor agregar otro codigo");
window.location.href='pagnuevocliente.php';
</script>
		<?php
		die();
	}


	include 'connect_db.php';
	 $sentencia= 
	 "INSERT INTO lista_usuarios(

			 CodigoDoc, 
			 NomDoc,
			 Contrasenia,
			 Tipo_usuario,
			 nomb_proyect,
			 whatsapp,
			 logo,
			 descripcion,
			 direccion,
			 ruc,
			 dni,
			 telefresp,
			 tipopack,
			 condicion 
		) VALUES (

			'".$codigo."',
			'".$nomapecomp."',
			'".$contrasenia."',
			'Cliente',
			'".$nomb_proyect."',
			'".$whatsapp."',
			'$logo',
			'".$descripcion."',
			'".$direccion."',
			'".$ruc."',
			'".$dni."',
			'".$telfcont."',
			'".$paquete."',
			'".$condicion."'
	)";
	 $mysqli->query($sentencia)or die("Error Inesperado ".mysqli_error($mysqli));


?>
<script>
alert("Guardado con Exito");
window.location.href='admin.php';
</script>
<?php 

}
?>