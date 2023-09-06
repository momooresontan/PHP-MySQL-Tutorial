<?php 
    DEFINE("DB_USER", "studentwebphp");
    DEFINE("DB_PASSWORD", "studentwebphp");

    $dsn = "mysql:host=localhost;dbname=students";
    try{
        $db = new PDO($dsn, DB_USER, DB_PASSWORD);
    }catch(PDOException $e){
        $err_msg = $e->getMessage();
        include("db_err.php");
        exit();
    }
?>