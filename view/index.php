<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
foreach ($articles as $article) {
    echo '<a href = "view_article.php?id=' . $article['id_articles'] . '">' . $article['id_articles'] . '<br>' .
    $article['title'] . '<br>' .
    $article['date'] . '<br></a>';
}


?>
</body>
</html>