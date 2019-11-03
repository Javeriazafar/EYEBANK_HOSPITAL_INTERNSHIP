<?php
session_start();

$conn= mysqli_connect("localhost","root","","pebs");


// initialize variables
$product_n = "";
$product_d = "";
$brand_i="";
$id = 0;
$update = false;

if (isset($_POST['Update'])) {

$images = $_POST['image'];

$sql= "INSERT INTO image_container ( image) VALUES ('$images') ";

   if(mysqli_query($conn,$sql)){
	
	   $id=mysqli_insert_id($conn) ;
	 
    $_SESSION['message'] = "Address saved"; 
    header('location: try.php');}
}


if (isset($_POST['save'])) {
	$id = $_POST['id'];
	
  $images =  $_POST['image'];
 $sql= "UPDATE image_container SET image='$images' WHERE image_id=$id";
  if(mysqli_query($conn,$sql)){

	$_SESSION['message'] = "Address updated!"; 
	header('location: try.php');}
}


if (isset($_GET['del'])) {

	$id = $_GET['del'];
	$sql="DELETE FROM image_container WHERE image_id=$id";
	
	if(mysqli_query($conn,$sql)){
		echo "<alert>done</alert>";
	$_SESSION['message'] = "Address deleted!"; 
	header('location: try.php');}
}


	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$sql= "SELECT * FROM image_container WHERE image_id=$id";
		$record = mysqli_query($conn,$sql );

		if (@count($record) == 1 ) {
			$row= mysqli_fetch_array($record);
			
   $images = $row['image'];
		}
	}


 $results = mysqli_query( $conn,"SELECT * FROM image_container"); 

?>
 
 