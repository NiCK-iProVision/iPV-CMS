<?php
include(dirname(__FILE__).'/../../vision.php');
$a = $_GET['id'];
$b = $_GET['ip'];
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("DELETE FROM nov_like WHERE id_nov='$a' and ip='$b'") or die (mysql_error());

$dotaz3=mysql_query("SELECT * FROM nov_like where id_nov='$a'");
$pocet2 = mysql_num_rows($dotaz3);
echo $pocet2;
?>