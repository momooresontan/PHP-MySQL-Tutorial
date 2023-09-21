<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <?php 
        class Animal{
            protected $name;
            protected $favourite_food;
            protected $sound;
            protected $id;

            public static $number_of_animal = 0;
            const PI = "3.14159";
            function getName(){
                return $this->name;
            }
            function __construct(){
                $this->id = rand(100, 1000000);
                echo $this->id . "has been assigned<br>";
                Animal::$number_of_animal++; 
            }
        }
    ?>
</body>
</html>