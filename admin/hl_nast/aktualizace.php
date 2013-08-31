<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_056'].'');
$_POST["nazev"]=mysql_real_escape_string($_POST["nazev"]);
$_POST["autor"]=mysql_real_escape_string($_POST["autor"]);
$_POST["mail"]=mysql_real_escape_string($_POST["mail"]);
$_POST["klic_slova"]=mysql_real_escape_string($_POST["klic_slova"]);
$_POST["popis"]=mysql_real_escape_string($_POST["popis"]);
if (!empty($_POST["nazev"]) and !empty($_POST["mail"]) and !empty($_POST["autor"]) and !empty($_POST["logo"])) {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("UPDATE `hlavni` SET `nazev` = '".$_POST["nazev"]."' ,`popis` = '".$_POST["popis"]."' ,`logo` = '".$_POST["logo"]."' ,`klic_slova` = '".$_POST["klic_slova"]."' ,`autor` = '".$_POST["autor"]."' ,`mail` = '".$_POST["mail"]."' WHERE id = '1'") or die(mysql_error());
echo "<p align='center'>".$jazyk['admin_057']."</p>";
}
else {
echo "<p align='center'>".$jazyk['admin_058']."</p>";
echo "<p align='center'><a href='index.php'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
include '../zapati.php';
?>
