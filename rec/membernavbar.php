<?php
	require_once('../php/config.php');
	$username = $_SESSION['username'];
	$sql = "SELECT username FROM users WHERE username='$username'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
 ?>
<style type="text/css">
	.pushed{
		transition-property: margin-top;
		transition-duration: 0.3s;
		margin-top: 200px;
	}
	.pushBack{
		transition-property: margin-top;
		transition-duration: 0.3s;
		margin-top: 30px;
	}
</style>
<script>
	function push(){
		console.log("executed?");
		if($("div.member-container").hasClass("pushed")){
			$("div.member-container").removeClass("pushed").addClass("pushBack");
		}else{
			$("div.member-container").removeClass("pushBack").addClass("pushed");
		}
	}
</script>
<script type="text/javascript" src="../js/image.js"></script>
<div class="fixed-top-block">
	<div class="navbar navbar-white navbar-top" style="margin-bottom: 0px;">
		<div class="container-fluid">
			<div class="navbar-header">	
				<button type="button" class="navbar-toggle upperNavBar" onclick="push()" data-toggle="collapse" data-target="#navbar1"><span class="material-icons">menu</span></button>	
				<a class="navbar-brand" href="memberview.php">Online Address Book</a>
			</div>
			<div class="navbar-collapse collapse" id="navbar1">
				<ul class="nav navbar-nav navbar-right">				
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $row['username'] ?><span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="memberinfo.php"><i class="material-icons">account_circle</i>&nbsp;My Info</a></li>
							<li><a href="../php/signout.php"><i class="material-icons">power_settings_new</i>&nbsp;Sign Out</a></li>
						</ul>
					</li>

					<li><!--if got picture then put the picture src in img else ../img/default-user.png--><img src="../img/profile/<?php echo $row['username'];?>.jpg" class="img-circle" width="60px" height="60px" onerror="this.src='../img/profile/default-user.png';"></li>

				</ul>
			</div>
		</div>
	</div>
	<div class="navbar navbar-inverse navbar-top">
		<div class="container-fluid">
			<div class="navbar-header">	
				<button type="button" class="navbar-toggle lowerNavBar" onclick="push()" data-toggle="collapse" data-target="#navbar2"><span class="material-icons">menu</span></button>
			</div>
			<div class="navbar-collapse collapse" id="navbar2">
				<div class="col-md-offset-4">
					<ul class="nav navbar-nav member-nav">
						<li><a href="memberview.php"><i class="material-icons">home</i>&nbsp;&nbsp;&nbsp;Home</a></li>
						<li><a href="viewaddressbook.php"><i class="material-icons">group</i>&nbsp;&nbsp;&nbsp;Groups</a></li>
						<li><a href="memberinfo.php"><i class="material-icons">account_circle</i>&nbsp;&nbsp;&nbsp;My Info</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../js/image.js"></script>

</div>