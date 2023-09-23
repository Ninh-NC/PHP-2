<?php 
    include "./Product.php";
    include "./Compare.php";
    include "./Shoes.php";

    $shoes = new Shoes("v","20do","trang","viet name",'X',"the thao","anh2");
    echo $shoes->test();
?>