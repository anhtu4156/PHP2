<?php

require_once "models/Product.php";

function listProducts() {
    // tạo biến để hứng dữ liệu từ models
    $products = getProduct();
    // echo "<pre>";
    // var_dump($products);
    // echo "</pre>";
    include "views/product/ListProduct.php";
}

function addProduct(){
    listProducts();
    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $price = $_POST['price'];
        echo $name;
        echo $price;
        addProducts($name,$price);
    }
}

function updateProductCtl($idProduct){
    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $price = $_POST['price'];
        updateProduct($idProduct,$name,$price);
    }
    $oldProduct = loadProductUpdate($idProduct);
    print_r($oldProduct);
    include "views/product/UpdateProduct.php";
}

function deleteProductCtl($idProduct){
    deleteProduct($idProduct);
    listProducts();
}