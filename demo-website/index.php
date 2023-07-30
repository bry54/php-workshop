<html lang="en">
<head>
    <title>Demo Website</title>
</head>

<body>
<?php

    $books =[
        ["title" => "No more Mr. Nice Guy", "author" => "Robert Clover", "year" => "1995", "isRead" => false, "url"=> "www.example.com" ],
        ["title" => "No more Mr. Nice Guy II", "author" => "Robert Clover", "year" => "1998", "isRead" => false, "url"=> "www.example.com" ],
        ["title" => "No more Mr. Nice Guy III", "author" => "Robert Clover", "year" => "2001", "isRead" => false, "url"=> "www.example.com" ],
        ["title" => "Atomic Habits", "author" => "James Clear", "year" => "2009", "isRead" => false, "url"=> "www.example.com" ],
        ["title" => "Subtle Art of Not Giving A F*ck", "author" => "", "year" => "2006", "isRead" => false, "url"=> "www.example.com" ],
        ["title" => "Ikigai", "author" => "Francesc Miralles", "year" => "2007", "isRead" => false, "url"=> "www.example.com" ],
    ];

    function itemsFilter($items, $fn){
        $filteredItems = [];

        foreach ($items as $item){
            if ($fn($item)){
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    }

    $items = itemsFilter($books, function ($book){
        return $book['author'] == 'Robert Clover';
    });

?>
<h4>Books</h4>
<ul>
    <?php foreach ( $items as $book): ?>
        <li><a href="<?= $book['url'] ?>"> <?= $book['title'] ?> </a>( <?= $book['year'] ?> )</li>
    <?php endforeach; ?>
</ul>
</body>
</html>