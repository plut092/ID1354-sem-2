<?php
session_start();
?>
    
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
    <header>
        <div class="container">
            <div id="branding">
                <a href="index.php"><h1><span class="highlight">Tasty</span> Recipes</h1></a>
            </div>
            <nav>
                <div class="navbar" id="myTopnav">
                    <a href="index.php">Home</a>
                    <a href="calendar.php">Calendar</a>
                    <div class="dropdown">
                        <button class="dropbtn">Recipes &#9663;</button>
                        <div class="dropdown-content">
                            <a href="swe-meatballs.php">Swedish Meatballs</a>
                            <a href="pancakes.php">Pancakes</a>
                        </div>
                    </div>
                    <?php
                        if (isset($_SESSION['u_uid'])) {
                            echo '<form action="includes/logout.inc.php" method="POST">
                            <button class="button_login" type="sumbit" name="submit">Logout</button>
                            </form>';
                        } else {
                            echo '<form action="signup.php">
                            <button type="submit" class="button_login">Register</button>
                            </form>
                            <form action="login.php">
                            <button class="button_login">Login</button>
                            </form>';
                        }
                    ?>
                    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                </div>
            </nav>
        </div>
    </header>
</html>