<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: indexone.php"); // Redirecting To Home Page
}
?>
