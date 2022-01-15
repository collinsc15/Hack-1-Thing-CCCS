<?php
  include_once 'header.php'
?>
<body>
  <h2>Sign Up for Music-fi</h2>

  <form action="includes/register_account_inc.php" method="post">
    <label for="uname">User name:</label><br>
    <input type="text" id="uname" name="uname" placeholder="User Name"><br>
    <label for="email">Email address:</label><br>
    <input type="text" id="email" name="email" placeholder="Email address"><br>
    <label for="pwd">Password:</label><br>
    <input type="password" id="pwd" name="pwd" placeholder="Password"><br>
    <label for="pwdconfirm">Confirm Password:</label><br>
    <input type="password" id="pwdconfirm" name="pwdconfirm" placeholder="Confirm Password"><br><br>
    <button type="submit" name="submit">Sign Up</button>
  </form> 
    
  <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "invaliduid") {
        echo "<p>Usernames must contain only letters and numbers.</p>";
      }
      else if ($_GET["error"] == "invalidemail") {
        echo "<p>Please enter a valid email.</p>";
      }
      else if ($_GET["error"] == "nopwdmatch") {
        echo "<p>Passwords do not match.</p>";
      }
      else if ($_GET["error"] == "usernametaken") {
        echo "<p>Username already taken.</p>";
      }
      else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong. Try again.</p>";
      }
    }
  ?>
</body>