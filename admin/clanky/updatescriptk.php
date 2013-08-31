<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_083'].'');
$id = $_POST['id'];
$a = $_POST['nazev2'];
if (!empty($a)) {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("UPDATE `katclan` SET `nazev` = '$a' WHERE id = '$id'") or die(mysql_error());
echo "<p align='center'>".$jazyk['admin_090']." <strong>$a</strong> ".$jazyk['admin_091']."</p>";
echo "<p align='center'><a href='kat_clan.php'><span style='color: black;'>".$jazyk['admin_092']."</span></a></p>";
}
else {
echo "<p align='center'>".$jazyk['admin_090']." <strong>$a</strong> ".$jazyk['admin_093']."</p>";
echo "<p align='center'><a href='updateformk.php?id=$id'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
include '../zapati.php';
?>
