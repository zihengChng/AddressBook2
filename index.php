<?php 
	include('rec/materialize.php');
?>
<div class="container">
	<?php include('rec/navbar.php'); ?>
	<div class="row" style="margin-bottom: 20px;">
	<div class="col-md-5">
		<div class="col-md-12">
			<h1 class="text-center">It is Easy To Use<br><small>Manage All Your Contact Just With Some Simple Step</small></h1>
			<img src="https://www.plaxo.com/img/v3/home/pic01.png" class="img-responsive">
		</div>
	</div>
	<div class="col-md-7">
		<div class="card">
			<h1 class="header text-center" style="color:#27346F;">Create New Account</h1>
			<div class="card-body">
				<form name="signup-form" method="POST" action="php/register.php">
					<div class="form-group label-floating">
						<label class="control-label" for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username" required>
					</div>
					<span class="identifyusername"></span>
					<div class="form-group label-floating">
						<label class="control-label" for="password1">Password</label>
						<input type="password" class="form-control" id="password1" name="password1" required>
					</div>
					<div class="form-group label-floating" id="confirm">
						<label class="control-label" for="password2">Confirm Password</label>
						<input type="password" class="form-control" id="password2" name="password2" onkeyup="checkPass(); return false;" required>
					</div>
					<span id="confirmMessage" class="help-block"></span>
					<div class="form-group label-floating">
						<label class="control-label" for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" required>
					</div>
					<div class="form-group label-floating">
						<label class="control-label" for="phonenumber">Phone Number</label>
						<input type="text" class="form-control" id="phonenumber" name="phonenumber" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
					</div>
					<div class="form-group label-floating">
						<label class="radio-inline">
							<input type="radio" name="gender" id="male" value="Male" checked="checked">Male
						</label>
						<label class="radio-inline">
							<input type="radio" name="gender" id="female" value="Female">Female
						</label>
					</div>
					<div class="form-group label-floating">
						<input type="date" name="date" class="form-control" required>
					</div>
					<div class="col-md-offset-8 col-md-4">
						<button type="submit" class="btn btn-raised btn-inverse btn-block" id="regBtn">SignUp</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
</div>
<div class="container-fluid">
<footer class="footer">
	<div class="row">
			<div class="col-md-4 col-xs-12" style="padding-left: 30px;">
				<address>
					<strong>Group Name</strong><br>
					Jalan Selatan Utama,Off Jalan Skudai<br>
					81300 Skudai<br>
					Johor Malaysia<br>
				</address>
			</div>
			<div class="col-md-4 col-xs-12" style="padding-left: 30px;margin-bottom: 20px;">
				&copy; 2016 <a href="https://www.facebook.com/chngziheng">Ch'ng Zi Heng</a>&nbsp;,&nbsp;<a href="https://www.facebook.com/lu.chowling">Lu Chow Ling</a>&nbsp;,&nbsp;<a href="https://www.facebook.com/jenkin475">Jenkin Wong</a>
			</div>
			<div class="col-md-4 col-xs-12" style="padding-left: 30px;">
				<ul class="list-inline">
					<li><a href="#"><img src="https://www.plaxo.com/img/v3/home/svg/icon-fb.svg"></a></li>
					<li><a href="#"><img src="https://www.plaxo.com/img/v3/home/svg/icon-twitter.svg"></a></li>
					<li><a href="#"><img src="img/icon-google-plus.png" height="34px" width="34px"></a></li>
				</ul>
			</div>
	</div>
</footer>
</div>
<?php 
	include('rec/footer.php');
?>