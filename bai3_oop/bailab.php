<?php
//tạo 1 class ConNguoi gồm các thuộc tính :hoten,diachi,namsinh,email,sdt
// tạo phương thức set cho các thuộc tính trên
// tạo phương thức tinhtuoi = năm hiện tại - năm sinh (có trả về)
// tạo phương thức hiển thị thông tin :hoten,diachi,tuoi,email,sdt
//tạo 1 class HocSinh từ class ConNguoi gồm các thuộc tính :diemToan,diemLy,diemHoa
// tạo phương thức set cho các thuộc tính trên
//tạo phương thức tính điểm tb = (Toán + lý+ hóa)/3
//tạo phương thức hiển thị thông tin sinh viên hiển thị ra các thông tin
// hoten,diachi,tuoi,email,sdt,điểm TB
//tạo 1 class GiangVien kế thừa từ class ConNguoi gồm các thuộc tính:luongCB,soGioDay
//// tạo phương thức set cho các thuộc tính trên
/// tạo phương thức tính tổng lương = luongCB *soGioDay
/// //tạo phương thức hiển thị thông tin giảng viên hiển thị ra các thông tin
//// hoten,diachi,tuoi,email,sdt,tổng lương

// khai bao class Con Nguoi
class ConNguoi{
//    Khai báo thuộc tính
    public $hoTen;
    public $diaChi;
    public $namSinh;
    public $email;
    public $soDienThoai;
//    Khai báo hàm khởi tạo
// Nguyễn Thế Trường
public function __construct($hoTen,$diaChi,$namSinh,$email,$soDienThoai)
{
    $this->hoTen=$hoTen;
    $this->diaChi=$diaChi;
    $this->namSinh=$namSinh;
    $this->email=$email;
    $this->soDienThoai=$soDienThoai;
}

//    Tạo phương phức set
    public function setHoTen($hoTen){
        $this->hoTen = $hoTen;
    }
    public function setDiaChi($diaChi){
        $this->diaChi = $diaChi;
    }
    public function setNamSinh($namSinh){
        $this->namSinh = $namSinh;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setSoDienThoai($soDienThoai){
        $this->soDienThoai = $soDienThoai;
    }
//    Khai báo phương thức tính tuổi
    public function  tinhTuoi(){
         return date("Y") -  $this->namSinh;
    }

    public function hienThiTT(){
    $tuoi = $this->tinhTuoi();
    echo "Họ và tên: ". $this->hoTen . "Địa chỉ: ". $this->diaChi . "Tuổi: ". $tuoi . "Email: " . $this-> email.
        "Số điện thoại: ". $this-> soDienThoai;
    }
}
class HocSinh extends  ConNguoi {
//    Khai bao thuộc tính
    public $diemToan;
    public $diemLy;
    public  $diemHoa;
//    Hàm khởi tạo
    public function __construct($hoTen, $diaChi, $namSinh, $email, $soDienThoai, $diemToan, $diemLy, $diemHoa)
    {
//        Gọi đến hàm construct của tk cha để set gia trị
//        những thuộc tính của class cha
        parent::__construct($hoTen, $diaChi, $namSinh, $email, $soDienThoai);
        $this->diemToan = $diemToan;
        $this->diemLy = $diemLy;
        $this->diemHoa = $diemHoa;
    }
//    Nguyễn Văn Sơn 193
//    phương thức set cho các thuộc tính
    public function setDienToan($diemToan){
        $this->diemToan = $diemToan;
    }
    public function setDienLy($diemLy){
        $this->diemLy = $diemLy;
    }
    public function setDienHoa($diemHoa){
        $this->diemHoa = $diemHoa;
    }
//     phương thức tính điểm
// Đăng Huy Phú
public function  tinhDiemTB(){
        $diemtb = ($this->diemToan + $this->diemLy + $this->diemHoa) / 3;
        return $diemtb;
}
//     phương thức hiển thi
public function hienThiThongTinHocSinh(){
       echo $this->hienThiTT().'Điểm TB'.$this->tinhDiemTB();
}
}

// khởi tạo 1 con người
$cn = new ConNguoi("Nguyen Văn AA", "Hà Nội", 2004, "aa@gmail.com", "0987654321");
$cn->hienThiTT();
echo "<br>";
// khởi tạo 1 học sinh
$hs = new HocSinh("Nguyễn Văn BB", "Hà Nội", 2005, "bb@gmail.com", "1234567890", 9, 9, 0);

$hs->hienThiThongTinHocSinh();
// bài assGD1 áp dụng được class vào mô hình MVC

class GiangVien extends ConNguoi {
    public $luongCoBan;
    public $soGioDay;
//    Dương Quang Được
    public function __construct($hoTen, $diaChi, $namSinh, $email, $soDienThoai, $luongCoBan, $soGioDay)
    {
        parent::__construct($hoTen, $diaChi, $namSinh, $email, $soDienThoai);
        $this->soGioDay = $soGioDay;
        $this->luongCoBan = $luongCoBan;
    }

    public function setLuongCoBan($luongCoBan){
        $this->luongCoBan = $luongCoBan;
    }

    public function setSoGioDay($soGioDay){
        $this->soGioDay = $soGioDay;
    }
    public function tongLuong(){
        return $this->luongCoBan * $this->soGioDay;
    }
    public function hienThiTT()
    {
        parent::hienThiTT();
        echo "tong luong: ".$this->tongLuong();
    }

}