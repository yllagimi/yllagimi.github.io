<?php

header ("refresh:3; url=display.php");

$servername = "localhost";
$username = "yllagimi_demo";
$password = "Testing1234!";
$dbname = "yllagimi_img";

// Create database connection
$con = mysqli_connect($servername, $username, $password);
// Send error message to the server log if error connecting to the database
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if(!mysqli_select_db($con, $dbname))
{
	echo 'Database not selected';
}

 ini_set ('display_errors', 'on');
 ini_set ('log_errors', 'on');
 ini_set ('display_startup_errors', 'on');

// Initialize message variable
//$msg = "";
  // If upload button is clicked ...
//  if (isset($_POST['upload'])) {
  	// Get image name
  
  	// Get text
	$personid = $_POST['personid'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$mediatype = $_POST['mediatype'];
	$locationtodisp = $_POST['locationtodisp'];
	$tstartdate = $_POST['tstartdate'];
	$tenddate = $_POST['tenddate'];
	$aud_age = $_POST['aud_age'];
	$aud_gender = $_POST['aud_gender'];
	$kwd1 = $_POST['kwd1'];
	$kwd2 = $_POST['kwd2'];
	$kwd3 = $_POST['kwd3'];
	$kwd4 = $_POST['kwd4'];
	  //get image name
	$image = $_FILES['image']['name'];
	  //get image text
//	$image_text = mysqli_real_escape_string($con, $_POST['image_text']);
	$image_text = $_POST['image_text'];


  	// image file directory
  	$target = 'images/'.basename($image);

 	$sql = "INSERT INTO img (personid, fname, lname, username, email, mediatype, locationtodisp, tstartdate, tenddate, aud_age, aud_gender, kwd1, kwd2, kwd3, kwd4, image, image_text) 
	VALUES 
	('$personid', '$fname', '$lname', '$username', '$email', '$mediatype', '$locationtodisp', '$tstartdate', '$tenddate', '$aud_age', '$aud_gender', '$kwd1', '$kwd2' , '$kwd3', '$kwd4' , '$image', '$image_text')";

//
// 	$sql = "INSERT INTO img (personid, fname, lname, username, mediatype, locationtodisp, tstartdate, tenddate, aud_age, aud_gender, kwd1, kdw2, kwd3, kwd4, image, image_text) 
//	VALUES 
//	('$personid', '$fname', '$lname', '$username', '$mediatype', '$locationtodisp', '$tstartdate' , '$tenddate', '$aud_age', '$aud_gender', '$kwd1', '$kwd2' , '$kwd3' , '$kwd4', '$image', '$image_text')";

	    
  	
	 // execute query
	 if (!mysqli_query($con, $sql))
		 {
			 echo 'Not inserted';
		 }
		 else 
		 {
			 echo 'Inserted';
		 }
		
		 
		 
  		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  			}else{
  		$msg = "Failed to upload image";
  	}  
//  }
  
// $result = mysqli_query($con, "SELECT * FROM img");
//mysqli_close($con);
?>


