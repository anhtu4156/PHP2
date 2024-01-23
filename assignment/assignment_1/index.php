<?php
require_once "controllers/ProductController.php";
$url = isset($_GET['url']) ? $_GET['url'] : "/";

$productController = new ProductController();

switch ($url) {
    case '/':
        $productController->listProduct();
        break;
    case 'add-product':
        
        $productController->addProduct();
        break;
    case 'update-product':
        
        $productController->updateView();
        break;
    case 'delete-product':
        $productController->postDeleleProduct();
        break;
    case 'product':
        $productController->listProductUsers();
        break;
}