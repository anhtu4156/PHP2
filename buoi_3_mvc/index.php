<?php
require_once "models/db.php";
require_once "controllers/ProductController.php";


$url = isset($_GET['url']) ? $_GET['url'] : "/";

switch ($url) {
    case '/':
        listProducts();
        break;
    case 'them':
        addProduct();
        break;
    case 'sua':
        if(isset($_GET['idPr']) && $_GET['idPr'] != ''){
            $idProduct = $_GET['idPr'];
            updateProductCtl($idProduct);
        }
        break;
    case 'xoa':
        if(isset($_GET['idPr']) && $_GET['idPr'] != ''){
            $idProduct = $_GET['idPr'];
            deleteProductCtl($idProduct);
        }
        break;
    
    
}
