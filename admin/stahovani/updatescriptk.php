<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_258'].'');
$id = $_POST['id'];
$a = $_POST['nazev2'];
if (!empty($a)) {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("UPDATE `katstah` SET `nazev` = '$a' WHERE id = '$id'") or die(mysql_error());
echo "<p align='center'>".$jazyk['admin_261']."</p>";
echo "<p align='center'><a href='kat_stah.php'><span style='color: black;'>".$jazyk['admin_262']."</span></a></p>";
}
else {
echo "<p align='center'>".$jazyk['admin_263']."</p>";
echo "<p align='center'><a href='updateformk.php?id=$id'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
include '../zapati.php';
?>
