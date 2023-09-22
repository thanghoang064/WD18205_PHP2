<?php
//Khai báo class

class SinhVien{
      
    //KHai bao thuộc tính là khai báo biến trong class
    public $maSv;    
    public $tenSv;
    public $namSinh;    
    public $nganhHoc;    
    public $lop;

    // Khai báo hàm khởi tạo magic function
    // khai báo phương thức là khai báo hàm trong class
    public function getInfo(){
        echo " " .$this->maSv . " ".$this->tenSv . " ". $this->namSinh . " ". $this->nganhHoc;
    }
    //Khai báo phương thức
   public function setTenSv($tenSv){
    //trong lập trình hướng đối tượng, muốn sử dụng thuộc tính thì phải sử dụng từ $this->tên thuộc tính
     $this->tenSv = $tenSv;
   }
   //Khai báo hàm hiển thị
   public function getTenSv(){
    
     return $this->tenSv;
   }


}
// //Khởi tạo một đối tượng mới
 $sv = new SinhVien();
// // Sử dụng phương thức set trong class
 $sv->setTenSv("Dung");
// // Sử dụng phương thức get trong clasa
 echo $sv->getTenSv();
 $sv1 = new SinhVien();
 $sv1->setTenSv("ABC");
 echo $sv1->getTenSv();



//Khởi tạo đối tượng mới
//$sv1 = new SinhVien();
//echo $sv1->getInfo();

//tạo 1 class GiangVien gồm các thuộc tính :maGV,tenGV,namBatDau,
//luongCB,soGioday
// tạo phương thức khởi tạo có tham số truyền vào cho class trên
// xây dựng phương thức tinhLuong có trả về = luongCB * soGioday
// xây dựng phương thức tinhThamNien có trả về
// = namHienTai - namBatDau
// xây dựng hàm hiển thị thông tin gồm các thông tin
//maGV,tenGV,namBatDau,
//Tongluon,thamnien
