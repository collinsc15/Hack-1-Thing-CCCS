<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="style-sheet.css">
        <meta charset="utf-8">
        <title>Music-fi</title>
</head>
    <body>
    <div id="navbar">
    <ul>
        <li id="header"><a href="proj.php"><span>Music-fi</span></a></li>
        <?php
            if (isset($_SESSION["userUID"])) {
                echo "<li style='float:right'><a href='includes/logout_inc.php'><span>Log Out</span></a></li>";
            }
            else {
                echo "<li style='float:right'><a href='login.php'><span>Log In</span></a></li>";
                echo "<li style='float:right'><a href='register.php'><span>Create Account</span></a></li>";
            }
        ?>
      </ul> 
    </div>
</html>