<?php
include(dirname(__FILE__).'/../../vision.php');
$a = $_GET['id'];
$b = $_GET['ip'];
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("INSERT INTO `clan_like` (`id_clan`, `ip`) values ('$a','$b')");
$dotaz3=mysql_query("SELECT * FROM clan_like where id_clan='$a'");
$pocet2 = mysql_num_rows($dotaz3);
echo $pocet2;
?>