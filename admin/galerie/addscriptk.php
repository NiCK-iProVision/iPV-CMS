<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_155'].'');
$a = $_POST['nazev2'];
if (!empty($a)) {
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
$datum = StrFTime("%d/%m/%Y %H:%M:%S", Time());
$hodnota=''.$url.'admin/galerie/images/'.$time.''.$fileName.'';
mysql_query("INSERT INTO `katgal` (`nazev`, `adresa`) values ('$a', '$hodnota')");
echo "<p align='center'>".$jazyk['admin_156']."</p>";
echo "<p align='center'><a href='addformk.php'><span style='color: black;'>".$jazyk['admin_152']."</span></a> | <a href='kat_gal.php'><span style='color: black;'>".$jazyk['admin_157']."</span></a></p>";
}}}}}}}
else {
echo "<p align='center'>".$jazyk['admin_158']."</p>";
echo "<p align='center'><a href='addformk.php'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
include '../zapati.php';
?>
