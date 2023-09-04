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
        //Array
        // $friends = array("Lana", "Murewa", "FeyinT", "Sammy");
        // echo "Best friend: " . $friends[1] . "<br>";
        // $friends[4] = "Ade";
        // foreach ($friends as $f){
        //     printf("Friend: %s<br>", $f);
        // }
        // $me_info = array("Name"=> "MoMo", "Street"=>"123 Main");
        // foreach($me_info as $k => $v){
        //     printf("%s: %s<br>", $k, $v);
        // }
        // $person = array("Doug");
        // $friends = $friends + $person;
        // sort($friends);
        // rsort($friends);
        // asort($me_info);
        // ksort($me_info);
        // arsort($me_info);
        // krsort($me_info);
        // $customers = array(array("Derek", "123 Main"), array("Sully", "122 Main"));
        // for($row = 0; $row < 2; $row++){
        //     for($col = 0; $col < 2; $col++){
        //         echo $customers[$row][$col] . ", " ;
        //     }
        //     echo "<br>";
        // }
        // $let_str = "A B C D";
        // $let_arr = explode(" ", $let_str);
        // foreach($let_arr as $l){
        //     printf("Letter: %s<br>", $l);
        // }
        // $let_str_2 = implode(" ", $let_arr); 
        // echo "String: $let_str_2 <br>";
        // printf("Key exists: %d<br>", array_key_exists("Momo", $me_info));
        // printf("In array: %d<br>", in_array("Sammy", $friends));
        //Loops
        // $i = 0;
        // while($i<10){
        //     echo ++$i . ", ";
        // }
        // echo "<br>";
        // for($i = 0; $i<10; $i++){
        //     if($i % 2 == 0 ){
        //         continue;
        //     }
        //     if( $i == 7) break;
        //     echo $i . ", ";
        // }
        // echo "<br>";
        // $i = 0;
        // do{
        //     echo "Do while: $i<br>";
        // } while( $i > 0);
        //Functions
        // function addNumbers($num1=0, $num2=0){
        //     return $num1 + $num2;
        // }
        // printf("5 + 4 = %d<br>", addNumbers(5, 4));
        
        // function changeMe(&$change){
        //     $change = 10;
        // }
        // $change = 5;
        // changeMe($change);
        // echo "Change: " . $change . "<br>";

        // function getSum(...$nums){
        //     $sum = 0;
        //     foreach($nums as $num){
        //         $sum += $num;
        //     }
        //     return $sum;
        // }
        // printf("Sum = %d<br>", getSum(10, 45, 700, 67, 20));

        // function doMath($x, $y){
        //     return array(
        //         $x + $y, 
        //         $x - $y
        //     );
        // }
        // list($sum, $difference) = doMath(5, 4);
        // echo "Sum = $sum<br>";
        // echo "Difference = $difference<br>";

        // function double($x){
        //     return $x * $x;
        // }
        // $list = [1, 2, 3, 4];
        // $double_list = array_map("double", $list);
        // print_r($double_list);
        // echo "<br>";
        // function mult($x, $y){
        //     $x *= $y;
        //     return $x;
        // }
        // $list = [1, 2, 3, 4];
        // $prod = array_reduce($list, "mult", 1);
        // print_r($prod);
        // echo "<br>";
        // function isEven($x){
        //     return ( $x % 2 == 0 );
        // }
        // $list = [1, 2, 3, 4];
        // $even_list = array_filter($list, 'isEven');
        // print_r($even_list);
        //Date
        // date_default_timezone_set("Africa/Lagos");
        // echo "Date : " .date("I F m-d-Y g:i:s A") ."<br>";
        // $important_date = mktime(0, 0, 0, 12, 21, 1974);
        // echo "Important date: " . date("I F m-d-Y g:i:s A", $important_date) ."<br>";
        //Include file in your php file
        //include "sayHello.php";
        //Exception handling
        // function badDivide($num){
        //     if($num == 0 ){
        //         throw new Exception("You cannot divide by zero");
        //     }
        //     return $calc = 100 / $num;
        // }
        // try{
        //     badDivide(0);
        // }catch(Exception $e){
        //     echo "Exception: " . $e->getMessage();
        // }



    ?>

</body>
</html>