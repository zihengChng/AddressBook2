<?php
require_once('config.php');
$username = mysqli_real_escape_string($conn, $_POST['username']);
$sqlsearch = "SELECT username FROM userslogin WHERE username='$username'";
$result = $conn->query($sqlsearch);

if($result->num_rows==0){

$password = mysqli_real_escape_string($conn, md5($_POST['password1']));
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phonenumber = mysqli_real_escape_string($conn,$_POST['phonenumber']);
$gender = mysqli_real_escape_string($conn,$_POST['gender']);
$date = mysqli_real_escape_string($conn,$_POST['date']);

$sql = "INSERT INTO users(username, password, email, phonenumber, gender, date) VALUES ('$username', '$password', '$email', '$phonenumber', '$gender', '$date');";
$sql.="INSERT INTO userslogin(username, password) VALUES ('$username', '$password');";

if($conn->multi_query($sql) === TRUE)
{
	header("Location: ../index.php");
}
else
{
	echo "Error: " .$sql. "<br/>" .$conn->error;
}
}else{
	echo "<script>alert('Sorry, Username has been used by other person, please change a new one.');history.back();</script>";
}

$conn->close();
?>