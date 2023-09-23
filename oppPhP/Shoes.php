<?php 
    class Shoes extends Product implements Compare{
        var $size;
        var $type;
        private  $image;
        // pt ghi de tu interface Compare
        function compare()
        {
            echo "Hello Compare";
        }
        function sayHello()
        {
            echo "Say Hello";
        }
        // pt set/get để truy cập 1 biến private;
    
        function setImage($image){
            return $this->image = $image;
        }
        function getImage($image){
            return $this->image = $image;
        }
        public function __construct($name, $price, $color, $brand, $size, $type,$image)
        {
            parent::__construct($name, $price, $color, $brand);
            $this->size = $size;
            $this->type = $type;     
            $this->image = $image;     
        }
        function test(){
            echo $this->name;
            echo $this->price;
            // echo $this->color;
        }
    }
?>