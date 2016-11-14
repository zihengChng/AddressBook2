//target any tag with class editGroup in it, .click mean when clicked, execute the function
$(".editGroup").click(function(){
	//get data-groupid from button with class editGroup
	var id = { 'id':$(this).data("groupid") };

	//debug usage, check F12 to make sure the line can execute to this place
	console.log(id);

	//start ajax
	$.ajax({
		//target php file
		url: "../php/editView.php",

		//php action method eg. POST / GET
		type: "POST",

		//the data you want to give to the php file if using GET then data: *something* will cause the url be like editView.php?edit=.... POST will hide the data
		data: id,

		//the data ajax will be receiving, telling ajax what to expect, JSON is a type of PHP array, if only string or normal text is received, dataType can be ignored(not set)
		dataType: 'json',

		//what to do if ajax is success, the (data) is everything the PHP file return to here, if the PHP doesn't have any echo, whole PHP will be returned in text
		success: function(data){

			//debug usage, check F12 to make sure the line can execute to this place
			console.log(data);

			//target modal with id="editGroup" and find the tag input with name="groupIdEdit", set the value to data.i
			$("#editGroup input[name='groupIdEdit']").val(data.i);
			$("#editGroup input[name='groupNameEdit']").val(data.n);
			$("#editGroup textarea[name='groupDesEdit']").val(data.d);
		}
	});
});

$("#editGroup .update").click(function(){
	var name = $("#editGroup input[name='groupNameEdit']").val();
	var des = $("#editGroup textarea[name='groupDesEdit']").val();
	var id = $("#editGroup input[name='groupIdEdit']").val();
	var update = 1;
	var data = { 'name':name, 'des':des, 'id':id , 'update':update };
	$.ajax({
		url: "../php/editView.php",
		type: "POST",
		data: data,
		success: function(data){
			console.log(data);
			if(data == "success"){
				window.location.reload();
			}else{
				alert('Failed to change!');
			}
		}
	});
});

$(".editProfile").click(function(){
	console.log("CLICKED");
	var id = { 'id':$(this).data("id") };
	console.log(id);
	$.ajax({
		url: "../php/profileModal.php",
		type: "POST",
		data: id,
		dataType: 'json',
		success: function(data){
			console.log("success");
			console.log(data);
			$("#editProfile input[id='username']").val(data.u);
			$("#editProfile input[id='email']").val(data.e);
			$("#editProfile input[id='phonenumber']").val(data.p);
			if(data.g=="Male"){
				$("#editProfile input[id='male']").attr('checked','checked');
			}else{
				$("#editProfile input[id='female']").attr('checked','checked');
			};
			$("#editProfile input[id='date']").val(data.d);
		}
	});
});

$(".editDetail").click(function(){
	var id = { 'id':$(this).data("id")};
	var groupid = $(this).data("groupid");
	$("#editContact input[name='groupid']").val(groupid);
	console.log(id);
	$.ajax({
		url: "../php/editDetail.php",
		type: "POST",
		data: id,
		dataType: 'json',
		success: function(data){
			console.log("success");
			console.log(data);
			$("#editContact input[name='passidupdate']").val(data.passidupdate);
			$("#editContact input[name='contactname']").val(data.contactname);
			$("#editContact input[name='phonenumber']").val(data.phonenumber);
			$("#editContact input[name='companynumber']").val(data.companynumber);
			$("#editContact input[name='homenumber']").val(data.homenumber);
			$("#editContact input[name='email']").val(data.email);
			$("#editContact input[name='company']").val(data.company);
			$("#editContact input[name='education']").val(data.education);
			$("#editContact input[name='birthday']").val(data.birthday);
		}
	});
});

$("#editContact .updateContact").click(function(){
	var contactname = $("#editContact input[name='contactname']").val();
	var phonenumber = $("#editContact input[name='phonenumber']").val();
	var companynumber = $("#editContact input[name='companynumber']").val();
	var homenumber = $("#editContact input[name='homenumber']").val();
	var email = $("#editContact input[name='email']").val();
	var company = $("#editContact input[name='company']").val();
	var education = $("#editContact input[name='education']").val();
	var birthday = $("#editContact input[name='birthday']").val();
	var image = $("#editContact input[name='image']").val();
	var id = $("#editContact input[name='passidupdate']").val();
	var update = 1;
	var data = { 'contactname':contactname, 'phonenumber':phonenumber, 'companynumber':companynumber , 'homenumber':homenumber , 'email':email , 'company':company , 'education':education , 'birthday':birthday , 'image':image , 'update':update, 'id':id };
	$.ajax({
		url: "../php/editDetail.php",
		type: "POST",
		data: data,
		success: function(data){
			console.log(data);
		}
	});
});

$("#editGroup .update").click(function(){
	var name = $("#editGroup input[name='groupNameEdit']").val();
	var des = $("#editGroup textarea[name='groupDesEdit']").val();
	var id = $("#editGroup input[name='groupIdEdit']").val();
	var update = 1;
	var data = { 'name':name, 'des':des, 'id':id , 'update':update };
	$.ajax({
		url: "../php/editView.php",
		type: "POST",
		data: data,
		success: function(data){
			console.log(data);
		}
	});
});

$(".addContactModal").click(function(){
	var id = $(this).data("id");
	console.log(id);
	$("#addContact input[name='passid']").val(id);
});

// $("#addContact .addContact").click(function(){
// 	var id = $("#addContact input[name='passid']").val();
// 	var addContact = 1;
// 	var data = {'id':id};
// 	console.log(data);
// 	$.ajax({
// 		url: "../php/addContact.php",
// 		type: "POST",
// 		data: data,
// 		dataType: "json",
// 		success:function(data){
// 			console.log(data);
// 		} 
// 	});
// });