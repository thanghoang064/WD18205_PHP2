<?php
require_once  'controllers/ProductController.php';
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        //điều hướng về hàm listProduct trong productController
        listProduct();
        break;
    case 'add-product':
        addProduct();
        break;
    // kiểm tra case = add-producrt điều hướng về hàm addProduct
}