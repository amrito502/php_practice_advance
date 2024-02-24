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



     require "index.view.php";
    
    ?>

