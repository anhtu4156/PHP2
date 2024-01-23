<?php

// abstract là bản thiết kế có sẵn có chung các hành động và bản chất
// 1 class được gọi là class trừu tượng khi nó có phương thức trừu tượng
// class trừu tượng không thể khởi tạo
// nhưng vẫn có phương thức và thuộc tính như class bình thường

// abstract = trừu tượng
abstract class DongVat{
    // class trừu tượng 
    abstract public function di();
    abstract public function noi();

}

class ConNguoii extends DongVat{
    public function di(){
        echo 'Con người đi bằng 2 chân';
    }
    public function noi(){
        echo 'Con người nói bằng miệng';
    }
}

class ConCho extends DongVat{
    public function di(){
        echo 'Con người đi bằng 4 chân';
    }
    public function noi(){
        echo 'Con chó sủa gâu gâu';
    }
}

$cn = new ConNguoii();
$cn->di();