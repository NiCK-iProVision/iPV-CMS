<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_236'].'');
$a = $_POST['nazev2'];
if (!empty($a)) {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$datum = StrFTime("%d/%m/%Y %H:%M:%S", Time());
mysql_query("INSERT INTO `katstah` (`nazev`) values ('$a')");
echo "<p align='center'>".$jazyk['admin_241']."</p>";
echo "<p align='center'><a href='addformk.php'><span style='color: black;'>".$jazyk['admin_101']."</span></a> | <a href='kat_stah.php'><span style='color: black;'>".$jazyk['admin_242']."</span></a></p>";
}
else {
echo "<p align='center'>".$jazyk['admin_243']."</p>";
echo "<p align='center'><a href='addformk.php'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
include '../zapati.php';
?>
