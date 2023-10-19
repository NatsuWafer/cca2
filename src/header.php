<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ae34529fc3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend">
    <title>Essarate</title>
</head>
<body id="login-page">
    <nav class="topnav">
        <div class="container">
            <a href="index.html" id="Essarate">Essarate</a>
        </div>
        <div class="login">

        <?php
            if (isset($_SESSION["useruid"])) {
                echo "<a href='logout.inc.php' class='loginButton'><i class='fa-solid fa-user'></i>Logout</a>";
            }
            else {
                echo "<a href='signup.php' class='loginButton'><i class='fa-solid fa-user'></i>Signup</a>";
                echo "<a href='login.php' class='loginButton'><i class='fa-solid fa-user'></i>Login</a>";
            }

        ?>
        </div>
    </nav>
<div class="wrapper">

