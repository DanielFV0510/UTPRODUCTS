<!DOCTYPE html>
<html lang="en">
<head>
	<title>Nuevo Vendedor</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
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
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script type="text/javascript" src="js/function.js"></script>
<!--===============================================================================================-->
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
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
					CLUSTORE - TIENDA VIRTUAL
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						CHICLAYO
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

	<!-- Title Page -->


	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">

				<div class="col-md-6 p-b-30">
					<form class="leave-comment" action="nuevocliente.php" method="post" enctype="multipart/form-data">
						<h4 class="m-text26 p-b-36 p-t-15">
							Nuevo Vendedor
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="file" required id="logo" name="logo" onchange="return image()">
						</div>						

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" required id="nomb_proyect"  name="nomb_proyect" placeholder="Nombre Empresa" maxlength="30" onpaste="return false">
						</div>		

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" required id="descripcion"  name="descripcion" placeholder="Descripcion de la empresa (MAX:150 caracteres)" maxlength="150" onpaste="return false"></textarea>
						
						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" required id="direccion"  name="direccion" placeholder="Direccion de la empresa (MAX:30 caracteres)" maxlength="30" onpaste="return false"></textarea>
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" required id="ruc"  name="ruc" placeholder="RUC" maxlength="15" onpaste="return false">
						</div>


						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" required id="whatsapp"  name="whatsapp" placeholder="Whatsapp Empresa" maxlength="15" onpaste="return false">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" required id="nomapecomp"  name="nomapecomp" placeholder="Apellidos y Nombres del responsable " maxlength="50" onpaste="return false">
						</div>

						
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" required id="dni"  name="dni" placeholder="DNI" maxlength="15" onpaste="return false">
						</div>

						
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" required id="telfcont"  name="telfcont" placeholder="Telefono de contacto" maxlength="15" onpaste="return false">
						</div>



						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" required id="codigo" name="codigo" placeholder="Usuario" maxlength="6" onpaste="return false">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" required id="contrasenia"  name="contrasenia" placeholder="Contraseña" maxlength="10" onpaste="return false">
						</div>	

						Tipo de Paquete
						<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
							<select class="selection-2" required name="paquete" id="paquete">
								<?php 
									require('connect_db.php');
									$query = "select * from paquetes ";
									$result= mysqli_query($mysqli,"select * from paquetes");
									while ($event= mysqli_fetch_array($result)){ ?>

								<option><?php echo $event['NombPaq']; }?></option>								
			 				</select>
						</div>

						Condicion
						<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
							<select class="selection-2" required name="condicion" id="condicion">
								<?php 
									require('connect_db.php');
									$query = "select * from condicionemp ";
									$result= mysqli_query($mysqli,"select * from condicionemp");
									while ($event= mysqli_fetch_array($result)){ ?>

								<option><?php echo $event['nombcond']; }?></option>								
			 				</select>
						</div>






						<div class="w-size25">
							<!-- Button -->
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4"  type="submit">
								Guardar
							</button>


						</div>
					</form>
				</div>
			</div>
		</div>
	</section>



</body>
</html>




