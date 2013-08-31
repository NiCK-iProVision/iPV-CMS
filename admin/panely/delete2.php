<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_264'].'');
$id=$_GET['id'];
$dotaz=mysql_query("SELECT * FROM prave_p where id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
$smazane_poradi=$vypsat['poradi'];
mysql_query("DELETE FROM prave_p WHERE id='$id'") or die (mysql_error());
mysql_query("UPDATE prave_p SET poradi = (poradi - 1) WHERE poradi > $smazane_poradi") or die (mysql_error());
echo "<p align='center'>".$jazyk['admin_265']."</p>";
echo "<p align='center'><a href='index.php'><span style='color: black;'>".$jazyk['admin_266']."</span></a></p>";
}
include '../zapati.php';
?>
