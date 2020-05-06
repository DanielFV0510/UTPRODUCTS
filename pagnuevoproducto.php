<!DOCTYPE html>
<html lang="en">
<head>
	<title>Nuevo Producto</title>
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
	<script type="text/javascript" src="js/function.js"></script>
	<script language="javascript" src="js/jquery-1.7.2.min.js"></script>
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
					CLUSTORE
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						TIENDA VIRTUAL
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

				<div class="col-md-6 p-b-30" id="col-md-6 p-b-30">
					<form class="leave-comment" action="nuevoproducto.php" method="post" enctype="multipart/form-data">
						<h4 class="m-text26 p-b-36 p-t-15">
							Nuevo Producto
						</h4>

							FOTO 1
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="file" required id="foto1" name="foto1" placeholder="FOTO - 1" onchange="return si1()">
						</div>

							FOTO 2
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="file" required  id="foto2" name="foto2" placeholder="FOTO - 2" onchange="return si2()">
						</div>

							NOMBRE DEL PRODUCTO
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" required id="nombprod"  name="nombprod" placeholder="Nombre del Producto (MAX: 50 CARACTERES)" maxlength="50" onpaste="return false" onkeypress="return lyn(event)" >
						</div>

							PRECIO
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" id="Precio" required  name="Precio" placeholder="Precio (ejm: 1.50 25.00)" maxlength="5" onpaste="return false" onkeypress="return sn(event)">
						</div>

							DESCRIPCION DEL PRODUCTO
						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" required id="descripcion"  name="descripcion" placeholder="Descripcion del proyecto (MAX:190 caracteres)" maxlength="190" onpaste="return false" onkeypress="return numerosyletras(event)"></textarea>


							CATEGORIA 1
									
						<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
							<select class="selection-2" required name="categ1" id="categ1">
								<?php 
									require('connect_db.php');
									$query = "select * from categoria ";
									$result= mysqli_query($mysqli,"select * from categoria");
									while ($event= mysqli_fetch_array($result)){ ?>

								<option><?php echo $event['nombcateg']; }?></option>								
			 				</select>
						</div>


							CATEGORIA 2
									
						<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
							<select class="selection-2" required name="categ2" id="categ2">
								<?php 
									require('connect_db.php');
									$query = "select * from categoria ";
									$result= mysqli_query($mysqli,"select * from categoria");
									while ($event= mysqli_fetch_array($result)){ ?>

								<option><?php echo $event['nombcateg']; }?></option>								
			 				</select>
						</div>

							ESTADO
									
						<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
							<select class="selection-2" required name="estado" id="estado">
								<?php 
									require('connect_db.php');
									$query = "select * from condicion ";
									$result= mysqli_query($mysqli,"select * from condicion");
									while ($event= mysqli_fetch_array($result)){ ?>

								<option><?php echo $event['condicion']; }?></option>								
			 				</select>
						</div>



							CODIGO PRODUCTO
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" id="codprod" required name="codprod" placeholder="Codigo de barras del producto" maxlength="25" onpaste="return false" onkeypress="return lyn(event)">
						</div>


							CODIGO 360°
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" id="f360"  name="f360" placeholder="Codigo proporcionado por CLUSTORE dependiendo del paquete contratado" maxlength="25" onpaste="return false" onkeypress="return lyn(event)">
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



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="js/function.js"></script>
<!--===============================================================================================-->

<!--===============================================================================================-->

<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/select2/select2.min.js"></script>

</body>
</html>

