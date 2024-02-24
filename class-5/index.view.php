<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Recommended items</h1>



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