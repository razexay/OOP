<?php

require_once 'autoload.php';

$books = Book::findAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index_style.css">
    <title>Bookstore</title>
</head>

<body>

    <body>
        <ul>
            <?php foreach ($books as $book) { ?>
                <li><a href="book.php?id=<?php echo $book->id; ?>"><?php echo $book->title; ?></a></li>
            <?php } ?>
        </ul>
    </body>
</body>

</html>
