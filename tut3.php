<?php
    require("db_connect.php");
    $query_students = "SELECT * FROM student ORDER BY student_id";
    $student_statement == $db->prepare($query_students);
    $student_statement ->execute();
    $students = $student_statement->fetchAll();
    $student_statement->closeCursor();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <link rel="stylesheet" type="text/css" href="main.css">
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
      <?php foreach($students as $student) : ?>
        <tr>
            <td><?php echo $student["student_id"]; ?></td>
            <td><?php echo $student["first_name"] . " " . $student["last_name"] ?></td>
            <td><?php echo $student["email"]; ?></td>
            <td><?php echo $student["student_id"]; ?></td>
            <td><?php echo $student["student_id"]; ?></td>
        </tr>

    </table>
    <h3>Insert Student</h3>
    <form action="add_student.php" method="post"
      id="add_student_form">
      <label>First Name : </label>
      <input type="text" name="first_name"><br>
      <label>Last Name : </label>
      <input type="text" name="last_name"><br>
      <label>Email : </label>
      <input type="text" name="email"><br>
      <label>Street : </label>
      <input type="text" name="street"><br>
      <label>City : </label>
      <input type="text" name="city"><br>
      <label>State : </label>
      <input type="text" name="state"><br>
      <label>Zip Code : </label>
      <input type="text" name="zip"><br>
      <label>Phone : </label>
      <input type="text" name="phone"><br>
      <label>Birth Date : </label>
      <input type="text" name="birthdate"><br>
      <label>Sex : </label>
      <input type="text" name="sex"><br>
      <label>Lunch Cost : </label>
      <input type="text" name="lunch"><br>
      <input type="submit" value="Add Student"><br>
    </form>
</body>
</html>