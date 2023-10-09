
<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "test";
$dbname = "registration";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}



if(isset($_POST['btn_delete'])){
$id = $_POST['id_delete'];
    
$sql = ("DELETE FROM products WHERE product_id='$id'"); 
    
if ($conn->query($sql)==TRUE){
    echo "Deleted";
}else{
  header('location:index.php');
}
}
 
  header( "refresh:5; url=index.php" ); 
?>
