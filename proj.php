
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
        
        <li style="float:right"><a href="login.php"><span>Log In</span></a></li>
        <li style="float:right"><a href="register.php"><span>Create Account</span></a></li>
      </ul> 
    </div>

        <ul id="people"></ul>
        <script>
            
        </script>
    <p> Welcome to Music-fi! <a href="login.php">Log in</a> to get started and discover some new music.</p>
    <div id="selector">
        <img src="sITA.jpeg" alt="Phoebe Bridgers Starnger in the Alps">
        <form action="data.php" method="post">
            <input type="submit" class="button" name="liked" value="like" style="float:left"></form>
            <input type="submit" id= "dlike" class="button" name="liked" value="dislike" style="float:right"></form>
        </form>
    </div>
    </body>

</html>