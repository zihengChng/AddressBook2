<?php 

require('config.php');
session_start();

$owner = $_SESSION['username'];
$name = $_POST['name'];
$des = $_POST['des'];

$sql = "INSERT INTO groups(name, des, owner) VALUES('$name', '$des', '$owner')";

$result = $conn->query($sql);
if($result){
	echo "success";
}else{
	echo "fail";
}
$conn->close();

?>