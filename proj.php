<?php
    include_once 'header.php';
?>
<body>
    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "none") {
                echo "<p>You have successfully signed up!</p>";
            }
            else if ($_GET["error"] == "logout") {
                echo "<p>You have been successfully logged out.</p>";
                echo "<p> Welcome to Music-fi! <a href='login.php'>Log in</a> to get started and discover some new music.</p>";
            }
            else if ($_GET["error"] == "login") {
                echo "<p>Welcome back  to Music-fi! Enjoy discovering new music.</p>";
            }
        }
        else {
            echo "<p> Welcome to Music-fi! <a href='login.php'>Log in</a> to get started and discover some new music.</p>";
        }
    ?>
    <div id="selector">
        <h2>Motion Sickness-Phoebe Bridgers</h2>
        <img src="sITA.jpeg" alt="Phoebe Bridgers Starnger in the Alps">
        <form action="data.php" method="post">
            <input type="submit" class="button" name="liked" value="like" style="float:left"></form>
            <input type="submit" id= "dlike" class="button" name="liked" value="dislike" style="float:right"></form>
        </form>
    </div>
</body>
