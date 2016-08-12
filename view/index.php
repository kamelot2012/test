<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

while ($row = mysql_fetch_array($result)){
    echo $row['id_articles'] . '<br>';
    echo $row[1]. '<br>';
    echo $row['content']. '<br>';
}
mysql_close();
?>
</body>
</html>