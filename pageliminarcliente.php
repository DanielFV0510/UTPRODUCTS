<?php 

	$Consultacliente=Consultacliente($_GET['id']);
	
	function Consultacliente($id)
	{
		include 'connect_db.php';
		$sentencia="SELECT * FROM lista_usuarios WHERE id='".$id."'";
		$resultado= $mysqli->query($sentencia) or die ("Error al extraer los datos".mysqli_error($mysqli));
		$event= $resultado->fetch_assoc();
		
		return
		[
		$event['id'],
		$event['CodigoDoc'],
		$event['NomDoc'],
		$event['Contrasenia'],
		$event['Tipo_usuario'],
		$event['nomb_proyect'],
		];
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

<title>Eliminar cliente</title>
<link rel="icon" href="logos/logoico.ico">
<link rel="stylesheet" href="Estilos css/style.css">
<link rel="stylesheet" href="Estilos css/botones.css">
<link rel="stylesheet" href="Estilos css/form.css">
</head>

<body>

<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					Feria Tecnologica UTP
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						UTP - CHICLAYO
					</span>

					<div class="topbar-language rs1-select2">
					</div>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.html" class="logo">
					<img src="images/icons/logo.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01s.png" class="header-icon1" alt="ICON">
					</a>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
				</ul>
			</nav>
		</div>
</header>




	<section class="bgwhite p-t-66 p-b-60">
		<form action="eliminarcliente.php" method="post">
		<div class="container">
			<div class="row">

				<div class="col-md-6 p-b-30">
					<form class="leave-comment" action="eliminarcliente.php" method="post">
						<h4 class="m-text26 p-b-36 p-t-15">
							Eliminar Cliente
						</h4>
						<input type="hidden" name="id" id="id" value="<?php echo $Consultacliente [0]?>"/>
¿Está seguro de eliminar al cliente con codigo <b><i><?php echo  $Consultacliente [1]?></i></b>, pertenenciente a <b><i><?php echo  $Consultacliente [2]?></i></b> del proyecto <b><i><?php echo  $Consultacliente [5]?></i></b>, y TODOS SUS PRODUCTOS REGISTRADOS

						<div class="w-size25">
							<!-- Button -->
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4"  type="submit">
								Eliminar
							</button>


						</div>
					</form>
				</div>
			</div>
		</div>
	</form>
	</section>
