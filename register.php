<?php
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phpprototype';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['username'], $_POST['password'])) {
	// Could not get the data that should have been sent.
	echo '<script>alert("aaaaaaaa")</script>';


}
// Make sure the submitted registration values are not empty.
if (empty($_POST['username']) || empty($_POST['password'])) {
	// One or more values are empty.
	echo '<script>alert("Username and Password should not be empty")</script>';
}




// Username doesnt exists, insert new account
if ($stmt = $con->prepare('INSERT INTO user (userFirstName, userLastName, userAge, userGender, userLocation, username, password) VALUES (?, ?, ?, ?, ?, ?, ?)')) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$stmt->bind_param('sssssss', $_POST['userFirstName'], $_POST['userLastName'], $_POST['userAge'], $_POST['userGender'], $_POST['userLocation'],$_POST['username'], $password);
	$stmt->execute();
	echo 'You have successfully registered, you can now login!';
	echo '<script>alert("AAAAAAAAAAAAAAAAAA")</script>'; 
	
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
$con->close();

/*
`userID`, `userFirstName`, `userLastName`, `userAge`, `userGender`, `userLocation`, `username`, `password`
INSERT INTO `user` (`userID`, `userFirstName`, `userLastName`, `userAge`, `userGender`, `userLocation`, `username`, `password`) VALUES ('1', 'ad', 'sdf', '3', 'M', '13', 'sdf', 'dsfsdf');

<input type="text" placeholder="Username" name="username" /><br><br>
        <input type="text" placeholder="First Name" name="userFirstName" /><br><br>
        <input type="text" placeholder="Last Name" name="userLastName" /><br><br>
        <input type="number" placeholder="Age" name="userAge" /><br><br>
        <input type="text" placeholder="Gender" name="userGender" maxlength="1" /><br><br>
        <input type="number" placeholder="Location" name="userLocation" /><br><br>
        <input type="password" placeholder="password" name="password" /><br><br>
        <input type="submit" value="Login" />
*/
?>