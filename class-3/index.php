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
        [
            'name' => 'Lorem ipsum dolor sit amet consectetur.',
            'author' => 'Lorem ipsum',
            'releaseYear' => 1968,
            'purchaseURL' => 'http://example.com'
        ],
        [
            'name' => 'Lorem ipsum dolor sit amet consectetur-1',
            'author' => 'Lorem ipsum-1',
            'releaseYear' => 1969,
            'purchaseURL' => 'http://example.com'
        ],
        [
            'name' => 'Lorem ipsum dolor sit amet consectetur-2',
            'author' => 'Lorem ipsum-2',
            'releaseYear' => 1967,
            'purchaseURL' => 'http://example.com'
        ],
    ];


    function filterByAuthor($books, $author){
        $filteredBooks = [];

        foreach ($books as $book){
            if($book['author'] === $author){
                $filteredBooks[] = $book;
            }
        }

        return $filteredBooks;
    }
    
    ?>

    <ul>
        <?php foreach(filterByAuthor($books, 'Lorem ipsum-2') as $book) : ?>
        <li>
            <a href="<?= $book['purchaseURL'] ?>"><?= $book['name'] ?>(<?= $book['releaseYear'] ?>) - By
                <?= $book['author'] ?></a>
        </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>