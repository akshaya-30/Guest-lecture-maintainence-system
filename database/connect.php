<?php
$servername = "sql6.freemysqlhosting.net";
$username = "sql6419057";
$password = "rYlMBgBbeU";
$dbname = "sql6419057";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if(!$conn){
	die("Connection failed: ".mysqli_connect_error);
}
?>
