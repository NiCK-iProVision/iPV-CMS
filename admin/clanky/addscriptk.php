<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_095'].'');
$a = $_POST['nazev2'];
if (!empty($a)) {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$datum = StrFTime("%d/%m/%Y %H:%M:%S", Time());
mysql_query("INSERT INTO `katclan` (`nazev`) values ('$a')");
echo "<p align='center'>".$jazyk['admin_080']." <strong>$a</strong> ".$jazyk['admin_100']."</p>";
echo "<p align='center'><a href='addformk.php'>".$jazyk['admin_101']."</a> | <a href='kat_clan.php'>".$jazyk['admin_102']."</a></p>";
}
else {
echo "<p align='center'>".$jazyk['admin_080']." <strong>$a</strong> ".$jazyk['admin_103']."</p>";
echo "<p align='center'><a href='addformk.php'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
include '../zapati.php';
?>
