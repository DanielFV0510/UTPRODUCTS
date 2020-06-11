<?php

include_once 'db.php';
// include_once 'encdes.php';
// include_once '../encdes.php';


class Productos extends DB{

    private $paginaActual;
    private $totalPaginas;
    private $nResultados;
    private $resultadosPorPagina;
    private $indice;

    function __construct($nPorPagina,$filtro,$idfiltro){
        //Inicializa el constructor padre (DB)
        parent::__construct();
            
        $this->resultadosPorPagina = $nPorPagina;
        $this->indice = 0;
        $this->paginaActual = 1;

        switch ($filtro) {
            case 'categoria':
                $this->calcularPaginasXCat($idfiltro);               
                break;
            case 'tienda':
                $this->calcularPaginasXTienda($idfiltro);
                break;
            default:
                # code...
                break;
        } 
        
    }



    function mostrarProductosxCat($IDcategoria){
        $query = $this->connect()->prepare("SELECT lp.id AS idPro,cat.id AS idCat,fotoruta1,fotoruta2,nombprod,Precio,descripcion,categ1,categ2,codprod,nomproy,LINK FROM lista_productos lp  INNER JOIN categoria cat ON cat.nombcateg=lp.categ1 OR cat.nombcateg=lp.categ2 WHERE cat.id ='$IDcategoria'  LIMIT :pos, :n");    
        $query->execute(['pos' => $this->indice, 'n' => $this->resultadosPorPagina]);
        
        foreach ($query as $productos) {
            include 'includes/vista-productos.php';
            // include 'vista-productos.php';
        }
    }
    function mostrarProductosxTienda($IDTienda){
        $query = $this->connect()->prepare("SELECT * FROM lista_productos  WHERE nomproy ='$IDTienda'  LIMIT :pos, :n");    
        $query->execute(['pos' => $this->indice, 'n' => $this->resultadosPorPagina]);
        
        foreach ($query as $productos) {
            include 'includes/vista-tienda.php';
            // include 'vista-productos.php';
        }
    }
    function calcularPaginasXCat($IDcategoria){
        $queryTotalResultados = $this->connect()->query("SELECT COUNT(*) AS total FROM lista_productos lp  INNER JOIN categoria cat ON cat.nombcateg=lp.categ1 OR cat.nombcateg=lp.categ2 WHERE cat.id ='$IDcategoria'");
        $this->nResultados = $queryTotalResultados->fetch(PDO::FETCH_OBJ)->total; 
        $this->totalPaginas = $this->nResultados / $this->resultadosPorPagina;

        if(isset($_GET['pagina'])){
            $this->paginaActual = $_GET['pagina'];
            $this->indice = ($this->paginaActual - 1) * $this->resultadosPorPagina;
        }
    }
    function calcularPaginasXTienda($IDTienda){
        $queryTotalResultados = $this->connect()->query("SELECT COUNT(*) AS total FROM lista_productos  WHERE nomproy ='$IDTienda'");
        $this->nResultados = $queryTotalResultados->fetch(PDO::FETCH_OBJ)->total; 
        $this->totalPaginas = $this->nResultados / $this->resultadosPorPagina;

        if(isset($_GET['pagina'])){
            $this->paginaActual = $_GET['pagina'];
            $this->indice = ($this->paginaActual - 1) * $this->resultadosPorPagina;
        }
    }
    function mostrarProductos(){
        $query = $this->connect()->prepare('SELECT * FROM lista_productos LIMIT :pos, :n');    
        $query->execute(['pos' => $this->indice, 'n' => $this->resultadosPorPagina]);
        
        foreach ($query as $productos) {
            include 'vista-productos.php';
        }
    }
    function calcularPaginas(){
        $queryTotalResultados = $this->connect()->query('SELECT COUNT(*) AS total FROM lista_productos');
        $this->nResultados = $queryTotalResultados->fetch(PDO::FETCH_OBJ)->total; 
        $this->totalPaginas = $this->nResultados / $this->resultadosPorPagina;

        if(isset($_GET['pagina'])){
            $this->paginaActual = $_GET['pagina'];
            $this->indice = ($this->paginaActual - 1) * $this->resultadosPorPagina;
        }
    }

