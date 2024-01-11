<?php

class Animal{
    public $chan;
    public $canh;
    public $long;
    public $mom;
    public $tiengKeu;

    public $soThich;

    public function setSothich($soThich){
        $this->soThich = $soThich;
    }
    public function soThich(){
        echo "";
    }

    public function keu(){
        echo "Tiếng kêu: ".$this->tiengKeu;
    }

    public function setChan($chan){
        $this->chan = $chan;
    }
    public function setCanh($canh){
        $this->canh = $canh;
    }
    public function setLong($long){
        $this->long = $long;
    }
    public function setTiengKeu($tiengKeu){
        $this->tiengKeu = $tiengKeu;
    }

}

class Dog extends Animal{

    public $ten;
    public function giuNha(){
        echo "Con chó giữ nhà";
    }

    public function di(){
        echo "con chó đi bằng " . $this->chan . " chân"; 
    }

    

}

class Cat extends Animal{
    
    public $mau;
    public function soThich(){
        echo "con mèo có sở thích " . $this->soThich;
    }
    public function di(){
        echo "con mèo đi bằng " . $this->chan . " chân"; 
    }

}

class Bird extends Animal{
    public $mau;

    public function bay(){
        echo "chim bay bằng " . $this->canh . " cánh";
    }
}

$cho = new Dog();
$meo = new Cat();
$chim = new Bird();

$cho->setChan(4);
$cho->setTiengKeu("gâu gâu");
$meo->setChan(4);
$meo->setSothich("bắt chuột");
$meo->setTiengKeu("meo meo");
$chim->setCanh(2);
$chim->setTiengKeu("chíp chíp");


$cho->di();
echo "<br>";
$cho->giuNha();
echo "<br>";
$cho->keu();
echo "<br>";
echo "<br>";
$meo->di();
echo "<br>";
$meo->soThich();
echo "<br>";
$meo->keu();
echo "<br>";
echo "<br>";
$chim-> bay();
echo "<br>";
$chim->keu();