<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paginación</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php include_once 'productos.php';
        $productos = new Productos(2,true,1);?>
    <div id="container">
        <?php echo $productos->mostrarTotalResultados()." resultados totales <br/>"; ?>
        TENEMOS DE <?php echo $productos->mostrarI(); ?> indice<br />
        <!-- TENEMOS  DE <?php echo $iddes ?> id<br/> -->
        TENEMOS DE <?php echo $productos->mostrarPA(); ?> pag Actual<br />
        <div id="paginas">
            <?php $productos->mostrarPaginas('categoria',1);
            ?>
        </div>
        <div id="peliculas">
            <?php
            $productos->mostrarProductosxCat(1);
        ?>
        </div>
    </div>
</body>

</html>