<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="01login.css">
</head>
<body>
    <header>
        <div class="logo-container">
          <img src="bunny.jpg" alt="My Company Logo" height="120px" width="120px">
          <div class="company-info">
            <h1>Shree Nepal Rastra Higher Secondary School</h1>
            <hr>
            <p>Chowk,Thanti,Galyang-7,Syangja</p>
          </div>
        </div>
      </header>
    <div class="form-center">
        <form action="02home.php" method="post">
            <h2 style="padding-left: 75px;">Log In</h2>
            <label for="name">Name</label> <br>
                <input type="text" id="name" name="name" class="input" placeholder="Enter your Name" autofocus>
            <br><br>
            <label for="mail">Email</label> <br>
                <input type="email" id="mail" name="email" class="input" placeholder="Enter your Email"> 
            <br><br>
            <label for="pwd">Password</label> <br>
                <input type="password" id="pwd" name="password" class="input" placeholder="Enter your Password">
            <br><br>
            <label for="relation">Log in</label> <br>
            <select id="relation" name="relation">
                <option value="student">as Student</option>
                <option value="teacher">as Teacher</option>
            </select>
            <br><br><br>
            <div> <button type="submit">SUBMIT</button></div>
        </form>
    </div>
</body>
</html>