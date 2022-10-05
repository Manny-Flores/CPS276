<?php
    class MyClass {
        public function getGreeting($number){
            return "Hello World! My favorite number is ".$number;
        }
        public function hello($number){
            echo $this->getGreeting($number);
        }
    }
    $obj = new MyClass;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <title>Object Oriented Programming 2</title>
</head>
<body>
    <h1> <?php $obj->hello(5); ?> </h1>
</body>
</html>