<?php
require_once('config.php');
session_start();
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, md5($_POST['password']));

$sql = "SELECT * FROM userslogin WHERE username='$username' and password='$password' LIMIT 1";

$result = $conn->query($sql);

if($result->num_rows > 0)
{	
	$_SESSION['username'] = $username;
	header("location: ../rec/memberview.php");
}else
{
	header("location: ../index.php");
}

$conn->close();
?>