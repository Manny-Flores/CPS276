<?php
    session_start();
    $path = "logout.php";
    $nav = "";
    if(isset($_SESSION['status'])){
        if($_SESSION['status'] == "staff"){
            $nav = <<<HTML
        <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=addContact">Add Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=deleteContacts">Delete Contact(s)</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
    </ul>
HTML;
        }else if($_SESSION['status'] == "admin"){
            $nav = <<<HTML
        <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=addContact">Add Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=deleteContacts">Delete Contact(s)</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=addAdmin">Add Admin</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=deleteAdmins">Delete Admin(s)</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
    </ul>
HTML;
        }
    }

    if(isset($_GET)){
        if($_GET['page'] === "addContact"){
            require_once('pages/addContact.php');
            $result = init();
        }else if ($_GET['page'] === "addAdmin"){
            require_once('pages/addAdmin.php');
            $result = init();
        }else if ($_GET['page'] === "deleteContacts"){
            require_once('pages/deleteContacts.php');
            $result = init();
        }else if ($_GET['page'] === "deleteAdmins"){
            require_once('pages/deleteAdmins.php');
            $result = init();
        }else if ($_GET['page'] === "welcome"){
            require_once('pages/welcome.php');
            $result = init();
        }else if($_GET['page'] === "login"){
            require_once('pages/login.php');
            $result = init();
        }else{
            header('location: '.$path);
        }
    }else{
        header('location: '.$path);
    }
?>