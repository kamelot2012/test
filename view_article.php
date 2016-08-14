<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.08.2016
 * Time: 23:55
 */
require_once('model/function.php');
if (isset($_GET['id']) && !empty($_GET['id'])){
    $id = (int)$_GET['id'];
    if($id == 0) {
        header("Location: index.php");
        //        echo "NOT right the DATA";
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
//echo "$id";
$article = get_article_one($id);

require_once "view/view_article.php";