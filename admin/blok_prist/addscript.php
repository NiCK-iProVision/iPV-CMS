<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_026'].'');
$a = $_POST['nazev2'];
if(!empty($a)){
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$datum = StrFTime("%d/%m/%Y %H:%M:%S", Time());
mysql_query("INSERT INTO `blokovani` (`ip`) values ('$a')");
echo "<p align='center'>".$jazyk['admin_027']." <strong>$a</strong> ".$jazyk['admin_028']."</p>";
echo "<p align='center'><a href='index.php'><span style='color: black;'>".$jazyk['admin_029']."</span></a></p>";
}
else {
echo "<p align='center'>".$jazyk['admin_027']." <strong>$a</strong> ".$jazyk['admin_030']."</p>";
echo "<p align='center'><a href='addform.php'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
include '../zapati.php';
?>
