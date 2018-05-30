<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/4/18
 * Time: 11:04 AM
 */

$config = array(
    'defaultController' => 'welcome',
    'host' => '127.0.0.1',
    'dbname' => 'fruits',
    'dbpass' => 'root',
    'dbuser' => 'root',
    'baseurl' => 'http://127.0.0.1'
);

$str=$config["baseurl"]."/".$_SERVER['REQUEST_URI'];

$urlPathParts = explode('/', ltrim(parse_url($str, PHP_URL_PATH), '/'));



include 'router.php';

$route = new router($urlPathParts,$config);

?>