<?php



function setComments($conn) {
    if(isset($_POST['commentButton'])) {
        $fileId = $_POST['fileId'];
        $title = $_POST['title'];
        $username = $_POST['username'];
        $file_path = $_POST['file_path'];
        $commentUser = $_POST['commentUser'];
        $date = $_POST['date'];
        $feedback = $_POST['feedback'];

        $sql = "INSERT INTO feedback (fileId, title, essayAuthor, file_path, commentUser, date, feedback) VALUES ('$fileId', '$title', '$username', '$file_path', '$commentUser', '$date', '$feedback')";
        $result = $conn->query($sql);
    }
}

function getComments($conn) {
    $fileId = $_POST['fileId'];
    $sql = "SELECT * FROM feedback WHERE fileId = $fileId";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='commentBox'>";
                echo $row['commentUser']."<br>";
                echo $row['date']."<br>";
                echo nl2br($row['feedback']);
            echo "</div>";
        }
    }
    else {
        echo "No comments for this essay.";
    }
    
}