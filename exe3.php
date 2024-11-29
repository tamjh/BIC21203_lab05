<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $books = [
            ["title" => "To Kill a Mockingbird", "author" => "Harper Lee", "year" => 2001],
            ["title" => "The Fault in Our Stars", "author" => "John Green", "year" => 2011],
            ["title" => "The Book Thief", "author" => "Markus Zusak", "year" => 2021],
        ];

        foreach($books as $book){
            echo "Book Title: " . $book['title'] . ", Author: " . $book['author'] . ", Publisher Year: " . $book['year']. "<br><br>";
        }
    ?>
</body>

</html>