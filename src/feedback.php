<?php
    include_once 'dbh.inc.php';
    include_once 'feedback.inc.php';
    include_once 'header.php';
    
    $title = $_POST['title'];
    $username = $_POST['username'];
    $file_path = $_POST['file_path'];
    $fileId = $_POST['fileId'];
    $commentUser = $_SESSION['useruid'];

    
    date_default_timezone_set('Australia/Brisbane');

    $file_extension = pathinfo($file_path, PATHINFO_EXTENSION);


?>
    <nav class="main-menu">
        <div class="mm">
            <a href="uploads.php"><i class="fa-solid fa-upload"></i> Submit your essay</a>
            <a href="mark.php"><i class="fa-solid fa-marker"></i> Mark an essay</a>
        </div>
    </nav>
    
    <section>
        <div class="feedbackTitle">
            <h1><?php echo $title; ?></h1>
            <h2>By: <?php echo $username; ?></h2>
        </div>
        <div class="feedbackSection">
            <?php
                if (in_array($file_extension, ['pdf'])) {
                    echo '<iframe src="' . $file_path . '" width="900px" height="700px" class="document"></iframe>';
                }
                else if (in_array($file_extension, ['jpg', 'jpeg', 'png'])) {
                    echo '<img src="' . $file_path . '" width="800px" height="900px" class="document">';
                }
                else {
                    echo 'Unsupported file type.';
                }
            ?>
            <div class="commentSection">
                <?php
                echo "<form class='inputBox' method='POST' action='".setComments($conn)."'>
                        <input type='hidden' name='fileId' value='" .  $fileId ."'>
                        <input type='hidden' name='title' value='" .  $title ."'>
                        <input type='hidden' name='username' value='" .  $username ."'>
                        <input type='hidden' name='file_path' value='" .  $file_path ."'>
                        <input type='hidden' name='commentUser' value='" .  $commentUser ."'>
                        <input type='hidden' name='date' value='" . date('Y-m-d H:i:s') . "'>
                        <textarea name='feedback'required></textarea>
                        <button type='submit' name='commentButton' class='commentButton'>Comment</button>
                </form>";
                getComments($conn);
                ?>
            </div>
        </div>
    </section>