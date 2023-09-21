<?php 
    $first_name = filter_input(INPUT_POST, "first_name");
    $last_name = filter_input(INPUT_POST, "last_name");
    $email = filter_input(INPUT_POST, "email");
    $street = filter_input(INPUT_POST, "street");
    $city = filter_input(INPUT_POST, "city");
    $state = filter_input(INPUT_POST, "state");
    $zip = filter_input(INPUT_POST, "zip");
    $phone = filter_input(INPUT_POST, "phone");
    $birth_date = filter_input(INPUT_POST, "birthdate");
    $sex = filter_input(INPUT_POST, "sex");
    $lunch_cost = filter_input(INPUT_POST, "lunch", FILTER_VALIDATE_FLOAT);
    $date_entered = date("Y-m-d H:i:s");
    $student_id = filter_input(INPUT_POST, "student_id", FILTER_VALIDATE_INT);
    //Verify input data
    if($first_name == null || $last_name == null || $email == null || 
    $street == null || $city == null || $state == null || $zip == null || $phone == null || 
    $birth_date == null || $sex == null || $lunch_cost == false || $student_id == null ){
        $err_msg = "All values not entered <br>";
        include("db_err.php");
    } elseif(!preg_match("/[a-zA-Z]{3,30}$/", $first_name)){
        $err_msg = "First name not valid <br>";
        include("db_err.php");
    } elseif(!preg_match("/[a-zA-Z]{3,30}$/", $last_name)){
        $err_msg = "Last name not valid <br>";
        include("db_err.php");
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $err_msg = "Email not valid <br>";
        include("db_err.php");
    } elseif(!preg_match("/^[a-zA-Z0-9 ,#'\/.]{3,50}$/", $street)){
        $err_msg = "Street not valid <br>";
        include("db_err.php");
    } elseif(!preg_match("/^[a-zA-Z\- ]{2,60}$/", $city)){
        $err_msg = "City not valid <br>";
        include("db_err.php");
    } elseif(!preg_match("/^(?:A[KLRZ]|C[AOT]|D[CE]|FL|GA|HI|I[ADLN]|K[SY]|LA|M[ADEINOST]|N[CDEHJMVY]|O[HKR]|PA|RI|S[CD]|T[NX]|UT|V[AT]|W[AIVY])*$/", $state)){
        $err_msg = "State Not Valid<br>";
        include('db_error.php');
    } elseif(!preg_match("/[0-9]{5}$/", $zip)){
        $err_msg = "Zip Not Valid<br>";
        include('db_error.php');
    } elseif(!preg_match("/(([0-9]{1})*[- .(]*([0-9]{3})[- .)]*[0-9]{3}[- .]*[0-9]{4})+$/", $phone)){
        $err_msg = "Phone Not Valid<br>";
        include('db_error.php');
    } elseif(!preg_match("/[0-9- ]{8,12}$/", $birth_date)){
        $err_msg = "Birth Date Not Valid<br>";
        include('db_error.php');
    } elseif(!preg_match("/[MFmf]{1}$/", $sex)){
        $err_msg = "Sex Not Valid<br>";
        include('db_error.php');
    } else{
        require_once("db_connect.php");
        $query = "UPDATE students SET first_name = :first_name, 
        last_name = :last_name, email = :email, street = :street, 
        city = :city, state = :state, zip = :zip, phone = :phone, 
        birth_date = :birth_date, sex = :sex, lunch_cost = :lunch_cost 
        WHERE student_id = :student_id";  
        $stm = $db->prepare($query);
        $stm->bindValue(":first_name", $first_name); 
        $stm->bindValue(":last_name", $last_name); 
        $stm->bindValue(":email", $email); 
        $stm->bindValue(":street", $street); 
        $stm->bindValue(":city", $city); 
        $stm->bindValue(":state", $state); 
        $stm->bindValue(":zip", $zip); 
        $stm->bindValue(":phone", $phone); 
        $stm->bindValue(":birth_date", $birth_date); 
        $stm->bindValue(":sex", $sex); 
        $stm->bindValue(":lunch_cost", $lunch_cost); 
        $stm->bindValue(":date_entered", $date_entered); 
        $stm->bindValue(":student_id", $student_id); 
        $execute_success = $stm->execute();
        $stm->closeCursor(); 
        if(!$execute_success){
            print_r($stm->errorInfo()[2]);
        }
    }
    require_once("db_connect.php");
    $query_student = "SELECT * FROM students ORDER BY student_id";
    $student_statement = $db->prepare($query_student);
    $student_statement->execute();
    $students = $student_statement->fetchAll();
    $student_statement->closeCursor();
?>