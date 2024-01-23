<?php
// tạo abstract class hình học . 
// abstract function tính chu vi, diện tích
// tính tròn, vuông, chữ nhật 

abstract class HinhHoc{
    abstract public function chuVi();
    abstract public function dienTich();
    abstract public function hienThi();
}

class HinhTron extends HinhHoc{
    public $r;
    public const pi = 3.14;
    public function __construct($banKinh) {
        $this->r = $banKinh;
    }
    public function chuVi(){
        return 2* self::pi * $this->r;
    }
    public function dienTich()
    {
        return self::pi * pow($this->r, 2);
    }
    public function hienThi()
    {
        echo "Chu vi hình tròn:" . $this->chuVi() . "diện tích:" .$this->dienTich();   
    }

}

class HinhCN extends HinhHoc{
    public $dai;
    public $rong;
    public function __construct($dai,$rong) {
        $this->dai = $dai;
        $this->rong = $rong;
    }
    public function chuVi(){
        return ($this->dai + $this->rong) * 2;
    }
    public function dienTich()
    {
        return ($this->dai * $this->rong);
    }
    public function hienThi()
    {
        echo "Chu vi hình tròn:" . $this->chuVi() . "diện tích:" .$this->dienTich();   
    }
}

class HinhVuong extends HinhHoc{
    public $canh;
    public function __construct($canh) {
        $this->canh = $canh;
    }
    public function chuVi(){
        return $this->canh * 4;
    }
    public function dienTich()
    {
        return ($this->canh * $this->canh);
    }
    public function hienThi()
    {
        echo "Chu vi hình tròn:" . $this->chuVi() . "diện tích:" .$this->dienTich();   
    }
}

$ht = new HinhTron(3);
$ht->hienThi();
echo "<br>";
$hv = new HinhVuong(3);
$hv->hienThi();
echo "<br>";

$hcn = new HinhCN(3,4);
$hcn->hienThi();