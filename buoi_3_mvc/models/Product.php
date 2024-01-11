<?php

// hàm truy vấn để lấy danh sách sản phẩm

function getProduct(){
    $sql = "SELECT * FROM products";
    return  getData($sql);
}

function loadProductUpdate($id){
    $sql = "SELECT * FROM products where `id` = '$id'";
    return getData($sql,false);
}

function addProducts($ten,$gia){
    $sql = "INSERT INTO `products`(`ten_sp`, `gia`) VALUES('$ten','$gia')";
    return getData($sql,false);
}

function updateProduct($id,$ten,$gia){
    $sql = "UPDATE `products` SET `ten_sp`='$ten',`gia`='$gia' WHERE id = '$id'";
    return getData($sql,false);
}

function deleteProduct($id) {
    $sql = "DELETE FROM `products` WHERE `id` = '$id'";
    return getData($sql,false);
}

