<?php



$id=$_POST['id'];
include 'connect_db.php';
$sentencia="DELETE FROM lista_usuarios WHERE id=".$id;
$mysqli->query($sentencia) or die ("Error al eliminar los datos".mysqli_error($mysqli));

$sentencib="DELETE FROM lista_productos WHERE nomproy=".$id;
$mysqli->query($sentencib) or die ("Error al eliminar los datos".mysqli_error($mysqli));


?>
<script>
alert("Eliminado con Exito");
window.location.href='admin.php';
</script>