<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_288'].'');
$id = $_POST['id'];
$_POST["obsah"]=mysql_real_escape_string($_POST["obsah"]);
$a = $_POST['nazev2'];
if (!empty($a) and !empty($_POST["obsah"])) {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("UPDATE `prave_p` SET `nazev` = '$a' ,`text` = '".$_POST["obsah"]."' WHERE id = '$id'") or die(mysql_error());
echo "<p align='center'>".$jazyk['admin_289']."</p>";
echo "<p align='center'><a href='index.php'><a href='index.php'><span style='color: black;'>".$jazyk['admin_274']."</span></a></p>";
}
else {
echo "<p align='center'>".$jazyk['admin_290']."</p>";
echo "<p align='center'><a href='updateform2.php?id=$id'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
include '../zapati.php';
?>
