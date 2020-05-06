<?php



$id=$_POST['id'];
include 'connect_db.php';
$sentencia="DELETE FROM lista_productos WHERE id=".$id;
$mysqli->query($sentencia) or die ("Error al eliminar los datos".mysqli_error($mysqli));


?>
<script>
alert("Eliminado con Exito");
</script>


<?php
session_start();

		if($_SESSION['Tipo_usuario']=='Administrador'){
			//session_start();
			?>
			<script>
			window.location.href='listproducts.php';
			</script>
			<?php
		}



		if($_SESSION['Tipo_usuario']=='Cliente'){
			//session_start();
			?>
			<script>
			window.location.href='client.php';
			</script>
			<?php
		}
?>