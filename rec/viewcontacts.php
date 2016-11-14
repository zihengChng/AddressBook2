<?php session_start();
	include('materialize.php');	
	include('membernavbar.php');
	$groupid = $_GET['id'];
	$_SESSION['groupid'] = $_GET['id'];
?>
<div class="container member-container">
	<div class="row">
		<div class="col-md-3">
			<button class="btn btn-raised btn-inverse addContactModal" data-toggle="modal" data-target="#addContact" data-id="<?php echo $groupid; ?>">Add Contacts</button>
		</div>
		<div class="col-md-offset-5 col-md-4">
			<form name="group-search-form" method="" action="">
				<div class="form-group label-floating">
					<label class="control-label" for="gSearch">Search</label>
					<input type="text" class="form-control" id="gSearch" name="" onkeyup="showContact(this.value)">
				</div>
			</form>
		</div>
	</div>

	<div class="row">
		<!--This use to put in the php for multiple group card-->
		<?php 
		
		$sql = "SELECT * FROM contacts WHERE groupid='$groupid'";
		$result = $conn->query($sql); ?>
		
		<table class="table table-stripled">
			<thead>
				<tr>
					<th>Contact Name</th>
					<th>Contact Number</th>
					<th>Contact Email</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody class="liveContact">
			<?php while($row3 = $result->fetch_assoc()){ ?>
				<tr>
					<td><?php echo $row3['contactname']; ?></td>
					<td><?php echo $row3['phonenumber']; ?></td>
					<td><?php echo $row3['email']; ?></td>
					<td>
						<div class="col-md-6">
							<button class="btn btn-raised btn-inverse btn-xs viewDetail" data-toggle="modal" data-target="#viewDetail" data-id="<?php echo $row3['id']; ?>"><span class=""></span><span>View Detail</span></button><button class="btn btn-raised btn-info btn-xs editDetail" data-toggle="modal" data-target="#editContact" data-groupid="<?php echo $groupid; ?>" data-id="<?php echo $row3['id']; ?>" >Edit Detail</button>
						</div>
					<form action="../php/deleteContact.php" method="POST">
					<button class="btn btn-raised btn-danger btn-xs" name="id" value="<?php echo $row3['id']; ?>">Delete Detail</a>
					</button>
					<input type="hidden" value="<?php echo $groupid; ?>" name="hidden">
					</form></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript" src="../js/image.js"></script>
<script type="text/javascript" src="../js/view.js"></script>
<script type="text/javascript" src="../js/search.js"></script>
<?php 
	include('modal.php'); 
	include('footer.php');
?>