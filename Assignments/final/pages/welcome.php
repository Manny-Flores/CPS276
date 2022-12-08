<?php
    if($_SESSION['status'] !== "staff" && $_SESSION['status'] !== "admin"){
        header('Location: index.php');
    }
    function init(){
        $name = "Random Person";
        if(isset($_SESSION['name'])){
            $name = $_SESSION['name'];
        }
        return ["<h1>Welcome</h1>", "<p>Welcome $name</p>"];
    }
?>