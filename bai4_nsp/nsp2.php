<?php
namespace NSP2;
class SinhVien {
    public $ten;
    public $tuoi;
    public function __construct($ten,$tuoi) {
        $this->ten = $ten;
        $this->tuoi = $tuoi;
    }
    public function hienThiThongTin() {
        echo "Tên".$this->ten."Năm sinh".$this->tuoi;
    }
}