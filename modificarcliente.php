<?php



$id=$_POST['id'];
$codigo=$_POST['codigo'];
$nomapecomp=$_POST['nomapecomp'];
$contrasenia=$_POST['contrasenia'];
$nomb_proyect=$_POST['nomb_proyect'];
$descripcion=$_POST['descripcion'];

include 'connect_db.php';
$sentencia="UPDATE lista_usuarios
 SET 
 CodigoDoc='".$codigo."',
 NomDoc='".$nomapecomp."',
 Contrasenia='".$contrasenia."',
 nomb_proyect='".$nomb_proyect."',
 descripcion='".$descripcion."'

 WHERE id='".$id."'";
$mysqli->query($sentencia) or die ("Error al modificar los datos".mysqli_error($mysqli));


?>
<script>
alert("Modificado con Exito");
window.location.href='admin.php';
</script>