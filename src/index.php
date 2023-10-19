<?php
    include_once 'header.php';
?>

    <!--Login form-->
    <nav class="main-menu">
        <div class="mm">
            <a href="uploads.php"><i class="fa-solid fa-upload"></i> Submit your essay</a>
            <a href="mark.php"><i class="fa-solid fa-marker"></i> Mark an essay</a>
        </div>
    </nav>
    <main>
        <h1 id="madeIt">Wow you made it!</h1>
        <?php
            if (isset($_SESSION["useruid"])) {
                echo "<p> Welcome " . $_SESSION["useruid"] . "</p>";
            }

        ?>
    </main>


<?php
    include_once 'footer.php';
?>