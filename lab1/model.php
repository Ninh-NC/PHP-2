<?php 
    $course = [
        's1' => 'course1',
        's2' => 'course2',
        's3' => 'course3',
    ];
    function get_course(){
        global $course;
        return (array_values($course));
    }
    function find_by_semester($semester){
        global $course;
        return(array_key_exists($semester,$course) ? $course[$semester]:"Khong ton tai");
    }
    // bai 3
    function get_user($email){
        include "./config.php";
        $sql = "SELECT * from user where email = ?";
        $stmt = $conn -> prepare($sql);
        $stmt ->bind_param("s",$email);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows >0){
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            return $row;
        }
        $conn ->close();
    }
?>