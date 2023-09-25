<?php
class ConNguoi {
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    public function an() {
        echo "ăn bằng mồm";
    }
    public function setChan($chan) {
        $this->chan = $chan;
    }
}
class NguoiLon extends ConNguoi {

    public $longNach;

    public function di() {

    }

    public function noi() {

    }

}
class TreCon extends ConNguoi {

    public function bo() {
        echo "Trẻ con bò bằng ".$this->chan." Chân".$this->tay."tay";
    }

}
// tạo ra 1 tk người lớn
$nl = new NguoiLon();
// xử lý hàm đi hiển thị ra người lớn đi bằng 2 chân
//$nl->an();
$tc = new TreCon();
$tc->setChan(2);
//tạo hàm setTay
//$tc->an();
$tc->bo();