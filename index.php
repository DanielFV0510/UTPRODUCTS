<!DOCTYPE html>
<html lang="en">
<head>
    <title>CLUSTORE - TIENDA VIRTUAL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
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
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
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
                </div>
            </div>
            <div class="wrap_header">
                <!-- Logo -->
                <a href="index.php" class="logo">
                    <img src="images/icons/logo.png" alt="IMG-LOGO">
                </a>
                <!-- Menu -->
                <div class="wrap_menu">
                    <nav class="menu">
                        <ul class="main_menu">
                            <?php
						require('connect_db.php');
						require('encdes.php');
						// var_dump($mysqli);
						$query = "select * from lista_productos ";
						$result= mysqli_query($mysqli,"select * from categoria WHERE tipocateg='Principal' ");
						while ($event= mysqli_fetch_array($result)){ 
						?>
                            <li>
                                <a href="categoria.php?id=<?php 
							$idenc=SED::encryption($event['id']);
							echo $idenc;
								?>"> <?php echo $event['nombcateg']; } ?></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Header Icon -->
                <div class="header-icons">
                    <a href="acceso.php" class="header-wrapicon1 dis-block">
                        <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                    </a>
                    <!-- carrito 
					<span class="linedivide1"></span>
					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>
					 Header cart noti  INI
						 
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div> 
									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											AUN HA REALIZADO NINGUNA COMPRA
										</a>
										<span class="header-cart-item-info">
											2 x S/ 1119.00
										</span> 
									</div>
								</li>
							<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div> 
									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											ANILLO DE NIÑA
										</a>
										<span class="header-cart-item-info">
											1 x S/ 139.00
										</span>
									</div>
								</li> 
							<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>
									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>
										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div> 
								</li>
							</ul>

						</div>
					 -->
                </div>
            </div>
        </div>
        </div>
        <!-- Header Mobile -->
        <div class="wrap_header_mobile">
            <!-- Logo moblie -->
            <a href="index.html" class="logo-mobile">
                <img src="images/icons/logo.png" alt="IMG-LOGO">
            </a>
            <!-- 
			<div class="btn-show-menu">
				<!-- Header Icon mobile -
				<div class="header-icons-mobile">
					<a href="acceso.php" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>
				</div>
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		-->
        </div>
        <!-- 
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-menu-mobile">
						<a href="index.html">ANILLOS DE COMPROMISO</a>
						<ul class="sub-menu">
							<li><a href="index.html">PEDIDA DE MANO</a></li>
							<li><a href="index.html">BODA</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>
					<li class="item-menu-mobile">
						<a href="index.html">JOYAS DE ORO</a>
						<ul class="sub-menu">
							<li><a href="index.html">18K</a></li>
							<li><a href="index.html">20K</a></li>
							<li><a href="index.html">24K</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>
					<li class="item-menu-mobile">
						<a href="INDEX.html">JOYAS DE PLATA</a>
					</li>
					<li class="item-menu-mobile">
						<a href="INDEX.html">JOYAS DE PLATA</a>
					</li>
					<li class="item-menu-mobile">
						<a href="index.html">CELEBRACIONES</a>
						<ul class="sub-menu">
							<li><a href="index.html">BAUTIZOS</a></li>
							<li><a href="index.html">15 AÑOS</a></li>
							<li><a href="index.html">ANIVERSARIOS</a></li>
							<li><a href="index.html">GRADUACIONES</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>


				</ul>
			</nav>
		</div>
		 -->
    </header>



    <!-- Slide1 -->
    <section class="slide1">

        <div class="wrap-slick1">
            <div class="slick1">

                <?php
    require('connect_db.php');
    
     $query = "select * from lista_usuarios ";
     $result= mysqli_query($mysqli,"select * from lista_usuarios WHERE Tipo_Usuario='Cliente' and condicion='Activo' ");
     while ($event= mysqli_fetch_array($result)){ ?>
                <div class="item-slick1 item1-slick1" style="background-image: url(images/bannerini/banner1.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">



                        <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15"
                            data-appear="fadeInDown">
                            <b>TIENDA ASOCIADA</b>
                        </span>

                        <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37"
                            data-appear="fadeInUp">
                            <?php
                    			 echo $event['nomb_proyect'];
                      			?>

                        </h2>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                            <!-- Button -->
                            <a href="product.php?id=<?php 

							
							//echo $event['id'];
							$idenc=SED::encryption($event['id']);
							echo $idenc;

							?>" class="flex-c-m size2 bo-rad-23 s-text2 bgred hov1 trans-0-4">
                                VISITANOS
                            </a>
                        </div>

                    </div>
                </div>

                <?php
			}
            ?>

            </div>
        </div>
    </section>
    <!-- Banner -->
    <section class="banner bgblack p-t-40 p-b-40">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src="images/banner-02.jpg" alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <?php
										require('connect_db.php');
										$query = "select * from lista_productos ";
										$result= mysqli_query($mysqli,"select * from categoria WHERE id=1 ");
										while ($event= mysqli_fetch_array($result)){ 
									?>
                            <!-- Button -->
                            <a href="categoria.php?id=<?php 
							$idenc=SED::encryption($event['id']);
							echo $idenc;
								?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                <?php echo $event['nombcateg']; } ?>
                            </a>
                        </div>
                    </div>

                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src="images/banner-05.jpg" alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <?php
										$result= mysqli_query($mysqli,"select * from categoria WHERE id=2 ");
										while ($event= mysqli_fetch_array($result)){ 
									?>
                            <!-- Button -->
                            <a href="categoria.php?id=<?php 
							$idenc=SED::encryption($event['id']);
							echo $idenc;
								?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                <?php echo $event['nombcateg']; } ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src="images/banner-03.jpg" alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <?php
										$result= mysqli_query($mysqli,"select * from categoria WHERE id=3 ");
										while ($event= mysqli_fetch_array($result)){ 
									?>
                            <!-- Button -->
                            <a href="categoria.php?id=<?php 
							$idenc=SED::encryption($event['id']);
							echo $idenc;
								?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                <?php echo $event['nombcateg']; } ?>
                            </a>
                        </div>
                    </div>
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src="images/banner-07.jpg" alt="IMG-BENNER">
                        <div class="block1-wrapbtn w-size2">
                            <?php
										$result= mysqli_query($mysqli,"select * from categoria WHERE id=4 ");
										while ($event= mysqli_fetch_array($result)){ 
									?>
                            <!-- Button -->
                            <a href="categoria.php?id=<?php 
							$idenc=SED::encryption($event['id']);
							echo $idenc;
								?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                <?php echo $event['nombcateg']; } ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src="images/banner-04.jpg" alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <?php
										$result= mysqli_query($mysqli,"select * from categoria WHERE id=5 ");
										while ($event= mysqli_fetch_array($result)){ 
									?>
                            <!-- Button -->
                            <a href="categoria.php?id=<?php 
							$idenc=SED::encryption($event['id']);
							echo $idenc;
								?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                <?php echo $event['nombcateg']; } ?>
                            </a>
                        </div>
                    </div>
                    <!-- block2 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src="images/banner-05.jpg" alt="IMG-BENNER">
                        <div class="block1-wrapbtn w-size2">
                            <?php
										$result= mysqli_query($mysqli,"select * from categoria WHERE id=6 ");
										while ($event= mysqli_fetch_array($result)){ 
									?>
                            <!-- Button -->
                            <a href="categoria.php?id=<?php 
							$idenc=SED::encryption($event['id']);
							echo $idenc;
								?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                <?php echo $event['nombcateg']; } ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- New Product -->
    <section class="newproduct bgwhite p-t-45 p-b-105">
        <div class="container">
            <div class="sec-title p-b-60">
                <h3 class="m-text5 t-center">
                    NUEVOS PRODUCTOS
                </h3>
            </div>
            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">
                    <?php
					require('connect_db.php');
					$query = "select * from lista_productos ";
					//$result= mysqli_query($mysqli,"select * from lista_productos");
										$result= mysqli_query($mysqli,"select * from lista_usuarios lu inner join lista_productos lp on lu.id=lp.nomproy WHERE condicion='Activo' ");
					while ($event= mysqli_fetch_array($result)){ ?>
                    <div class="item-slick2 p-l-15 p-r-15">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative ">
                                <a href="product-detail.php?id=<?php 

							$idenc=SED::encryption($event['id']);
							echo $idenc;

								?>" class="block2-name dis-block s-text3 p-b-5">
                                    <img src="<?php echo $event['fotoruta1'] ;?>" alt="IMG-PRODUCT">
                                </a>
                            </div>
                            <div class="block2-txt p-t-20">
                                <a class="block2-price m-text6 p-r-5">
                                    <?php
                    			 			echo $event['nombprod'];
                      					?>
                                </a>
                                <br>
                                <span class="block2-price m-text6 p-r-5">
                                    S/.
                                    <?php
	                    			 		echo $event['Precio'];
	                      				?>
                                </span>
                                <br>
                                <span class="block2-price m-text6 p-r-5">
                                    <?php
	                    			 		echo $event['nomb_proyect'];
	                      				?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php
					}
		            ?>
                </div>
            </div>
        </div>
    </section>
    <!--
	<section class="banner2 bg5 p-t-55 p-b-55">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class="hov-img-zoom pos-relative">
						<img src="images/banner-08.jpg" alt="IMG-BANNER">

						<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
							<span class="m-text9 p-t-45 fs-20-sm">
								The Beauty 
							</span>

							<h3 class="l-text1 fs-35-sm">
 								Lookbook 
							</h3>

							<a href="#" class="s-text4 hov2 p-t-20 ">
<								View Collection 
							</a>
						</div>
					</div>
				</div> -->
    <!--
				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">			
	
						<img src="images/shop-item-09.jpg" width="720" height="480" alt="IMG-BANNER">

						<div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">
							<div class="t-center">
								<a href="galeriafotos.php" class="dis-block s-text3 p-b-5">
									VISITA NUESTRA GALERIA DE FOTOS
								</a>
								<a class="dis-block s-text3 p-b-5">
									VISITANOS EN
								</a>

								<span class="block2-oldprice m-text7 p-r-5">
									<!-- $29.50 
								</span>

								<span class="block2-newprice m-text8">
									REAL PLAZA CHICLAYO
								</span>
							</div>

							<div class="flex-c-m p-t-44 p-t-30-xl">
<!-- 								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 days">
										69
									</span>

									<span class="s-text5">
										days
									</span>
								</div> 

								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 hours">
										01
									</span>

									<span class="s-text5">
										hrs
									</span>
								</div>

								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 minutes">
										01
									</span>

									<span class="s-text5">
										mins
									</span>
								</div>

								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 seconds">
										05
									</span>

									<span class="s-text5">
										secs
									</span>
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
 	-->
    <!-- 	<section class="blog bgwhite p-t-4 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					Equipos UTP - Chiclayo
				</h3>
			</div>

		</div>
	</section> -->
    <section class="instagram p-t-20">
        <div class="sec-title p-b-52 p-l-15 p-r-15">
            <h3 class="m-text5 t-center">
                VISITE NUESTRAS TIENDAS
            </h3>
        </div>
        <div class="flex-w">
            <?php
    			require('connect_db.php');
         		$query = "select * from lista_usuarios ";
     			$result= mysqli_query($mysqli,"select * from lista_usuarios WHERE Tipo_Usuario='Cliente' and condicion='Activo' ");
     			while ($event= mysqli_fetch_array($result)){ ?>
            <div class="block4 wrap-pic-w">
                <img width="720" height="240" src="data:image/jpg;base64,<?php echo base64_encode($event['logo']) ?>"
                    alt="IMG-INSTAGRAM">
                <a href="product.php?id=
						<?php
							$idenc=SED::encryption($event['id']);
							echo $idenc;
						?>" class="block4-overlay sizefull ab-t-l trans-0-4">
                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            <?php echo $event['descripcion'];?>
                        </p>

                        <span class="s-text9">
                            <?php
                    			 echo $event['nomb_proyect'];
                      			?>
                        </span>
                    </div>
                </a>
            </div>
            <?php
			}
            ?>
        </div>
    </section>
    <!--
	<section class="blog bgwhite p-t-94 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					Equipos
				</h3>
			</div>
		</div>
	</section>
	 -->
    <!-- Instagram
	<section class="instagram p-t-20">
		<div class="sec-title p-b-52 p-l-15 p-r-15">
			<h3 class="m-text5 t-center">
				@ follow us on Instagram
			</h3>
		</div>

		<div class="flex-w">

			Block4 
			<div class="block4 wrap-pic-w">

				<img src="images/gallery-03.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			
			<div class="block4 wrap-pic-w">
				<img src="images/gallery-07.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			
			<div class="block4 wrap-pic-w">
				<img src="images/gallery-09.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			
			<div class="block4 wrap-pic-w">
				<img src="images/gallery-13.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			
			<div class="block4 wrap-pic-w">
				<img src="images/gallery-15.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>

					</div>
				</a>
			</div>
		</div>
	</section>
	  -->
    <!-- Shipping -->
    <section class="shipping bgwhite p-t-62 p-b-46">
        <div class="flex-w p-l-15 p-r-15">
            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    Disfruta de tus productos con 360°
                </h4>
                <a href="#" class="s-text11 t-center">
                    Solo con un clic
                </a>
            </div>
            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
                <h4 class="m-text12 t-center">
                    Solicitalo tus productos
                </h4>
                <span class="s-text11 t-center">
                    Por whatsapp
                </span>
            </div>
            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    CLUSTORE
                </h4>
                <span class="s-text11 t-center">
                </span>
            </div>
        </div>
    </section>
    <footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
        <div class="flex-w p-b-90">
            <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
                <h4 class="s-text12 p-b-30">
                    ASOCIACIONES Y SUSCRIPCIONES
                </h4>

                <div>
                    <p class="s-text7 w-size27">
                        Clustore es la tienda vitual con tecnologia 360, sus clientes podran disfrutar de esta
                        tencologia con un solo clic, ademas los pagos son a contraentrega
                    </p>

                    <div class="flex-m p-t-30">
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
                    </div>
                </div>
            </div>

            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                    Categorias
                </h4>

                <ul>
                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Emprendedor
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Stand
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Avanzado
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Profesional
                        </a>
                    </li>
                </ul>
            </div>

            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                    Bases
                </h4>

                <ul>
                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Search
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            About Us
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Contact Us
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Returns
                        </a>
                    </li>
                </ul>
            </div>

            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                    Help
                </h4>

                <ul>
                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Track Order
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Returns
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Shipping
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            FAQs
                        </a>
                    </li>
                </ul>
            </div>

            <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
                <h4 class="s-text12 p-b-30">
                    Newsletter
                </h4>

                <form>
                    <div class="effect1 w-size9">
                        <input class="s-text7 bg6 w-full p-b-5" type="text" name="email"
                            placeholder="email@example.com">
                        <span class="effect1-line"></span>
                    </div>

                    <div class="w-size2 p-t-20">

                        <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                            Subscribe
                        </button>
                    </div>

                </form>
            </div>
        </div>

        <div class="t-center p-l-15 p-r-15">
            <!-- 			<a href="#">
				<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
			</a> -->

            <div class="t-center s-text8 p-t-20">
                Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o"
                    aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            </div>
        </div>
    </footer>
    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>
    <!-- Container Selection1 -->
    <div id="dropDownSelect1"></div>
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
    </script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript">
    $('.block2-btn-addcart').each(function() {
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function() {
            swal(nameProduct, "is added to cart !", "success");
        });
    });

    $('.block2-btn-addwishlist').each(function() {
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function() {
            swal(nameProduct, "is added to wishlist !", "success");
        });
    });
    </script>

    <!--===============================================================================================-->
    <script src="js/main.js"></script>
</body>
</html>