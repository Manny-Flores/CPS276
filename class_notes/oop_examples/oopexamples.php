<?php
    class Car {
        const HATCHBACK = 1;
        const STATION_WAGON = 2;
        const SUV = 3;
        public $color;
        public $manufacturer;
        static public $numberSold = 123;

        public static function calcMpg($miles, $gallons){
            return($miles/$gallons);
        }

        public static function displayMpg($miles, $gallons){
            echo "This car's MPG is: ".self::calcMpg($miles, $gallons);
        }
    }
    $beetle = new Car();
    $beetle->color = "red";
    $beetle->manufacturer = "Volkswagen";
    $mustang = new Car();
    $mustang->color = "green";
    $mustang->manufacturer = "Ford";

    $beetle->color."<br>";
    $beetle->manufacturer."<br>";
    $mustang->color."<br>";
    $mustang->manufacturer."<br>";

    Car::$numberSold++;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <title>Object Oriented Programming</title>
</head>
<body>
    <p> <?php print_r($beetle); ?></p>
    <p> <?php print_r($mustang); ?></p>
    <p> <?php echo Car::$numberSold; ?></p>
    <p> <?php echo Car::displayMpg(168, 6); ?></p>
</body>
</html>