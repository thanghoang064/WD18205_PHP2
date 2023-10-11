<?php
namespace App\Controllers;
use App\Models\Product;
class ProductController extends BaseController {
    public $product;
    public function __construct() {
//        echo "Đây là product controller";
        $this->product = new Product();
    }
    public function index() {
       $products = $this->product->getProduct();
       $title = "ABC";
       $header = "Đây là trang danh sách product";
       return $this->render('product.index',compact('title','header','products'));
    }
    public function add() {

        echo "Đây là trang thêm sản phẩm ";
    }

}