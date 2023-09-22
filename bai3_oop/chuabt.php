<?php
//tạo 1 class GiangVien gồm các thuộc tính :maGV,tenGV,namBatDau,
//luongCB,soGioday
// tạo phương thức khởi tạo có tham số truyền vào cho class trên
// xây dựng phương thức tinhLuong có trả về = luongCB * soGioday
// xây dựng phương thức tinhThamNien có trả về
// = namHienTai - namBatDau
// xây dựng hàm hiển thị thông tin gồm các thông tin
//maGV,tenGV,namBatDau,
//Tongluon,thamnien
class GiangVien {
    public $maGV;
    public $tenGV;
    public $namBatDau;
    public $luongCB;
    public $soGioDay;
       public function __construct($maGV,$tenGV,$namBatDau,$luongCB,$soGioDay) {
           $this->maGV = $maGV;
           $this->tenGV = $tenGV;
           $this->namBatDau = $namBatDau;
           $this->luongCB = $luongCB;
           $this->soGioDay = $soGioDay;
       }
       public function tinhLuong() {
           return $this->luongCB * $this->soGioDay;
       }
       public function tinhThamNien() {
           return date('Y') - $this->namBatDau;
       }
       public function hienThiThongTinGV() {
           echo $this->maGV."-".$this->tenGV."-".$this->tinhThamNien()."-".$this->tinhLuong();
       }

}
// khởi tạo đối tượng
$gv1 = new GiangVien("GV001","Nguyen van a",2022,10000,5) ;// tạo ra 1 ông giảng viên mới
$gv1->hienThiThongTinGV();
