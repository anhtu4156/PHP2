<?php

class ConNguoi{
    // khai báo biến
    public $tay;
    public $chan;
    public $mat;
    public $mui;

    public function an(){
        echo "ăn bằng miệng";
    }

    public function setTay($tay){
        $this->tay = $tay;
    }
    public function setChan($chan){
        $this->chan = $chan;
    }
}

class NguoiLon extends ConNguoi{
    // đối với các class con có thể chứa các thuộc tính và phương thức riêng tự khai báo
    public $rau;
    public $longNach;

    public function di(){
        echo "Người lớn đi bằng ". $this->chan . " chân";
    }
}

class TreCon extends ConNguoi{


    public function bo(){
        echo "Trẻ con bò bằng ". $this->tay . " tay và " . $this->chan . " chân";
    }
}

// khởi tạo đối tượng người lớn đi bằng 2 chân và hiển thị

$nl = new NguoiLon();
$nl->setChan(2);
$nl->di();
echo "<br>";
$tc = new TreCon();
$tc->setChan(2);
$tc->setTay(2);
$tc->bo();