    function mostrarPaginas($parametro,$id){
        $actual = '';
        $iddes=SED::decryption($id);
        
        echo '';
        for($i=0; $i < $this->totalPaginas; $i++){
            if(($i + 1) == $this->paginaActual){
                $actual = 'active-pagination';
            }else{
                $actual = '';
            }
            if ($parametro=='categoria') {
                echo '<a class="item-pagination flex-c-m trans-0-4 '.$actual.'" href="categoria.php?id='.$id.'&pagina='. ($i + 1). '">'. ($i + 1) . '</a>';
                // echo '<a class="item-pagination flex-c-m trans-0-4 '.$actual.'" href="index.php?pagina='. ($i + 1). '">'. ($i + 1) . '</a>';
            } else if($parametro=='tienda') {
                echo '<a class="item-pagination flex-c-m trans-0-4 '.$actual.'" href="product.php?id='.$id.'&pagina='. ($i + 1). '">'. ($i + 1) . '</a>';
            }
        echo '' ;
            // echo '<a class="item-pagination flex-c-m trans-0-4 '.$actual.'" href="?pagina='. ($i + 1). '">'. ($i + 1) . '</a>';
        }
        
    }
    function updateProduct($dataProducto){
        $ObjDB= new DB();
        $db=$ObjDB->connect();
        $query = $db->prepare('UPDATE lista_productos SET nombprod=?,Precio=?,descripcion =?,categ1 =?,categ2 =?,estado =?,codprod =?,LINK =? WHERE id=?');   
        
        $query->execute([$dataProducto['nombprod'],$dataProducto['Precio'],$dataProducto['descripcion'],$dataProducto['categ1'],$dataProducto['categ2'],$dataProducto['estado'],$dataProducto['codprod'],$dataProducto['f360'] ,$dataProducto['idproduct']]);
        return "actualizado";
    }
    function cantMaxProducts($tipopaquete){
                //SELECT * FROM `paquetes` WHERE `NombPaq`="Paquete Emprendor
                $ObjDB= new DB();
                $db=$ObjDB->connect();
                $query = $db->prepare('SELECT * FROM paquetes WHERE NombPaq=?');   
                
                $query->execute([$tipopaquete]);
                return $query->fetch(PDO::FETCH_ASSOC);
    }
    function cantProducts($idtienda){
// SELECT COUNT(*) AS cantidadProductos FROM `lista_productos` WHERE `nomproy`=48s
        $ObjDB= new DB();
        $db=$ObjDB->connect();
        $query = $db->prepare('SELECT COUNT(*) AS cantidadProductos FROM lista_productos WHERE nomproy=?');   

        $query->execute([$idtienda]);
        return $query->fetch(PDO::FETCH_ASSOC);

    }
    function verificarLimite(){
		 
        include_once 'includes/productos.php';
        //Cantidad de productos/ activar filtro por categoria/ id de la categoria
        
       $productos = new Productos(null,null,null);	
       $tipopaquete=$_SESSION['tipopack'];
       $idtienda=$_SESSION['id'];
       $cantMax= $productos->cantMaxProducts($tipopaquete);
       $cantProducts= $productos->cantProducts($idtienda);
       $limiteAlcanzado=false;
       if($cantMax['cantmaxprod']===$cantProducts['cantidadProductos']){
           $limiteAlcanzado=true;
        }
        return $limiteAlcanzado;
    // var_dump($limiteAlcanzado);
    // var_dump($cantMax);
    // var_dump($cantProducts);
        // die();
    }
    function mostrarTotalResultados(){
        return $this->nResultados;
    }    
    function mostrarI(){
        return $this->indice;
    }    
    function mostrarPA(){
        return $this->paginaActual;
    }
    function mostrarMsje(){
        return $this->msje;
    }

    
}
