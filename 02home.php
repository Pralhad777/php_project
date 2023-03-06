<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
<?php 
//Session variable to find the 
//details of particular student
  session_start();
  $ID = $_SESSION['ID'];
  
// Use $ID as needed

	// connecting to mysqli -> school 
  include 'db.php';

	// using predefind UI
  include "00menu.php";


  //retriveing the primary key for search of data
  //$ID = $_GET['ID'];
  $query = "SELECT * FROM students WHERE ID =$ID";


  //program to run to retrive data
  include 'retrive.php';
  
 //closing the DB so that Browser can work properly
  $mysqli->close();

  //echo "<p style='margin-top: 80px; margin-left: 230px;'>VIN: $msg</p>";
  echo "<div style='margin-top: 80px; margin-left: 230px;'>
          <h2>Name: $name</h2> 
          <img src='uploads/$image' height='100' width='100' style='border-radius: 50%;' placeholder='Car image'><br><br>
          <form action='' method='post' enctype='multipart/form-data'>
              <input type='file' name='file'>
              <input type='submit' name='upload' value='Upload image'>
          </form>
        </div>";
      echo "<div style='margin-top: 80px; margin-left: 230px;'>
      <h4>Student Details:</h4> 
      <p>Class:$class</p>
      <p>Roll No.:$rollno</p>
      <p>Percntage:$avg</p>
      <p>Email:$email</p>
    </div>";
    
//code if user change their profile picture
if(isset($_POST['upload'])){
    // Check if file was uploaded without errors
    if(isset($_FILES['file']) && $_FILES['file']['error'] == 0){
        // Access the uploaded file using $_FILES
        $file = $_FILES['file'];
        // Perform any necessary actions with the uploaded file
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
    
        // Generate a new file name using only the $ID variable
        $new_file_name = $ID . '.' . pathinfo($file_name, PATHINFO_EXTENSION);

        // Define the destination directory for the uploaded file
        $destination_dir = "uploads/";

        // Define the full path of the file on the server
        $destination_file = $destination_dir . $new_file_name;

        // Move the uploaded file to the destination directory on the server
        move_uploaded_file($file_tmp, $destination_file);
        
        //sending the path into DB
        //Some Logical Mistake in code
        // connecting to mysqli -> school 
        include 'db.php';

        //Query to update profile picture
        $query = "UPDATE students SET image='$new_file_name' WHERE ID=$ID";


        //puting that file location into DB
        if ($result = $mysqli->query($query)) {
           // echo "<p style='margin-top: 80px; margin-left: 230px;'>Inserted</p>";
           //refreshing the page for user to show the picture
          header("Location: 02home.php?ID={$_SESSION['ID']}");
          exit();
                    
        }
        
        $mysqli->close();



    }
  }

      else{
        //do nothing
      }

	?>
</body>
</html>