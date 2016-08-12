<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.08.2016
 * Time: 14:18
 */

require_once('model/function.php');

//language setting
date_default_timezone_set('Europe/Kiev');

$sql = 'SELECT * FROM articles';
$result = result_sql_query($sql);

require_once('view/index.php');

