<html lang="en">
<head>
    <title>Demo Website</title>
</head>

<body>
<h4>Books</h4>
<ul>
    <?php foreach ($items as $book): ?>
        <li><a href="<?= $book['url'] ?>"> <?= $book['title'] ?> </a>( <?= $book['year'] ?> )</li>
    <?php endforeach; ?>
</ul>
</body>
</html>