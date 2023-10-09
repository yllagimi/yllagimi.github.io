<?php
$servername = "localhost";
$username = "yllagimi_tn";
$password = "tndev";
$dbname = "yllagimi_santi";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['reg_p'])) {
// receive all input values from the form
$pname = mysqli_real_escape_string($conn,$_POST['pname']);
$price = mysqli_real_escape_string($conn,$_POST['price']);
$pcat = mysqli_real_escape_string($conn,$_POST['pcat']);
$product_details = mysqli_real_escape_string($conn,$_POST['pdetails']);
    $augdndr=mysqli_real_escape_string($conn,$_POST['aud_gender']); 
    $audagegrp=mysqli_real_escape_string($conn,$_POST['aud_age']); 
     $audagestrt=mysqli_real_escape_string($conn,$_POST['audagestrt']); 
     $audageend=mysqli_real_escape_string($conn,$_POST['audageend']); 
    $moodneut=mysqli_real_escape_string($conn,$_POST['moodneut']); 
    $moodhappy=mysqli_real_escape_string($conn,$_POST['moodhappy']); 
    $moodsad=mysqli_real_escape_string($conn,$_POST['moodsad']); 
    $moodangry=mysqli_real_escape_string($conn,$_POST['moodangry']); 
    $moodafraid=mysqli_real_escape_string($conn,$_POST['moodafraid']); 
        $moodsur=mysqli_real_escape_string($conn,$_POST['moodsur']); 
    $cweight=mysqli_real_escape_string($conn,$_POST['cweight']); 
    $cathlth=mysqli_real_escape_string($conn,$_POST['hlth']); 
    $catfood=mysqli_real_escape_string($conn,$_POST['food']); 
    $catbty=mysqli_real_escape_string($conn,$_POST['bty']); 
    $catsport=mysqli_real_escape_string($conn,$_POST['sports']); 
    $catmusic=mysqli_real_escape_string($conn,$_POST['music']); 
    $catcivic=mysqli_real_escape_string($conn,$_POST['civic']); 
    $clipdesc=mysqli_real_escape_string($conn,$_POST['clipdesc']); 
    $clipkwd1=mysqli_real_escape_string($conn,$_POST['clipkwd1']); 
    $clipkwd2=mysqli_real_escape_string($conn,$_POST['clipkwd2']); 
    $clipkwd3=mysqli_real_escape_string($conn,$_POST['clipkwd3']); 
    $cliptype=mysqli_real_escape_string($conn,$_POST['cliptype']); 
    $cliploc1=mysqli_real_escape_string($conn,$_POST['cliploc1']); 
    $clipstdate=mysqli_real_escape_string($conn,$_POST['tstartdate']); 
    $clipenddate=mysqli_real_escape_string($conn,$_POST['tenddate']); 
    
    $g1hrstart=mysqli_real_escape_string($conn,$_POST['g1hrstart']); 
    $g1hrend=mysqli_real_escape_string($conn,$_POST['g1hrend']); 
    $g2hrstart=mysqli_real_escape_string($conn,$_POST['g2hrstart']); 
    $g2hrend=mysqli_real_escape_string($conn,$_POST['g2hrend']); 
    $g3hrstart=mysqli_real_escape_string($conn,$_POST['g3hrstart']); 
    $g3hrend=mysqli_real_escape_string($conn,$_POST['g3hrend']); 
    $clipmon=mysqli_real_escape_string($conn,$_POST['clipmon']); 
    $cliptue=mysqli_real_escape_string($conn,$_POST['cliptue']); 
    $clipwed=mysqli_real_escape_string($conn,$_POST['clipwed']); 
    $clipthu=mysqli_real_escape_string($conn,$_POST['clipthu']); 
    $clipfri=mysqli_real_escape_string($conn,$_POST['clipfri']); 
    $clipsat=mysqli_real_escape_string($conn,$_POST['clipsat']); 
    $clipsun=mysqli_real_escape_string($conn,$_POST['clipsun']);
//    $dateAr=array($clipmon, $cliptue, $clipwed, $clipthu, $clipfri, $clipsat, $clipsun);
//    $dateArr=implode("','",$dateAr);
    
    
// UPLOAD FILE ------------------
$target_dir = "C:/xampp/htdocs/tn/tn3/uploads/"; //change this if moving
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
$uploadOk = 1;
$fileType = strtolower(pathinfo($_FILES['fileToUpload']['tmp_name'], PATHINFO_EXTENSION));    
$filesize = filesize($_FILES['fileToUpload']['tmp_name']);   
$file_data = file_get_contents($_FILES["fileToUpload"]["tmp_name"]);
 list($width, $height, $type, $attr) = getimagesize($_FILES['fileToUpload']['tmp_name']);
//echo "Image width " .$width;
//echo "<BR>";
//echo "Image height " .$height;
//echo "<BR>";
//echo "Image type " .$type;
//echo "<BR>";
//echo "Attribute " .$attr;


$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "mov", "aac", "wma");
$extension = strtolower(pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION));
if ((($_FILES["fileToUpload"]["type"] == "video/mp4")
|| ($_FILES["fileToUpload"]["type"] == "video/aac")
|| ($_FILES["fileToUpload"]["type"] == "video/MP4")
|| ($_FILES["fileToUpload"]["type"] == "audio/mp3")
|| ($_FILES["fileToUpload"]["type"] == "audio/wma")
|| ($_FILES["fileToUpload"]["type"] == "image/pjpeg")
|| ($_FILES["fileToUpload"]["type"] == "image/gif")
|| ($_FILES["fileToUpload"]["type"] == "image/jpeg"))

&& ($_FILES["fileToUpload"]["size"] < 90000000000)
&& in_array($extension, $allowedExts))

  {
  if ($_FILES["fileToUpload"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["fileToUpload"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["fileToUpload"]["name"] . "<br />";
    echo "Type: " . $_FILES["fileToUpload"]["type"] . "<br />";
    echo "Size: " . ($_FILES["fileToUpload"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["fileToUpload"]["tmp_name"] . "<br />";

    if (file_exists("C:/xampp/htdocs/tn/tn3/uploads/" . $_FILES["fileToUpload"]["name"]))
      {
      echo $_FILES["fileToUpload"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
      "C:/xampp/htdocs/tn/tn3/uploads/" . $_FILES["fileToUpload"]["name"]);
      echo "Stored in: " . "C:/xampp/htdocs/tn/tn3/uploads/" . $_FILES["fileToUpload"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
   
 

 
    
    // INSERT VALUES
$sql = "INSERT INTO products (
product_name,product_price,product_cat,product_details,AUDGNDR,audagestrt,audageend, 
MOODNEUT,MOODHAPPY,MOODSAD,MOODANGRY, MOODAFRAID, MOODSUR,  CWEIGHT, CATHLTH,CATFOOD,CATBTY,CATSPORTS,CATMUSIC,CATCIVIC,
CLIPDESC,CLIPKWD1,CLIPKWD2,CLIPKWD3,CLIPTYPE,
CLIPLOC1,CLIPSTDATE,CLIPENDDATE,
g1hrstart,g1hrend,g2hrstart,g2hrend,g3hrstart,g3hrend,
CLIPMON,CLIPTUE,CLIPWED,CLIPTHU,CLIPFRI,CLIPSAT,CLIPSUN, CLIPNAME, 
FILESIZE, FILETYPE, HEIGHT, WIDTH, DURATION)
VALUES (
'$pname', '$price', '$pcat', '$product_details', '$augdndr', '$audagestrt' , '$audageend', 
'$moodneut' , '$moodhappy' , '$moodsad' , '$moodangry' , '$moodafraid' , '$moodsur', '$cweight', 
'$cathlth' , '$catfood' , '$catbty' , '$catsport', '$catmusic' , '$catcivic' , 
'$clipdesc' , '$clipkwd1' , '$clipkwd2' , '$clipkwd3' , '$cliptype' ,
'$cliploc1' , '$clipstdate' , '$clipenddate' , 
'$g1hrstart' , '$g1hrend' , '$g2hrstart', '$g2hrend' , '$g3hrstart' , '$g3hrend' , 
'$clipmon' , '$cliptue' , '$clipwed' , '$clipthu' , '$clipfri' , '$clipsat' , '$clipsun' , '$target_file', 
'$filesize', '$extension', '$height', '$width','$duration') ";
if ($conn->query($sql) === TRUE) {
echo "alert('New record created successfully')";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>