<?php
    date_default_timezone_set('Europe/Stockholm');
    include 'comments.inc.php';
    include 'dbh.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
    <section class="comments">
        <h3>Comments</h3>
        <?php
        if (isset($_SESSION['u_uid'])) {
            echo "<form method='POST' action='".setComments($conn, pancakes)."'>
                    <input type='hidden' name='uid' value='".$_SESSION['u_uid']."'>
                    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                    <textarea name='message' placeholder='Enter a comment...'></textarea><br>
                    <button class='button_login' name='commentSubmit' type='submit'>Comment</button>
                </form>";
        }
        echo "". getComments($conn, pancakes)."";
        ?>
                
    </section>
</html>