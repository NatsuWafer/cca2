<?php

require_once 'dbh.inc.php';


if (isset($_POST["submit"])) {

    $title = $_POST['title'];
    $username = $_POST['username'];
    $file_path = $_POST['file_path'];
    
    header("location: feedback.php");
    exit();
}
    

