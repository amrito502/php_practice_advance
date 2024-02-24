<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Recommended items</h1>

    <?php 
    
    $books = [
        [
            'name' => 'Lorem ipsum dolor sit amet consectetur.',
            'author' => 'ipsum',
            'releaseYear' => 1968,
            'purchaseURL' => 'http://example.com'
        ],
        [
            'name' => 'Lorem ipsum dolor sit amet consectetur-1',
            'author' => 'Andy',
            'releaseYear' => 1969,
            'purchaseURL' => 'http://example.com'
        ],
        [
            'name' => 'Lorem ipsum dolor sit amet consectetur-1',
            'author' => 'Andy',
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


    function filter($items, $fn){
        $filteredItems = [];

        foreach ($items as $item){
            if($fn($item)){
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    }


     $filteredBooks = array_filter($books, function($book){
        return $book['author'] === 'Andy';
     });
    
    ?>

    <ul>
        <?php foreach($filteredBooks as $item) : ?>
        <li>
            <a href="<?= $item['purchaseURL'] ?>"><?= $item['name'] ?>(<?= $item['releaseYear'] ?>) - By
                <?= $item['author'] ?></a>
        </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>