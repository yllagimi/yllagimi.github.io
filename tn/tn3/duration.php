<?php



$filename = ("\uploads\big_mac_clip.mp4");



$id3 = new getID3;
$file = $id3->analyze($filename);

function getDuration($file){

if (file_exists($file)){
 ## open and read video file
$handle = fopen($file, "r");
## read video file size
$contents = fread($handle, filesize($file));

fclose($handle);
$make_hexa = hexdec(bin2hex(substr($contents,strlen($contents)-3)));

if (strlen($contents) > $make_hexa){

$pre_duration = hexdec(bin2hex(substr($contents,strlen($contents)-$make_hexa,3))) ;
$post_duration = $pre_duration/1000;
$timehours = $post_duration/3600;
$timeminutes =($post_duration % 3600)/60;
$timeseconds = ($post_duration % 3600) % 60;
$timehours = explode(".", $timehours);
$timeminutes = explode(".", $timeminutes);
$timeseconds = explode(".", $timeseconds);
$duration = $timehours[0]. ":" . $timeminutes[0]. ":" . $timeseconds[0];}
echo "Duration " .$duration;
    return $duration;
 
}
else {

return false;
}
}

?>