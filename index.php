<?php

$username = getenv('MYSQLCONNSTR_username');
$password = getenv('MYSQLCONNSTR_password');
$connectionString = getenv('MYSQLCONNSTR_server');

$link = mysql_connect($connectionString, $username, $password);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
error_log('Connected successfully to DB');
mysql_close($link);
echo 'Update works';
?>

<a href="http://www.beyondsecurity.com/vulnerability-scanner-verification/security-test.azurewebsites.net"><img src="https://seal.beyondsecurity.com/verification-images/security-test.azurewebsites.net/vulnerability-scanner-2.gif" alt="Website Security Test" border="0" /></a>
