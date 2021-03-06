<!DOCTYPE html>
<html lang="en">

<head>
    <title>Productos</title>
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
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <?php 
            require('connect_db.php');
             $queru = "select * from lista_usuarios ";
             $queryp = "select * from lista_productos ";
if(is_numeric($_GET['id']))
{
	header("Location: index.php");
}
?>
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
                    <!-- <a href="#" class="topbar-social-item fa fa-pinterest-p"></a> -->
                    <!-- <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a> -->
                    <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                </div>
                <span class="topbar-child1">
                </span>
                <div class="topbar-child2">
                    <span class="topbar-email">
                        <?php
            require('connect_db.php');
             $queru = "select * from lista_usuarios ";
             $queryp = "select * from lista_productos ";
?>
                        <?php
			require('encdes.php');
             $iddes=SED::decryption($_GET['id']);
             $id=$_GET['id'];
?>
                        <?php
             $result= mysqli_query($mysqli,"select * from lista_usuarios WHERE id = '$iddes'");
             while ($event= mysqli_fetch_array($result)){ 
                     echo $event['nomb_proyect'];
					}
		            ?>
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
                <a href="index.php" class="logo">
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
              
              <li class="sale-noti">
                <a href="product.html">Equipos</a>
              </li>
              
       
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
                </div>
    </header>
    <!-- Title Page -->
    <?php
            require('connect_db.php');
             $queru = "select * from lista_usuarios ";
             $queryp = "select * from lista_productos ";
             
             $result= mysqli_query($mysqli,"select * from lista_usuarios WHERE id = '$iddes'");
             while ($event= mysqli_fetch_array($result)){
?>
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m"
        style="background-image: url(images/bannerini/catbanner1.jpeg);">
        <h2 class="l-text6 t-center">
            <?php
                     echo $event['nomb_proyect'];				
		            ?>
        </h2>
    </section>
    <!-- Content page -->
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                    <div class="leftbar p-r-20 p-r-0-sm">
                        <!--  -->
                        <h4 class="m-text14 p-b-7">
                            Contactenos
                        </h4>
                        <ul class="p-b-54">
                            <li class="p-t-4">
                                <a href="https://api.whatsapp.com/send?phone=51<?php echo $event['whatsapp'];?>&text=hola he visto tus productos"
                                    class=" flex-c-m size2 bo-rad-23 s-text1 bggreen hov7 trans-0-4">
                                    WHATSAPP
                                </a>
                            </li>
                        </ul>
                        <ul class="p-b-54">
                            <li class="p-t-4">
                                <a href="tel:<?php echo $event['whatsapp'];?>"
                                    class=" flex-c-m size2 bo-rad-23 s-text1 bgblue hov7 trans-0-4">
                                    LLAMENOS
                                </a>
                            </li>
                        </ul>
                        <h4 class="m-text14 p-b-7">
                            Ubiquenos
                        </h4>
                        <span class="block2-price m-text6 p-r-5">
                            <?php
	                    			 		echo $event['direccion'];}
	                      				?>
                        </span>
                        <!--
					 
						<h4 class="m-text14 p-b-32">
							Filters
						</h4>
						<div class="filter-price p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-17">
								Price
							</div>
							<div class="wra-filter-bar">
								<div id="filter-bar"></div>
							</div>
							<div class="flex-sb-m flex-w p-t-16">
								<div class="w-size11">
									<!-- Button
									<button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14trans-0-4">
										Filter
									</button>
								</div>
								<div class="s-text3 p-t-10 p-b-10">
									Range: $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
								</div>
							</div>
						</div>
						<div class="filter-color p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-12">
								Color
							</div>
							<ul class="flex-w">
								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
									<label class="color-filter color-filter1" for="color-filter1"></label>
								</li>
								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
									<label class="color-filter color-filter2" for="color-filter2"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
									<label class="color-filter color-filter3" for="color-filter3"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
									<label class="color-filter color-filter4" for="color-filter4"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
									<label class="color-filter color-filter5" for="color-filter5"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
									<label class="color-filter color-filter6" for="color-filter6"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
									<label class="color-filter color-filter7" for="color-filter7"></label>
								</li>
							</ul>
						</div>

						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
						-->
                    </div>
                </div>
                <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                    <!--  -->
                    <div class="flex-sb-m flex-w p-b-35">
                        <div class="flex-w">
                            <!-- 
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Default Sorting</option>
									<option>Popularity</option>
									<option>Price: low to high</option>
									<option>Price: high to low</option>
								</select>
							</div>
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Price</option>
									<option>$0.00 - $50.00</option>
									<option>$50.00 - $100.00</option>
									<option>$100.00 - $150.00</option>
									<option>$150.00 - $200.00</option>
									<option>$200.00+</option>
								</select>
							</div>
						-->
                        </div>
                        <!-- 
						<span class="s-text8 p-t-5 p-b-5">
							Showing 1–12 of 16 results
						</span>
						-->
                    </div>
                    <span class="s-text8 p-t-5 p-b-5">
                        <?php include_once 'includes/productos.php';
						//Cantidad de productos/ activar filtro por categoria/ id de la categoria
						$productos = new Productos(15,'tienda',$iddes);	?>
                        TENEMOS UN TOTAL DE <?php echo $productos->mostrarTotalResultados(); ?> PRODUCTOS <br />
                    </span>
                    <!-- Product -->
                    <div class="row">
                        <?php $productos->mostrarProductosxTienda($iddes)	?>
                        <!-- Pagination 
										<div class="pagination flex-m flex-w p-t-26">
											<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
											<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
										</div>
										 -->
                    </div>
                    <div class="pagination flex-m flex-w p-t-26">
                        <?php $productos->mostrarPaginas('tienda',$id);	?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>
				<div>
					<p class="s-text7 w-size27">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
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
					Categories
				</h4>
				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Men
						</a>
					</li>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Women
						</a>
					</li>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Dresses
						</a>
					</li>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Sunglasses
						</a>
					</li>
				</ul>
			</div>
			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
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
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
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
			<a href="#">
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
			</a>

			<div class="t-center s-text8 p-t-20">
				Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			</div>
		</div>
	</footer>
-->
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
    <script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/slick-custom.js"></script>
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
    <script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
    <script type="text/javascript">
    /*[ No ui ]
                        	    ===========================================================*/
    var filterBar = document.getElementById('filter-bar');

    noUiSlider.create(filterBar, {
        start: [50, 200],
        connect: true,
        range: {
            'min': 50,
            'max': 200
        }
    });

    var skipValues = [
        document.getElementById('value-lower'),
        document.getElementById('value-upper')
    ];

    filterBar.noUiSlider.on('update', function(values, handle) {
        skipValues[handle].innerHTML = Math.round(values[handle]);
    });
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>