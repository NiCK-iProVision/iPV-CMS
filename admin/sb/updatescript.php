<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_115'].'');
$id = $_POST['id'];
$_POST["text"]=mysql_real_escape_string($_POST["text"]);
if (!empty($_POST["text"])) {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("UPDATE `shoutbox` SET `text` = '".$_POST["text"]."' WHERE id = '$id'") or die(mysql_error());
echo "<p align='center'>".$jazyk['admin_116']."</p>";
echo "<p align='center'><a href='index.php'><span style='color: black;'>".$jazyk['admin_117']."</span></a></p>";
}
else {
echo "<p align='center'>".$jazyk['admin_118']."</p>";
echo "<p align='center'><a href='updateform.php?id=$id'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
include '../zapati.php';
?>
