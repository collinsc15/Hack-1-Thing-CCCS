<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="style-sheet.css">
</head>
<body>
<div id="navbar">
    <ul>
        <li id="header"><a href="proj.php"><span>Music-fi</span></a></li>
            
        <li style="float:right"><a href="login.php"><span></span>Log In</span></a></li>
        <li style="float:right"><a href="register.php"><span>Create Account</span></a></li>
    </ul> 
  </div>
  <h2>HTML Forms</h2>

  <form action="data.php">
    <label for="uname">User name:</label><br>
    <input type="text" id="uname" name="uname"><br>
    <label for="pwd">Password:</label><br>
    <input type="password" id="pwd" name="pwd"><br><br>
    <input type="submit" value="Submit">
  </form> 
  
  <p>If you click the "Submit" button, the form-data will be sent to a page called "data.php".</p>
</body>