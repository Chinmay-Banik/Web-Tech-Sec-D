<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>

    <form>
        Username:   <input type="text" name="username" id="username" value=""/> <br>
        Password:   <input type="password" name="password" id="password" value=""/> <br>
                    <input type="button" name="submit" value="Submit" onclick="login()"/>
                      <a href="signup.php">Signup</a>
    </form>

    <p id="msg"></p>

    <script src="../asset/login.js"></script>
</body>
</html>