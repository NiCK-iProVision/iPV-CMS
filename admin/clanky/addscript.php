<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_059'].'');
$_POST["popis"]=mysql_real_escape_string($_POST["popis"]);
$_POST["clanek"]=mysql_real_escape_string($_POST["clanek"]);
$a = $_POST['nazev2'];
if (!empty($a) and !empty($_POST["popis"]) and !empty($_POST["clanek"])) {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$datum = StrFTime("%d/%m/%Y %H:%M:%S", Time());
mysql_query("INSERT INTO `clanky` (`nazev`, `popis`, `clanek`, `kat`, `pridal`, `cas`) values ('$a', '".$_POST["popis"]."', '".$_POST["clanek"]."', '".$_POST["kat"]."', '".$_SESSION["SESS_LOGIN"]."', '$datum')");
echo "<p align='center'>".$jazyk['admin_066']." <strong>$a</strong> ".$jazyk['admin_067']."</p>";
echo "<p align='center'>".$jazyk['admin_068']."</p>";
}
else {
echo "<p align='center'>".$jazyk['admin_066']." <strong>$a</strong> ".$jazyk['admin_069']."</p>";
echo "<p align='center'><a href='addform.php'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
include '../zapati.php';
?>
