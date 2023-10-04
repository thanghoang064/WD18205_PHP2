<?php
abstract class DongVat {
    //class trìu tượng là class phải có chứa
    // phương thức trìu tượng
    //class trìu tượng sẽ vẫn có thuộc tính và phương thức
    // như những class bình thường nhưng nó không khởi tạo được đối tượng
    abstract public function di();
}

class ConCho extends DongVat {
   public function di()
   {
        echo "Con chó đi bằng 4 chân";
   }
}
class ConNguoi extends DongVat {
    public function di()
    {
       echo "Con người đi bằng 2 chân";
    }
}
