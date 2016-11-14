$(".login").click(function(){
	var username = $(".username").val();
	var password = $(".password").val();
	var data = { 'username' : username , 'password' : password };
	$.ajax({
		url : 'php/login.php',
		type : 'POST',
		data : data,
		success : function(data){
			if(data == "success"){
				window.location.href = 'rec/memberview.php';
			}else{
				window.location.href = 'index.php';
				alert('Wrong username or password!');
				$(".username").val("");
				$(".password").val("");
			}
		}
	});
});