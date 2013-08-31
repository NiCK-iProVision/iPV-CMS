<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_282'].'');
$_POST["obsah"]=mysql_real_escape_string($_POST["obsah"]);
$a = $_POST['nazev2'];
if (!empty($a) and !empty($_POST["obsah"])) {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$dotaz=mysql_query("SELECT * FROM leve_p ORDER BY poradi desc limit 1");
while ($vypsat=mysql_fetch_assoc($dotaz))
{$por=$vypsat['poradi']+1;}
mysql_query("INSERT INTO `leve_p` (`nazev`, `text`, `poradi`) values ('$a', '".$_POST["obsah"]."', '$por')");
echo "<p align='center'>".$jazyk['admin_285']."</p>";
echo "<p align='center'><a href='levy.php'><span style='color: black;'>".$jazyk['admin_152']."</span></a> | <a href='index.php'><span style='color: black;'>".$jazyk['admin_274']."</span></a></p>";
}
else {
echo "<p align='center'>".$jazyk['admin_286']."</p>";
echo "<p align='center'><a href='levy.php'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
include '../zapati.php';
?>
