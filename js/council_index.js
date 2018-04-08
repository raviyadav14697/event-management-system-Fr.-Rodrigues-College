function load(id) {

	//alert(id);	
	$.ajax({
	    type: "POST",
	    url: id+".php",
	    success: function (data) {
	    	//alert(data);
	        $('#add_here').html(data);
	    },
	    error: function (response) {
	        alert("Error getting php file");
	    }
	});
}

