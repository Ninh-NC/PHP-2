<?php 
    include "./Field.php";
    include "./Form.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Create an account</h1>
        <?php $form = Form::begin(" ","post")  ?>
        <div class="row">
            <div class="col">
                <?= $form->field('firstname') ?>
            </div>
            <div class="col">
                <?= $form->field('lastname') ?>
            </div>
        </div>
        <?= $form->field('email') ?>
        <?= $form->field('password')->passwordField() ?>
        <?= $form->field('confirmPassword')->passwordField() ?>
        <button type="submit" class="btn btn-primary">Submit</button>
        <?= Form::end() ?>
    </div>
</body>

</html>