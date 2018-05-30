<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/5/18
 * Time: 9:43 PM
 */
$arr = get_defined_vars();

//print_r($arr);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <?
    echo "<title>".$arr['data']['pagename']."</title>";

    ?>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/custom.css">

    <!--
    <link href="src/bootstrap-off-canvas-nav.css" rel="stylesheet">
    -->
</head>