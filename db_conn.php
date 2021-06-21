<?php

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "shopmusic";
$conn = mysqli_connect($sname,$uname, $password,$db_name);

if (!$conn) {
	echo "Connetion fail";
	exit();
}