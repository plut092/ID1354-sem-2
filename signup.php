<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Johan Engström">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="height=device-height, initial-scale=1.0">
        <title>Tasty Recipe</title>
        
        
        <link rel="stylesheet" href="css/mystyle.css?version=6">
    </head>
    
    <body>
        
        <div class="menu">
            <?php include 'includes/header.php';?>
        </div>
        
        <section class="main-container">
            <div class="main-wrapper">
                <h2>Sign up</h2>
                <form class="signup-form" action="includes/signup.inc.php" method="post">
                    <input type="text"      name="first"    placeholder="Firstname"/>
                    <input type="text"      name="last"     placeholder="Lastname"/>
                    <input type="text"      name="email"    placeholder="E-mail"/>
                    <input type="text"      name="uid"      placeholder="Username"/>
                    <input type="password"  name="pwd" placeholder="Password"/>
                    <button type="submit"   name="submit">Sign up</button>
                </form>
            </div>
        </section>
        </body>
</html>
