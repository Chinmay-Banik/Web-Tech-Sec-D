<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Profile Picture</title>
</head>

<body>

    <h2>Profile Picture</h2>

    <form method="post" action="" enctype="multipart/form-data">
        Select Image:
        <input type="file" name="profilePic"> <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

</body>

</html>

<?php
if (isset($_POST['submit'])) {

    $fileName = $_FILES['profilePic']['name'];
    $fileSize = $_FILES['profilePic']['size'];
    $ext = explode('.', $fileName);
    $valid = true;

    if ($fileName == "") {
        echo "No file selected!<br>";
        $valid = false;
    }

    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $found = false;

    foreach ($allowedExtensions as $extension) {
        if (strtolower(end($ext)) == $extension) {
            $found = true;
            break;
        }
    }

    if (!$found) {
        echo "Invalid file type! Only JPG, JPEG, and PNG are allowed.<br>";
        $valid = false;
    }

    if ($fileSize > 4 * 1024 * 1024) {
        echo "File size exceeds the limit of 4MB!<br>";
        $valid = false;
    }

    if ($valid) {
        echo "Profile picture uploaded successfully!";
    }
}
