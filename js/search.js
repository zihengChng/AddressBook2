function showLive(data){
	var hint = { 'hint':data };
	$.ajax({
		url: "../php/livesearch.php",
		type: "POST",
		data: hint,
		success: function(data){
			$("div.searchResult").html(data);
		}
	});
}

function showContact(data){
	var hint = { 'hint':data };
	$.ajax({
		url: "../php/contactlive.php",
		type: "POST",
		data: hint,
		success: function(data){
			console.log(data);
			$("tbody.liveContact").html(data);
		}
	});
}