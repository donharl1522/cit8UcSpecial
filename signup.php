<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <h1>Signup</h1>
    <form action="register.php" method="POST">
        <input type="text" placeholder="Username" name="username" /><br><br>
        <input type="text" placeholder="First Name" name="userFirstName" /><br><br>
        <input type="text" placeholder="Last Name" name="userLastName" /><br><br>
        <input type="number" placeholder="Age" name="userAge" /><br><br>
        <input type="text" placeholder="Gender" name="userGender" maxlength="1" /><br><br>
        <input type="number" placeholder="Location" name="userLocation" /><br><br>
        <input type="password" placeholder="password" name="password" /><br><br>
        <input type="submit" value="Login" />
    </form>
    <a href="login.php">Signin</a>
</body>
</html>

