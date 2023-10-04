<?php
include_once "nsp1.php";
include_once "nsp2.php";
$sv = new NSP1\SinhVien("Thang",1996);
$sv->hienThiThongTin();
$sv1 = new NSP2\SinhVien("Thang",18);
$sv1->hienThiThongTin();
// namespace luôn luôn được đặt ở đầu mỗi file PHP
//namespace đóng vai trò là không gian tên đại diện cho class/
//function/biến ở file đó và giải quyết các trường hợp các file
//khác nhau nhưng có class/function/biến giống nhau