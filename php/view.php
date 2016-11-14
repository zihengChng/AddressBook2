<?php 

require('config.php');

$id = $_POST['id'];

$sql = "SELECT * FROM contacts WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if($row){
	echo json_encode(array( 'i'=>"../img/contacts/".$row['id'].".jpg",
							'n'=>$row['contactname'],
	 						'p'=>$row['phonenumber'],
	 						'cp'=>$row['companynumber'], 
	 						'hp'=>$row['homenumber'], 
	 						'e'=>$row['email'], 
	 						'c'=>$row['company'], 
	 						'edu'=>$row['education'], 
	 						'b'=>$row['birthday'] ));
}else{
	echo $sql;
}



$conn->close();

 ?>