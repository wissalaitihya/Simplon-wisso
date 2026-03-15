<?php

require "(7)db.php";   // include the database connection

$minPrice = 150;   // example variable

$sql = "SELECT title FROM library_books WHERE price > :price";

$stmt = $pdo->prepare($sql);

$stmt->execute(['price' => $minPrice]);

$books = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<ul>
<?php
foreach ($books as $book) {
    echo "<li>" . $book['title'] . "</li>";
}
?>
</ul>