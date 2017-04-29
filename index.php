<html>
<head>
<title>PHP AJAX Image Upload</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
$(document).ready(function (e) {
	$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();  //If this method is called, the default action of the event will not be 							triggered.
		$.ajax({
        	url: "upload.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,     //when we send json file we write contentType: 'application/json'
    	    cache: false,
			processData:false,
			success: function(data)
		    {
			$("#targetLayer").html(data);
		    },
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
</head>
<body>
<center>
	<div style="margin-top: 10%">
		<h1>Image Uploader AJAX PHP Method</h1>
		<div class="bgColor">
			<form id="uploadForm" action="upload.php" method="post">
					<div id="targetLayer">No Image</div>
					<div id="uploadFormLayer">
						<input name="userImage" type="file" class="inputFile" /><br/>
						<input type="submit" value="Submit" class="btnSubmit" />
				
					</div>

			</form>
		</div>
	</div>
</center>

	
</body>
</html>
