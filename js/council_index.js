function load(id) {
	$.ajax({
	    type: "POST",
	    url: id+".php",
	    success: function (data) {
	        $('#add_here').html(data);
	    },
	    error: function (response) {
	        alert("Error getting php file");
	    }
	});
}

