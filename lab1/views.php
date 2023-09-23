<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= $page_content; ?>
    <form action="" method="get">
        <select name="semester" id="">
            <?php $i=1; foreach($list_of_course as $course_name){?>
            <option value="s<?= $i ?>"><?= $course_name ?></option>
            <?php $i++;}?>
        </select>
        <input type="submit">
    </form>
    <!-- bai 3  -->
    <?php  if(isset($_POST["submit"])){?>
    <?= $user['first_name'] ." ". $user['last_name'] ?>
    <?php }?>
    <form action="" method="post">
        <input type="email" name="email">
        <input type="submit" name="submit">
    </form>
</body>

</html>