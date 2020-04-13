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
		$event['logo'],
    $event['whatsapp'],
		$event['descripcion']
		];
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modificar Cliente</title>

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
<!--===============================================================================================-->


</head>

<body>



<body class="animsition" >




  <header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header">
      <div class="topbar">
        <div class="topbar-social">
          <a href="#" class="topbar-social-item fa fa-facebook"></a>
          <a href="#" class="topbar-social-item fa fa-instagram"></a>
          <!-- <a href="#" class="topbar-social-item fa fa-pinterest-p"></a> -->
          <!-- <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a> -->
          <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
        </div>

        <span class="topbar-child1">
                  <?php
        session_start();
        if(!isset($_SESSION["nombre"])){
            header ("location:acceso.php");
            }
         echo $_SESSION['Tipo_usuario'];
         echo ':';
         echo ' ';
        ?>
        </b>
        <i>
        <?php
         echo $_SESSION['nombre'];
         echo ' ';

         ?>
         </i>
        </span>

        <div class="topbar-child2">
          <span class="topbar-email">
            UTP - CHICLAYO
          </span>
          <!-- lista desplegable 
          <div class="topbar-language rs1-select2">
            <select class="selection-1" name="time">
              <option>USD</option>
              <option>EUR</option>
            </select>
          </div>
          -->
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
              <!--
              <li>
                <a href="index.html">Proyectos</a>
                <ul class="sub_menu">
                  <li><a href="index.html">Homepage V1</a></li>
                  <li><a href="home-02.html">Homepage V2</a></li>
                  <li><a href="home-03.html">Homepage V3</a></li>
                </ul>
              </li>
-->
              <li>
                <a href="">Lista de Clientes</a>
              </li>
              <!--
              <li class="sale-noti">
                <a href="product.html">Equipos</a>
              </li>
              -->
              <!--
              <li>
                <a href="cart.html">Equipos</a>
              </li>

              <li>
                <a href="blog.html">Blog</a>
              </li>

              <li>
                <a href="about.html">About</a>
              </li>

              <li>
                <a href="contact.html">Contact</a>
              </li>
              -->
            </ul>
          </nav>
        </div>

        <!-- Header Icon -->
        <div class="header-icons">
          <a href="cerrarsesion.php" class="header-wrapicon1 dis-block">
            <img src="images/icons/icon-header-01s.png" class="header-icon1" alt="ICON">
          </a>
        </div>
        
  </header>


<!-- Header Mobile -->
    <div class="wrap_header_mobile">
      <!-- Logo moblie -->
      <a href="index.html" class="logo-mobile">
        <img src="images/icons/logo.png" alt="IMG-LOGO">
      </a>

 <ul class="main-menu">
          <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
            <span class="topbar-child1">
                                <?php
        //session_start();
        if(!isset($_SESSION["nombre"])){
            header ("location:acceso.php");
            }
         echo $_SESSION['Tipo_usuario'];
         echo ':';
         echo ' ';
        ?>
        </b>
        <i>
        <?php
         echo $_SESSION['nombre'];
         echo ' ';

         ?>
         </i>
            </span>
          </li>
        </ul>



      <!-- Button show menu -->
      <div class="btn-show-menu">
        <!-- Header Icon mobile -->
        <div class="header-icons-mobile">
          <a href="cerrarsesion.php" class="header-wrapicon1 dis-block">
            <img src="images/icons/icon-header-01s.png" class="header-icon1" alt="ICON">
          </a>



        </div>

        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </div>
      </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu" >
      <nav class="side-menu">
        <ul class="main-menu">
          <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
            <span class="topbar-child1">
                                <?php
        session_start();
        if(!isset($_SESSION["nombre"])){
            header ("location:acceso.php");
            }
         echo $_SESSION['Tipo_usuario'];
         echo ':';
         echo ' ';
        ?>
        </b>
        <i>
        <?php
         echo $_SESSION['nombre'];
         echo ' ';

         ?>
         </i>
            </span>
          </li>

          <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
            <div class="topbar-child2-mobile">
              <span class="topbar-email">
                UTP - CHICLAYO
              </span>

              <div class="topbar-language rs1-select2">

            </div>
          </li>

          <li class="item-topbar-mobile p-l-10">
            <div class="topbar-social-mobile">
              <a href="#" class="topbar-social-item fa fa-facebook"></a>
              <a href="#" class="topbar-social-item fa fa-instagram"></a>
              <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
            </div>


          </li>

          <li class="item-menu-mobile">
            <a href="index.html">Proyectos</a>
            <ul class="sub-menu">
              <li><a href="index.html">Homepage V1</a></li>
              <li><a href="home-02.html">Homepage V2</a></li>
              <li><a href="home-03.html">Homepage V3</a></li>
            </ul>
            <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
          </li>

          <li class="item-menu-mobile">
            <a href="product.html">Productos</a>
          </li>

          <li class="item-menu-mobile">
            <a href="product.html">Equipos</a>
          </li>
        <!-- 
          <li class="item-menu-mobile">
            <a href="cart.html">Features</a>
          </li>

          <li class="item-menu-mobile">
            <a href="blog.html">Blog</a>
          </li>

          <li class="item-menu-mobile">
            <a href="about.html">About</a>
          </li>

          <li class="item-menu-mobile">
            <a href="contact.html">Contact</a>
          </li>
         -->
        </ul>
      </nav>
    </div>
  </header>





	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">

				<div class="col-md-6 p-b-30">
					<form class="leave-comment" action="modificarcliente.php" method="post">
						<h4 class="m-text26 p-b-36 p-t-15">
							Modificar Cliente
						</h4>
<input type="hidden" name="id" id="id" value="<?php echo $Consultacliente [0]?>"/>
            Codigo
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" id="codigo" name="codigo" placeholder="Codigo" value="<?php echo $Consultacliente [1]?>" />
						</div>
            Apellidos Y Nombres
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" id="nomapecomp"  name="nomapecomp" placeholder="Apellidos y Nombres" value="<?php echo $Consultacliente [2]?>"/>
						</div>
            Contraseña
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" id="contrasenia"  name="contrasenia" placeholder="Contraseña" value="<?php echo $Consultacliente [3]?>" / >
						</div>

            Nombre Proyecto
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text"  id="nomb_proyect"  name="nomb_proyect" placeholder="Nombre del Proyecto"  value="<?php echo $Consultacliente [5]?>" / >
						</div>

            Numero de Whatsapp
            <div class="bo4 of-hidden size15 m-b-20">
              <input class="sizefull s-text7 p-l-22 p-r-22" type="text"  id="whatsapp"  name="whatsapp" placeholder="Numero de Whatsapp"  value="<?php echo $Consultacliente [7]?>" / >
            </div>

            Descripcion
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" id="descripcion"  name="descripcion" value="<?php echo $Consultacliente [8]?>"/>
						</div>

						<div class="w-size25">
							<!-- Button -->
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4"  type="submit">
								Modificar
							</button>


						</div>
					</form>
				</div>
			</div>
		</div>
	</section>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
