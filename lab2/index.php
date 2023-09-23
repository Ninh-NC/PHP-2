<?php 
   require "./Database.php";

    // spl_autoload_register(function ($class){
    //     var_dump($class);
    // });
    use Core\Database as DB;
    $db = new DB;
    $hello = $db->hi();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>