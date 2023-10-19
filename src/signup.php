<?php
    include_once 'header.php';
?>

    <!--Login form-->
    <main>
        <div class="modal">
            <span class="loc">Sign Up</span>
            <form action="signup.inc.php" method="post" class="loginBlock">
                <input type="text" name="name" id="name" placeholder="Full Name" required>
                <input type="email" name="email" id="email" placeholder="Email">
                <input type="text" name="uid" id="uid" placeholder="Username" required>
                <input type="password" name="register_password" id="register_password" placeholder="Password" required>
                <input type="password" name="re_password" id="re_password" placeholder="re_type password" required>
                <input class="registerButton" type="submit" id="register" name="submit" value="Sign Up">
            </form>
    </main>

    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields.</p>";
            }
            else if ($_GET["error"] == "invalidusername") {
                echo "<p class='message'>Choose a proper username.</p>";
            }
            else if ($_GET["error"] == "invalidemail") {
                echo "<p class='message'>This email does not work.</p>";
            }
            else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p class='message'>Passwords doesn't match.</p>";
            }
            else if ($_GET["error"] == "stmtfailed") {
                echo "<p class='message'>Something went wrong, try again!</p>";
            }
            else if ($_GET["error"] == "usernametaken") {
                echo "<p class='message'>Username already taken. Choose another uername.</p>";
            }
            else if ($_GET["error"] == "none") {
                echo "<p class='message'>Sign up successful! Please log in.</p>";
            }
        }

    ?>

    

<?php
    include_once 'footer.php';
?>