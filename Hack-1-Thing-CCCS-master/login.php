<?php
  include_once 'header.php'
?>
<body>
  <h2>Log In</h2>

  <form action="includes/login_inc.php" method="post">
    <label for="uname">User name:</label><br>
    <input type="text" id="uname" name="uname" placeholder="User Name/Email"><br>
    <label for="pwd">Password:</label><br>
    <input type="password" id="pwd" name="pwd" placeholder="Password"><br><br>
    <button type="submit" name="logger">Log In</button>
  </form> 
  
  <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "wronglogin") {
        echo "<p>Invalid login information. Please verify your inputs and try again.</p>";
      }
    }
  ?>
</body>