<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Johan Engström">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tasty Recipe</title>
        
        
        <link rel="stylesheet" href="css/mystyle.css?version=3">
    </head>
    
    <body>
        
        <div class="menu">
            <?php include 'includes/header.php';?>
        </div>
        
       
        <section class="main-container">
            <div class="main-wrapper">
                <h2>Login</h2>
                <form class="signup-form" action="includes/login.inc.php" method="POST">
                    <input type="text"      name="uid"  placeholder="Username/E-mail"/>
                    <input type="password"  name="pwd"  placeholder="Password"/>
                    <button class="register" type="submit"   name="submit">Login</button>
                </form>
            </div>
        </section>
    </body>
</html>
