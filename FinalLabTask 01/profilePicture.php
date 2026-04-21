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

    $profilePic = $_FILES['profilePic'];
    $valid = true;

    if ($profilePic['name'] == "") {
        echo "No file selected!<br>";
        $valid = false;
    }

    if ($valid) {
        echo "Profile picture uploaded successfully!";
    }
}
