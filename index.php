<?php
$link = mysql_connect('us-cdbr-azure-east-c.cloudapp.net', 'b61c3f898e83cc', '1d6dbb35');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>
