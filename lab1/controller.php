<?php 
    include "./model.php";
    $list_of_course = get_course();
    $semester = (!empty($_GET["semester"])) ? $_GET["semester"]:"";
    $course_name = find_by_semester($semester);
    $page_content = $course_name;

    // bai 3
    if(isset($_POST["submit"])){
    $email  = $_POST["email"];
    $user = get_user($email);
    }
    include "./views.php";
?>