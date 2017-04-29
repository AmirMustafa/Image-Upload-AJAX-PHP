# Image-Upload-Core-PHP and AJAX 

## Overview

1. Image Upload in projects is common phenomena.

2. On chosing image through browse image and clicking submit button, image will be saved in a folder directory.

3. Instead of Refreshing page this time done with AJAX Request

4. PHP's $_FILES concept is used for saving the image

5. Fetching of Image done with the help of AJAX success response function 

6. Image is saved in directory.

## Snippets

```

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

```

## Preview


![Screenshot of Image Upload AJAX Method ](https://cloud.githubusercontent.com/assets/15896579/25558048/75bdca78-2d3c-11e7-8922-698850d26505.png?raw=true "Screenshot of Image Upload")
<br/><br/><br/>

![Screenshot of Image Upload AJAX Method ](https://cloud.githubusercontent.com/assets/15896579/25558051/79c60518-2d3c-11e7-9150-da05f1234dd1.png?raw=true "Screenshot of Image Upload")
<br/><br/><br/>

![Screenshot of Image Upload AJAX Method ](https://cloud.githubusercontent.com/assets/15896579/25558052/79cf8c28-2d3c-11e7-8515-4c98d125b28f.png?raw=true "Screenshot of Image Upload")
<br/><br/><br/>

![Screenshot of Image Upload AJAX Method ](https://cloud.githubusercontent.com/assets/15896579/25558053/79f947e8-2d3c-11e7-9319-9031e3971800.png?raw=true "Screenshot of Image Upload")
<br/><br/><br/>

<br/><br/><br/>




## License

(The MIT License)

Copyright (c) 2016 Amir Mustafa

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

