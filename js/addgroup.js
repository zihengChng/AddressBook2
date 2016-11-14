$("#addGroup .addgroup").click(function(){
	var name = $("#addGroup input[name='groupNameAdd']").val();
	var des = $("#addGroup textarea[name='groupDesAdd']").val();
	var data = { 'name':name , 'des':des };
	console.log(data);
	$.ajax({
		url: "../php/insert.php",
		type: "POST",
		data: data,
		success: function(data){
			console.log(data);
			if(data == "success"){
				alert("Group Created!");
				window.location.reload();
			}else{
				alert("Failed to create group.");
			}
		}
	});
});