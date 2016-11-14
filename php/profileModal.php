<?php session_start();
	
require('config.php');
	// $id = $_POST['id'];
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM users WHERE username='$username'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	if($row){
		$id = $row['id'];
		$username = $row['username'];
		$email = $row['email'];
		$phonenumber = $row['phonenumber'];
		$gender = $row['gender'];
		$date = $row['date'];
		echo json_encode(array("i"=>$id, "u"=>$username, "e"=>$email, "p"=>$phonenumber, "g"=>$gender, "d"=>$date));
	}else{
		echo "<script>alert('fail sql')</script>";
		echo $sql . $conn->error;
	}


?>