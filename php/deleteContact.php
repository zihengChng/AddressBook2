<?php session_start();
require ('config.php');


$id = null;
if(!empty($_POST['id']))
{
$id = $_POST['id'];
$hidden = $_POST['hidden'];
}
if($id == null)
{
header("Location: ../index.php");
} 


$sql = "DELETE FROM contacts WHERE id='$id'";


if ($conn->query($sql)) {
    echo "<script> alert('Record successfully deleted')</script>";
    echo "<script> window.location='../rec/viewcontacts.php?id=$hidden'</script>";
} else {
    echo "<script> alert('Error deleting record: " . $conn->error."')</script>";
    echo "<script> window.location='index.php'</script>";
}

$conn->close();
?>