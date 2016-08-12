<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
foreach ($articles as $article) {
    echo $article['id_articles'] . '<br>';
    echo $article['title'] . '<br>';
    echo $article['content'] . '<br>';
}


?>
</body>
</html>