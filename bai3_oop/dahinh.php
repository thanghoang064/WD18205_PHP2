<?php
interface DiChuyen {
    // interface không phải là 1 class
    // vì nó không phải class cho
    // nên nó không có thuộc tính và phương thức
    // nhưng nó lại lại có phương thức trìu tượng
    // phương thức tìu tượng của interface không cần
    // phải khai báo từ khóa abstract
    function di(); // khi khai báo ntn sẽ tự hiển là phương thức trìu tượng
}
class ConCho implements DiChuyen {
    public function di()
    {
        echo "Con chóa đi bằng 4 chân";
    }
}
class ConNguoi implements DiChuyen {
    public function di()
    {
        echo "Con người đi bằng 2 chân";
    }
}
class Oto implements DiChuyen {
    public function di()
    {
        echo "Ô tô đi bằng 4 bánh";
    }
}

//tạo 2 class MayBay và ConChim
// xác định nên sử dụng abstract hay interface cho 2 class này và tìm ra phương thức trìu tượng
// cho 2 class trên