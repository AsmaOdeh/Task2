<?php

// read the .ini file and create an associative array

$fp = parse_ini_file("database_config.ini");

/* now we can use the info in that file to create the appropriate, string connection, based on type, or just using the other info */

$username = $fp['user'];
$password = $fp['pass'];
$dbname = $fp['name'];
$servername = $fp['host'];
$type = $fp['type'];
static $conn;
if($conn == null){
	$conn=new mysqli($servername,$username,$password,$dbname)or die ("not connect");
	mysqli_query($conn, 'SET CHARACTER SET utf8') or die ('Can\'t charset in DataBase');
}
?> 