<?php
require "(7)db.php";   

$title = "Learning PHP";
$author = "John Smith";
$price = 180;

$sql = "INSERT INTO library_books (title, author, price)
        VALUES (:title, :author, :price)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    'title' => $title,
    'author' => $author,
    'price' => $price
]);
$id = $pdo->lastInsertId();
echo "Success! Book added with ID: " . $id;
?>