<?php session_start();

require('config.php');


	$username = $_SESSION['username'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$gender = $_POST['gender'];
	$date = $_POST['date'];
	$target_dir = "../img/profile/";//specify the file directory where the file going to be placed

	// echo "<script>console.log('ASD".$_POST['files']."')";
	$target_file = $target_dir.basename($_FILES['avatar']['name']);//specify the path of the file to be uploaded
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// echo $imageFileType;
	// Allow certain file formats
	// Check if image file is a actual image or fake image
	$tmp_name = $_FILES['avatar']['tmp_name'];    
	// echo $tmp_name;
	if($tmp_name==null){
		$check = false;
	}else{
		$check = getimagesize($tmp_name);
	}
	if($_FILES['avatar']['name']!=""){
	    if($check !== false) {
	    	if($imageFileType != "jpg") {
			    // echo "Sorry, only JPG is allowed.";
			    echo "<script>alert('Sorry, only JPG is allowed.');</script>";
			    $uploadOk = 0;
			}else{
		        // echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    }

	    } else {
	         echo "<script>alert('File is not an image.');</script>";
	        $uploadOk = 0;
	    }
	}else{
		$uploadOk=1;
	}


	$imagetype= $_FILES["avatar"]["type"];

	$sql = "UPDATE users SET email='$email', phonenumber='$phonenumber', gender='$gender', date='$date' WHERE username='$username'";
	// echo "<script>console.log('".$sql."')";
	if($uploadOk==1){
		if($conn->query($sql)===TRUE){
			// echo $last_id;
			if ($uploadOk == 0) {
			    echo "<script>alert('Sorry your file was not uploaded.');</script>";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($tmp_name, "../img/profile/".$username.".".$imageFileType)) {
			        // echo "The file ". basename( $_FILES["bookImage"]["name"]). " has been uploaded.";
			        echo "<script>alert('Detail has Succesfully Edit!');window.location.href='../rec/memberinfo.php';</script>";
			        // window.location.href='adminbooklist.php';
					move_uploaded_file($tmp_name, $target_file);
			    } else {
			        echo "<script>alert('Detail has Succesfully Edit!');window.location.href='../rec/memberinfo.php';</script>";
			        // 
			    }
			}
			
			
			// 	echo "SUCCESS";
			//'
		}else{
			echo "Error: ".$sql. "<br>" .$conn->error;
		}
	}else{
		echo "<script>alert('Sorry your file was not uploaded.');window.location.href='../rec/memberinfo.php';</script>";
		// window.location.href='adminbooklist.php';
	}

if(isset($_POST['update'])){
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
}




$conn->close();	

 ?>