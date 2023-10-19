
<?php

include_once 'dbh.inc.php';
include_once 'header.php';

if (isset($_POST['uploadButton'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $username = mysqli_real_escape_string($conn, $_SESSION['useruid']);
    $userId = mysqli_real_escape_string($conn, $_SESSION['userid']);
    $file = $_FILES['fileUpload'];
    $fileName = $_FILES['fileUpload']['name'];
    $fileTmpName = $_FILES['fileUpload']['tmp_name'];
    $fileSize = $_FILES['fileUpload']['size'];
    $fileError = $_FILES['fileUpload']['error'];
    $fileType = $_FILES['fileUpload']['type'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('pdf', 'jpeg', 'jpg', 'png');
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 50000000) {  
                $fileNameNew = uniqid('', true);
                $fileDestination = './uploads/' . $fileNameNew . '.' . $fileActualExt;
                move_uploaded_file($fileTmpName, $fileDestination);
                $sql = "INSERT INTO files (usersId, usersUid, title, file_path) VALUES ('$userId', '$username', '$title', '$fileDestination')";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: uploads.php?error=stmtfailed");
                    exit();
                }
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
                header("location: uploads.php?error=none");
                    exit();
            } 
            else {
                header("location: uploads.php?error=filetoolarge");
                    exit();
            }
        } 
        else {
            header("location: uploads.php?error=erruploadingfile");
                    exit();
        }
    } 
    else {
        header("location: uploads.php?error=invalidfiletype");
                    exit();
    }
 
}

?>