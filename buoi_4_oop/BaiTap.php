<?php

// tạo một class GiangVien gồm có các thuộ tính:
// maGV,tenGV,namSinh,namBatDau,luongCB,soGioDay
// tạo method set cho các thuộc tính sau
// khởi tạo 1 đối tượng gv và thực hiện gọi hàm set 
// tạo hienThiThongTin() gồm
// mã GV, tên GV, tuổi, số năm đã đi làm
// lương cb, số giờ đã dạy

class GiangVien {
    public $maGV = '';
    public $tenGV = '';
    public $namSinh = '';
    public $namBatDau = '';
    public $luongCB = '';
    public $soGioDay = '';

    public function __construct($maGV = '', $tenGV = '', $namSinh = '', $namBatDau = '',$luongCB = '',$soGioDay = '') {
        $this->maGV = $maGV;
        $this->tenGV = $tenGV;
        $this->namSinh = $namSinh;
        $this->namBatDau = $namBatDau;
        $this->luongCB = $luongCB;
        $this->soGioDay = $soGioDay;
    }

    public function setMaGV($maGV) {
        $this->maGV = $maGV;
    }
    public function settenGV($tenGV) {
        $this->tenGV = $tenGV;
    }
    public function setNamSinh($namSinh) {
        $this->namSinh = $namSinh;
    }
    public function setnamBatDau($namBatDau) {
        $this->namBatDau = $namBatDau;
    }
    public function setLuongCB($luongCB) {
        $this->luongCB = $luongCB;
    }
    public function setSoGioDay($soGioDay) {
        $this->soGioDay = $soGioDay;
    }

    public function hienThiThongTin(){
        echo $this->maGV. "<br>";
        echo $this->tenGV. "<br>";
        echo "tuổi:". date("Y")- $this->namSinh . "<br>";
        echo "số năm đi làm:". date("Y")- $this->namBatDau . "<br>";
        echo $this->luongCB. "<br>";
        echo $this->soGioDay. "<br>";
    }

}

$gv = new GiangVien();

$gv->setMaGV("PH01"); 
$gv->settenGV("Nguyễn Văn A"); 
$gv->setNamSinh("2004"); 
$gv->setnamBatDau("2019"); 
$gv->setLuongCB("3000000"); 
$gv->setSoGioDay("30"); 

$gv->hienThiThongTin();
