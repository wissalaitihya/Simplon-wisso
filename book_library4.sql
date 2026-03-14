CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100)
);

ALTER TABLE library_books
 ADD category_id INT;

 UPDATE library_books
SET category_id = 1
WHERE id = 1;

UPDATE library_books
SET category_id = 2
WHERE id = 2;

UPDATE library_books
SET category_id = 3
WHERE id = 3;

UPDATE library_books
SET category_id = 2
WHERE id = 4;

UPDATE library_books SET category_id = 1 WHERE id IN (5, 6, 7, 8);

SELECT library_books.title, categories.name AS category_name
FROM library_books
JOIN categories
ON library_books.category_id = categories.id;