<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_139'].'');
$_POST["popis"]=mysql_real_escape_string($_POST["popis"]);
$_POST["clanek"]=mysql_real_escape_string($_POST["clanek"]);
$a = $_POST['nazev2'];
if (!empty($a) and !empty($_POST["popis"])) {
$time=time();
$accepted_files = array(
    'jpg',
    'png',
    'JPG',
    'gif',
    'jpeg'
);
if(!$_FILES["file1"]["name"]) { 
    echo "<p align='center'>".$jazyk['admin_148']."</p>";
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
if($fileSize > 2000000) { 
    echo "<p align='center'>".$jazyk['admin_149']."</p>";
    unlink($fileTmpLoc);
} else {
move_uploaded_file($fileTmpLoc, "images/".$time."".$fileName."");
if (!file_exists("images/".$time."".$fileName."")) {
    echo "<p align='center'>".$jazyk['admin_150']."</p>";
}
else {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$hodnota=''.$url.'admin/galerie/images/'.$time.''.$fileName.'';
mysql_query("INSERT INTO `galerie` (`nazev`, `url`, `kdo`, `kdy`, `popis`, `kat`) values ('$a','".$hodnota."','".$_SESSION["SESS_LOGIN"]."','$datum','".$_POST["popis"]."','".$_POST["kat"]."')");
echo "<p align='center'>".$jazyk['admin_151']."</p>";
echo "<p align='center'><a href='addform.php'><span style='color: black;'>".$jazyk['admin_152']."</span></a> | <a href='index.php'><span style='color: black;'>".$jazyk['admin_153']."</span></a></p>";
 }}}}}}}
else {
echo "<p align='center'>".$jazyk['admin_154']."</p>";
echo "<p align='center'><a href='addform.php'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
include '../zapati.php';
?>
