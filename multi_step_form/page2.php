<?php 
session_start();

if (isset($_POST["Uname"])) {
    $_SESSION["Uname"] = $_POST["Uname"];
}


 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <form action="page3.php" method="POST">
        <label for="">Favorite Programming Language?</label><br>
        <input type="text" name="favorite_language"><br>
        <input type="submit" name="next" value="next"><br>
        <a href ="page1.php">Previous</a>
    </form>
</body>
</html>