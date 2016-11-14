<?php 

require('config.php');
if(isset($_POST['update'])){
	$id = $_POST['passidupdate'];
	$groupid = $_POST['groupid'];
	$contactname = $_POST['contactname'];
	$phonenumber = $_POST['phonenumber'];
	$companynumber = $_POST['companynumber'];
	$homenumber = $_POST['homenumber'];
	$email = $_POST['email'];
	$company = $_POST['company'];
	$education = $_POST['education'];
	$birthday = $_POST['birthday'];
	$tmp_name = $_FILES['avatars']['tmp_name'];
	$target_dir = "../img/contacts/";//specify the file directory where the file going to be placed
	// echo "<script>console.log('ASD".$_POST['files']."')";
	$target_file = $target_dir.basename($id.".jpg");//specify the path of the file to be uploaded
	move_uploaded_file($tmp_name,$target_file);
	$image = "".$id.".jpg";
	$sql = "UPDATE contacts SET contactname='$contactname', phonenumber='$phonenumber', companynumber='$companynumber', homenumber='$homenumber', email='$email', company='$company', education='$education', birthday='$birthday', image='$image' WHERE id='$id'";
	$result = $conn->query($sql);
	if($result){
		echo "success";
		echo $contactname;
		echo $phonenumber;
		echo $id;
		echo "<script> window.location='../rec/viewcontacts.php?id=$groupid'</script>";

	}else{
		echo "failed";
	}
}else{
	$id = $_POST['id'];

	$sql = "SELECT * FROM contacts WHERE id='$id'";
	$result = $conn->query($sql);
	

	if($row = $result->fetch_assoc()){
		$contactname = $row['contactname'];
		$phonenumber = $row['phonenumber'];
		$companynumber = $row['companynumber'];
		$homenumber = $row['homenumber'];
		$email = $row['email'];
		$company = $row['company'];
		$education = $row['education'];
		$birthday = $row['birthday'];
		// echo "<script>console.log('".$education."');</script>";
		// echo "<script>console.log('".$birthday."');</script>";
		echo json_encode(array("contactname"=>$contactname, "phonenumber"=>$phonenumber, "companynumber"=>$companynumber, "homenumber"=>$homenumber, "email"=>$email, "company"=>$company, "education"=>$education, "birthday"=>$birthday, "passidupdate"=>$id));
	}else{
		echo "<script>alert('fail sql')</script>";
		echo $sql . $conn->error;
	}
}

$conn->close();	

 ?>