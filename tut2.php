<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <form action="tut2.php" method="post">
        <label for="email">Email: </label>
        <input type="text" name="email" ><br>
        <label for="number 1">Number 1: </label>
        <input type="number" name="num1" ><br>
        <label for="number 2">Number 2: </label>
        <input type="number" name="num2" ><br>
        <label for="website">Website: </label>
        <input type="text" name="website" ><br>
        <input type="submit" value="submit">
    </form>
    <?php
        if(isset($_POST["email"])){
            //INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER, INPUT_ENV
            if(!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)){
                echo "Email is not valid <br>";
            }
        } else{
            echo "Email is valid <br>";
        }
        if(isset($_POST["num1"]) && !empty($_POST["num2"])){
            $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $output = sprintf("%.1f + %.1f = %.1f", $num1, $num2, ($num1 + $num2));
            echo htmlspecialchars($output) . "<br>";
            if(isset($_POST["website"])){
                $website = filter_input()
            }
        }
    ?>
</body>
</html>