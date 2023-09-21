<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <?php 
        class Animal implements Singable{
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
                echo $this->id . " has been assigned<br>";
                Animal::$number_of_animal++; 
            }
            public function __destruct(){
                echo $this->name . " is being destroyed";
            }
            function __get($name){
                echo "Asked for " . $name . "<br>";
                return $this->$name;
            }
            function __set($name, $value){
                switch($name){
                    case "name": 
                        $this->name = $value;
                        break;
                    case "favourite_food": 
                        $this->favourite_food = $value;
                        break;
                    case "sound": 
                        $this->sound = $value;
                        break;
                    default:
                        echo $name . " not found <br>";
                }
                echo "Set " . $name . " to " . $value . "<br>";
            }
            function run(){
                echo $this->name . " runs<br>";
            }
            final function what_is_good(){
                echo "Running is good<br>";
            }
            function __toString(){
                return $this->name . " says " . $this->sound . 
                " give me some " . $this->favourite_food . " my id is " . 
                $this->id . " total animals = " . Animal::$number_of_animal . "<br>";
            }
            static function add_these($num1, $num2){
                return ($num1 + $num2) . "<br>";
            }
            public function sing(){
                echo $this->name . " sings Grr grr grr<br>";
            }
        }
        class Dog extends Animal implements Singable{
            function run(){
                echo $this->name ." runs like crazy<br>";
            }
            public function sing(){
                echo $this->name . " sings Bow wow wow<br>";
            }
        }

        interface Singable{
            public function sing();
        }

        $animal_two = new Dog();
        $animal_two->name = "Glover";
        $animal_two->favourite_food = "Mushrooms";
        $animal_two->sound = "Grrrrr";
        echo $animal_two->name . " says " . $animal_two->sound . 
        " give me some " . $animal_two->favourite_food . " my id is " . 
        $animal_two->id . " total animals = " . Dog::$number_of_animal . "<br>";
        echo "Favourite Number " . Dog::PI . "<br>";
        
        $animal_one = new Animal();
        $animal_one->name = "Spot";
        $animal_one->favourite_food = "Meat";
        $animal_one->sound = "Ruff";
        echo $animal_one->name . " says " . $animal_one->sound . 
        " give me some " . $animal_one->favourite_food . " my id is " . 
        $animal_one->id . " total animals = " . Animal::$number_of_animal . "<br>";
        echo "Favourite Number " . Animal::PI . "<br>";

        function make_them_sing(Singable $singable_animal){
            $singable_animal->sing();
        }
        make_them_sing($animal_one);
        make_them_sing($animal_two);
        echo "3 + 5 = " . Animal::add_these(3, 5);

        $is_it_an_animal = ($animal_two instanceof Animal) ? "True" : "False";
        echo $is_it_an_animal . "<br>";

    ?>
</body>
</html>