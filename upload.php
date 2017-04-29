<?php



$sourcePath = $_FILES['userImage']['tmp_name'];			//saving images in directory til line 7
$targetPath = "images/".$_FILES['userImage']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
?>
<img class="image-preview" src="<?php echo $targetPath; ?>" class="upload-preview" />
<?php 												//echoing image if saved
}
?>

