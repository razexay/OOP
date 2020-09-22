<?php

require_once 'autoload.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$book = Book::findById($id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index_style.css">
    <title>Document</title>
</head>

<body>
    <h1><?php echo $book->title; ?></h1>
    <a href="editform.php?id=<?php echo $book->id; ?>"">muuda</a>
    <a href=" delete.php?id=<?php echo $book->id; ?>"">kustuta</a>
</body>

</html>
