<?php
include_once(dirname(__FILE__).'/../../vision.php');
include_once(dirname(__FILE__).'/../../strankovanie.php');
include '../zahlavi.php';

panel(''.$jazyk['web_470'].'');
if(isset($_POST["ok"])){      
  $uprava=mysql_query("UPDATE strankovanie SET stranky_hodnota='".stripinput($_POST['novinky'])."' WHERE stranky_meno='novinky'");
  $uprava=mysql_query("UPDATE strankovanie SET stranky_hodnota='".stripinput($_POST['clanky'])."' WHERE stranky_meno='clanky'");
  $uprava=mysql_query("UPDATE strankovanie SET stranky_hodnota='".stripinput($_POST['stahovanie'])."' WHERE stranky_meno='stahovanie'");
  $uprava=mysql_query("UPDATE strankovanie SET stranky_hodnota='".stripinput($_POST['strany'])."' WHERE stranky_meno='stranky'"); 
echo "<p align='center'>".$jazyk['web_471']."</p>";
}
else {
echo "<p align='center'>".$jazyk['web_472']."</p>";
echo "<p align='center'><a href='index.php'><span style='color: black;'>".$jazyk['web_429']."</span></a></p>";
}
include '../zapati.php';
?>
