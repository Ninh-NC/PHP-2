<?php 
class Student{
    public $name = 'Nguyen Chi Ninh';
    public $mssv = "Ph";
    private $stk = "9999";
    function getName(){
        return $this->name;
    }
    // khoi tao gia tri ban dau cho cac bien cua class
    public function __construct($name, $mssv,$stk){
        $this->name = $name;
        $this->mssv = $mssv;
        $this->stk = $stk;
    }
    public function __destruct()
    {
        
    }
   
};
?>