<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Recommended Books</h1>

    <?php 
    
    $books = [
        "Lorem ipsum dolor sit amet consectetur",
        "Lorem ipsum dolor sit amet",
        "Lorem ipsum dolor sit",
        "Lorem ipsum dolor sit",
    ];
    
    ?>

    <ul>
        <?php foreach($books as $book) : ?>
            <li> <?= $book ?> </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>