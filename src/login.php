<?php
    include_once 'header.php';
?>

    <!--Login form-->
    <main>
        <div id="loginForm" class="modal">
            <span class="loc">Login</span>
            <form action="login.inc.php" method="post" class="loginBlock">
                <input type="text" name="uid" id="uid" placeholder="Username/Email...">
                <input type="password" name="pwd" id="pwd" placeholder="Password">
                <input class="registerButton" name="submit" type="submit" value="Login">
            </form>
        </div>
    </main>

    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p class='message'>Fill in all fields.</p></div>";
            }
            else if ($_GET["error"] == "wronglogin") {
                echo "<p class='message'>Incorrect login information.</p>";
            }
        }

    ?>

<?php
    include_once 'footer.php';
?>