<?php 
require_once('config.php');
if(isset($_POST['addContact'])){
	$id = $_POST['passid'];
	$contactname = $_POST['contactname'];
	$phonenumber = $_POST['phonenumber'];
	$companynumber = $_POST['companynumber'];
	$homenumber = $_POST['homenumber'];
	$email = $_POST['email'];
	$company = $_POST['company'];
	$education = $_POST['education'];
	$birthday = $_POST['birthday'];
	$name = $_FILES['avatars']['name'];
	$tmp_name = $_FILES['avatars']['tmp_name'];
	$location = "$name";
	$sql = "INSERT INTO contacts(groupid, contactname, phonenumber, companynumber, homenumber, email, company, education, birthday)VALUES('$id', '$contactname', '$phonenumber', '$companynumber', '$homenumber', '$email', '$company', '$education', '$birthday')";
	$conn->query($sql);
	$sql= " SELECT LAST_INSERT_ID() as lastid FROM contacts";
	$result=$conn->query($sql);
	$row = $result->fetch_assoc();
	$lastid=$row['lastid'];
	if($tmp_name==null){
		$imageName = "default-user.png";
	}else{
		$imageName = $lastid . ".jpg";
	}
	
	$sql = "UPDATE contacts SET image='$imageName' WHERE id='$lastid'";
	$conn->query($sql);
	echo $lastid;
	move_uploaded_file($tmp_name,"../img/contacts/".$lastid.".jpg");
	echo "<script> window.location='../rec/viewcontacts.php?id=$id'</script>";

}else{
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		echo json_encode(array("id"=>$id));
	}else{
		$id='fail';
		echo json_encode(array("passidadd"=>$id));
	}


}
$conn->close();
 ?>