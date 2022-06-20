<?php
session_start();
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
// We need to check if the account with that username exists.
if ($stmt = $con->prepare('SELECT userID, password FROM user WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		//header('Location: message/login-signup/user-exist.php');
		$_SESSION['account_login_status'] = "Username already exists!";
		$_SESSION['account_login_icon'] = "warning";
        header('Location: login.php');
	} else {
		// Insert new account
		if ($stmt = $con->prepare('INSERT INTO user (userFirstName, userLastName, userAge, userGender, userLocation, userType, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)')) {
			// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$stmt->bind_param('ssssssss', $_POST['userFirstName'], $_POST['userLastName'], $_POST['userAge'], $_POST['userGender'], $_POST['userLocation'], $_POST['userType'],$_POST['username'], $password);
			$stmt->execute();
			//echo 'You have successfully registered, you can now login!';
			$_SESSION['account_login_status'] = "You have successfully registered, you can now login!";
			$_SESSION['account_login_icon'] = "success";
        	header('Location: login.php');
	
		} else {
			// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
			echo 'Could not prepare statement!';
		}		
	}
	$stmt->close();
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
$con->close();
?>