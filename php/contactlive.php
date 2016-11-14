<?php 

require('config.php');
session_start();

$groupid = $_SESSION['groupid'];
$keyword = $_POST['hint'];

$sql = "SELECT * FROM contacts WHERE contactname LIKE '%$keyword%' AND groupid='$groupid'";
$result = $conn->query($sql);

while($row3 = $result->fetch_assoc()){ ?>

	<tr>
		<td><?php echo $row3['contactname']; ?></td>
		<td><?php echo $row3['phonenumber']; ?></td>
		<td><?php echo $row3['email']; ?></td>
		<td><button class="btn btn-raised btn-inverse btn-xs viewDetail" data-toggle="modal" data-target="#viewDetail" data-id="<?php echo $row3['id']; ?>"><span class=""></span><span>View Detail</span></button><button class="btn btn-raised btn-info btn-xs editDetail" data-toggle="modal" data-target="#editContact" data-id="<?php echo $row3['id']; ?>" >Edit Detail</button>
		<form action="../php/deleteContact.php" method="POST">
		<button class="btn btn-raised btn-danger btn-xs" name="id" value="<?php echo $row3['id']; ?>">Delete Detail</a>
		</button>
		<input type="hidden" value="<?php echo $id ?>" name="hidden">
		</form></td>
	</tr>

<?php }

echo "<script type='text/javascript' src='../js/view.js'></script>";
echo "<script type='text/javascript' src='../js/edit.js'></script>";
$conn->close();
 ?>