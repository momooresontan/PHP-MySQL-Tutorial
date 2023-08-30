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
    <!-- <p>Name: <?php echo $f_name ." ". $l_name; ?></p>
    <form action="tut1.php" method="get">
        <label for="state">Your State: </label>
        <input type="text" name="state" ><br>
        <label for="state">Number 1: </label>
        <input type="number" name="num1" ><br>
        <label for="state">Number 2: </label>
        <input type="number" name="num2" ><br>
        <input type="submit" value="submit">
    </form> -->
    <?php 
        // if(isset($_GET) && array_key_exists("state", $_GET)){
        //     $state = $_GET["state"];
        //     if(isset($state) && !empty($state)){
        //         echo "You live in " . $state . "<br>";
        //         echo "$f_name lives in $state <br>";
        //     }
        //     if(count($_GET) >= 3){
        //         $num1 = $_GET["num1"];
        //         $num2 = $_GET["num2"];
        //         echo "$num1 + $num2 = " . ($num1 + $num2) . "<br>";
        //         echo "$num1 - $num2 = " . ($num1 - $num2) . "<br>";
        //         echo "$num1 * $num2 = " . ($num1 * $num2) . "<br>";
        //         echo "$num1 / $num2 = " . ($num1 / $num2) . "<br>";
        //         echo "$num1 % $num2 = " . ($num1 % $num2) . "<br>";
        //         echo "$num1 / $num2 = " . (intdiv($num1, $num2)) . "<br>";

        //         echo "increment $num1 = " . ($num1++) . "<br>";
        //         echo "decrement $num1 = " . ($num1--) . "<br>";

        //         echo number_format(12345.678889, 2) . "<br>";
        //     }
        // }

        // $num_oranges = 4;
        // $num_bananas = 36;
        // if(($num_oranges > 25 && $num_bananas > 30)){
        //     echo "25% Discount <br>";
        // } elseif($num_oranges > 30 || $num_bananas > 35){
        //     echo "15% Discount <br>";
        // } elseif(!$num_oranges < 5 || !$num_bananas < 5){
        //     echo "5% Discount <br>";
        // } else{
        //     echo "No Discount <br>";
        // }
        $request = "Pepsi";
        switch($request) {
            case "Coke": 
                echo "Here is your Coke <br>";
                break;
            case "Pepsi": 
                echo "Here is your Pepsi <br>";
                break;
            default: 
                echo "Here is your water <br>";
                break;
        }

    ?>

</body>
</html>