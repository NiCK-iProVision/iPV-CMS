<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_257'].'');
$id = $_POST['id'];
$_POST["clanek"]=mysql_real_escape_string($_POST["clanek"]);
$_POST["popis"]=mysql_real_escape_string($_POST["popis"]);
$a = $_POST['nazev2'];
if (!empty($a) and !empty($_POST["popis"]) and !empty($_POST["adresa"]) and !empty($_POST["verze"])) {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("UPDATE `stahovani` SET `nazev` = '$a' ,`popis` = '".$_POST["popis"]."' ,`url` = '".$_POST["adresa"]."',`verze` = '".$_POST["verze"]."',`kat` = '".$_POST["kat"]."' WHERE id = '$id'") or die(mysql_error());
echo "<p align='center'>".$jazyk['admin_259']."</p>";
echo "<p align='center'><a href='index.php'><span style='color: black;'>".$jazyk['admin_239']."</span></a></p>";
}
else {
echo "<p align='center'>".$jazyk['admin_260']."</p>";
echo "<p align='center'><a href='updateform.php?id=$id'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
include '../zapati.php';
?>
