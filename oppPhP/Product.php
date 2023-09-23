<?php 
    abstract class Product{
        public $name;
        protected $price;
        private $color;
        public $brand;
        
        abstract function sayHello();
       public function __construct($name, $price, $color, $brand)
       {
           $this->name = $name;
           $this->price = $price;
           $this->color = $color;
           $this->brand = $brand;
       }

}
?>