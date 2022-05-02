<?php
session_start();
include '../includes/config.php';



if (($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['submit']))) {
    // Upload Image
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    echo "Dir is: " . $target_dir;
    echo "<br>";
    echo "File Name is: " . $target_file;
    echo "<br><br>";
    echo "<pre>";
    print_r($_FILES);
    echo "</pre><br><br>";
    $uploadOk = 1;

    if ($uploadOk) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Sorry, your file was not uploaded.";
    }
}

?>


<form action="upload_image.php" method="POST" enctype="multipart/form-data">
    <input type="file" accept="image/*" name="image">
    <input type="submit" name="submit" value="Upload">
</form>