<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="material-icons">menu</span></button>
			<a class="navbar-brand" href="index.php" style="padding-top: 25px;">Online Address Book</a>
		</div>
		<div class="navbar-collapse collapse">
			<form class="navbar-form navbar-right form-inline" name="signin-form" method="POST" action="php/login.php">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><span class="material-icons" style="color: white;">mail</span></span>
						<input type="text" class="form-control username" placeholder="Username" name="username" autofocus>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><span class="material-icons" style="color: white;">lock</span></span>
						<input type="password" class="form-control password" placeholder="Password" name="password">
					</div>
				</div>
				<button class="btn btn-default btn-raised">Sign In</button>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript" src="../js/image.js"></script>
<script type="text/javascript" src="js/login.js"></script>
