<?php

// class là tập hợp của nhiều đối tượng có cùng thuộc tính
// khai báo class

class SinhVien
{
    // Khai báo thuộc tính (biến)
    public $maSv;
    public $tenSv;
    public $namSinh;

    // khai báo phương thức(hàm) không trả về và không tham số
    // public function getInfo()
    // {
    //     // trong lập trình hướng đối tượng, muốn sử dụng thuộc tính thì phải sử dụng biến $this-> tên thuộc tính
    //     echo $this->maSv . "-" . $this->tenSv . "-" . $this->namSinh;
    // }

    //khai báo phương thức có trả về
    // public function getMaSv(){
    //     return $this->maSv;
    // }

    // public function setMaSv($maSv){
    //     $this ->maSv = $maSv;
    // }

    // magic function
    public function __construct($maSv, $tenSv, $namSinh)
    {
        $this->maSv = $maSv;
        $this->tenSv = $tenSv;
        $this->namSinh = $namSinh;
    }
    public function setMaSv($ma){
        $this->maSv = $ma;
    }
    public function setTenSv($ten){
        $this->tenSv = $ten;
    }
    
    public function tinhTuoi(){
        return date('Y') - $this->namSinh;
    }
    // hiển thị all thông tin
    public function hienThi(){
        echo $this->maSv . "-" . $this->tenSv . "-" . $this->tinhTuoi();
    }

}

// khai báo đối tượng 
// $sv = new SinhVien();
// $sv->maSv="SV01";
// $sv->tenSv="Bùi Anh Tú";
// $sv->namSinh="2004";
// $sv->getInfo();

// khai báo đối tượng
// $sv1 = new SinhVien();
// // use method set trong class để thêm giá trị
// $sv1->setMaSv("PH34555");
// echo $sv1->getMaSv();

// khai báo đối tượng
$sv2 = new SinhVien("PH01", "A", "2003");
$sv2->setMaSv("ph2");
$sv2->hienThi();