<?php session_start();
	include('materialize.php');	
	include('membernavbar.php');
 ?>
<script type="text/javascript" src="../js/search.js"></script>
<script type="text/javascript" src="../js/edit.js"></script>
<div class="container member-container">
	<div class="row">
		<div class="col-md-3">
			<button class="btn btn-raised btn-inverse" data-toggle="modal" data-target="#addGroup">Add Group</button>
		</div>
		<div class="col-md-offset-5 col-md-4">
			<form name="group-search-form" method="" action="">
				<div class="form-group label-floating">
					<label class="control-label" for="gSearch">Search</label>
					<input type="text" class="form-control" id="gSearch" onkeyup="showLive(this.value)">
				</div>
			</form>
		</div>
	</div>
	<div class="row searchResult">
		<!--This use to put in the php for multiple group card-->
		<?php 

		$sql = "SELECT * FROM groups WHERE owner='$username'";
		$result = $conn->query($sql);
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
<script type="text/javascript" src="../js/image.js"></script>
<script type="text/javascript" src="../js/edit.js"></script>
		<?php } ?>
	</div>
	
</div>
<?php 
	include('modal.php'); 
	include('footer.php');
?>