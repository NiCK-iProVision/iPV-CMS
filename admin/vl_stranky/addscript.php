<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_121'].'');
$_POST["popis"]=mysql_real_escape_string($_POST["popis"]);
$_POST["novinka"]=mysql_real_escape_string($_POST["novinka"]);
$a = $_POST['nazev2'];
$datum = StrFTime("%d/%m/%Y %H:%M:%S", Time());
if (!empty($a) and !empty($_POST["novinka"])) {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("INSERT INTO `stranky` (`nazev`, `text`, `pridal`) values ('$a', '".$_POST["novinka"]."', '".$_SESSION["SESS_LOGIN"]."')");
echo "<p align='center'>".$jazyk['admin_124']."</p>";
echo "<p align='center'><a href='addform.php'>".$jazyk['admin_101']."</a> | <a href='index.php'><span style='color: black;'>".$jazyk['admin_125']."</span></a></p>";
}
else {
echo "<p align='center'>".$jazyk['admin_126']."</p>";
echo "<p align='center'><a href='addform.php'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
include '../zapati.php';
?>
