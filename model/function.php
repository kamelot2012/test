<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.08.2016
 * Time: 22:01
 */
require_once(__DIR__ . '/../db_config.php');
function connectToDatabase ($db_host, $db_login, $db_password , $db_name){
    mysql_connect($db_host, $db_login, $db_password) or die('No connect width data base');
    mysql_query('SET NAMES utf8');
    mysql_select_db($db_name) or die('No data base');
}
function articles_get_all(){

    connectToDatabase(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);

    $sql = 'SELECT * FROM articles ORDER by date DESC';

    $result = mysql_query($sql);
    if(!$result) die('Error data base' . mysql_error());
    $res_arr = [];
    while ($row = mysql_fetch_array($result)){
        $res_arr[] = $row;
    }
    mysql_close();

    return $res_arr;
}
function get_article_one($id){
    connectToDatabase(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);

    $sql = 'SELECT * FROM articles WHERE id_articles = ' . $id ;

    $result = mysql_query($sql);
    if(!$result) die('Error data base' . mysql_error());
    $res_arr = [];

    $row = mysql_fetch_array($result);

        $res_arr[] = $row;

    mysql_close();

    return $res_arr;
}
function set_article_one($title, $content){

    connectToDatabase(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);

    //$sql = "INSERT INTO " . DB_TABLE_NAME . " (title, content) VALUES ('" .  $title . "', '" . $content . "')";
    $sql = "INSERT INTO " . DB_TABLE_NAME . " SET title = '" .  $title . "', content = '" . $content . "'";
    //$sql = "INSERT INTO articles (title, content) VALUES('eee', 'ffff')";
    //echo "$sql";
    $result = mysql_query($sql);
    if(!$result) die('Error data base - ' . mysql_error());


    mysql_close();

    return 1;
}