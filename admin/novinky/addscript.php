<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_187'].'');
$_POST["popis"]=mysql_real_escape_string($_POST["popis"]);
$_POST["novinka"]=mysql_real_escape_string($_POST["novinka"]);
$a = $_POST['nazev2'];
$datum = StrFTime("%d/%m/%Y %H:%M:%S", Time());
if (!empty($a) and !empty($_POST["popis"]) and !empty($_POST["novinka"])) {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("INSERT INTO `novinky` (`nazev`, `popis`, `text`, `pridal`, `cas`) values ('$a', '".$_POST["popis"]."', '".$_POST["novinka"]."', '".$_SESSION["SESS_LOGIN"]."', '$datum')");
echo "<p align='center'>".$jazyk['admin_194']."</p>";
echo "<p align='center'><a href='addform.php'>".$jazyk['admin_195']."</a></p>";
}
else {
echo "<p align='center'>".$jazyk['admin_196']."</p>";
echo "<p align='center'><a href='addform.php'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
include '../zapati.php';
?>
