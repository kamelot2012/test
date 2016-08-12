<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.08.2016
 * Time: 22:01
 */
require_once(__DIR__ . '/../db_config.php');
function connectToDatabase ($db_host, $db_login, $db_password ){
    mysql_connect($db_host, $db_login, $db_password) or die('No connect width data base');
    mysql_query('SET NAMES utf8');
    mysql_select_db(DB_NAME) or die('No data base');
}
function articles_get_all(){

    connectToDatabase(DB_HOST, DB_LOGIN, DB_PASSWORD);

    $sql = 'SELECT * FROM articles';

    $result = mysql_query($sql);
    if(!$result) die('Error data base' . mysql_error());
    $res_arr = [];
    while ($row = mysql_fetch_array($result)){
        $res_arr[] = $row;
    }
    mysql_close();

    return $res_arr;
}
