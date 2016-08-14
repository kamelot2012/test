<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.08.2016
 * Time: 23:43
 */
foreach ($article as $articl) {
    echo$articl['id_articles'] . '<br>' .
        $articl['title'] . '<br>' .
        $articl['content'] . '<br>' .
        $articl['date'] . '<br>';
}
?>
</body>
</html>