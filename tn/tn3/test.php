<?php
include 'server.php';
$db = OpenCon();
echo "Connected Successfully";
CloseCon($db);
?>