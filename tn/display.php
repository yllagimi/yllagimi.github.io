<?php


$servername = "localhost";
$username = "yllagimi_demo";
$password = "Testing1234!";
$dbname = "yllagimi_img";


  // Create database connection
  $con = mysqli_connect($servername, $username,$password,$dbname);

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['display'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($con, $_POST['image_text']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "SELECT * FROM img";
  	// execute query
  	mysqli_query($con, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($con, "SELECT * FROM img");
?>
<!DOCTYPE html>
<html>
<head>
<title>Display Images 2</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TeleNovela </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="r2ml.co" />
	<meta name="keywords" content="developer, machine learning, predictive behavioral analytics, regression, NLP" />
	<meta name="r2ml.co" content="r2ml.co" />
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	<!-- Theme style  -->
	<link rel="stylesheet" type="text/css" href="css/tn_style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="http://use.edgefonts.net/monoton:n4:all.js"></script>
</head>
<body> 

	
	<div class="container">
						<fieldset id="input2-wrapper">
 
<?php 
	while ($row = mysqli_fetch_array($result)) {
		echo "<button onclick='playPause()'>Play/Pause</button>"; 
  		echo "<button onclick='makeBig()'>Big</button>";
  		echo "<button onclick='makeSmall()'>Small</button>";
  		echo "<button onclick='makeNormal()'>Normal</button>";
	echo "<div style='text-align:center'>" ;
	echo  "<br><br>";
  	echo "<video id='images/".$row['image']."' width='420' controls >";
    echo "<source src='images/".$row['image']."' type='video/mp4'>";
    echo "<source src='images/".$row['image']."' type='video/ogg'>";
  echo "</video>";
			echo "<p> The ID of this Video is ".$row['id']." </p>";	
			echo "<p> The advert targets are ".$row['aud_gender']." and ages ".$row['aud_age']." </p>";	
			echo "<p> Keywords include: ".$row['kwd1']." ".$row['kwd2']." ".$row['kwd3']." ".$row['kwd4']." </p>";	
			echo "<p> Advert is described as follows:   ".$row['image_text']." </p>";	
		echo "<p> And the video will be displayed at ".$row['locationtodisp']." </p>";	
		echo "<p> From ".$row['tstartdate']." to ".$row['tenddate']."  </p>";	

		echo "</div>" ;
		}
	
?>	
							
							</fieldset>
				</div>
 
	<form method="POST" action="display.php" enctype="multipart/form-data"> 
  	<button type="submit" name="display">Refresh</button>
		</form>

	
	<a href="img.html"> Back to Advert Form </a>
	
<script> 
	
	function reqListener () {
      console.log(this.responseText);
    }
	
	var myVideo = document.getElementById(".$row['image']."');" ; ?>
		

function playPause() { 
    if (myVideo.paused) 
        myVideo.play(); 
    else 
        myVideo.pause(); 
} 

function makeBig() { 
    myVideo.width = 560; 
} 

function makeSmall() { 
    myVideo.width = 320; 
} 

function makeNormal() { 
    myVideo.width = 420; 
} 
</script> 
		
</body>
</html>