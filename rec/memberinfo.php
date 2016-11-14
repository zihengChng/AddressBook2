<?php session_start();
	include('materialize.php');
	include('membernavbar.php');
 ?>
<div class="container member-container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 member-card-margin">
			<div class="card">
				<div class="card-title text-center">
					<p>My Info</p>
				</div>
				<div class="card-body">
				<?php
				$username=$_SESSION['username'];
				$sql = "SELECT * FROM users WHERE username='$username'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {?>
					<div class="col-md-4">
						<img src="../img/profile/<?php echo $row['username'];?>.jpg" width="200px" height="200px" onerror="this.src='../img/profile/default-user.png';">
					</div>
					<div class="col-md-8">
						<table style="width: 100%;" cellpadding="0" cellspacing="0">
						
						        <tr>
						        	<td><h2><span class="material-icons">person</span><?php echo $row['username'];?></h2></td>
						        </tr>
						        <tr>
						        	<td><h2><span class="material-icons">email</span><?php echo $row['email'];?></h2></td>
						        </tr>
						        <tr>
						        	<td><h2><span class="material-icons">call</span><?php echo $row['phonenumber'];?></h2></td>
						        </tr>
						        <tr>
						        	<td><h2><span class="material-icons">wc</span><?php echo $row['gender'];?></h2></td>
						        </tr>
						        <tr>
						        	<td><h2><span class="material-icons">cake</span><?php echo $row['date'];?></h2></td>
						        </tr>
						        
						</table>
					</div>
				</div>
				<div class="text-right" style="padding-right: 5%;padding-bottom: 2.5%;">
					<button type="button" class="btn btn-raised btn-inverse editProfile" data-toggle="modal" data-id="<?php echo $row['id'];?>" data-target="#editProfile">Edit</button>
				</div>
				<?php
						    }
						} else {
						    echo "0 results";
						}
						$conn->close();
							?>
			</div>
			<script type="text/javascript" src="../js/image.js"></script>

			<script type="text/javascript" src="../js/edit.js"></script>
		</div>
	</div>
</div>
 <?php 
 include('modal.php');
 include('footer.php'); 
 ?>