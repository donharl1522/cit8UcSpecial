<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="authenticate.php" method="POST">
        <input type="text" placeholder="Username" name="username"/><br>
        <input type="password" placeholder="password" name="password" /><br>
        <input type="submit" value="Login" name="login"/>
    </form>
    <a href="signup.php">Signup</a>
</body>
</html>