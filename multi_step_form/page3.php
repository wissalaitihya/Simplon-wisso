<?php 
session_start();

if (isset($_POST["favorite_language"])) {
    $_SESSION["favorite_language"] = $_POST["favorite_language"];
}

$username=$_SESSION["Uname"];
$favorite_language=$_SESSION["favorite_language"];
echo "Hello $username, you love $favorite_language !"
?>
