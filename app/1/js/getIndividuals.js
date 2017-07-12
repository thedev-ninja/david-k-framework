	$(document).ready( function () {
		var projectUriPath = '/david';
        $('#example').DataTable( {
            "ajax": projectUriPath+"/api/listings/individuals/",
            "columns": [
	            { "data": "id", "visible": false },
	            { "data": "fname" },
	            // { "data": "address", "visible": false },
	            // { "data": "null", "visible": false },
	            { "data": "suite" },
	            { "data": "floor" },
	            { "data": "desc", "visible": false }            
	        ],
            "dom": '<"top"i>rt<"bottom"flp><"clear">'
        } );
        $('#example').fadeIn();
	    $.ajax({url: "/david/api/listings/individuals/", success: function(result){
	        // $("#listdata").html(result);
	        console.log(result);
	    }});
	} );    