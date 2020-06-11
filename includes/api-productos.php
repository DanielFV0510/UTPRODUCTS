<?php

include_once 'db.php';
// include_once 'encdes.php';
include_once 'productos.php';
if (isset($_POST['jsaccion'])) {
    $accion = $_POST['jsaccion'];
    $productos = new Productos(null,null,null);	

    switch ($accion) {
        case 'ModificarProducto':
            echo updateProduct($productos);
            break;
       
            
       
    }
}
function  updateProduct($productos){
    // Enviando datos post & Envio los datos del formulario 
    // codprod estado categ2 categ1 descripcion Precio nombprod,idproduct
    $dataProducto=[
        'nombprod'=>$_POST['nombprod'],
        'Precio'=>$_POST['Precio'],
        'descripcion'=>$_POST['descripcion'],
        'categ1'=>$_POST['categ1'],
        'categ2'=>$_POST['categ2'],
        'estado'=>$_POST['estado'],
        'codprod'=>$_POST['codprod'],
        'idproduct'=>$_POST['idproduct'],
        'f360'=>$_POST['f360'],
    ];
    $respuesta =$productos->updateProduct($dataProducto);
    return $respuesta;
    // var_dump($productos);

}
