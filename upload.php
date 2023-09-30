<?php
$uploadDir = 'imgs/'; // Specify the directory where you store uploaded files

if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true); // Create the directory if it doesn't exist
}

if (isset($_POST['submit'])) {
    $uploadFile = $uploadDir . basename($_FILES['image']['name']);
    
    // Check if the file is an image
    $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
    $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
    
    if (!in_array($imageFileType, $allowedExtensions)) {
        echo "Error: Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
    } else {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            echo "File uploaded successfully. The file has been stored as: " . $uploadFile;
        } else {
            echo "Error uploading file.";
        }
    }
}
?>
