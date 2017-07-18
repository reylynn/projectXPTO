<?php
$fn = $_POST['fullname'];
$un = $_POST['username'];
$em = $_POST['email'];
$ps = $_POST['password'];

include('connect.php');

$sql = "INSERT INTO user VALUES('$fn','$un','$em','$ps')";

if (mysql_query($sql))
{
	Echo "Record successfully inserted";
}
Else
{
	die('Unable to insert data:' .mysql_error());
}
?>
