<?php if (isset($_POST['projectUriPath'])) {
	$projectUriPath = $_POST['projectUriPath'];
}else{
	$projectUriPath = PROJECT_URIPATH;
}
?>
<script type="text/javascript">
	$(document).ready( function () {
		var projectUriPath = '<?php echo $projectUriPath ?>';
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
        console.log(data);
	} );
</script>