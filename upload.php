<?php
	if(isset($_POST['upload'])){
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp_name= $_FILES['image']['tmp_name'];
	$desc = $_POST['desc'];
		

	move_uploaded_file($image_tmp_name,"images/$image_name");
		echo "<img src='images/$image_name' width='400' height='250'><br>$desc";

	
			
	header("Location:index.php");		
}

?>


<?php
/*if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$sourcePath = $_FILES['userImage']['tmp_name'];
$targetPath = "images/".$_FILES['userImage']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
?>

<?php
$conn = new mysqli('localhost', 'root', '', 'ssc_ampt_property_management');
$bld=10;
$sys="structure";
$url=$targetPath;
?>
<?php

//Insert
$sql="INSERT INTO `images` (`bldnumber`, `system`, `url`) VALUES ('$bld', '$sys', '$url')";
if ($conn->query($sql) === TRUE) {
    echo "data inserted";
}
else 
{
    echo "failed";
}
*/
?>
