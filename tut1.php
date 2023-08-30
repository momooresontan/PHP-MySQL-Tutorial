<?php
    $f_name = "King";
    $l_name = "MoMo";
    $age = 22;
    $height = 1.76;
    $can_vote = true;
    $address = array("street"=>"Plot 8", "city"=>"Ibadan");
    $state = NULL;
    define("PI", 3.1452);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <p>Name: <?php echo $f_name ." ". $l_name; ?></p>
    <form action="tut1.php" method="get">
        <label for="state">Your State: </label>
        <input type="text" name="state" ><br>
        <label for="state">Number 1: </label>
        <input type="number" name="num1" ><br>
        <label for="state">Number 2: </label>
        <input type="number" name="num2" ><br>
        <input type="submit" value="submit">
    </form>
    <?php 
        if(isset($_GET) && array_key_exists("state", $_GET)){
            $state = $_GET["state"];
            if(isset($state) && !empty($state)){
                echo "You live in " . $state . "<br>";
                echo "$f_name lives in $state <br>";
            }
            if(count($_GET) >= 3){
                $num1 = $_GET["num1"];
                $num2 = $_GET["num2"];
                echo "$num1 + $num2 = " . ($num1 + $num2) . "<br>";
                echo "$num1 - $num2 = " . ($num1 - $num2) . "<br>";
                echo "$num1 * $num2 = " . ($num1 * $num2) . "<br>";
                echo "$num1 / $num2 = " . ($num1 / $num2) . "<br>";
                echo "$num1 % $num2 = " . ($num1 % $num2) . "<br>";
                echo "$num1 / $num2 = " . (intdiv($num1, $num2)) . "<br>";

                echo "increment $num1 = " . ($num1++) . "<br>";
            }
        }

    ?>

</body>
</html>