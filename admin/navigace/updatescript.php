<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_310'].'');
$id = $_POST['id'];
$_POST["popis"]=mysql_real_escape_string($_POST["popis"]);
$a = $_POST['nazev2'];
if (!empty($a)  and !empty($_POST["popis"])) {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("UPDATE `odkazy` SET `nazev` = '$a' ,`odk` = '".$_POST["popis"]."' WHERE id = '$id'") or die(mysql_error());
echo "<p align='center'>".$jazyk['admin_312']."</p>";
echo "<p align='center'><a href='index.php'><span style='color: black;'>".$jazyk['admin_301']."</span></a></p>";
}
else {
echo "<p align='center'>".$jazyk['admin_311']."</p>";
echo "<p align='center'><a href='updateform.php?id=$id'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
include '../zapati.php';
?>
