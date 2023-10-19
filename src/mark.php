<?php
    require_once 'dbh.inc.php';

    $sql = "SELECT * FROM files";
    $all_files = $conn->query($sql);
?>

<?php
    include_once 'header.php';

?>
    <nav class="main-menu">
        <div class="mm">
            <a href="uploads.php"><i class="fa-solid fa-upload"></i> Submit your essay</a>
            <a href="mark.php"><i class="fa-solid fa-marker"></i> Mark an essay</a>
        </div>
    </nav>

    <section class="rectangle">
        <?php
            while($row = mysqli_fetch_assoc($all_files)) {
        ?>
        <form class="card" action="feedback.php" method="post">
            <input type="hidden" name="title" value="<?php echo $row["title"]; ?>">
            <input type="hidden" name="username" value="<?php echo $row["usersUid"]; ?>">
            <input type="hidden" name="file_path" value="<?php echo $row["file_path"]; ?>">
            <input type="hidden" name="fileId" value="<?php echo $row["fileId"]; ?>">
            <div class="caption">
                <p class="essayTitle"><?php echo $row["title"]; ?></p>
                <p class="essayAuthor">By: <?php echo $row["usersUid"]; ?></p>
            </div>
            <button type="submit" name="submit" class="markButton">Mark</button>
        </form>
        <?php

            }
        ?>
    </section>


<?php
    include_once 'footer.php';
?>
   

