<?php

header ("refresh:25; url=ad_insert.html");

   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('adverts.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

 ini_set ('display_errors', 'on');
 ini_set ('log_errors', 'on');
 ini_set ('display_startup_errors', 'on');

    $id=$_POST['id']; 
    $username=$_POST['username']; 
    $email=$_POST['email']; 
    $augdndr=$_POST['aud_gender']; 
    $audagegrp=$_POST['aud_age']; 
    $moodneut=$_POST['moodneut']; 
    $moodhappy=$_POST['moodhappy']; 
    $moodsad=$_POST['moodsad']; 
    $moodangry=$_POST['moodangry']; 
    $moodafraid=$_POST['moodafraid']; 
    $cathlth=$_POST['hlth']; 
    $catfood=$_POST['food']; 
    $catbty=$_POST['bty']; 
    $catsport=$_POST['sports']; 
    $catmusic=$_POST['music']; 
    $catcivic=$_POST['civic']; 
    $clipdesc=$_POST['clipdesc']; 
    $clipkwd1=$_POST['clipkwd1']; 
    $clipkwd2=$_POST['clipkwd2']; 
    $clipkwd3=$_POST['clipkwd3']; 
    $cliptype=$_POST['cliptype']; 
    $cliploc1=$_POST['cliploc1']; 
    $clipstdate=$_POST['tstartdate']; 
    $clipenddate=$_POST['tenddate']; 
    $cliphrdisp1=$_POST['hr0611']; 
    $cliphrdisp2=$_POST['hr1114']; 
    $cliphrdisp3=$_POST['hr1418']; 
    $cliphrdisp4=$_POST['hr1821']; 
    $cliphrdisp5=$_POST['hr2124']; 
    $cliphrdisp6=$_POST['hr2406']; 
    $clipmon=$_POST['clipmon']; 
    $cliptue=$_POST['cliptue']; 
    $clipwed=$_POST['clipwed']; 
    $clipthu=$_POST['clipthu']; 
    $clipfri=$_POST['clipfri']; 
    $clipsat=$_POST['clipsat']; 
    $clipsun=$_POST['clipsun']; 
    

// UPLOAD FILE ------------------


$target_dir = "C:/xampp/htdocs/tn/uploads/"; //change this if moving
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$filesize = filesize($_FILES['fileToUpload']['tmp_name']);
list($width, $height, $type, $attr) = getimagesize($_FILES['fileToUpload']['tmp_name']);
echo "Image width " .$width;
echo "<BR>";
echo "Image height " .$height;
echo "<BR>";
echo "Image type " .$type;
echo "<BR>";
echo "Attribute " .$attr;


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

    if (file_exists("C:/xampp/htdocs/tn/uploads/" . $_FILES["fileToUpload"]["name"]))
      {
      echo $_FILES["fileToUpload"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
      "C:/xampp/htdocs/tn/uploads/" . $_FILES["fileToUpload"]["name"]);
      echo "Stored in: " . "C:/xampp/htdocs/tn/uploads/" . $_FILES["fileToUpload"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }




// INSERT DATA ------------------


   $sql =<<<EOF
      INSERT INTO CLIPS (ID,USERNAME,EMAIL,AUDGNDR,AUDAGEGRP,MOODNEUT,MOODHAPPY,MOODSAD,MOODANGRY,    MOODAFRAID,CATHLTH,CATFOOD,CATBTY,CATSPORTS,CATMUSIC,CATCIVIC,CLIPDESC,CLIPKWD1,CLIPKWD2,    CLIPKWD3,CLIPTYPE,CLIPLOC1,CLIPSTDATE,CLIPENDDATE,CLIPHRDISP1,CLIPHRDISP2,CLIPHRDISP3,CLIPHRDISP4,  CLIPHRDISP5,CLIPHRDISP6,CLIPMON,CLIPTUE,CLIPWED,CLIPTHU,CLIPFRI,CLIPSAT,CLIPSUN, CLIPNAME, FILESIZE, FILETYPE, HEIGHT, WIDTH, DURATION)
      VALUES ('$id', '$username', '$email', '$augdndr', '$audagegrp' , '$moodneut' , '$moodhappy' , '$moodsad' , '$moodangry' , '$moodafraid' , '$cathlth' , '$catfood' , '$catbty' , '$catsport', '$catmusic' 
             , '$catcivic' , '$clipdesc' , '$clipkwd1' , '$clipkwd2' , '$clipkwd3' , '$cliptype' 
             , '$cliploc1' , '$clipstdate' , '$clipenddate' , '$cliphrdisp1' , '$cliphrdisp2' , '$cliphrdisp3', '$cliphrdisp4' , '$cliphrdisp5' , '$cliphrdisp6' , '$clipmon' , '$cliptue' , '$clipwed' , '$clipthu' , '$clipfri' , '$clipsat' , '$clipsun' , '$target_file', ' $filesize', '$extension', '$height', '$width', '$duration' );

      
EOF; 

//if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
//  		$msg = "Image uploaded successfully";
//  			}else{
//  		$msg = "Failed to upload image";
//  	} 


   $ret = $db->exec($sql);
   if(!$ret){
    echo $db->lastErrorMsg();
   } else {
     echo "Records created successfully\n";
   }
   $db->close();




?>

 