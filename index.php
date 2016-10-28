<?php

$username = getenv('MYSQLCONNSTR_username');
$password = getenv('MYSQLCONNSTR_password');
$connectionString = getenv('MYSQLCONNSTR_string');

$link = mysql_connect($connectionString, $username, $password);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>
