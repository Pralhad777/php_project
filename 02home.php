<!DOCTYPE html>
<html>
<head>
	<title>log in failed</title>
</head>
<body>

	
<?php
// for content

$password = trim( $_REQUEST['password']) ;
$email =  trim( $_REQUEST['email']) ;
$name = trim( $_REQUEST['name']) ;
$relation = trim( $_REQUEST['relation']) ;

// connecting to mysqli -> school 
include 'db.php';

// Query the database table based on the value of the "relation" select element
if ($relation === 'student') {
    // connection for students user
    $table ='students';
} else if ($relation === 'teacher') {
    // connection for Teachers user
    $table ='teachers';
}
$query = "SELECT * FROM $table WHERE Password1 = '12345'";


//query to search users data
if ($result = $mysqli->query($query)) {
	// Don't do anything if successful.
	while ($result_ar = mysqli_fetch_assoc($result)) {
		$pwd_db = $result_ar['Password1'];
		$email_db = $result_ar['Email'];
		$name_db = $result_ar['Name'];
		$ID = $result_ar['ID'];
}
}


if($password == $pwd_db and $email_db == $email and $name_db == $name) {
			
	
		//staring the session for user easiness
		session_start();

		// Set the ID session variable
		$_SESSION['ID'] = $ID;

			include "new.php" ;
	
		}

 else
 {
	echo "<p>Oops! some error! Please retry<a href='01login.php'>" . ' here ' . "</a>.</p>";
 }


?>
</body>
</html>
