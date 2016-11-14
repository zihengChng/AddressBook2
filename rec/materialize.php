<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=deivce-width,initial-scale=1">
	<!--Import Boostrap minified css-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--Import Material design bootstrap & ripple minified css-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/css/bootstrap-material-design.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/css/ripples.min.css">
	<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Import Roboto Font-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/material.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/ripples.min.js"></script>
	<title>OAB</title>
	<script type="text/javascript">
		function checkPass(){
	        //Store the password field objects into variables ...
	        var pass1 = document.getElementById('password1');
	        var pass2 = document.getElementById('password2');

            var div = document.getElementById('confirm');
            var regBtn = document.getElementById('regBtn');
	        //Store the Confimation Message Object ...
	        var message = document.getElementById('confirmMessage');
	        //Compare the values in the password field 
	        //and the confirmation field
	        if(pass1.value == pass2.value){
	            //The passwords match. 
	            //Set the color to the good color and inform
	            //the user that they have entered the correct password 
	            div.className = "form-group label-floating has-success has-feedback";
	            message.innerHTML = "Passwords Match!"
                regBtn.className = "btn btn-raised btn-inverse btn-block"
                regBtn.removeAttribute("disabled")
	        }else{
	            //The passwords do not match.
	            //Set the color to the bad color and
	            //notify the user.
	            div.className = "form-group label-floating has-error has-feedback";
	            message.innerHTML = "Passwords Do Not Match!"
                regBtn.className = "btn btn-raised btn-inverse btn-block disabled"
                regBtn.disabled = "disabled"
	        }
	    }
	 	
	</script>
	<style type="text/css">
		body{
			padding-top: 120px;
		}
		.fixed-top-block{
			position: absolute;
			top: 0;
			left: 0;
			right:0;
		}
		.navbar-white{
			background-color: white;
			color:black;
		}
		.member-nav > li > a{
			position: relative;
			display: block;
			padding: 10px 30px;
		}
		
		.member-container{
			margin-top: 30px;
		}
		.card-title{
			background-color: #3b5998;
			color: white;
			height: 40px;
			margin-top: 0px;
			font-size: 25px;
		}
		.card a{
			color: #3b5998;
		}
		.card a:hover{
			text-decoration: none;
		}
		.member-card-margin{
			margin-bottom: 30px;
		}
		.navbar.navbar-inverse {
  			background-color: #3b5998;
  			color: #ffffff;
		}
		.btn.btn-raised.btn-inverse{
		 	background-color: #3b5998;
  			color: #ffffff; 
		}
		.btn.btn-raised:not(.btn-link):hover.btn-inverse{
			background-color: #224389;
		}
		.btn.btn-raised.btn-info{
		 	background-color: #5772AC;
  			color: #ffffff; 
		}
		.btn.btn-raised:not(.btn-link):hover.btn-info{
			background-color: #3b5998;
		}
		.navbar .navbar-nav .dropdown.open .dropdown-menu > li > a:hover,
	    .navbar .navbar-nav .dropdown.open .dropdown-menu > li > a:focus {
	   	 color: #224389;
	   	 background-color: transparent;
	 	}
	  	.navbar .navbar-nav .dropdown.open .dropdown-menu > .active > a,
	  	.navbar .navbar-nav .dropdown.open .dropdown-menu > .active > a:hover,
	  	.navbar .navbar-nav .dropdown.open .dropdown-menu > .active > a:focus {
		    color: #224389;
	    	background-color: transparent;
	  	}
		.form-group.is-focused label,
		.form-group.is-focused label.control-label {
		  color: #3b5998;
		}
		.form-group.is-focused .form-control {
		  outline: none;
		  background-image: -webkit-gradient(linear, left top, left bottom, from(#3b5998), to(#3b5998)), -webkit-gradient(linear, left top, left bottom, from(#D2D2D2), to(#D2D2D2));
		  background-image: -webkit-linear-gradient(#3b5998, #3b5998), -webkit-linear-gradient(#D2D2D2, #D2D2D2);
		  background-image: -o-linear-gradient(#3b5998, #3b5998), -o-linear-gradient(#D2D2D2, #D2D2D2);
		  background-image: linear-gradient(#3b5998, #3b5998), linear-gradient(#D2D2D2, #D2D2D2);
		  -webkit-background-size: 100% 2px, 100% 1px;
		          background-size: 100% 2px, 100% 1px;
		  -webkit-box-shadow: none;
		          box-shadow: none;
		  -webkit-transition-duration: 0.3s;
		       -o-transition-duration: 0.3s;
		          transition-duration: 0.3s;
		}
		.radio .check,
		label.radio-inline .check {
		  height: 15px;
		  width: 15px;
		  border-radius: 100%;
		  background-color: #3b5998;
		  -webkit-transform: scale3d(0, 0, 0);
		          transform: scale3d(0, 0, 0);
		}
		.radio input[type=radio]:checked ~ .check,
		label.radio-inline input[type=radio]:checked ~ .check {
		  background-color: #3b5998;
		}
		.radio input[type=radio]:checked ~ .circle,
		label.radio-inline input[type=radio]:checked ~ .circle {
		  border-color: #3b5998;
		}
		.footer{
			padding-top: 50px;
			padding-bottom: 30px;
			background-color: #3b5998; 
			color: white;
		}
		.footer a{
			color: white;
		}
	</style>
</head>
<body>