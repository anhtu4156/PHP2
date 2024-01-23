<?php

// interface không phải là class cho nên nó sẽ không có thuộc tính và phương thức như class bình thường
// nhưng nó sẽ có phương thức trừu tượng;

interface DiChuyen{
    function di();// php sẽ tự động hiểu đây là phương thức trừu tượng vì nó có interface
}
class ConNguoi implements DiChuyen{
    public function di(){
        echo 'đi bằng 2 chân';
    }
}

class OTo implements DiChuyen{
    public function di(){
        echo 'đi bằng 4 bánh';
    }
}
// interface và abstract đều là bản thiết kế cho các dự án phần mềm
// interface là bản thiết cho các class có chung hành động nhưng khác bản chất(rộng hơn)
// abstract là bản thiết kế cho các class có chung hành động và chung bản chất