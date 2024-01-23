<?php

// khởi tạo class ConNguoi
// thêm thuộc tính : họ tên, địa chỉ , năm sinh
// 

class ConNguoi {
    public $hoTen;
    public $namSinh;
    public $diaChi;

    public function __construct($hoTen, $namSinh, $diaChi){
        $this->hoTen = $hoTen;
        $this->namSinh = $namSinh;
        $this->diaChi = $diaChi;
    }

    public function tinhTuoi(){
        return date('Y') - $this->namSinh;
    }

    public function hienThiThongTin(){
        echo $this->hoTen . '-' . $this->namSinh . '-' . $this->diaChi; 
    }
}

class HocSinh extends ConNguoi{
    public $diemToan;
    public $diemLy;
    public $diemHoa;

    public function __construct($hoTen,$namSinh,$diaChi,$diemToan,$diemLy,$diemHoa)
    {
        parent::__construct($hoTen,$namSinh,$diaChi);
        $this->diemToan = $diemToan;
        $this->diemLy = $diemLy;
        $this->diemHoa = $diemHoa;
    }

    public function tinhDiem(){
        return ($this->diemToan + $this->diemLy + $this->diemHoa) / 3;
    }

    public function hienThiThongTinSinhVien()
    {
        echo $this->hienThiThongTin(). '-' . $this->tinhDiem();
    }
}

$hs = new HocSinh('Tú', '2004', 'Hòa Bình', 6,7,8);
$hs->hienThiThongTinSinhVien();