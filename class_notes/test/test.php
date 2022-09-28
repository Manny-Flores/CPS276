<?php
$hello = "Hello World";
$name = "Manny";

$arr = [1, 2, 3, 4];
$assarr = array("fname"=>"Manny", "lname"=>"Flores");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <title>PHP</title>
</head>
<body>
    <h1><?php
        echo $hello;
    ?></h1>
    <p><?php echo "this is PHP!"; ?></p>
    <?php
        $myVariable = 3;

        $a="green";
        $b=45;
        $c=3.14;
        $d=true;
        $e=array();
        $f=null;

        //COMMENT
        /*
            BIG COMMENT
            LOL
        */
    ?>

    <p><?php echo 2 + $myVariable; ?></p>

    <p><?php
        echo "\$a is a ".gettype($a)."<br>";
        echo "\$b is a ".gettype($b)."<br>";
        echo "\$c is a ".gettype($c)."<br>";
        echo "\$e is a ".gettype($d)."<br>";
        echo "\$f is a ".gettype($e)."<br>";
        echo "\$g is a ".gettype($f)."<br>";

        echo "\$b cast to a string is a ".gettype((string)$b)."<br>";
    ?></p>

    <p><?php
        print_r($arr);
    ?></p>

<p><?php
        print_r($assarr);
    ?></p>
</body>
</html>