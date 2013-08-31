<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
$id=$_POST['id'];
panel(''.$jazyk['admin_226'].'');
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
$password=clean($_POST['nazev1']);
$cpassword=clean($_POST['nazev2']);
if( strcmp($password, $cpassword) != 0 ) {
echo "<p align='center'>".$jazyk['admin_227']."</p>";
}
else {
if (!empty($password) and !empty($cpassword)) {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("UPDATE `members` SET `passwd` = '".md5($password)."' WHERE member_id = '$id'") or die(mysql_error());
echo "<p align='center'>".$jazyk['admin_228']."</p>";
echo "<p align='center'><a href='index.php'><span style='color: black;'>".$jazyk['admin_203']."</span></a></p>";
}
else {
echo "<p align='center'>".$jazyk['admin_229']."</p>";
echo "<p align='center'><a href='zheslo.php?id=$id'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
}
include '../zapati.php';
?>
