<?php 
include "./Student.php";
$sv1 = new Student('Nguyen chi ninh', 'ph30236','30');
$name = $sv1->name;
$mssv = $sv1->mssv;

$getName = $sv1->getName();

echo $name;
echo $mssv;

// khai bao class an danh  (anonymous)
$anonymous = new class(){
    public $name = "Ninh";
    function setName($name){
        $this->name = $name;
    }
};
// phuong thuc an danh
$tinhtong = function($x, $y){
    return ($x + $y);
};
$anonymous->setName('Dieu');
echo $anonymous->name;

// bind to closure object dung de doc 1 bien private trong class

$go = function(){
    return $this->stk;
};

// gan doi tuong sv1 vao go ma ko anh huong den sv1
$to = $go->bindTo($sv1,$sv1);

echo $to();
?>