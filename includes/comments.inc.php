<?php
    
function setComments($conn, $recipe) {
    if (isset($_POST['commentSubmit'])) {
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
            
        $sql = "INSERT INTO $recipe (uid, date, message) VALUES ('$uid', '$date', '$message')";
            
        $result = mysqli_query($conn, $sql);
    }
}
    
function getComments($conn, $recipe) {
    $sql = "SELECT * FROM $recipe";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='comment-box'>";
            echo "<p class='commentDate'>".$row['date']."</p>";
            echo "<h4>".$row['uid'].":</h4>";
            echo "<p>".nl2br($row['message'])."</p>";
        if ($_SESSION['u_uid'] === $row['uid']){
            echo "<form class='delete-form' method='POST' action='".deleteComments($conn, $recipe)."'>
                  <input type='hidden' name='cid' value='".$row['cid']."'>
                  <button type='sumbit' name='commentDelete'>Delete</button>
                </form>";
        }
        echo "</div>";
    }
}
    
function deleteComments($conn, $recipe) {
    if(isset($_POST['commentDelete'])) {
        $cid = $_POST['cid'];
            
        $sql = "DELETE FROM $recipe WHERE cid='$cid'";
        $result = mysqli_query($conn, $sql);
        header("Location: index.php");
    }
}