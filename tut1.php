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
        //switch case
        // $age = 16;
        // switch($age) {
        //     case ($age < 5): 
        //         echo "Stay at home <br>";
        //         break;
        //     case ($age == 5): 
        //         echo "Go to Kindergaton <br>";
        //         break;
        //     case in_array($age, range(6, 17)):
        //         $grade = $age - 5;
        //         echo "Go to grade $grade";
        //         break;            
        //     default: 
        //         echo "Go to college <br>";
        //         break;
        // }
        //Tenary operator
        // $age = 18;
        // $can_vote = ($age >= 18) ? "Can vote" : "Cannot vote";
        // echo "Vote?: $can_vote <br>";

        // if(10 === "10"){
        //     echo "They are equal <br>";
        // } else {
        //     echo "They aren't equal <br>";
        // }
        //formats
        //printf("%c %d %.2f %s <br>", 67, 65, 1.234, "String");
        //String functions
        // $rand_str = "             Random String                 ";
        // printf("Length: %d <br>", strlen($rand_str));
        // printf("Length: %d <br>", strlen(ltrim($rand_str)));
        // printf("Length: %d <br>", strlen(rtrim($rand_str)));
        // printf("Length: %d <br>", strlen(trim($rand_str)));
        
        // $rand_str = trim($rand_str);
        // printf("Upper: %s <br>", strtoupper($rand_str));
        // printf("Lower: %s <br>", strtolower($rand_str));
        // printf("UC: %s <br>", ucfirst($rand_str));
        // printf("1st 6: %s <br>", substr($rand_str, 0, 6));
        // printf("Index : %s <br>", strpos($rand_str, "String"));
        // $rand_str = str_replace("String", "Characters", $rand_str);
        // printf("Replace: %s <br>", $rand_str);
        // printf("A == B: %d <br>", strcmp("B", "A"));

        $friends = array("Lana", "Murewa", "FeyinT", "Sammy");
        echo "Best friend: " . $friends[1] . "<br>";
        $friends[4] = "Ade";
        foreach ($friends as $f){
            printf("Friend: %s<br>", $f);
        }
        $me_info = array("Name"=> "MoMo", "Street"=>"123 Main");
        foreach($me_info as $k => $v){
            printf("%s: %s<br>", $f);
        }

        


    ?>

</body>
</html>