<?php
$dname = "rapid_db";
$User = "root";
$Password = "";
$host = "localhost";//"174.36.240.10";

$link = mysql_connect($host,$User,$Password) or die(mysql_error());
mysql_select_db($dname,$link) or die(mysql_error());
?>
