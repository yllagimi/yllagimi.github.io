
<html>
<head><title>Yll's blog</title>
    <link rel="stylesheet" type="text/css" href="/factory/assets/css/styles.css" />    
    </head>
    
    <body>
    <div id="wrapper">
        <img src="/factory/assets/images/profile.jpg" />
        <div class="main">
        <h1> Entries for      
<?php
date_default_timezone_set('UTC');
echo strftime('%B');
?>
</h1>        
            

<!--Accessing the database where the entries are stored-->
            
<?php
require_once('/factory/dbconf.php');
try {
    $dbh = new PDO($driver,
                   $user, $pass, $attr);
    } catch (Exception $e) {
    echo 'Exception : ' . $e->getMessage() . "\n";
    die();
    }
                        
$select = "SELECT date_format(posted, '%W %D') posted,"
                . ' author, title, entry'
                . 'from foody'
                . 'where posted >= str_to_date(coalesce'
                . "(date_format(now(), '%Y%M'), '01'), '%Y%m%d')"
                . 'order by ID desc';
    try {
        $stmt = $dbh->prepare($select);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
        echo '<h2>' . $row['title'] . "</h2>\n";
        echo '<div class="author">Posted' . $row['posted'];
        echo 'by' . $row['author'] . "<div> \n";
        echo '<p>' . $row['entry'] . "</p>\n";
            }
    unset($stmt);
            } catch(Exception $e) {
                echo 'Exception : ' . $e->getMessage() . "\n";
            }
            ?>
            
        </div>
        </div>
    </body>
</html>
            
            
            