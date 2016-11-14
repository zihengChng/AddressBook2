$(".viewDetail").on("click", function(){
	var id = { 'id':$(this).data("id") };
	console.log(id);
	$.ajax({
		url: "../php/view.php",
		type: "POST",
		data: id,
		dataType: 'json',
		success: function(data){
			console.log(data);
			$("#viewDetail img.img-circle").attr("src", data.i);
			$("#viewDetail b.detailName").html(data.n);
			$("#viewDetail b.detailPhoneNo").html(data.p);
			$("#viewDetail b.detailHomeNo").html(data.hp);
			$("#viewDetail b.detailEmail").html(data.e);
			$("#viewDetail b.detailCompany").html(data.c);
			$("#viewDetail b.detailCompanyNo").html(data.cp);
			$("#viewDetail b.detailEdu").html(data.edu);
			$("#viewDetail b.detailBday").html(data.b);
		}, error: function(data){
			console.log(data);
		}
	});
});