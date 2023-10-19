
     
<?php
    include_once 'header.php';
?>
    <nav class="main-menu">
        <div class="mm">
            <a href="uploads.php"><i class="fa-solid fa-upload"></i> Submit your essay</a>
            <a href="mark.php"><i class="fa-solid fa-marker"></i> Mark an essay</a>
        </div>
    </nav>
    <section>
        <div class="submit_h1">
            <h1 id="submit2">Submit your essay</h1>
        </div>
    </section>

    <div class="submit">
        <form class="submitBlock" action="upload.inc.php" method="POST" enctype="multipart/form-data">
            <div class="subTitle">
                <h2 id="submitTitle">Title</h2>
            </div>
            <input id="title" type="text" name="title" placeholder="title of essay" required>
            <div class="subTitle">
                <h2 id="uploadTitle">Upload your essay</h2>
            </div>
            <input id="fileUpload" type="file" name="fileUpload" required hidden>

            <button id="select"  onclick="upload();">Select File</button>
            <input id="uploadButton" type="submit" value="Upload" name="uploadButton">
        </form>
    </div>

    <script>
        var title = document.getElementById("title");
        var select = document.getElementById("select");
        var fileUpload = document.getElementById("fileUpload");

        function upload(){
            fileUpload.click();
        }

        fileUpload.addEventListener("change",function(){
            var file = this.files[0];
            if(title.value == ""){
                title.value = file.name;
            }
            select.innerHTML = file.name;
        })
    </script>
    <script src="script.js"></script>
    
    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "none") {
                echo "<p class='message'>File uploaded successfully!</p>";
            }
            else if ($_GET["error"] == "filetoolarge") {
                echo "<p class='message'>This file is too large to be uploaded.</p>";
            }
            else if ($_GET["error"] == "erruploadingfile") {
                echo "<p class='message'>There was an error uploading your file.</p>";
            }
            else if ($_GET["error"] == "invalidfiletype") {
                echo "<p class='message'>You cannot upload files of this type. Only pdf and images are allowed.</p>";
            }
        }

    ?>

    

<?php
    include_once 'footer.php';
?>
