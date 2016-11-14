<?php session_start();
	include('materialize.php'); 
	include('membernavbar.php');
?>
<div class="container member-container">
	<div class="row">
		<div class="col-md-6 member-card-margin">
			<div class="card">
				<div class="text-center card-title">
					<p>My Groups</p>
				</div>
				<div class="card-body">
					<p class="text-center" style="font-size: 100px;"><?php
				      $sql="SELECT * FROM groups WHERE owner='".$_SESSION['username']."'";
				      $result = $conn->query($sql); //run the query
				      $total_records = $result->num_rows;
				      echo $total_records?></p>
				</div>
				<div class="text-center">
					<h3><a href="viewaddressbook.php">Add Groups</a></h3>
				</div>
			</div>
		</div>
		<div class="col-md-6 member-card-margin">
			<div class="card">
				<div class="text-center card-title">
					<p>My Contacts</p>
				</div>

				<div class="card-body">
					<p class="text-center" style="font-size: 100px;"><?php
				$username=$_SESSION['username'];
				$sql="SELECT id FROM groups WHERE owner='".$username."'";
				// echo "<script>console.log(\"".$sql."\")</script>";
				$result = $conn->query($sql); //run the query

				if ($result->num_rows > 0) {
					$total=0;
					while($row= $result->fetch_assoc()){
						$sql1="SELECT id,contactname FROM contacts WHERE groupid='".$row['id']."'";
						// echo "<script>console.log(\"".$sql1."\")</script>";
						$result1 = $conn->query($sql1); //run the query
						$total_records = $result1->num_rows;	
						$total+=$total_records;
				}
				      
				      echo $total;
				  }else{echo "0";}
				 ?></p>
				</div>
				<div class="text-center">
					<h3><a href="viewaddressbook.php">Add Contact</a></h3>
				</div>
			</div>
		</div>
		
		<div class="col-md-12 member-card-margin">
			<div class="card">
				<div class="text-center card-title">
					<p>Upcoming Birthday</p>
				</div>
				<div class="card-body">
				<table class="table table-striped">

				<?php
				$username=$_SESSION['username'];
				$sql="SELECT id FROM groups WHERE owner='".$username."'";
				// echo "<script>console.log(\"".$sql."\")</script>";
				$result = $conn->query($sql); //run the query

				if ($result->num_rows > 0) {
						$birthdaylist = array();
					while($row= $result->fetch_assoc()){
						$sql1="SELECT * FROM  contacts WHERE groupid='".$row['id']."';";
            // echo $sql1."<br>";
						// echo "<script>console.log(\"".$sql1."\")</script>";
						$result1 = $conn->query($sql1); //run the query
						if($result1->num_rows >0){
							while($row1=$result1->fetch_assoc()){
								// $birthdaylist[] = array($row1['id'],$row1['contactname'],$row1['birthday']);
								$birthdaylist[] = array("id"=>"<img src='../img/contacts/".$row1['id'].".jpg' width='100' height='100' class='img-circle' onerror=\"this.src='../img/profile/default-user.png';\">","name"=>$row1['contactname'],"birthday"=>date("M-d(D)", strtotime($row1['birthday'])));
								// echo $row1['contactname'];
							}

						}
						
				}
				      
				      
				  }else{echo "No contacts added.";}
				  usort($birthdaylist, function($a, $b) {
				  	return $a['birthday'] <= $b['birthday'];				      
				  });
				  $birthdaylist = array_slice($birthdaylist,0,5);
				  usort($birthdaylist, function($a, $b) {
				  	return $a['birthday'] >= $b['birthday'];				      
				  });
								?>
								<!-- <pre>
									<?php print_r($birthdaylist);  ?>
								</pre> -->
								<?php 
								// print_r(array_values($birthdaylist));
								// rsort($birthdaylist);
								function convert_multi_array($array) {
								  $out = implode("",array_map(function($a) {return "<tr><td>".implode("</td><td>",$a)."</td></tr>";},$array));
								  echo $out;
								}								
								convert_multi_array($birthdaylist);
								?>
								
									<!-- <tr>
									<td><img src="../img/contacts/<?php echo $row1['id']?>.jpg" class="img-circle" width="100" height="100"></td>
									<td><?php echo $row1['contactname']."<br>";?></td>
									<td><?php 
									$birthday= date_create($row1['birthday']);
									// $DTcurrenttime=DateTime::createFromFormat('Y-m-d H:i:s', $birthday);
									echo date_format($birthday,'d-M(D)') ."<br>";?></td>
								</tr> -->
								
								<!--  -->
								<?php
							
				 ?>
				</table>
					<!-- <p class="text-center" style="font-size: 100px;">0</p> -->
				</div>
				
			</div>
		</div>
	</div>
	
	<script type="text/javascript" src="../js/image.js"></script>

</div>
<?php include('footer.php'); ?>