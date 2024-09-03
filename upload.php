<?php
ob_start(); //start output buffering, to handle headers properly
include "libs/load.php";

// Database connection
$conn = Database::getConnection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = "/home/rizwankendo/htdocs/sih/assets/uploads/";
    $fileName = basename($_FILES["fileToUpload"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    // Check if file already exists
    if (file_exists($targetFilePath)) {
        echo "Sorry, file already exists.";
    } else {
        // Upload file to server
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath)) {
            // Insert file info into database
            $sql = "INSERT INTO file_upload (file_name, file_path) VALUES ('$fileName', '$targetFilePath')";

            if ($conn->query($sql) === TRUE) {
                echo "The file " . htmlspecialchars($fileName) . " has been uploaded.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link rel="stylesheet" href="file_upload.css">
</head>

<body>
    <div class="container">
        <h1>IMPORT A FILE</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="file">Select a file to upload:</label>
                <input type="file" name="fileToUpload" id="fileToUpload" required>
            </div>
            <div class="last">
                <input type="submit" value="Upload File">
            </div>
        </form>
    </div>
</body>

</html>

</main>

<script src="/sih/assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php ob_end_flush(); //flushes output buffer, handles headers properly
?>