<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_135'].'');
$id = $_POST['id'];
$_POST["popis"]=mysql_real_escape_string($_POST["popis"]);
$_POST["novinka"]=mysql_real_escape_string($_POST["novinka"]);
$a = $_POST['nazev2'];
if (!empty($a)  and !empty($_POST["novinka"])) {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("UPDATE `stranky` SET `nazev` = '$a' ,`text` = '".$_POST["novinka"]."' WHERE id = '$id'") or die(mysql_error());
echo "<p align='center'>".$jazyk['admin_136']."</p>";
echo "<p align='center'><a href='index.php'><span style='color: black;'>".$jazyk['admin_138']."</span></a></p>";
}
else {
echo "<p align='center'>".$jazyk['admin_137']."</p>";
echo "<p align='center'><a href='updateform.php?id=$id'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
include '../zapati.php';
?>
