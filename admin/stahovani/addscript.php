<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_230'].'');
$_POST["popis"]=mysql_real_escape_string($_POST["popis"]);
$_POST["clanek"]=mysql_real_escape_string($_POST["clanek"]);
$a = $_POST['nazev2'];
if (!empty($a) and !empty($_POST["popis"]) and !empty($_POST["adresa"]) and !empty($_POST["verze"])) {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$datum = StrFTime("%d/%m/%Y %H:%M:%S", Time());
mysql_query("INSERT INTO `stahovani` (`nazev`, `popis`, `url`, `verze`, `pridal`, `cas`, `kat`) values ('$a', '".$_POST["popis"]."', '".$_POST["adresa"]."', '".$_POST["verze"]."', '".$_SESSION["SESS_LOGIN"]."', '$datum', '".$_POST["kat"]."')");
echo "<p align='center'>".$jazyk['admin_238']."</p>";
echo "<p align='center'><a href='addform.php'><span style='color: black;'>".$jazyk['admin_152']."</span></a> | <a href='index.php'><span style='color: black;'>".$jazyk['admin_239']."</span></a></p>";
}
else {
echo "<p align='center'>".$jazyk['admin_240']."</p>";
echo "<p align='center'><a href='addform.php'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
include '../zapati.php';
?>
