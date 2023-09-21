<?php 
    $student_id = filter_input(INPUT_POST, "student_id", FILTER_VALIDATE_INT);
    if($student_id == null){
        $err_msg = "Student ID not entered <br>";
        include("db_err.php");
    } else{
        require_once("db_connect.php");
        $query = "DELETE FROM students WHERE student_id = :student_id";
        $stm = $db->prepare($query);
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
<!DOCTYPE HTML>
 <html lang="en">
   <head>
     <meta charset="UTF-8">
     <title>PHP Tutorial</title>
     <link rel="stylesheet" type="text/css" href="main.css" />
   </head>
   <body>
     <h3>Student List</h3>
     <table>
       <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Email</th>
         <th>Street</th>
         <th>City</th>
         <th>State</th>
         <th>Zip</th>
         <th>Phone</th>
         <th>BD</th>
         <th>Sex</th>
         <th>Entered</th>
         <th>Lunch</th>
       </tr>
       <!-- Get an array from the DB query and cycle
       through each row of data -->
       <?php foreach($students as $student) : ?>
         <tr>
           <!-- Print out individual column data -->
           <td><?php echo $student['student_id']; ?></td>
           <td><?php echo $student['first_name'] . ' ' . $student['last_name']; ?></td>
           <td><?php echo $student['email']; ?></td>
           <td><?php echo $student['street']; ?></td>
           <td><?php echo $student['city']; ?></td>
           <td><?php echo $student['state']; ?></td>
           <td><?php echo $student['zip']; ?></td>
           <td><?php echo $student['phone']; ?></td>
           <td><?php echo $student['birth_date']; ?></td>
           <td><?php echo $student['sex']; ?></td>
           <td><?php echo $student['date_entered']; ?></td>
           <td><?php echo $student['lunch_cost']; ?></td>
         </tr>
       <!-- Mark the end of the foreach loop -->
       <?php endforeach; ?>
     </table>
     <h3>Delete Student</h3>
     <form action="delete_student.php" method="post"
       id="delete_student_form">
       <label>Student ID : </label>
       <input type="text" name="student_id"><br>
       <input type="submit" value="Delete Student"><br>
     </form>
   </body>
 </html>