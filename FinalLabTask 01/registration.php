<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
</head>

<body>

    <h2>Registration</h2>

    <form method="post" action="" enctype="multipart/form-data">
        Name: <input type="text" name="username" value="" /> <br>
        Email: <input type="text" name="email" value="" /> <br>
        Username: <input type="text" name="username" value="" /> <br>
        Password: <input type="password" name="password" value="" /> <br>
        Confirm Password: <input type="password" name="confirm_password" value="" /> <br>
        Gender:
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="other"> Other <br>
        Date of Birth: <input type="date" name="dob"> <br>
        <input type="submit" name="submit" value="Submit" />
        <input type="reset" name="reset" value="Reset" />

    </form>
</body>

</html>