
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
</head>
<body>

    <form >
        Username:   <input type="text" name="username" id="username" value=""/> <br>
        Password:   <input type="password" name="password" id="password" value=""/> <br>
        Email:      <input type="email" name="email" id="email" value=""/> <br>
                    <input type="button" value="Submit" onclick="signup()"/>
                    <a href="login.php">login</a>

    </form>

    <p id="msg"></p>

    <script src="../asset/signup.js"></script>
</body>
</html>