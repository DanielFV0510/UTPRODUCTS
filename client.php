
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
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
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
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
            <i>
        <?php
         echo $_SESSION['nomb_proyect'];
         echo ' ';

         ?>
         </i>
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
-->
              <li>
                <a href="">Lista de Productos</a>
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

<?php require('encdes.php'); ?>

  <!-- Cart -->
  <section class="cart bgwhite p-t-70 p-b-100">
    <div class="container">
      <!-- Cart item -->
      <div class="container-table-cart pos-relative">
        <div class="wrap-table-shopping-cart bgwhite" id="tb_productos">
          <table class="table-shopping-cart">
            <tr class="table-head">
              <th class="column-5">Foto 1</th>
              <th class="column-5">Foto 2</th>
              <th class="column-5">Nombre Producto</th>
              <th class="column-5">Precio</th>
              <th class="column-5">Descripcion</th>
              <th class="column-6">Categorias</th>
              <th class="column-6">Condición</th>
              <th class="column-6">Cod. Producto</th>
              <th class="column-6">360°</th>
              <th class="column-6">Ver</th>
              <th class="column-6">Editar</th>
              <th class="column-6">Eliminar</th>
            </tr>

              <?php
            
            require('connect_db.php');
             $query = "select * from lista_productos ";
             $result= mysqli_query($mysqli,"select * from lista_productos WHERE nomproy='".$_SESSION['id']."'");
             //WHERE nomproy='$_SESSION['nombre']'
             while ($event= mysqli_fetch_array($result)){ ?>
            <tr class="table-row">
                  <td class="column-1">
                    <div class="cart-img-client b-rad-4 o-f-hidden">
                      <img src="<?php echo $event['fotoruta1'] ;?>" alt="IMG-PRODUCT">
                    </div>
                  </td>

                  <td class="column-1">
                    <div class="cart-img-client b-rad-4 o-f-hidden">
                      <img src="<?php echo $event['fotoruta2'] ;?>" alt="IMG-PRODUCT">
                    </div>
                  </td>

                  <td class="column-1 ">
                     <?php echo $event['nombprod']; ?>
                  </td>

                  <td class="column-1">
                    S/. <?php echo $event['Precio']; ?>
                  </td>


                  <td class="column-1">
                     <?php echo $event['descripcion']; ?>
                  </td>

                  <td class="column-1">
                     <?php
                     echo $event['categ1'];
                     echo '<br>';
                     echo $event['categ2'];
                      ?>
                  </td>

                  <td class="column-1">
                     <?php echo $event['estado']; ?>
                  </td>


                  <td class="column-1">
                     <?php echo $event['codprod']; ?>
                  </td>

                  <td class="column-1">
                     <?php
              					if (empty($event['LINK'])) {
                    						echo "NO";
                    					}else{
                    						echo "SI";
                  					}
                     ?>
                  </td>

                  <td class="column-1">
                    <a class="button9"  href="product-detail.php?id=<?php
                        $idenc=SED::encryption($event['id']);
                        echo $idenc;
                        ?>">
                    </a>
                  </td>

                  <td class="column-1">
                    <a class="button1" data-toggle="modal" data-id="<?=$event['id']?>" data-target="#exampleModal" href="pagmodificarproduct.php<?php echo "?id=" .$event['id'] ?>"></a>
                  </td>

                  <td class="column-1">
                    <a class="button2" href="pageliminarproducto.php<?php echo "?id=" .$event['id'] ?>"></a>
                  </td>

            </tr>
                  <?php } ?>
          </table>
        </div>
      </div>
      
					<?php	include_once 'includes/productos.php';
							$productos = new Productos(null,null,null);	
              $limiteAlcanzado=$productos->verificarLimite();
              if($limiteAlcanzado===false){
          ?>        
        <div class="size10 trans-0-4 m-t-10 m-b-10">
          <!-- Button -->
          <a class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" href="pagnuevoproducto.php">
            Nuevo Producto
          </a>
        </div>
              <?php }else{?>
                <p class="text-danger">Alcanzaste el límite del cantidad de productos de tu paquete</p>
          <div class="size10 trans-0-4 m-t-10 m-b-10">
          <!-- Button -->
          <p class="flex-c-m sizefull bg1 bo-rad-23 hv  s-text1" disabled>
            Nuevo Producto
              </p>
        </div>
        <?php };?>
      </div>
      </div>
    </div>
    <div>

  </section>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cancelar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-body">
        <form id="formActualizarProduct" name="formActualizarProduct">
          <!-- <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div> -->
          <!-- <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div> -->
          NOMBRE DEL PRODUCTO
						<div class="bo4 of-hidden size15 m-b-20">
              <input type="hidden" id="idproduct" name="idproduct">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text"  id="nombprod"  name="nombprod" placeholder="Nombre del Producto (MAX: 50 CARACTERES)" maxlength="50" required >
						</div>
							PRECIO
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" id="Precio" required  name="Precio" placeholder="Precio (ejm: 1.50 25.00)" maxlength="8" onpaste="return false" >
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
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="modificar">Modificar</button>
      </div>
    </div>
  </div>
</div>

  <!-- <link  type="text/js" src="vendor/bootstrap/js/bootstrap.min.js"> -->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendor/bootstrap/js/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- <link  type="text/js" href="vendor/jquery/jquery-3.2.1.min.js"> -->
  <script src="./js/client.js"></script>
  <script type="text/javascript">

//     $('#exampleModal').on('show.bs.modal', function (event) {
//       console.log('hola jquery');
//   var button = $(event.relatedTarget); // Button that triggered the modal
//   var recipient = button.data('whatever'); // Extract info from data-* attributes
//   // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
//   // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
//   var modal = $(this);
//   modal.find('.modal-title').text('New message to ' + recipient);
//   modal.find('.modal-body input').val(recipient);
// })
  </script>
</body>

</html>


