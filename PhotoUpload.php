<!DOCTYPE html>
<html>
<head>
    <title>File Upload and Details</title>
</head>
<body>
    <h2>Upload a File</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload" required>
        <button type="submit" name="uploadBtn">Upload</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["uploadBtn"])) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
        $uploadSuccess = true;
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if file already exists
        if (file_exists($targetFile)) {
            echo "Sorry, the file already exists.";
            $uploadSuccess = false;
        }

        // Check file size (in this example, limiting to 2MB)
        if ($_FILES["fileToUpload"]["size"] > 2 * 1024 * 1024) {
            echo "Sorry, the file is too large.";
            $uploadSuccess = false;
        }

        // Allow only certain file formats
        if ($fileType !== "txt" && $fileType !== "pdf" && $fileType !== "docx") {
            echo "Sorry, only TXT, PDF, and DOCX files are allowed.";
            $uploadSuccess = false;
        }

        if ($uploadSuccess) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                echo "<h2>File Details</h2>";
                echo "File name: " . basename($_FILES["fileToUpload"]["name"]) . "<br>";
                echo "File size: " . $_FILES["fileToUpload"]["size"] . " bytes<br>";
                echo "File type: " . $_FILES["fileToUpload"]["type"] . "<br>";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    ?>
</body>
</html>
