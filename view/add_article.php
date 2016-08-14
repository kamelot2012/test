<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="../add_article.php" method="post" enctype="text/plain">
    <label>title<input type="text" name="title" maxlength="5"> </label><br>
    <label>text<textarea name="text" maxlength="500"></textarea></label><br>
    <label>date<input type="date" name="date" ></label><br>
    <input type="submit" name="submit"><br>
</form>
<?php

?>
</body>
</html>
