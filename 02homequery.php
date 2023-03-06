<!DOCTYPE html>
<html>
<head>
	<title>log in failed</title>
</head>
<body>

	
<?php
// extracting value from user
$password = trim( $_REQUEST['password']) ;
$email =  trim( $_REQUEST['email']) ;
$name = trim( $_REQUEST['name']) ;
$relation = trim( $_REQUEST['relation']) ;

//redirecting to login page if user forget to enter the value
if($password == Null or $email == Null or $name == Null){
	echo "<p>Oops! some error! Please try<a href='01login.php'>" . ' again ' . "</a>.</p>";
 
}
else{
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
$query = "SELECT * FROM $table WHERE Password1 = $password";


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

$mysqli->close();

//Entering the home if data is correct
if($password == $pwd_db and $email_db == $email and $name_db == $name) {
	//Entering the home if data is correct
	session_start();
	$_SESSION['ID'] = $ID;
	header("Location: 02home.php?ID={$_SESSION['ID']}");

	//echo $ID;
		}

 else
 {
	echo "<p>Oops! some error! Please try<a href='01login.php'>" . ' again ' . "</a>.</p>";
 }

}
?>
</body>
</html>
