<?php
//Only process the form if $_POST isn't empty

if (! empty($_POST)) {
    
    print_r($_POST); exit;
    
    //Connect to MySQL
    
    $mysqli = new mysqli('localhost', 'root', 'root', 'snippets');
    
    //check connection
    
    if ($mysqli -> connect_error) {
        die('Connect Error:' . $mysqli->connect_errno . ': '. $mysqli ->connect_error);
    }
    
    //insert data
    
    $sql = "INSERT INTO user (name, email) VALUES ( '{$mysqli->real_escape_string($_POST['name'])}', ' {$mysqli->real_escape_string($_POST['email'])}')";
    $insert = $mysqli->query($sql);
        
        //print response from MySQL
        
        if ($insert){
            
            echo "Success! Row ID: {$mysqli->insert_id}";
        } else {
            die("Error: {$mysqli->errno} : {$mysqli->error}");
        }
                   
                   //Close our connection
                   $mysqli -> close();
                   
}
 ?>

<form method="post" action="">
<input name="name" type="text">
<input name="emal" type="email">
<input name="submit" value="Submit Form">
</form>