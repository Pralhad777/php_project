
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>
<body>
<?php session_start();
$ID = $_SESSION['ID'];
 // using predefind UI
 include '00menu.php';
 echo "<p style='margin-top: 80px; margin-left: 230px;'>VIN: $ID</p>";

?>
</body>
</html>