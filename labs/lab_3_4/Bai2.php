<?php

class Person
{
    public $ten;
    public $tuoi;

    public function __construct($ten = '', $tuoi = '')
    {
        $this->ten = $ten;
        $this->tuoi = $tuoi;
    }
    public function getTen()
    {
        return $this->ten;
    }

    public function getTuoi()
    {
        return $this->tuoi;
    }
}

class Employee extends Person
{
    public $job;
    public $action;

    public function __construct($ten = '', $tuoi = '', $job = '', $action = '')
    {
        parent::__construct($ten, $tuoi); 
        $this->job = $job;
        $this->action = $action;
    }


    public function congViec()
    {
        echo "{$this->getTen()} có công việc là {$this->job} nên anh ta {$this->action}";
    }

}

class Manager extends Employee{
    public $phong;
    public function __construct($ten,$tuoi,$job,$action,$phong){
        parent::__construct($ten,$tuoi,$job,$action);
        $this->phong = $phong;
    }
    public function hienThiQuanLy(){
        echo "Quản lý thông tin: <br>";
        $this->congViec();
        echo "<br>";
        echo "Phòng: {$this->phong} <br>";
    }
}

$em = new Employee("Tú", "","IT", "Code");

$em->congViec();
echo "<br>";
$ma =new Manager("tú",19,"IT", "Code","P201");
$ma->hienThiQuanLy();
