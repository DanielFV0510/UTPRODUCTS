<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <!--===============================================================================================-->
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
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/butons.css">



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Administrar Productos</title>
        <meta charset="UTF-8">

    </head>

<body class="animsition">
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
        if(!isset($_SESSION["nombre"], $_SESSION['nomb_proyect'])){
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
                <a href="index.php" class="logo">
                    <img src="images/icons/logo.png" alt="IMG-LOGO">
                </a>
                <!-- Menu -->
                <div class="wrap_menu">
                    <nav class="menu">
                        <ul class="main_menu">
                            <!--          <li>
                <a href="index.html">Proyectos</a>
                <ul class="sub_menu">
                  <li><a href="index.html">Homepage V1</a></li>
                  <li><a href="home-02.html">Homepage V2</a></li>
                  <li><a href="home-03.html">Homepage V3</a></li>
                </ul>
              </li>-->
                            <li>
                                <a href="admin.php">Lista de Clientes</a>
                            </li>

                            <li>
                                <a href="listproducts.php">Lista de Productos</a>
                            </li>
                            <!--              <li class="sale-noti">
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
        <a href="index.php" class="logo-mobile">
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
    <div class="wrap-side-menu">
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
          </li>      -->
            </ul>
        </nav>
    </div>
    </header>
    <!-- Cart -->
    <section class="cart bgwhite p-t-70 p-b-100">
        <div class="container">
            <!-- Cart item -->
            <div class="container-table-cart pos-relative">
                <div class="wrap-table-shopping-cart bgwhite">
                    <table class="table-shopping-cart">
                        <tr class="table-head">
                            <th>Foto 1</th>
                            <th>Foto 2</th>
                            <th>foto 3</th>
                            <th>Nombre del Producto</th>
                            <th>Descripcion</th>
                            <th>Eliminar</th>
                        </tr>
                        <?php
            require('connect_db.php');
             $query = "select * from lista_productos ";
             $result= mysqli_query($mysqli,"select * from lista_productos");
             //WHERE nomproy='$_SESSION['nombre']'
             while ($event= mysqli_fetch_array($result)){ ?>
                        <tr class="table-row">
                            <td class="column-1">
                                <div class="cart-img-product b-rad-4 o-f-hidden">
                                    <img src="data:image/jpg;base64,<?php echo base64_encode($event['foto1']) ?>"
                                        alt="IMG-PRODUCT">
                                </div>
                            </td>
                            <td class="column-1">
                                <div class="cart-img-product b-rad-4 o-f-hidden">
                                    <img src="data:image/jpg;base64,<?php echo base64_encode($event['foto2']) ?>"
                                        alt="IMG-PRODUCT">
                                </div>
                            </td>
                            <td class="column-1">
                                <div class="cart-img-product b-rad-4 o-f-hidden">
                                    <img src="data:image/jpg;base64,<?php echo base64_encode($event['foto3']) ?>"
                                        alt="IMG-PRODUCT">
                                </div>
                            </td>
                            <td class="column-5">
                                <?php
                     echo $event['nombprod'];
                      ?>
                            </td>
                            <td class="column-1">
                                <?php
                     echo $event['descripcion'];
                      ?>
                            </td>

                            <td class="column-7">
                                <a class="button2" href="pageliminarproducto.php<?php echo "?id=" .$event['id'] ?>"></a>
                            </td>
                            <?php
                 echo "</tr>";
             }
             ?>
                    </table>
                </div>
            </div>
            <div class="size10 trans-0-4 m-t-10 m-b-10">
                <!-- Button -->
                <a class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" href="pagnuevoproducto.php">
                    Nuevo Producto
                </a>
            </div>
        </div>
        </div>
        </div>
    </section>
</body>

</html>