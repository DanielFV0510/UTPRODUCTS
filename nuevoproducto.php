<?php

       session_start();
	   $limiteProductos=verificarCantidadproductos();
       if(!isset($_SESSION["nombre"]) ){
            header ("location:acceso.php");
           }

				if ($limiteProductos===false) {
						
					
						$foto1 = $_FILES['foto1'];
						$foto2 = $_FILES['foto2'];
						$rutafoto1 = insertarArchivo($foto1,'f_1_');
						$rutafoto2 = insertarArchivo($foto2,'f_2_');
					

						$nombprod=$_POST['nombprod'];
						$Precio=$_POST['Precio'];
						$descripcion=$_POST['descripcion'];
						$categ1=$_POST['categ1'];
						$categ2=$_POST['categ2'];
						$estado=$_POST['estado'];
						$codprod=$_POST['codprod'];
						$f360=$_POST['f360'];
						include 'connect_db.php';
						$sentencia= 
						"INSERT INTO lista_productos(
								fotoruta1,
								fotoruta2,
								nombprod,
								Precio,
								descripcion,
								categ1,
								categ2,
								estado,
								codprod,
								nomproy,
								LINK
							) VALUES (

								'".$rutafoto1."',
								'".$rutafoto2."',
								'".$nombprod."',
								'".$Precio."',
								'".$descripcion."',
								'".$categ1."',
								'".$categ2."',
								'".$estado."',
								'".$codprod."',
								'".$_SESSION['id']."',
								'".$f360."'
						)"
						;
						$mysqli->query($sentencia)or die("Error Inesperado ".mysqli_error($mysqli));
						
}else{
						echo '<script>
						// alert("Has alcanzado el limite de cantidad de productos");
						// window.location.href="client.php";
						</script>';
}
function insertarArchivo($imagen,$numbername) {
	// if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload') {
		if (isset($imagen) && $imagen['error'] === UPLOAD_ERR_OK) {
			$fileTmpPath =$imagen['tmp_name'];
			$fileName = $imagen['name'];
			$fileSize = $imagen['size'];
			$fileType =$imagen['type'];
			$fileNameCmps = explode(".", $fileName);
			$fileExtension = strtolower(end($fileNameCmps));
			$numRandom= rand(1,1000);
			$imagen['name']=$imagen['name'].$numbername.$numRandom;

			//    $newFileName =$codigoSKU;
			$allowedfileExtensions = array('jpg','JPG','PNG', 'png');
			$directorio = 'images/Product/';
			if(!is_dir($directorio)){
				mkdir($directorio,0777,true);
			 }
			 $tamaño_max="500000000"; // Tamaño maximo permitido 
			if( $fileSize < $tamaño_max){
				$uploadFileDir = 'images/Product/';
				$dest_path = $uploadFileDir . $imagen['name'].'.'.$fileExtension;
				$ruta='images/Product/'. $imagen['name'].'.'.$fileExtension;
				
				if (move_uploaded_file($fileTmpPath,$dest_path)) {
					//echo 'File is successfully uploaded.';
					return  $ruta;
				} else {
					echo'Error subiendo el archivo';
				 }
				 
		}else{
			echo "Excedió el tamaño";
		}
	 }}
	 function verificarCantidadproductos(){
		 
		 include_once 'includes/productos.php';
		 //Cantidad de productos/ activar filtro por categoria/ id de la categoria
		 
		$productos = new Productos(null,null,null);	
		$tipopaquete=$_SESSION['tipopack'];
		$idtienda=$_SESSION['id'];
		$cantMax= $productos->cantMaxProducts($tipopaquete);
		$cantProducts= $productos->cantProducts($idtienda);
		$limiteAlcanzado=false;
		if($cantMax['cantmaxprod']===$cantProducts['cantidadProductos']){
			$limiteAlcanzado=true;
		 }
		 return $limiteAlcanzado;
	 // var_dump($limiteAlcanzado);
	 // var_dump($cantMax);
	 // var_dump($cantProducts);
		 // die();
	 }

?>
<script>
alert("Guardado con Exito");
window.location.href='client.php';
</script>


