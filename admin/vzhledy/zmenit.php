<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_041'].'');
if (!empty($_POST["vz"])) {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("UPDATE `hlavni` SET `vzhled` = '".$_POST["vz"]."' WHERE id = '1'") or die(mysql_error());
echo "<p align='center'>".$jazyk['admin_044']."</p>";
} else {
echo "<p align='center'>".$jazyk['admin_045']."</p>";
}
include '../zapati.php';
?>
