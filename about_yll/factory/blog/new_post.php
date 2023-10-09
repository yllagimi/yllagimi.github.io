<?php
session_start();
$name = $_SESSION['name'];
$title = $_POST['title'];
$entry = $_POST['entry'];
require once ('/factory/dbconf.php');
try {$dbh = new PDO($driver, $user, $pass, $attr)
    } catch (Exception $e) {
{$email = "no_reply@yllagimi.com"; // Sender
 $recipient = "yll.agimi@gmail.com";
 $mail_body = 'Exception :' . $e->getMessage();
 $subject = "ERROR - SQL connection";
 mail($recipient, $subject, $mail_body);
 echo 'Feature temporarily not available.';
 echo 'Please try later.';
 die();
}
    

$insert ='insert into food(id, posted,'
    . 'author, title, entry)'
    . 'values,(null, now(), :author, :title, :entry)';
    try {
        $stmt =dbh->prepare($insert);
        $stmt->bindParam(':author', $name, PDO::PARAM_STR);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':entry', $entry, PDO::PARAM_STR);
        $stmt->execute();
unset($stmt);
    }catch(Exception $e)
    {echo 'Exception : ' . $e->getMessage() . "\n";
    die();
    }
    header ('Location: http://www.yllagimi.com/blog.php');
    ?>

    