<?php	
include_once(dirname(__FILE__).'/../../vzhledy/sablony/headofpage.php');
ocp('Pridať/Zmeniť avatar');
echo "<table align='center' width='100%'><tr><td width='33%' class='uprav_prof'><a href='".$url."komponenty/login/zh.php'>".$jazyk['web_317']."</a></td><td width='33%' align='center' class='uprav_prof'><a href='".$url."komponenty/login/ze.php'>".$jazyk['web_318']."</a></td><td width='33%' align='right' class='uprav_prof'><a href='".$url."komponenty/login/pridat_avt.php'>".$jazyk['web_319']."</a></td></tr></table>";
$time=time();
$accepted_files = array(
    'jpg',
    'png',
    'JPG',
    'gif',
    'jpeg'
);
if(!$_FILES["file1"]["name"]) { 
    echo "<p align='center'>".$jazyk['web_366']."</p>";
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    foreach($_FILES as $key => $upload) {
    	if ($upload['error'] == 0) {
    		$file_parts = explode ('.',$upload['name']);
    		if (in_array($file_parts[sizeof($file_parts)-1], $accepted_files)) {

$fileName = $_FILES["file1"]["name"];
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; 
$fileType = $_FILES["file1"]["type"]; 
$fileSize = $_FILES["file1"]["size"]; 
$fileErrorMsg = $_FILES["file1"]["error"];
if($fileSize > 500000) { 
    echo "<p align='center'>".$jazyk['web_367']."</p>";
    unlink($fileTmpLoc);
} else {
move_uploaded_file($fileTmpLoc, "id/".$time."".$fileName."");
if (!file_exists("id/".$time."".$fileName."")) {
    echo "<p align='center'>".$jazyk['web_368']."</p>";
}
else {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$hodnota=''.$url.'komponenty/login/id/'.$time.''.$fileName.'';
$us_id=$_SESSION['SESS_ID'];
mysql_query("UPDATE `members` SET `avatar` = '$hodnota' WHERE `member_id`='$us_id' LIMIT 1"); 
echo "<p align='center'>".$jazyk['web_369']."</p>";
   		}}}	else {
echo "<p align='center'>".$jazyk['web_370']."</p>";
    		}}}}
zcp();
include_once(dirname(__FILE__).'/../../vzhledy/sablony/footerofpage.php');
?>
