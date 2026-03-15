<?php
require "(7)db.php";  
$stmt = $pdo->prepare("SELECT * FROM categories");
$stmt->execute();
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<select name="category">
    <?php foreach ($categories as $category): ?>
        <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
    <?php endforeach; ?>
</select>