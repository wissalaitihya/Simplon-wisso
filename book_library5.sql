SELECT SUM(price) AS total_inventory_value
FROM library_books;

SELECT COUNT(*) AS stock_count
FROM library_books
WHERE status = 'Available';

SELECT MAX(price) AS most_expensive, MIN(price) AS cheapest
FROM library_books;

SELECT AVG(price) AS average_cost
FROM library_books;