<?php
ob_start();
session_start();
error_reporting(0);
function db_in($string)
{
	return  addslashes(html_entity_decode(trim($string),ENT_QUOTES));
}
function db_out($string)
{
	return stripslashes(htmlentities(trim($string),ENT_QUOTES));
}
if($_GET['showsession']=='yes')
{
echo '<pre>';
print_r($_SESSION);
}
function update_cart()
{
	unset($_SESSION['checkout_sess']);
}