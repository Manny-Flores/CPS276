<?php
    session_start();
    /* DELETE THE SESSION VALUES*/
    session_unset();
    setcookie("PHPSESSID", "", time() - 3600, "/");
    
    header('Location: index.php?page=login');
?>