<?php 

require('config.php');

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$des = $_POST['des'];

	$sql = "UPDATE groups SET name='$name', des='$des' WHERE id='$id'";
	$result = $conn->query($sql);
	if($result){
		echo "success";
	}else{
		echo "failed";
	}
}else{
	$id = $_POST['id'];

	$sql = "SELECT * FROM groups WHERE id='$id'";
	$result = $conn->query($sql);
	

	if($row = $result->fetch_assoc()){
		$name = $row['name'];
		$des = $row['des'];
		echo json_encode(array("i"=>$id, "n"=>$name, "d"=>$des));
	}else{
		echo "<script>alert('fail sql')</script>";
		echo $sql . $conn->error;
	}
}

$conn->close();	

 ?>