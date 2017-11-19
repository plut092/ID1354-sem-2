
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Johan Engström">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
        <title>Tasty Recipe</title>
        <link rel="stylesheet" href="css/mystyle.css">
    </head>
    <body>
        
        <div class="menu">
            <?php include 'includes/header.php';?>
        </div>
            
        <section id="main">
            <div class="container">
                <article class="main-recipe">
                    <div class="recipe-image">
                        <img src="images/swe-meatballs.png">
                    </div>
                    <div class="transboxHeadDescription">
                        <h1 class="page-title">Swedish Meatballs</h1>
                        <p>
                            The Best Swedish Meatballs are smothered in the most amazing rich and creamy gravy.  The meatballs are packed with such delicious flavor.  You will quickly agree these are the BEST you have ever had!
                        </p>
                    </div>
                        
                    <div class="transboxIngredients">
                        <h2>Ingredients</h2>
                            <ul>
                                <li>4 eggs</li>
                                <li>1 cup milk</li>
                                <li>8 slices white bread, torn</li>
                                <li>2 pounds ground beef</li>
                                <li>&frac14; cup finely chopped onion</li>
                                <li>4 teaspoons baking powder</li>
                                <li>1 to 2 teaspoons salt</li>
                                <li>1 teaspoon pepper</li>
                                <li>2 tablespoons shortening</li>
                                <li>2 cans (10-&frac34; ounces <em>each</em>) condensed cream of chicken soup, undiluted</li>
                                <li>2 cans (10-&frac34; ounces <em>each</em>) condensed cream of mushroom soup, undiluted</li>
                                <li>1 can (12 ounces) evaporated milk</li>
                                <li>Minced fresh parsley</li>
                            </ul>
                    </div>
                        
                    <div class="transboxDescription">
                        <h2>Description</h2>
                            <ul>
                                <li>In a large bowl, beat eggs and milk. Add bread; mix gently and let stand for 5 minutes.
                                    Add beef, onion, baking powder, salt and pepper; mix well (mixture will be soft). Shape
                                    into 1-in. balls.
                                </li>
                                <li>
                                    In a large skillet, brown meatballs, a few at a time, in shortening. Place in an ungreased
                                    3-qt. baking dish. In a bowl, stir soups and milk until smooth; pour over meatballs.
                                    Bake, uncover, at 350&deg; for 1 hour. sprinkle with parsley. <strong>Yield:</strong> 8-10 servings.
                                </li>
                            </ul>
                    </div>
                </article>
                    
                <?php
                    include 'includes/comments_swedishmeatballs.php';
                ?>
                    
            </div>
        </section>
    </body>
</html>