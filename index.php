<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Johan Engström">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tasty Recipe</title>
        
        
        <link rel="stylesheet" href="css/mystyle.css?version=5">
    </head>
            
        
        
    <body>
        
        <div class="menu">
            <?php include 'includes/header.php';?>
        </div>
        
        <section id="showcase">
            <div class="transparent-showcase">
                <h1>Recipes made easy</h1>
                <p>
                    Lorem ipsum dolor sit amet, <a href="calendar.php">calendar</a> adipiscing elit. Fusce vel lobortis dolor. Duis gravida pretium urna non blandit. Pellentesque lobortis nunc eu convalis.
                </p>
            </div>
        </section>
        
        <section class="register" id="firstPage">
            <div class="container">
                <?php
                    if (isset($_SESSION['u_uid'])) {
                        
                    } else {
                        echo '<h1>Become a member now!</h1>
                        <form action="signup.php">
                        <button type="submit" class="button_register">Register</button>
                        </form>';
                    }
                ?>
            </div>
        </section>
        
        <section id="boxes">
            <div class="container">
                <a href="swe-meatballs.php">
                    <div class="box">
                        <img src="images/swe-meatballs.png" alt="Meatballs">
                        <h3>Swedish Meatballs</h3>
                        <p>
                            In ultricies id lorem et consequat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                        </p>
                    </div>
                </a>
                <a href="pancakes.php">
                    <div class="box">
                        <img src="images/pancakes.png" alt="Pancakes">
                        <h3>Pancakes</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu eleifend risus. In ac tellus non velit fringilla rutrum. Morbi tortor urna, vulputate at odio id, dapibus faucibus orci.
                        </p>
                    </div>
                </a>
            </div>
        </section>   
    </body>
</html>
