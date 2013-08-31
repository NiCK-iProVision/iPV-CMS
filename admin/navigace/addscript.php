<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_300'].'');
$_POST["popis"]=mysql_real_escape_string($_POST["popis"]);
$a = $_POST['nazev2'];
$datum = StrFTime("%d/%m/%Y %H:%M:%S", Time());
if (!empty($a) and !empty($_POST["popis"])) {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("INSERT INTO `odkazy` (`nazev`, `odk`) values ('$a', '".$_POST["popis"]."')");
echo "<p align='center'>".$jazyk['admin_308']."</p>";
echo "<p align='center'><a href='addform.php'>".$jazyk['admin_101']."</a> | <a href='index.php'><span style='color: black;'>".$jazyk['admin_301']."</span></a></p>";
}
else {
echo "<p align='center'>".$jazyk['admin_307']."</p>";
echo "<p align='center'><a href='addform.php'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
include '../zapati.php';
?>
