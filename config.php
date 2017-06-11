<?php
$host = "localhost";
$username = "iaffztnd_susano";

$password = "anhtuanlhp1123";	

$dbname = "iaffztnd_Susano";


$connection = mysql_connect($host,$username,$password);

if (!$connection)

{

die('Could not connect: ' . mysql_error());

}

mysql_select_db($dbname) or die(mysql_error());

mysql_query("SET NAMES utf8");
?>
