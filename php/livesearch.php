<?php 


require('config.php');
session_start();
$username = $_SESSION['username'];
$keyword = $_POST['hint'];

$sql = "SELECT * FROM groups WHERE name LIKE '%$keyword%' AND owner='$username'";
$result = $conn->query($sql);
echo "<script type='text/javascript' src='../js/edit.js'></script>";
while($row3 = $result->fetch_assoc()){ ?>

	<div class="col-md-4 member-card-margin">
		<div class="card">
			<div class="text-center card-title">
				<p><?php echo $row3['name']; ?></p>
			</div>
			<div class="card-body">
				<p><?php echo $row3['des']; ?></p>
			</div>
			<div class="text-right" style="padding-right: 5%;padding-bottom: 2.5%">
				<a href="viewcontacts.php?id=<?php echo $row3['id']; ?>" role="button" class="btn btn-raised btn-inverse" name="id">View Group Contact</a>
				<button type="button" class="btn btn-raised btn-inverse editGroup" data-toggle="modal" data-target="#editGroup" data-groupid="<?php echo $row3['id']; ?>">Edit group</button>
				<form action="../php/delete.php" method="POST">
				<button role="button" class="btn btn-raised btn-danger" name="id" value="<?php echo $row3['id']; ?>">Delete group</button>
				</form>
			</div>
		</div>
	</div>

<?php }
$conn->close();
 ?>