<?php
require_once "models/Product.php";
function listProduct() {
    //tạo ra 1 biến hứng dữ liệu từ hàm của model
    $products = getProduct();
//    echo "<pre>";
//    var_dump($products);
//    die;
    include_once "views/product/list.php";
    // lấy dữ liệu từ model ra controller và tạo 1 view danh sách đổ xuống view
//    echo "Đây là trang danh sách product";
}

function addProduct() {
    echo "Đây là trang thêm product";
}

function editProduct() {
    echo "Đây là trang sửa product";
}
function deleteProduct() {
    echo "Đây là chức năng xóa product";
}