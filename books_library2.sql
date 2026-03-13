INSERT INTO library_books (title, author, published_year, status, price)
VALUES ("Pride and Prejudice","Jane Austen","1999","Available","250"),
       ("1984","George Orwell","2020","Available","120"),
       ("Donated Book","Unknown Author","2025","Borrowed","185"),
	   ("Animal Farm","George Orwell","2023","Available","200"),
       ("Strangers on a Train","Patricia Highsmith","1950","Available","300"),
       ("The Hobbit","The Hobbit","2012","Borrowed","250"),
       ("To Kill a Mockingbird","Harper Lee","2017","Lost", NULL),
       ("The Great Gatsby","F. Scott Fitzgerald","2022","Available","100");
SELECT * FROM library_books;
