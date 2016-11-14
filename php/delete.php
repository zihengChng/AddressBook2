<?php session_start();
require ('config.php');


$id = null;
if(!empty($_POST['id']))
{
$id = $_POST['id'];
}
if($id == null)
{
header("Location: ../index.php");
} 


$sql = "DELETE FROM groups WHERE id='$id'";


if ($conn->query($sql)) {
	echo "<script> confirm('Are you sure ?')</script>";
    echo "<script> alert('Record successfully deleted')</script>";
    echo "<script> window.location='../rec/viewaddressbook.php'</script>";
} else {
    echo "<script> alert('Error deleting record: " . $conn->error."')</script>";
    echo "<script> window.location='index.php'</script>";
}

$conn->close();
?>