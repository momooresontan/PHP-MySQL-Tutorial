<?php 
    $student_id = filter_input(INPUT_POST, "student_id", FILTER_VALIDATE_INT);
    if($student_id == null){
        $err_msg = "Student ID not entered <br>";
        include("db_err.php");
    } else{
        require_once("db_connect.php");
    }
?>