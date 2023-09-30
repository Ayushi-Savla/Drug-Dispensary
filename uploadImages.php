<!DOCTYPE html>
<html>
<head>
    <title>Upload Images</title>
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
    <form action="uploadImage.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="drugID" placeholder="Enter Drug ID" required>
        <input type="file" name="image" id="image" required>
        <input type="submit" name="submit" value="Upload Image">
    </form>

    </form>
</body>
</html>

<?php
// Database connection
$mysqli = new mysqli('localhost', 'root', '', 'drugdispensarydb');

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if (isset($_POST['submit'])) {
    $drugID = $_POST['drugID'];
    $imageData = $_POST['image'];

    echo "Drug ID: " . $drugID . "<br>";
    echo "Image Name: " . $imageName . "<br>";
    echo "Image Data Length: " . strlen($imageData) . "<br>";
    
    $stmt = $mysqli->prepare("UPDATE drugs SET images = ? WHERE drugID = ?");
    $stmt->bind_param("bi", $imageData, $drugID);
    
    if ($stmt->execute()) {
        echo "Image uploaded and associated with Drug ID $drugID successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
}

$mysqli->close();
?>
