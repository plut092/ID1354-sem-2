
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Johan Engström">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
        <title>Tasty Recipe</title>
        <link rel="stylesheet" href="css/mystyle.css?version=2">
    </head>
    <body>
        
        <div class="menu">
            <?php include 'includes/header.php';?>
        </div>
            
        <section id="main">
            <div class="container">
                <article class="main-recipe">
                    <div class="recipe-image">
                        <img src="images/pancakes.png">
                    </div>
                    <div class="transboxHeadDescription">
                        <h1 class="page-title">Pancakes</h1>
                        <p>
                            Learn a skill for life with our foolproof crêpe recipe that ensures perfect pancakes every time - elaborate flip optionality
                        </p>
                    </div>
                        
                    <div class="transboxIngredients">
                        <h2>Ingredients</h2>
                        <ul>
                            <li>100g plain flour</li>
                            <li>2 large eggs</li>
                            <li>300ml milk</li>
                            <li>1 tbsp sunflower or vegetable oil, plus a little extra for frying</li>
                            <li>lemon wedges, to server (optional)</li>
                            <li>caster sugar, to serve (optional)</li>
                        </ul>
                    </div>
                        
                    <div class="transboxDescription">
                        <h2>Description</h2>
                        <ul>
                            <li>
                                Put the flour, eggs, milk, 1 tbps oil and a pinch of salt into a bowl or large jug,
                                then whisk to a smooth batter. Set aside for 30 mins to rest if you have time,
                                or stat cooking straight away.
                            </li>
                            <li>
                                Set a medium frying pan or crêpe pan over a medium heat and carefully wipe it with some
                                oiled kitchen paper. When hot, cock your pancakes for 1 min on each side until golden,
                                keeping them warm in a low oven as you go.
                            </li>
                            <li>
                                Serve with lemon wedges and sugar, or your favourite filling. Once cold, you can layer
                                the pancakes between baking parchment, then wrap in cling film and freeze for up to
                                2 months.
                            </li>
                        </ul>
                    </div>
                </article>
                    
                <?php
                    include 'includes/comments_pancakes.php';
                ?>
                    
            </div>
        </section>
    </body>
</html>